@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Comics Archives</h1>

    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Sale date</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($comics as $comic)
                <tr class="">
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="{{route('comics.show',$comic->id)}}" class="btn btn-secondary"><i class="fa-regular fa-eye"></i></a>
                        <a href="{{route('comics.edit',$comic->id)}}" class="btn btn-primary my-1"><i class="fa-regular fa-pen-to-square"></i></a>

                        <!-- Modal trigger button -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteComic-{{$comic->id}}">
                            <i class="fa-solid fa-trash"></i>
                        </button>

                        <!-- Modal Body -->
                        <div class="modal fade" id="deleteComic-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalComicId-{{$comic->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalComicId-{{$comic->id}}">Delete Comic</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body  text-dark">
                                        Do you really want to delete this element permanently?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                        <form action="{{route('comics.destroy',$comic->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                @empty
                <td>
                    this page is empty
                </td>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection