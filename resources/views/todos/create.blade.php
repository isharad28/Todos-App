@extends('layouts.app')

@section('content')

<h1 class="text-center my-5">Create Todos</h1>
<div class="row justify-content-center">

<div class="col-md-8">
<div class="card card-default">
    <div class="card-header">
        Create Todo
    </div>
    @if($errors->any)
<div class="alert alert-danger">
<ul class="list-group">
@foreach($errors->all() as $error)
<li class="list-group-item">
    {{$error}}
</li>
@endforeach
</ul>
</div>
    @endif
    <div class="card-body">
    <form action="/store-todos" method="post">
    @csrf
<div class="form-group">
    <input type="text" class="form-control" placeholder="Name" name="name" value="">
</div>
<div class="form-group">
    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="description"  value=""></textarea>
</div>
<div class="form-group text-center">
<button class="btn btn-success">Create Todo</button>
</div>
</form>
    </div>
</div>
</div>
</div>


@endsection