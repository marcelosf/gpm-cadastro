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

        $path = $request->file('picture_file_name')->store('user_pictures');

        $request->merge(['picture_file_name' => $path]);

        $user = $this->user->create($request->all());

        return $user;

    }

    public function show ($id) 
    {

        $user = $this->user->find($id);

        return view('user.show', compact('user'));

    }

    /**
     * Show Edit page
     * 
     * $id integer User identification.
     * 
     * @return void
     */
    public function edit($id)
    {

        $user = $this->user->find($id);

        return view('user.edit', compact($user));

    }
}
