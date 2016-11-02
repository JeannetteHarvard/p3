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
    <input type='text' name='paragraphs' m33axlength="2" value="{{ old('paragraphs') }}" id="paragraphs"> (Max: 33)
    <br>
    <label for="links">Paragraphs' size</label>
    <br>
    <label for="links">Include a link</label>
    <br>
    <label for="links">Include unordered list</label>
    <br>
    <input type='submit' value='Lorem Ipsum Now!'>
</form>

@stop
