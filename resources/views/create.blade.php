@extends('layouts.app')
@section('content')

<div class="card">
   <div class="body">
   <h5 class="title"> Creat Book </h5>

   <form method="post" action="/create/book">
     @csrf 
  <div class="form-group">
    <label for="name">Name</label>
    <input type="string" class="form-control"  value="{{old('name')}}" id="name" placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
    <label for="Pages">Pages</label>
    <input type=sucsses"number" class="form-control"value="{{old('pages')}}"  id="pages" placeholder="Pages" name="pages">
  </div>

  <div class="form-group">
    <label for="Isbn">Isbn code</label>
    <input type="string" class="form-control" value="{{old('Isbn')}}" id="Isbn" placeholder="Isbn" name="Isbn">
  </div>

  <div class="form-group">
    <label for="Price">Price</label>
    <input type="number" class="form-control" value="{{old('price')}}" id="price" placeholder="Price" name="price">
  </div>


  <div class="form-group">
    <label for="Published_at">Create time</label>
    <input type="string" class="form-control"  placeholder="date" name="date" value="<?php echo date('y-m-d');?>">
  </div>
  @include('layouts.alert')
  <button type="submit" class="btn btn-success">Save</button>
</form>
   </div>
</div>





@endsection