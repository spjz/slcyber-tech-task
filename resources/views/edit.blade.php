@extends('layouts.app')

@section('title',"Book Shop Tech Test")

@section('content')
    <edit-book :book="{{ $book }}" :csrf="{{ json_encode(csrf_token()) }}"></edit-book>
@endsection
