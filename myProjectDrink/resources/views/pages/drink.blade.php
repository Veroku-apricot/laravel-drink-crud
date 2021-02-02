@extends('layouts.main-layout')

@section('content')
  <h1>{{ $drink -> name }}</h1>
  <h2>Alcohol Content: {{ $drink -> alcohol_content }}</h2>
  <h2>Price: {{ $drink -> price }}</h2>
@endsection
