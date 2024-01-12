@extends('layouts.app')
@section('content')
<section class="container">
    <h1>{{$project->name}}</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="title">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                required maxlength="200" minlength="3" value="{{ old('body') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="body">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" required
                 value="{{ old('description') }}"></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="image">language</label>
            <input type="text" class="form-control @error('language') is-invalid @enderror" name="language" id="image" value="{{ old('language') }}">
            @error('language')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">save</button>
        <button type="reset" class="btn btn-success">save</button>
    </form>
</section>
@endsection
