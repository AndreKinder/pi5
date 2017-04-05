@extends('layouts.app')
@section('title', 'Login')

@section('content')
	{!! Form::open(['action' => ['LoginController@create']]) !!}
	{!!  Form::label('email', 'E-Mail Address', ['class' => 'awesome']); !!}
	{!!  Form::text('email'); !!}
	{!! Form::close() !!}
@endsection
