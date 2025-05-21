@extends('layouts.app')

@section('title',"Book Shop Tech Test")

@section('content')
    <book-listing :books="{{ $books }}" term="{{ $term }}"></book-listing>
@endsection
