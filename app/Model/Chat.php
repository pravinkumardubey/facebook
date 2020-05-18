<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'friend_id', 'text_message','file',
    ];
    /**
     * The function that are create chat
     *
     * @param Request $chatRequest
     * @param int $userId
     * @return array
     */
    public static function saveChat($chatRequest,$userId){
    	$data = $chatRequest->file('chat_file');
         $createPost = [
         		'user_id'=>$userId,
         		'friend_id'=>$chatRequest->friend_id,
	    		'text_message'=>$chatRequest->chat_message[0],
            ];
        if ($chatRequest->hasFile('chat_file')) {
            $photo = $data->getClientOriginalName();
            $path = storage_path('app/public/postImages/');
            $uploadResult =  $data->move($path, $photo);
            $createPost['file'] = $photo;
            $createPost['text_message'] = $chatRequest->chat_message[1];
        }
        return self::create($createPost);
    }
}
