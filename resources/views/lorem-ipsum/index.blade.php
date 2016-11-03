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

<div class="row">
    <div class="col-lg-2"><label for="paragraphs">Number of Paragraphs</label></div>
    <div class="col-lg-3"><input type='text' name='paragraphs'value="{{ old('paragraphs') }}" id="paragraphs"> (Max: 33)</div>
</div>
<div class="row">
    <div class="col-lg-2"><label for="links">Paragraph Size</label></div>
    <div class="col-lg-3"><select name="paragraphsize">
      <option value="short">Short</option>
      <option value="medium">Medium</option>
      <option value="long">Long</option>
      </select>
     </div>
</div>
<div class="row">
    <div class="col-lg-2"><label for="linkorlist">Include a Link</label></div>
    <div class="col-lg-3"><input name="linkorlist" type="radio" value="link"> </div>
</div>
<div class="row">
    <div class="col-lg-2"><label for="linkorlist">Include unordered list</label></div>
    <div class="col-lg-3"><input name="linkorlist" type="radio" value="list"> </div>
</div>

    <input type='submit' value='Lorem Ipsum Now!'>
</form>

@stop
