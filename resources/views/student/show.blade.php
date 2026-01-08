@extends('app.layout')
@section('content')
<a class="bi bi-plus-circle-fill" href="{{route('student.index')}}">Back</a>
<div><h1 class="card-title">THIS IS DOCTORS DATAILS</h1>
    <div class="card-body">
<p class="card-text"><strong>ID</strong>{{$students->id}}</p>
<p class="card-text"><strong>FNAME</strong>{{$students->fname}}</p>
<p class="card-text"><strong>LNAME</strong>{{$students->lname}}</p>
    </div>
</div>
