<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\MockObject\Stub\Exception;

class UserController extends Controller
{
    public function store(Request $request){
        try {
            DB::beginTransaction();

            $userCreate = User::create([
                'name' => $request->name,
                'email'=> $request->email,
                'password' => hash::make($request->password),

            ]);

            DB::commit();
            return redirect()->route('index');
        } catch (Exception $exception) {
            DB::rollBack();
        }


        return back();
    }

    public function login(Request $request)
    {
        $user_data = array(
            'email'  => $request->email,
            'password' => $request->password
        );
        $remember = $request->remember;
        if(Auth::attempt($user_data,$remember))
        {
            return redirect('home');
        }
//        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('home');
    }
    public function update(Request $request,$uid){
        $todo = User::find($uid);
        $a = (int)$request->money;

        $todo->money = $todo->money + $a;
        if(Hash::check($request->password,$todo->password))
        {
            $todo->save();
            return redirect('home');
        }
        else
        {
            return redirect('product');
        }



    }
}
