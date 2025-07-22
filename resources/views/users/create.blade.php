@extends('layouts.default')
@section('page-title', 'Adicionar Usuários')
@section('content')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input 
                type="text" 
                name="name" 
                autocomplete="name" 
                class="form-control @error('name') is-invalid @enderror" 
                value="{{ old('name') }}"
            >
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input 
                type="text" 
                name="email" 
                autocomplete="email" 
                class="form-control @error('email') is-invalid @enderror" 
                value="{{ old('email') }}"
            >
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input 
                type="password" 
                name="password" 
                autocomplete="off" 
                class="form-control @error('password') is-invalid @enderror" 
            >
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
@endsection