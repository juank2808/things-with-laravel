@extends('admin.template.main')

@section('title', 'Users List')

@section('content')
<div class="section">
    <a href="{{url('admin/users/create')}}"class="waves-effect waves-red btn blue">Registrar</a>
        <table>
            <thead >
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th class="center">Tipo</th>
                    <th class="center">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $users as $user )
                <tr>
                    <td>{{ $user-> id }}</td>
                    <td>{{ $user-> name }}</td>
                    <td>{{ $user-> email}}</td>
                    @if($user->type == 'admin')
                        <td class="red acent-4 center"><span class="white-text text-darken-2">{{ $user-> type }}</span></td>
                    @else
                        <td class="blue darken-3 center"><span class="white-text text-darken-2">{{ $user-> type }}</span></td>
                    @endif
                    
                    <td class="center">
                        <a class="waves-effect waves-light btn-floating red" href="{{route ('admin.users.destroy', $user->id) }}"><i class="material-icons">delete</i></a>
                        <a class="waves-effect waves-light btn-floating green" href="{{route ('admin.users.edit', $user->id)}}"><i class="material-icons">mode_edit</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
    <!--{!! $users->render()!!}-->
    
@endsection