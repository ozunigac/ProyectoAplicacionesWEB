<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use Illuminate\Support\Facades\Session;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $users=\App\User::All();
         return view('usuario.index',compact('users'));
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('usuario.create');
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(UserCreateRequest $request)
     {
         \App\User::create([
                 'name' => $request['name'],
                 'email' => $request['email'],
                 'password' => bcrypt($request['password']),
             ]);
         Session::flash('message', 'Usuario creado con éxito');
         return redirect('/usuario');
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $user = \App\User::find($id);
         // Muestra el form the edit y pasa el usuario :v
         return view('usuario.edit',['user'=>$user]);
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(UserEditRequest $request, $id)
     {
         $user = \App\User::find($id);
         $user->name = $request['name'];
         $user->email = $request['email'];
         if(!empty($request['password']))
         {
             $user->password=bcrypt($request['password']);
         }
         $user->save();
         Session::flash('message', 'Usuario editado con éxito');
         return redirect('/usuario');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $usuario = \App\User::find($id);
         $usuario->delete();
         Session::flash('message', 'Usuario eliminado con éxito');
         return redirect('/usuario');
     }
}