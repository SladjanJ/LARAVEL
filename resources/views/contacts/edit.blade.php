@extends('contacts.layouts')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>ID:</label></br>
        <input type="text" name="id" id="id" class="form-control"></br>
        <label>Title:</label></br>
        <input type="text" name="title" id="title" class="form-control"></br>
        <label>SLUG</label></br>
        <input type="text" name="slug" id="slug" class="form-control"></br>
        <label>SHORT_DESCRIPTION</label></br>
        <input type="text" name="short_description" id="short_description" class="form-control"></br>
        <label>CONTENT</label></br>
        <input type="text" name="content" id="content" class="form-control"></br>
        <label>PICTURE</label></br>
        <input type="text" name="picture" id="picture" class="form-control"></br>
        <label>USER_ID</label></br>
        <input type="text" name="user_id" id="user_id" class="form-control"></br>
        <label>PUBLISHED_AT</label></br>
        <input type="text" name="published_at" id="published_at" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop