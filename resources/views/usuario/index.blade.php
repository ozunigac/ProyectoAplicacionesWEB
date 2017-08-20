@extends('menu.admin')

@section('content')

    <table id="tblUsuarios" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>password</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Password</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                </tr>
            $endforeach
        </tbody>
    </table>
@stop