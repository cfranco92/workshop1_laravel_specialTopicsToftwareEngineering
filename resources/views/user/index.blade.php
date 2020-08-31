@extends('layouts.master')

{{-- @section("title", $data["title"]) --}}
@section("title")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 mx-auto">

            <table class="table">
                <thead>
                    <tr>
                        <th>Icon</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        {{-- <th>Phone</th>
                        <th>City</th> --}}
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index=>$user)
                    <tr>
                        <td><img src="{{ $user->icon }}" alt="User icon" style="width:25px;height:25px;"></td>
                        @if ($index < 2)
                            <td><b><a href="{{ route('user.show',['id'=>$user->id]) }}">{{ $user->id }}</a></b></td>
                        @else
                            <td><a href="{{ route('user.show',['id'=>$user->id]) }}">{{ $user->id }}</a></td>
                        @endif
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        {{-- <td>{{ $user->phone }}</td>
                        <td>{{ $user->city }}</td> --}}
                        <td>
                            <a href="{{ route('user.show',['id'=>$user->id]) }}" class="btn btn-primary btn-sm">VIEW</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection