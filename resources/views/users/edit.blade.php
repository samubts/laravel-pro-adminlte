@extends('layouts.default')
@section('page-title', 'Editar Usuário')
@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @include('users.parts.basic-details')
    <br>
    @include('users.parts.profile')
    <br>
    @include('users.parts.interests')
    <br>
    @include('users.parts.roles')
@endsection