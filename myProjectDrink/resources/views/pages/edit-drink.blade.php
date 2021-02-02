@extends('layouts.main-layout')

@section('content')
  <form class="" action="{{ route('update-drink', $drink -> id) }}" method="post">

    @csrf
    @method('post')

    <label for="">Name:</label>
    <input type="text" name="name" value="{{ $drink -> name }}">
    <br>

    <label for="">Alcohol Content:</label>
    <input type="text" name="alcohol_content" value="{{ $drink -> alcohol_content }}">
    <br>

    <label for="">Price:</label>
    <input type="text" name="price" value="{{ $drink -> price }}">
    <br>

    <input type="submit" name="" value="UPDATE">


  </form>
@endsection
