@extends('menu.admin')

@section('content')
    <br>

    @if (Session::has('message'))
        <script type="text/javascript">
            swal("{{ Session::get('message') }}", "","success");
        </script>
    @endif
    <h1 align="center">Usuarios</h1>
    <a href="usuario/create" target=""_self class="btn btn-info btn-block">Agregar</a>
    <br>
    <table id="tblUsuarios" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{!!link_to_route('usuario.edit',$tittle='Editar',$parameters=$user->id,$attributes=['class'=>'btn btn-primary'])!!}</td>
                    <td>
                        {{ Form::open(['method' => 'DELETE', 'route' => ['usuario.destroy', $user->id]]) }}
                        {{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script type="text/javascript">
        $('#tblUsuarios').DataTable();
    </script>
@stop