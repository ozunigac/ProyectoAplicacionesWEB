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
    </table>
@stop