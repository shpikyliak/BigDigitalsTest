<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required'
        );
        //dd($request->all());
        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
            flash('Поле имя должно быть заполненым')->error();
            return redirect('/create');
        } else {

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile_number' => $request->mobile_number,
                'home_number' => $request->home_number,

            ]);
            flash('Успешно')->success();
            return redirect('/api/users');

        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        $users = User::all()->where('name', $name);

        return view('users.search', compact('users'));
    }

    /**
     * Создает строку поиска и делает на нее редирект.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function createSearch(Request $request)
    {
        return redirect('/api/users/search/' . $request->name);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $rules = array(
            'name' => 'required'
        );

        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
            flash('Поле имя должно быть заполненым')->error();
            return redirect('/api/users/' . $id);
        } else {

            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile_number = $request->mobile_number;
            $user->home_number = $request->home_number;
            $user->save();
            flash('Успешно')->success();
            return redirect('/api/users');

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        flash('Успешно')->success();
        return redirect('/api/users');
    }

}
