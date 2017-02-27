@extends('layouts.master')

@section('title', 'ToDoList')

@section('content')
    <ul class="nav nav-tabs">
	  	<li role="presentation"><a href="{{route('home.index')}}">Dashboard</a></li>
	  	<li role="presentation"><a href="{{route('mail.index')}}">Mails</a></li>
	  	<li role="presentation" class="active"><a href="#">ToDoList</a></li>
	  	<li role="presentation"><a href="{{route('profile.index')}}">Profile</a></li>
	</ul>
@endsection