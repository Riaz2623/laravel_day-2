@extends('master')
@section('title')
    About Page
@endsection
@section('body')
    <h1>{{$a}}</h1>
    <h2>{{$Topu}}</h2>
   @foreach($fihim as $key => $value)
    @foreach($value as $item)
        <span>{{$item}}</span>
    @endforeach
       <br/>
   @endforeach
@endsection
