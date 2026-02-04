@extends('layouts.app')
@include('includes.navbar')
@section('content')
<h1>Dashboard</h1>
<p>Welcome, {{ Auth::user()->name }}</p>

<form action="/logout" method="post">
    @csrf
    <button>Logout</button>
</form>
    
@endsection