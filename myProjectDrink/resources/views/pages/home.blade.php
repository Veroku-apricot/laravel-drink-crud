@extends('layouts.main-layout')

@section('content')
  <h1>DRINKS</h1>
  <ul>
    @foreach ($drinks as $drink)
      <li>
        <a href="#"></a>
      </li>
    @endforeach
  </ul>
@endsection