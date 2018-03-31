@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <form action="/companies" method="POST">
                	@csrf
                	<input type="text" name="name">
                	<input type="submit" name="" value="create">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
