@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Edit Comics</h3>
    @include('partials.error')
    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" aria-describedby="helpId" value="{{old('title', $comic->title)}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" aria-describedby="helpId" value="{{old('description', $comic->description)}}">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" aria-describedby="helpId" value="{{old('thumb', $comic->thumb)}}">
        </div>
        <div class=" mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" aria-describedby="helpId" value="{{old('price', $comic->price)}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" aria-describedby="helpId" value="{{old('series', $comic->series)}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" aria-describedby="helpId" value="{{old('sale_date', $comic->sale_date)}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" aria-describedby="helpId" value="{{old('type', $comic->type)}}">
        </div>
        <button type="submit" class="btn btn-primary my-3">Edit</button>
    </form>
</div>

@endsection