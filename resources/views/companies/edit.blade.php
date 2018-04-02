@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit</div>
                <div style="padding: 5px">
                    <center>
                        <form enctype="multipart/form-data" action="/companies/{{$company->id}}" method="POST" class="col-md-5">
                         @csrf
                         <label style="float: left;">Name:</label>
                         <input type="text" name="name" value="{{$company->name}}" class="form-control">
                         <br>
                         <label style="float: left;">E-mail:</label>
                         <input type="text" name="email" value="{{$company->email}}" class="form-control">
                         <br>
                         <label style="float: left;">Logo:</label>
                         <input type="file" name="logo" value="{{asset('logos/'.$company->logo)}}" class="form-control">
                         <br>
                         <label style="float: left;">Website:</label>
                         <input type="text" name="website" value="{{$company->website}}" class="form-control">
                         <br>
                         <input type="hidden" name="_method" value="PUT">
                         <input type="submit" name="" value="save" class="btn btn-dark" style="float:right;">
                     </form>
                 </center>
             </div>
         </div>
     </div>
 </div>
</div>
@endsection
