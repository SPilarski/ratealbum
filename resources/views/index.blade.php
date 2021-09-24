@extends('layouts.app')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />



   <div class="container">
       <div class="row">
           <div class="col-6">
               <h1>LISTA ALBUMÓW</h1>
           </div>
           <div class="col-6">
               <a class="float-right" href="{{route('albums.create')}}">
                   <button type="button" class="btn btn-primary">Dodaj</button>

               </a>
           </div>
       </div>
    <table class="table table-Secondary table-hover">
        <thead>
        <tr>
            <th scope="col">Autor</th>
            <th scope="col">Tytuł</th>
            <th scope="col">Opis</th>
            <th scope="col">Gatunek</th>
            <th scope="col">Akcje</th>

        </tr>
        </thead>
        <tbody>

        @foreach($albums as $album)
            <tr>
                <th scope="row">{{$album ->author}}</th>
                <td>{{$album ->album_name}}</td>
                <td>{{$album ->album_detail}}</td>
                <td>{{$album ->genre}}</td>
                <td>
                    <a href="{{route('albums.edit',$album->id)}}">
                        <button class="btn btn-success btn-sm ">
                            E
                        </button>
                    </a>
                    <button class="btn btn-danger btn-sm delete" data-id="{{$album->id}}">
                        X
                    </button>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
       {{$albums->links()}}
   </div>

@endsection
@section('javascript')
    $(function (){
        $('.delete').click(function (){
                $.ajax({
                method: "DELETE",
                url: "http://127.0.0.1:8000/albums/" + $(this).data("id"),
              //  data: { id: $(this).data("id") }
                })
                .done(function( response ) {
                    window.location.reload();
                })
                .fail(function(resopnse){
                    alert( "Error");
    });
            console.log($(this).data("id"));
    });
    });
@endsection
