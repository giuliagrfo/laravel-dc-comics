@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Add new Comics</h3>
    @include('partials.error')
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" aria-describedby="helpId" value="{{old('title')}}" required>
            <small id="titleHlper" class="text-muted">Add the title here, min 2 characters, max 100 characters</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" aria-describedby="helpId" value="{{old('description')}}">
            <small id="descriptionHlper" class="text-muted">Add the description here</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" aria-describedby="helpId" value="{{old('thumb')}}">
            <small id="thumbHlper" class="text-muted">Add the image here</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control" aria-describedby="helpId" value="{{old('price')}}">
            <small id="priceHlper" class="text-muted">Add the price here</small>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" aria-describedby="helpId" value="{{old('series')}}">
            <small id="seriesHlper" class="text-muted">Add the series here</small>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" aria-describedby="helpId" value="{{old('sale_date')}}">
            <small id="sale_dateHlper" class="text-muted">Add the sale date here</small>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" aria-describedby="helpId" value="{{old('type')}}">
            <small id="typeHlper" class="text-muted">Add the type here</small>
        </div>
        <button type="submit" class="btn btn-primary my-3">Add New Comic</button>
    </form>
</div>

@endsection