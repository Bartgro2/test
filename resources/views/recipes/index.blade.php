@extends('layouts.app')

@section('content')
  <div class="card">
     @foreach($recipes as $recipe)
     <div class="recipe">
          {{$recipe->id}}
          {{$recipe->name}}
          {{$recipe->description}}
     </div> 
   @endforeach
  </div>
@endsection



