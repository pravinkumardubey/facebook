<?php

namespace App\Http\Controllers;

use App\Model\Like;
use Illuminate\Http\Request;
use App\Model\Post;
use Illuminate\Support\Facades\Auth;
use Response;
class LikeController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($postId,$status)
    {
        $userId = Auth::id();
        $friendId = Post::where('id',$postId)->pluck('user_id')->first();
        $count = Like::where(['user_id'=>$userId,'friend_id'=>$friendId,'post_id'=>$postId])->count();
        if ($count==0) {
            Like::likeDislikePost($postId,$userId,$friendId,$status);
            if ($status==1) {
                Post::find($postId)->increment('like');
            }else{
                Post::find($postId)->increment('dislike');
            }
        }else{
            $tableStatus = Like::where(['user_id'=>$userId,'friend_id'=>$friendId,'post_id'=>$postId])->pluck('status')->first();
            if ($status==1) {
                if ($tableStatus==1) {
                    Like::where(['user_id'=>$userId,'friend_id'=>$friendId,'post_id'=>$postId])->delete();
                     Post::find($postId)->decrement('like');
                }else{
                     Like::where(['user_id'=>$userId,'friend_id'=>$friendId,'post_id'=>$postId])->update(['status'=>1]);
                    Post::find($postId)->decrement('dislike');
                    Post::find($postId)->increment('like');
                }
            }else{
                 if ($tableStatus==1) {
                    Like::where(['user_id'=>$userId,'friend_id'=>$friendId,'post_id'=>$postId])->update(['status'=>0]);
                     Post::find($postId)->increment('dislike');
                     Post::find($postId)->decrement('like');
                }else{
                    Like::where(['user_id'=>$userId,'friend_id'=>$friendId,'post_id'=>$postId])->delete();
                     Post::find($postId)->decrement('dislike');
                }
            }
        }
        $res = Post::select('like','dislike')->where('id',$postId)->first();
               return Response::json($res);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        //
    }
}
