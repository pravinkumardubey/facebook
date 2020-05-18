<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\UserValidateRequest;
use App\Http\Requests\User\LoginRequest;
use App\User;
use App\Model\Post;
use Response;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sign-in');
    }
    /**
     * Display a welcome page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        if (!Auth::id()){
            return redirect('/');
        }
       $res = User::where('id',Auth::id())->first();
       $post = Post::getAllPosts();
       // $first = Post::getFirstPost();
       // $users = Post::all()->except(Auth::id());
       return view('index',['res'=>$res,'post'=>$post]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UserValidateRequest $registrationRequest)
    {
        $res = User::createUser($registrationRequest);
        if ($res) {
            auth()->login($res);
            return true;
        }else{
            return false;
        }
    }

    /**
     * login function will be create login
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $loginRequest)
    {
        if (Auth::attempt(['email' => $loginRequest->username, 'password' => $loginRequest->passwd]))
        {
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('user-profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * Logout the specified resource from storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
    public function getOnlineStatus(){
        $user = User::select('id','name','last_activity')->where('id','!=',Auth::id())->orderBy('last_activity','ASC')->get();
        foreach($user as $res)
        {
            $ids = $res->id;
            $names = $res->name;
            $short = $res->last_activity;
            if($res->isOnline())
            {
                $status = '<div class="userActive"></div>';
            }else
            {
               $status= $res->last_activity->diffForHumans();
            }
            $final[] = [
                        'id' => $ids,
                        'name' => $names,
                        'status' => $status,
                        'sort' => $short,
                    ];
        }
            // ksort($final['sort']);
            $short = array_column($final, 'sort');
            array_multisort($short, SORT_DESC,SORT_STRING, $final);
                return Response::json($final);
            }
}
