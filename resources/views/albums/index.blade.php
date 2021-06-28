@extends('layouts.app')

@section('content')
   <div class="container">
    <table class="table table-Secondary table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tytuł</th>
            <th scope="col">Autor</th>
            <th scope="col">Gatunek</th>
            <th scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach($albums as $album)
            <tr>
                <th scope="row">{{$album ->id}}</th>
                <td>{{$album ->album_name}}</td>
                <td>{{$album ->album_detail}}</td>
                <td>{{$album ->genre}}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
   </div>
@endsection
