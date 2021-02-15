@extends('layouts.app')

@section('content')

@foreach ($books as $book)   

  <a href={{"/books/show/"}}{{ $book->id }}> {{$book->name}}  </a><br>
 
@endforeach

@endsection
