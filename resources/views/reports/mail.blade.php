@extends('layouts.master')

@section('title', 'Mails')

@section('content')
    <ul class="nav nav-tabs">
	  	<li role="presentation"><a href="{{route('home.index')}}">Dashboard</a></li>
	  	<li role="presentation" class="active"><a href="#">Mails</a></li>
	  	<li role="presentation"><a href="{{route('todolist.index')}}">ToDoList</a></li>
	  	<li role="presentation"><a href="{{route('profile.index')}}">Profile</a></li>
	</ul>
@endsection