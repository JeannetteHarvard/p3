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
    <label for="users">Number of Users</label>
    <input type='text' name='users' m33axlength="2" value="{{ old('users') }}" id="users"> (Max: 33)
    <br>
    <label for="links">Pictures</label>
    <br>
    <label for="links">Date of Birth</label>
    <br>
    <label for="links">Address</label>
    <br>
    <label for="links">Profile</label>
    <br>
    <input type='submit' value='Get My Users Now!'>
</form>


<hr>


@stop
