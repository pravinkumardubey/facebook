<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id', 'user_id', 'friend_id','status',
    ];
     /**
     * This function will update like status
     * @return json
     */
    public static function likeDislikePost($postId,$userId,$friendId,$status){
        return self::create(
            [
            	'user_id'=>$userId,
                'friend_id'=>$friendId,
                'post_id'=>$postId,
                'status'=>$status,
            ]
        );
    }
}
