@extends('layouts.main-layout')

@section('content')
  <form class="" action="{{ route('store-drink') }}" method="post">

    @csrf
    @method('post')

    <label for="">Name:</label>
    <input type="text" name="name">
    <br>

    <label for="">Alcohol Content:</label>
    <input type="text" name="alcohol_content">
    <br>

    <label for="">Price:</label>
    <input type="text" name="price">
    <br>

    <input type="submit" name="" value="ADD">


  </form>
@endsection
