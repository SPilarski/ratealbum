@extends('layouts.app')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />



   <div class="container">
       <div class="row">
           <div class="col-6">
               <h1>Moja lista albumów</h1>
           </div>
           <div class="col-6">
           </div>
       </div>
    <table class="table table-Secondary table-hover">
        <thead>
        <tr>
            <th scope="col">Autor</th>
            <th scope="col">Tytuł</th>
            <th scope="col">Opis</th>
            <th scope="col">Gatunek</th>
            <th scope="col">Okładka</th>

        </tr>

        </thead>
        <tbody>

        @foreach($albums as $album)
            <tr>
                <th scope="row">{{$album ->author}}</th>
                <td>{{$album ->album_name}}</td>
                <td>{{$album ->album_detail}}</td>
                <td>{{$album ->genre}}</td>
                <td><img src="{{asset('storage/' . $album->image_path)}}" class="img-fluid mx-auto d-block" alt="Card image cap" width="75" height="75"></td>

            </tr>
        @endforeach
        </tbody>
    </table>

   </div>

@endsection



@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>


@endsection
