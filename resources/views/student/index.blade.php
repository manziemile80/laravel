@extends('app.layout')
@section('content')
<center><h1 class="fw-bold shadow text-center p-4 rounded hover-effect">
  THIS IS INDEX PAGE YOU GUYS
</h1>
</center>
<a class="bi bi-plus-circle-fill" href="{{route('student.create')}}">Add new</a><br>
@if ($message=Session::get('success'))
{{$message}}
@endif
<table border="4" class="table table-hover table-bordered">
    <tr>
        <th>ID</th>
        <th>FNAME</th>
        <th>LNAME</th>
        <th colspan="3">ACTION</th>
    </tr>
    @foreach ($students as $doctors)
<tr>
    <td>{{$doctors->id}}</td>
    <td>{{$doctors->fname}}</td>
    <td>{{$doctors->lname}}</td>
    <td>
        <form action="{{route('student.destroy',$doctors->id)}}" method="POST">
            @csrf
            @method('delete')
            <a class="btn btn-primary" href="{{route('student.show',$doctors->id)}}">Show</a>
            <a class="btn btn-primary" href="{{route('student.edit',$doctors->id)}}">Edit</a>
            <button class="btn btn-success" name="delete" type="submit" onclick="return confirm('are you sure you want ro delete this id ?')">Delete</button>
        </form>
    </td>
</tr>
    @endforeach
</table>
