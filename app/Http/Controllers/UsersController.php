<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Flash;
use Auth;

class UsersController extends Controller {

    /**
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function index()
    {
        $users = User::tenant(Auth::user())->get();
        return view('users.index', compact('users'));
    }

    /**
     *
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     *
     */
    public function create()
    {
        $user = new User();
        $user->company_id = Auth::user()->company_id;
        $user->enabled = true;
        $user->locale = 'en';
        $user->timezone = 'Asia/Jakarta';
        return view('users.create', compact('user'));
    }

    /**
     *
     */
    public function store(CreateUserRequest $request)
    {
        $user = new User;
        $user->fill($request->all());
        $user->company_id = Auth::user()->company_id;
        $user->password = bcrypt($request->input('password'));
        $user->save();

        Flash::success(trans('users/general.status.created') );

        return redirect('/users');
    }

    /**
     *
     *
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    /**
     *
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        if ($request->has('password'))
        {
            $user->fill($request->all());
            $user->password = bcrypt($request->input('password'));
        }
        else
        {
            $user->fill($request->except('password'));
        }
        $user->company_id = Auth::user()->company_id;
        $user->save();

        Flash::success( trans('users/general.status.updated') );

        return redirect('/users');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function enable($id)
    {
        $user = User::find($id);
        $user->enabled = true;
        $user->save();

        Flash::success(trans('users/general.status.enabled'));

        return redirect('/users');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function disable($id)
    {
        $user = User::find($id);
        $user->enabled = false;
        $user->save();
        Flash::success(trans('users/general.status.disabled'));

        return redirect('/users');
    }

}