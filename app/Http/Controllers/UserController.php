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

        $users = $this->user->paginate(7);

        return view('user.index', compact('users'));

    }

    public function create () 
    {

        return view('user.create');

    }

    public function store (Request $request)
    {

        $path = $request->file('user-picture')->store('pictures');

        $request->merge(['picture_file_name' => $path]);

        $user = $this->user->create($request->all());

        return $user;

    }
}
