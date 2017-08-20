<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $users=\App\User::All();
        return view('usuario.index',compact('users'));
    }

    
     public function create()
     {
         //
     }
 
     public function store(Request $request)
     {
         //
     }
 
     public function show($id)
     {
         //
     }
 
     public function edit($id)
     {
         //
     }
 
     public function update(Request $request, $id)
     {
         //
     }
 
     public function destroy($id)
     {
         //
     }
}
