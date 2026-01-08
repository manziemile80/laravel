@extends('app.layout')
@section('content')
<a class="bi bi-plus-circle-fill" href="{{route('student.index')}}">Back</a>
@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
<li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif
<form action="{{route('student.update',$students->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="id" value="{{$students->id}}"><br><br>
    <input type="text" name="fname" value="{{$students->fname}}"><br><br>
    <input type="text" name="lname" value="{{$students->lname}}"><br><br>
    <button class="btn btn-success" name="update" type="submit">update</button>
</form>
