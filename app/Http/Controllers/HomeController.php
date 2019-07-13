<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Data;
use DB;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $user = json_decode(Redis::get('user'));

        if($user->role == "user")  {
            $data = Data::where('user_id',$user->id)->first();
            return view('home',compact('data','user'));
        }
        $data= User::whereHas('roles',function($q){
            $q->where('name', '!=','admin');
        })->join('data','users.id', '=','data.user_id')
        ->select(DB::raw('COUNT(*) as count') ,DB::raw('SUM(data.balance) as balance') )->get();
        
        return view('some.home', compact('data', 'user'));
       
    }
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        return view('some.home');
    }
}
