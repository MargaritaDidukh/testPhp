<?php

namespace App\Http\Controllers;

use App\Interfaces\UsersRepositoryInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    private UsersRepositoryInterface $usersRepository;

    public function __construct(UsersRepositoryInterface $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.list')
            ->with('users', $this->usersRepository->getAllUsers());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required',
        ]);

        $userDetails = $request->only([
            'username',
            'email',
            'first_name',
            'last_name',
            'mobile'
        ]);
        $this->usersRepository->createUser($userDetails);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users.profile')
            ->with('user', $this->usersRepository->getUserById($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users.edit')
            ->with('user', $this->usersRepository->getUserById($id));
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
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required',
        ]);

        $userDetails = $request->only([
            'username',
            'email',
            'first_name',
            'last_name',
            'mobile'
        ]);

        $this->usersRepository->updateUser($id, $userDetails);

        return redirect('/');
    }


    public function destroy($id)
    {
        $this->usersRepository->deleteUser($id);
        return redirect('/');
    }
//    public function getList()
//    {
//        return view('users.list')
//            ->with('users', User::orderBy('updated_at', 'DESC')->get());
//    }
//    public function getUser($id)
//    {
//        return view('users.profile')
//            ->with('user', User::where('id', '=', $id)->first());
//    }
}
