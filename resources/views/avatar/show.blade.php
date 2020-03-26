@extends('layouts.layout')
@section('main')

<div>
    <img src="{{$avatar->image}}" alt="">
    <h5>{{$avatar->user->name}}</h5>
</div>

@endsection