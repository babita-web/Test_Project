@extends('layouts.master')

@section('title')

    Roles| Babita's Test Assignment
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Roles Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                First Name
                            </th>
                            <th>
                                Last Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Role
                            </th>
                            <th>
                               Edit
                            </th>
                            <th>Delete</th>
                            </thead>
                            <tbody>

                            @foreach($users as $actor)

                                <tr>
                                    <td>{{ $actor->firstname }}</td>
                                    <td>{{ $actor->lastname }}</td>
                                    <td>{{ $actor->email }}</td>
                                    <td>{{ $actor->usertype }}</td>


                                <td>
                                    <a href="#" class="btn btn-success" >Edit</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger" >Delete</a>
                                </td>
                            </tr>
                            </tbody>

                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    <h4 class="card-title"> Table on Plain Background</h4>
                    <p class="category"> Here is a subtitle for this table</p>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
