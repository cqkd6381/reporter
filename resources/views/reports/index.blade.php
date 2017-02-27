@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <ul class="nav nav-tabs">
	  	<li role="presentation" class="active"><a href="#">Dashboard</a></li>
	  	<li role="presentation"><a href="{{route('mail.index')}}">Mails</a></li>
	  	<li role="presentation"><a href="{{route('todolist.index')}}">ToDoList</a></li>
	  	<li role="presentation"><a href="{{route('profile.index')}}">Profile</a></li>
	</ul>
@endsection