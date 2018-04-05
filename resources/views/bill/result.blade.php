@extends('layouts.master')

@push('head')
    <link href='/css/p3.css' rel='stylesheet'>
@endpush

@section('title')
    Individual Bill
@endsection

@section('content')
    <p>The Individual Bill Is:- <em>{{ $answer }}</em></p>

    @if($cookie != null)
        <p class='correct'>Your Fortune Cookie:- <em>{{ $clue }}</em></p>
    @endif

    @switch($food)
        @case('good')
        <p class='correct'>Food Review Is:- <em> Good</em></p>
        @break

        @case('excel')
        <p class='correct'>Food Review Is:- <em> Excellent</em></p>
        @break

        @case('bad')
        <p class='correct'>Food Review Is:- <em> Not Good</em></p>
        @break

        @case('default')
        @break

    @endswitch

    <a href='/'>Split Another Bill ?</a>

@endsection
