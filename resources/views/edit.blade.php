@extends('layouts.app')

@section('title',"Book Shop Tech Test")

@section('content')
    <edit-book :book="{{ $book }}"></edit-book>
@endsection
