@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Companies</div>
                <div style="padding: 5px; margin-left: 95px"  >

                    <form enctype="multipart/form-data" action="/companies" method="POST"  class="col-md-8" style=" ">
                        @csrf

                        <table class="table table-dark table-striped">


                            <thead>
                                <tr>
                                    <th>Company</th>
                                    <th>Logo</th>
                                    <th>Email</th>
                                    <th>Website</th>
                                    
                                </tr>
                            </thead>
                            @foreach ($companies as $company)
                            <tbody>
                                <tr>
                                    <td><a href="companies/{{$company->id}}">{{$company->name}}</a> </td>
                                    <td><img src="{{asset('logos/'.$company->logo)}}" style="width:100px;height: 100px"></td>
                                    <td>{{$company->email}}</td>
                                    <td>{{$company->website}}</td>
                                    

                                </tr>
                            </tbody>
                            @endforeach

                        </table>


                    </form>
                        <div style="margin-left: 200px">
                            {{ $companies->links() }}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
