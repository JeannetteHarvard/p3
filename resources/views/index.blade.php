@extends('layouts.master')


@section('content')

<div class="container">
  <div class="row">
      <div class="col-xs-6">
        <h3><a href="/lorem-ipsum">Lorem Ipsum Generator</a></h3>
        <blockquote>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte.</blockquote>
      </div>
      <div class="col-xs-6">
        <h3><a href="/random-user">Random User Generator</a></h3>
        <blockquote>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.</blockquote>
      </div>
  </div>

  <div class="row">
      <div class="col-xs-6">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/lorem-ipsum">Go ahead and try Lorem Ipsum Generator! >>></a>
      </div>
      <div class="col-xs-6">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/lorem-ipsum">Go ahead and try User Generator! >>></a>
    </div>
  </div>


</div>
@stop
