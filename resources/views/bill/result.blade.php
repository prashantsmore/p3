@extends('layouts.master')

@push('head')
    <link href='/css/trivia.css' rel='stylesheet'>
@endpush

@section('title')
    Individual Bill
@endsection

@section('content')
    <br>
    <br>
    <h2>The Individual Bill Is: <em>{{ $answer }}</em></h2>
    <br>
    @if($cookie != null)
        <h1 class='correct'>Your Fortune Cookie:- <em>{{ $clue }}</em> </h1>
    @endif
    @if($food != null && $food =='good')
        <h1 class='correct'>Food Review is <em> Good</em></h1>
        <br>
        <br>
    @elseif($food != null && $food =='excel')
        <h1 class='correct'>Food Review is <em> Excellent</em></h1>
        <br>
        <br>
    @elseif($food != null && $food =='bad')
        <h1 class='correct'>Food Review is <em> Not Good</em></h1>
        <br>
        <br>
    @else
    @endif

    <a href='/bill/create'>Split Another Bill?</a>

@endsection