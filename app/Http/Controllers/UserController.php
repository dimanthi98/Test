<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function addData(Request $req){
        $user = new User;

        $user->fname = $req->fname;
        $user->lname = $req->lname;
        $user->email = $req->email;

        $hashedPassword = Hash::make($req->password);

        $user->password = $hashedPassword;
        $user->save();
        return redirect('/');

    }

    public function fetchData(){
        $data = User::all();
        return view('index', ['data' => $data]); 
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect('/');
    }

    public function edit($id){
        $data = User::find($id);
        return view('update', ['data'=>$data]);
    }

    public function update(Request $req){
        $data = User::find($req->id);

        $data->fname = $req->fname;
        $data->lname = $req->lname;
        $data->email = $req->email;
        $data->save();

        return redirect('/');

    }

}
