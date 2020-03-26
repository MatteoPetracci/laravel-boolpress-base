@extends('layouts.layout')
@section('main')
    {{-- @dd($allPosts); --}}
    <h2>All Cameras</h2>
    @foreach ($allPosts as $post)
    {{-- @dd($post->user) --}}
    {{-- @dd($post->user['name']) --}}
        <ul style="list-style:none">
            <li>{{$post->id}}</li>
            <li>{{$post->user->name}}</li>
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