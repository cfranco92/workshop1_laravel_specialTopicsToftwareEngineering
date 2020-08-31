@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $data["user"]["name"] }}
                    </div>
                    <div class="card-body">
                        <img src="{{ $data["user"]["icon"] }}" alt="User icon" style="width:100px;height:100px;" class="center"> <br>
                        <b>Name:</b> {{ $data["user"]["name"] }} <br>
                        <b>Email:</b> {{ $data["user"]["email"] }} <br>
                        <b>City:</b> {{ $data["user"]["city"] }} <br>
                        <b>Phone:</b> {{ $data["user"]["phone"] }} <br><br>
                        <td>
                            <form action="{{ route('user.destroy', $data["user"]) }}" method="POST" class="center">
                                @method('DELETE')
                                @csrf
                                <input
                                    type="submit"
                                    value="Delete"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Do you want to delete it?...')">
                            </form>
                        </td>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection