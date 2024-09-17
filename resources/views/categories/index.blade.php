@extends('layouts.app')

@section('content')
   <div class="card">
    @foreach ($categories as $category)
        <div class="category">
            {{ $category['name'] }}
        </div>
    @endforeach
@endsection
