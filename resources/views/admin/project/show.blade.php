@extends('layouts.app')
@section('content')
<section class="container">
    <h1>{{ $project->name }}</h1>
    <p>{{ $project->description }}</p>
    <h2>{{ $project->language }}</h2>
</section>
@endsection
