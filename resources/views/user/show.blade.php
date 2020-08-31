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
                        <b>Name:</b> {{ $data["user"]["name"] }} <br>
                        <b>Email:</b> {{ $data["user"]["email"] }} <br><br>
                        <td>
                            <form action="{{ route('user.destroy', $data["user"]) }}" method="POST">
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