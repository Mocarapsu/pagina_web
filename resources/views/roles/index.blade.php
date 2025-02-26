@extends('layouts.master')
@section('content')
<div class="container">
    <table class='table'>
    <table class="table table-striped table-hover">
  ...
</table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Key_name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->nambe }}</td>
                <td>{{ $role->key_name }}</td>
            </tr>
            @endforeach
        </tbody>              
    </table>
</div>
@endsection