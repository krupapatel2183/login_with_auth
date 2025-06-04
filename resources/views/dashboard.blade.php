@extends('layouts.default')
@section('title', "Dashboard")
@section('content')

<h1> Hello Dashboard </h1>
{{ Auth::user() }}


<h2><a href="{{ route('logout') }}">Logout</a></h2>
@endsection