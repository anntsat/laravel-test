@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    Want to create a company? :)
                    <br>

                    <a href="/companies/create"><input type="button" name="create" value="Create Company" class="btn btn-info" style="float: right"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
