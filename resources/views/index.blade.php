@extends('layouts.master')


@section('content')

<div class="container">
  <div class="row">
      <div class="col-xs-6">
        <h3><a href="/lorem-ipsum">Lorem Ipsum Generator</a></h3>
        <blockquote>Lorem Ipsum is a filler text frequently used as a placeholder to replace meaningful content. Our Lorem Ipsum Generator allows to request a predefined number of paragraphs, their size, and some additional options such as containing a link or an unordered list.</blockquote>
      </div>
      <div class="col-xs-6">
        <h3><a href="/random-user">Random User Generator</a></h3>
        <blockquote>Our generator of Random User data is a great tool to quickly generate realistically looking personalized data. All random users have full names, and on a request basis may also contain image, date of birth, full address in the US and brief profile. </blockquote>
      </div>
  </div>

  <div class="row">
      <div class="col-xs-6">
        <blockquote class="linkquote"><a href="/lorem-ipsum">Go ahead and try <em>Lorem Ipsum Generator!</em> >>></a></blockquote>
      </div>
      <div class="col-xs-6">
        <blockquote class="linkquote"><a href="/random-user">Go ahead and try <em>Random User Generator!</em> >>></a></blockquote>
    </div>
  </div>


</div>
@stop
