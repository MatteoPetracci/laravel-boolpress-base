@extends('layouts.layout')
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{(!empty($post)) ? route('posts.update', $post->id) : route('posts.store')}}" method="post">
    @csrf
    Image: <input type="text" name="image" value='{{(!empty($post)) ? $post->image : ''}}'> <br>
    Title: <input type="text" name="title" value='{{(!empty($post)) ? $post->title : ''}}'> <br>
    Description: <input type="text" name="description" value='{{(!empty($post)) ? $post->description : ''}}'> <br>
    @if (!empty($post))
        <input type="hidden" name="id" value="{{$post->id}}">
    @endif
    <button type="submit">Save</button>
    @if (!empty($post))
        @method('PATCH')
        @else 
        @method('POST')
    @endif
</form>