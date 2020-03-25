@extends('layouts.layout')
@section('main')
    {{-- @dd($allPosts); --}}
    <h2>All Cameras</h2>
    @foreach ($allPosts as $post)
        <ul style="list-style:none">
            <li>{{$post->id}}</li>
            <li>{{$post->image}}</li>
            <li>{{$post->title}}</li>
            <li>{{$post->description}}</li>
            <li>{{$post->created_at}}</li>
            <li>{{$post->updated_at}}</li>
            <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </ul>
    @endforeach
@endsection