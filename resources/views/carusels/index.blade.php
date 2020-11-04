@extends('layouts.app')


@section('content')
  <div class="container spark-screen">
  <div class="row">
  <div class="col-md-10 col-md-offset-1">
  <div class="panel panel-default">
  <div class="panel-heading"><h3>Images Gallery Slider by user: {{Auth::user()->name}}</h3></div>
  <div class="panel-body">
  <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ url('/create')}}">
  <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
  {{ csrf_field() }}

<div class="col-md-6">
 <label for="image" class="col-md-4 control-label">Image:</label>
 <div class="col-md-6">
  <input type="file" name="image">
  <img src="/uploads/images/" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">                    
@if ($errors->has('image'))
 <strong>{{ $errors->first('image') }}</strong>
@endif
 </div>


 <div class="col-md-6">
 <label for="title" class="col-md-4 control-label">Title:</label>
 <div class="col-md-6">
<input id="title" type="text" name="title" value="{{old('title')}}">
@if ($errors->has('title'))
 <strong>{{ $errors->first('') }}</strong>
@endif
 </div>


<label for="url" class="col-md-4 control-label">URL:</label>
 <div class="col-md-6">
<input id="url" type="text" name="url" value="{{old('url')}}">
@if ($errors->has('url'))
 <strong>{{ $errors->first('url') }}</strong>
@endif
 </div>



<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
 <i class="fa fa-btn fa-user"></i> Submit
</button>
</div>
</div>









@if (count($carusels) > 0) 

@include ('includes.gallery')   

@endif

</div>

  
@endsection







