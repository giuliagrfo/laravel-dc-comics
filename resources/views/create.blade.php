@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <h3>Add new Comics</h3>

        <form action="{{route('store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" aria-describedby="helpId">

            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image path</label>
                <input type="text" name="thumb" id="thumb" class="form-control" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" id="price" class="form-control" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" aria-describedby="helpId">
            </div>
            <button type="submit" class="btn btn-primary my-3">Add New Comic</button>
        </form>
    </div>

</div>
@endsection