<?php

namespace App\Http\Controllers;

use App\Model\Chat;
use App\User;
use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Auth;
class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($friendId)
    {
        $finalData = [];
        $friendData = [];
        $chatData = Chat::select('chats.text_message','chats.file as friend_photo','chats.created_at','users.id','chats.user_id','chats.friend_id')
        ->join('users','users.id','chats.friend_id')
        ->where(['chats.friend_id'=>$friendId,'chats.user_id'=>Auth::id()])
        ->orWhere('chats.friend_id',Auth::id())
        ->where('chats.user_id',$friendId)
        ->get();
        $friendName = User::where('id',$friendId)->pluck('name')->first();
        $friendPhoto = User::where('id',$friendId)->pluck('file')->first();
        foreach ($chatData as $key => $value) {
            $chatMessage = $value->text_message;
            $chatFile = $value->friend_photo;
            $timeAgo = $value->created_at->diffForHumans();
            if ($value->user_id == Auth::id()) {
                $status=1;
            }else{
                $status=2;
            }
            $finalData[] = [
                'msg' =>$chatMessage,
                'file' =>$chatFile,
                'timeago' =>$timeAgo,
                'status' =>$status,
            ];
        }
        $friendData = [
            'friendId'=>$friendId,
            'friendName'=>$friendName,
            'friendPhoto'=>$friendPhoto,
        ];
        // print_r($finalData);
        return Response::json(['data'=>$finalData,'friendData'=>$friendData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $chatRequest)
    {
        $userId = Auth::id();
        $response = Chat::saveChat($chatRequest,$userId);
        return Response::json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(Chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
