@extends('layouts.layout')
@section('main')
    <h2>Show post</h2>
        <ul style="list-style:none">
            <li>{{$post->id}}</li>
            <li>{{$post->image}}</li>
            <li>{{$post->title}}</li>
            <li>{{$post->description}}</li>
            <li>{{$post->created_at}}</li>
            <li>{{$post->updated_at}}</li>
        </ul>
@endsection