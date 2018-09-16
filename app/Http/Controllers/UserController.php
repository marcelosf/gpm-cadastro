<?php

/**
 * User Controller.
 * 
 * PHP version 7.1
 * 
 * @category Controllers
 * @package  Register\Http\Controllers
 * @author   Marcelo Schneider <schneider.fei@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/marcelosf/gpm-cadastro Cadastro GPM
 */
namespace Register\Http\Controllers;

use Illuminate\Http\Request;
use Register\Http\Request\UserRequest;
use Illuminate\Support\Facades\Storage;
use Register\User;

/**
 * User Controller class
 * 
 * @category Controllers
 * @package  Register\Http\Controllers
 * @author   Marcelo Schneider <schneider.fei@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/marcelosf/gpm-cadastro Cadastro GPM
 */
class UserController extends Controller
{
    
    protected $user;

    protected $registerExcept = [

        '_token',
        '_method',
        'fullname',
        'email',
        'picture'

    ];

    /**
     * Class constructor
     * 
     * @param Register\Entities\User $user User entity
     * 
     * @return void 
     */
    public function __construct(User $user) 
    {

        $this->user = $user;

    }

    /**
     * User Index. Provide a list of Registred users.
     * 
     * @return Response
     */
    public function index() 
    {

        $users = $this->user->paginate(7);

        return view('user.index', compact('users'));

    }

    /**
     * Show Create Users Page.
     * 
     * @return Response
     */
    public function create() 
    {

        return redirect()->route('register');

    }

    /**
     * Store a new User to the database.
     * 
     * @param Illuminate\Http\Request $request Http request.
     * 
     * @return Register\Entities\User
     */
    public function store(Request $request)
    {

        $request = $this->_storeFile($request);

        $this->user->create($request->all());

        return redirect()->route('users.index');

    }

    /**
     * Show User data.
     * 
     * @param integer $id User Id
     * 
     * @return Response
     */
    public function show($id) 
    {

        $user = $this->user->find($id);

        return view('user.show', compact('user'));

    }

    /**
     * Show Edit page
     * 
     * @param integer $id User identification.
     * 
     * @return Response
     */
    public function edit($id)
    {

        $user = $this->user->find($id);

        return view('user.edit', compact('user'));

    }

    /**
     * Update the user data.
     * 
     * @param Iluminate\Hppt\Request $request Http Request
     * @param integer                $id      User Id
     * 
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $this->_deleteFile($request->picture);

        $request = $this->_storeFile($request);

        $user = $this->user->find($id);

        $user->update($request->all());

        $user->register->update($request->except($this->registerExcept));

        return redirect()->route('users.index');

    }

    /**
     * Store the user picture file to the filesystem.
     * 
     * @param Illuminate\Http\Request $request Http Request
     * 
     * @return Illuminate\Http\Request
     */
    private function _storeFile($request)
    {

        if ($request->hasFile('picture')) {

            $path = $request->file('picture')->store('user_pictures');

            $request->merge(['picture_path' => $path]);

            return $request;

        }

        return $request;

    }

    private function _deleteFile($image)
    {
        
        Storage::delete($image);

    }

}
