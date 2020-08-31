@extends('layouts.master')

{{-- @section("title", $data["title"]) --}}
@section("title")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            @include('util.message')
            <div class="card border-0 shadow">
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            - {{ $error }} <br>
                        @endforeach
                    </div>
                    @endif

                    <form action="{{ route('users.store') }}" method="POST">
                        <div class="form-row">
                            <div class="col-sm-3">
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="city" class="form-control" placeholder="City" value="{{ old('city') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-4">
                                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="form-row center">
                            <div class="col-auto">
                                @csrf
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection