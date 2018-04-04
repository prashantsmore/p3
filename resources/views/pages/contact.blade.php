@extends('layouts.master')

@section('title')
    Contact
@endsection

@section('content')
    <h1>Contact</h1>
    <p>
        Questions? Email us at <a href='mailto:{{ $email }}'>site admin</a>
    </p>
@endsection