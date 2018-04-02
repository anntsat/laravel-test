@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create company</div>
                <div style="padding: 5px" >
                    <center>
                        <form enctype="multipart/form-data" action="/companies" method="POST"  class="col-md-5">
                           @csrf
                           <label style="float: left;">Name:</label>
                           <input type="text" name="name" class="form-control" required="">
                           <br>
                           <label style="float: left;">E-mail:</label>
                           <input type="text" name="email" class="form-control">
                           <br>
                           <label style="float: left;">Logo:</label>
                           <input type="file" name="logo" class="form-control">
                           <br>
                           <label style="float: left;">Website:</label>
                           <input type="text" name="website" class="form-control">
                           <br>
                           <input type="submit" name="" value="create" class="btn btn-success" style="float:right">
                       </form>
                   </center>
               </div>
           </div>
       </div>
   </div>
   @endsection
