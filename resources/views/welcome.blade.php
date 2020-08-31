

@extends('layouts.master')

{{-- @section("title", $data["title"]) --}}
@section("title")

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Cristian Franco Bedoya
        </div>

        <div class="links">
            <a href="{{ route('user.index') }}">Users</a>
            <a href="{{ route('user.create') }}">Create User</a>
        </div>
    </div>
</div>
@endsection
