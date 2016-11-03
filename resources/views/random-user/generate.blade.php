@extends('layouts.master')

@section('title')
    Random User Generator
@stop

@section('content')

<strong>Here are your Random Users:</strong>

@if ($pictures  == "on")
  </br>
  <i>(please wait for pictures to load)</i>
@endif

</br></br>

<div class="container-fluid">

  @for ($i = 0; $i < $users; $i++)
    <div class="row">
      <div class="col-md-1"> <b># {{$i+1}}</b></div>

    @if ($pictures  == "on")
      <div class="col-md-1"> <img src="{{ $faker->imageUrl($width = 30, $height = 40) }}" alt="Avatar"> </div>
    @endif

      <div class="col-md-2"> <b> {{ $faker->name }} </b></div>

    @if ($dateofbirth  == "on")
      <div class="col-md-2"> {{ $faker->date($format = 'Y-m-d', $max = '2000-01-01') }}</div>
    @endif

    @if ($address  == "on")
      <div class="col-md-3"> {{ $faker->address }}</div>
    @endif

    @if ($profile  == "on")
      <div class="col-md-3"> {{ $faker->text($maxNbChars = 200) }}</div>
    @endif

  </div> <!-- closing row -->
  <div class="row"><div class="col-md-12">&nbsp;</div></div>

  @endfor
</div> <!-- closing container -->

</br></br>

<a href="/random-user"><< Back to Random User Generator</a>

@stop
