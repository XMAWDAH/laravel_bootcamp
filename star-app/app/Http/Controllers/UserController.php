<?php

namespace App\Http\Controllers;
use App\Models\User;



class UserController extends Controller{
    public function ListOfUser(){
        $users = User::all();
        return view('/users', compact('users'));
    }
 
    public function showTasks(string $id){
        $user = User::with('tasks')->findOrFail($id);
        return view('/user', compact('user'));
    }

}

