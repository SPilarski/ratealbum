@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edycja albumu</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('albums.update', $albums->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">Artysta</label>

                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ $albums->author }}" required autocomplete="author" autofocus>

                                @error('author')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="album_name" class="col-md-4 col-form-label text-md-right">Nazwa</label>

                            <div class="col-md-6">
                                <input id="album_name" type="text" class="form-control @error('album_name') is-invalid @enderror" name="album_name" value="{{ $albums->album_name }}" required autocomplete="album_name" autofocus>

                                @error('album_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="album_detail" class="col-md-4 col-form-label text-md-right">{{ __('Opis albumu') }}</label>

                            <div class="col-md-6">
                                <textarea id="album_detail" class="form-control @error('album_detail') is-invalid @enderror" name="album_detail" autofocus >{{ $albums->album_detail }}  </textarea>

                                @error('album_detail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="genre" class="col-md-4 col-form-label text-md-right">Gatunek</label>

                            <div class="col-md-6">
                                <input id="genre" type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{$albums->genre }}" required autocomplete="genre" autofocus>

                                @error('genre')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Okładka</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control"  name="image" >


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="created_at" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>

                            <div class="col-md-6">
                                <input id="created_at" type="date" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{$albums->created_at }}" required autocomplete="created_at">

                                @error('created_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Dodaj
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
