@extends('contacts.layouts')
@section('content')
<div class="card">
  <div class="card-header">Contacts Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">ID : {{ $contacts->id }}</h5>
        <p class="card-text">TITLE : {{ $contacts->title }}</p>
        <p class="card-text">SLUG : {{ $contacts->slug }}</p>
        <p class="card-text">SHORT_DESCRIPTION : {{ $contacts->short_description }}</p>
        <p class="card-text">CONTENT : {{ $contacts->content }}</p>
        <p class="card-text">PICTURE : {{ $contacts->picture }}</p>
        <p class="card-text">USER_ID : {{ $contacts->user_id }}</p>
        <p class="card-text">PUBLISHED_AT : {{ $contacts->published_at }}</p>
  </div>
    </hr>
  
  </div>
</div>