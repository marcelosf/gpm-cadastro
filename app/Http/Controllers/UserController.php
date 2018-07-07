<?php

namespace Register\Http\Controllers;

use Illuminate\Http\Request;
use Register\Http\Request\UserRequest;
use Register\User;

class UserController extends Controller
{
    
    protected $user;

    public function __construct (User $user) 
    {

        $this->user = $user;

    }

    public function index () 
    {

        $users = $this->user->paginate(10);

        return view('user.index', compact('users'));

    }
}
