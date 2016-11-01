@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('content')
<h4>Generate HTML text:</h4>
<div class="highlight highlight-text-html-php"><pre><span class="pl-s1"><span class="pl-c1">Lipsum</span><span class="pl-k">::</span>html();</span></pre></div>
{!! Lipsum::html() !!}

<hr>
<h4>Generate five paragraph HTML text with headers, link and unordered list:</h4>
<div class="highlight highlight-text-html-php"><pre><span class="pl-s1"><span class="pl-c1">Lipsum</span><span class="pl-k">::</span>headers()<span class="pl-k">-&gt;</span>link()<span class="pl-k">-&gt;</span>ul()<span class="pl-k">-&gt;</span>html(<span class="pl-c1">5</span>);</span></pre></div>
{!! Lipsum::headers()->link()->ul()->html(5) !!}


<hr>
<h4>Generate three short plain text paragraphs:</h4>
<div class="highlight highlight-text-html-php"><pre><span class="pl-s1"><span class="pl-c1">Lipsum</span><span class="pl-k">::</span>short()<span class="pl-k">-&gt;</span>text(<span class="pl-c1">3</span>);</span></pre></div>
{!! Lipsum::short()->text(3) !!}


@stop
