

@extends('layouts.master')

{{-- @section("title", $data["title"]) --}}
@section("title")

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Cristian Franco Bedoya
        </div>

        <div class="links">
            <a href="{{ route('user.create') }}">Create User</a>
            <a href="{{ route('user.index') }}">User List</a>
        </div>
    </div>
</div>
@endsection
