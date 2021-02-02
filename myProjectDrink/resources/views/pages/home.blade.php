@extends('layouts.main-layout')

@section('content')
  <h1>DRINKS</h1>
  <a href="{{ route('create-drink') }}">ADD A DRINK</a>
  <ul>
    @foreach ($drinks as $drink)
      <li>
        <a href="{{ route('drink-show', $drink -> id )}}">
          {{ $drink -> name }}
        </a>
      </li>
    @endforeach
  </ul>
@endsection
