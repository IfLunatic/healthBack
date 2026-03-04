@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="p-4 bg-white rounded-4 shadow-sm">
        <h1 class="h4 mb-2">Dashboard</h1>
        <p class="mb-0">Ви залогінені як <strong>{{ auth()->user()->name }}</strong>.</p>
    </div>
@endsection