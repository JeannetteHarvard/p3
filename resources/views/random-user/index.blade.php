@extends('layouts.master')

@section('title')
    Random User Generator
@stop

@section('content')
@if(count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Attention! Please, re-check your input:</strong>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@endif

<form method='POST' action='/random-user/generate'>
    {{ csrf_field() }}

<div class="row">
    <div class="col-lg-2"><label for="users">Number of Users</label></div>
    <div class="col-lg-3"><input type='text' name='users' value="{{ old('users') }}" id="users"> (Max: 33)</div>
</div>
<div class="row">
    <div class="col-lg-2"><label for="pictures">Pictures</label></div>
    <div class="col-lg-3"><input name="pictures" type="checkbox" id="pictures"> </div>
</div>
<div class="row">
    <div class="col-lg-2"><label for="dateofbirth">Date of Birth</label></div>
    <div class="col-lg-3"><input name="dateofbirth" type="checkbox" id="dateofbirth"> </div>
</div>
<div class="row">
    <div class="col-lg-2"><label for="address">Address</label></div>
    <div class="col-lg-3"><input name="address" type="checkbox" id="address"> </div>
</div>
<div class="row">
    <div class="col-lg-2"><label for="profile">Profile</label></div>
    <div class="col-lg-3"><input name="profile" type="checkbox" id="profile"> </div>
</div>

    <input type='submit' value='Get My Users Now!'>
</form>


<hr>


@stop
