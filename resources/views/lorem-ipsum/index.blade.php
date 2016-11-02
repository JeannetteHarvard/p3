@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator
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

<form method='POST' action='/lorem-ipsum/generate'>
    {{ csrf_field() }}
    <label for="paragraphs">Number of Paragraphs</label>
    <input type='text' name='paragraphs' m33axlength="2" value="3" id="paragraphs"> (Max: 33)
    <br>
    <input type='submit' value='Lorem Ipsum Now!'>
</form>

@stop
