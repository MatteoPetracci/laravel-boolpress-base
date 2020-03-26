@extends('layouts.layout')
@section('main')
    {{-- @dd($allAvatars); --}}
    @foreach ($allAvatars as $avatar)
        <ul style="list-style:none">
            <li><img src="{{$avatar->image}}" alt=""></li>
            <li>{{$avatar->user->name}}</li>
        </ul>
    @endforeach
@endsection


