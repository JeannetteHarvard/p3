@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('content')

<strong>Here is your Lorem Ipsum text:</strong>
</br></br>

{!! Lipsum::html($paragraphs) !!}

</br></br>

<a href="/lorem-ipsum"><< Back to Lorem Ipsum Generator</a>

@stop
