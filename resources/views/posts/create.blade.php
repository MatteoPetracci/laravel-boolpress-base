@extends('layouts.layout')
<body>
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        Image: <input type="text" name="image" id=""> <br>
        Title: <input type="text" name="title" id=""> <br>
        Description: <input type="text" name="description" id=""> <br>
        <button type="submit">Save</button>
        @method('POST')
    </form>
</body>
</html>