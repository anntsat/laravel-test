@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Company</div>
                <div style="padding: 5px; " >
                    <form enctype="multipart/form-data" action="/companies" method="POST" class="col-md-8">
                       @csrf

                       <table class="table table-dark table-striped">


                        <thead>
                            <tr>
                                <th>Company</th>
                                <th>Logo</th>
                                <th>Email</th>
                                <th>Website</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>{{$companies->name}}</td>
                                <td><img src="{{asset('logos/'.$companies->logo)}}" style="width:100px;height: 100px"></td>
                                <td>{{$companies->email}}</td>
                                <td>{{$companies->website}}</td>
                                <td><a href="/companies/{{$companies->id}}/edit">Edit</a></td>
                                <td><input type="submit" name="" value="delete" class="btn btn-danger"></td>
                            </tr>
                        </tbody>


                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
