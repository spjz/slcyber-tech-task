@extends('layouts.app')

@section('title',"Book Shop Tech Test")

@section('content')
    <book-listing :books="{{ $books }}"></book-listing>
@endsection
