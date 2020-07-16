@extends('layouts.master')

@section('title')

    Edit User| Babita's Test Assignment
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h2> Edit the user</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="/edited/{{$users->id}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}

                                        <div class="form-group row">
                                            <label for="firstname">{{ __('First Name') }}</label>
                                            <input id="firstname" type="text" value="{{$users->firstname}} "
                                                   class="form-control @error('firstname') is-invalid @enderror"
                                                   name="firstname">

                                            @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror

                                        </div>

                                        <div class="form-group row">
                                            <label for="firstname">{{ __('Last Name') }}</label>
                                            <input id="lastname" type="text" value="{{$users->lastname}}"
                                                   class="form-control @error('lastname') is-invalid @enderror"
                                                   name="lastname">

                                            @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label for="usertype" >{{ __('Role') }}</label>

                                            <select name="usertype" class="form-control">
                                                <option value="{{$users->usertype}}">{{$users->usertype}}</option>
                                                <option value="admin">Admin</option>
                                                <option value="actor">Actor</option>
                                                <option value="user">Normal User</option>
                                                <option value="director">Director</option>
                                            </select>
                                            @error('usertype')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror

                                        </div>

                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a href="/role" class="btn btn-danger">Cancel</a>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')

@endsection

