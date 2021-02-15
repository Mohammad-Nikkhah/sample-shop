@extends('layouts.app')

@section('content') 
 <h1>{{ $books->name }}</h1>
     pages : <p style="color:blue;">{{ $books->pages}}</p>
     ISBN code : <p style="color:crimson ;">{{ $books->ISBN}}</p>
     Price : <p style="color: darkorchid;">{{ $books->price}}</p>
     Published_at :<p style="color: forestgreen;">{{ $books->published_at}}</p>
  

@endsection