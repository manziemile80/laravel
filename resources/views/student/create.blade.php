@extends('app.layout')
@section('content')
<h1>CREATE NEW ACCOUNT HERE</h1>
<a class="bi bi-arrow-left" href="{{route('student.index')}}">Back</a>
<form action="{{route('student.store')}}" method="POST">
    @csrf
    @method('POST')
    <input type="text" name="fname" placeholder="Enter your fname"><br><br>
    <input type="text" name="lname" placeholder="Enter your lname"><br><br>
<button class="btn btn-warning" name="create">Create</button>
</form>
