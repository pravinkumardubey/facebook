<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'text', 'file','like','comment',
    ];

    /**
     * This function will save post.
     *
     * @param array $request
     * @param int $userId
     */
    public static function addPost($request,$userId){
    	$data = $request->file('filePost');
         $createPost = [
         		'user_id'=>$userId,
	    		'text'=>$request->description,
	    		'like'=>0,
	    		'comment'=>0,
            ];
        if ($request->hasFile('filePost')) {
            $photo = $data->getClientOriginalName();
            $path = storage_path('app/public/postImages/');
            $uploadResult =  $data->move($path, $photo);
            $createPost['file'] = $photo;
        }
        return self::create($createPost);
    }
    /**
     * This function will get all post.
     * @return json
     */
    public static function getAllPosts(){
        return self::select('posts.id','posts.text','posts.file as post_file','users.name','users.file','posts.like','posts.comment','posts.created_at')
        ->join('users','users.id','posts.user_id')
        ->orderBy('posts.created_at','desc')->get();
    }
    public static function getFirstPost(){
       return self::select('posts.id','posts.text','posts.file as post_file','users.name','users.file','posts.like','posts.comment','posts.created_at')
        ->join('users','users.id','posts.user_id')
        ->whereRaw('posts.id = (select max(`id`) from posts)')->first();
    }
}
