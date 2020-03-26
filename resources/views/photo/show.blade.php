
@extends('layouts.layout')
@section('main')

<div>
    <img src="{{$photo->image}}" alt="">
    <h5>{{$photo->user->email}}</h5>
    <h5>{{$photo->user->name}}</h5>
</div>

@endsection

