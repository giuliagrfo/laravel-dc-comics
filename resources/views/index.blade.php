@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Comics Archives</h1>

    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>image</th>
                    <th>description</th>
                    <th>price</th>
                    <th>series</th>
                    <th>sale date</th>
                    <th>type</th>
                </tr>
            </thead>
            <tbody>
                @forelse($comics as $comic)
                <tr class="">
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->price}} €</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>

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