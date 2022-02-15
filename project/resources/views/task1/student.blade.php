@extends('layouts.task1stu')
@section('contentstu')
@foreach($courses as $c)
<h4>name: {{$c->name}}</h4>
<h4>Credit: {{$c->cr}}</h4>
@endforeach
@endsection