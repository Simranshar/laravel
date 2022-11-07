@extends('layouts.app')

@section('content')


<h1>Welcome : {{ ucfirst(Auth::user()->name)}}</h1>


@endsection