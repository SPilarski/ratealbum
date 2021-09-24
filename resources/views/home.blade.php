@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8 order-md-2 col-lg-9">
                <div class="container-fluid">
                    <div class="row   mb-5">

                    </div>
                    <div class="row" id="album-wrapper">
                        @foreach($albums as $album)
                        <div class="col-6 col-md-6 col-lg-4 mb-3">
                            <div class="card h-100 border-0">
                                <div class="card-img-top">
                                    @if(!is_null($album->image_path))
                                    <img src="{{asset('storage/' . $album->image_path)}}" class="img-fluid mx-auto d-block" alt="Card image cap" width="240" height="240">
                                    @else
                                        <img src="https://via.placeholder.com/240x240/5fa9f8/efefef" class="img-fluid mx-auto d-block" alt="Card image cap">
                                        @endif
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">
                                        <a href="#" class=" font-weight-bold text-dark text-uppercase small">{{$album->album_name}}</a>
                                    </h5>
                                    <h5 >
                                        <i>{{$album->author}}</i>
                                    </h5>
                                    <div>
                                        <h5 class="card-price small">
                                            <i>{{$album->album_detail}}</i>
                                        </h5>
                                    </div>
                                    <button class="btn btn-success btn-sm delete"  data-id="{{$album->id}}">
                                        +
                                    </button>

                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                    {{$albums->links()}}
                </div>
            </div>
            <form class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
                <h3 class="mt-0 mb-5"> <span class="text-primary">{{count($albums)}}</span> Albumów</h3>
                <h6 class="text-uppercase font-weight-bold mb-3">Gatunki</h6>

                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="filter[genre]" id="genre-1" value="Rap">
                        <label class="custom-control-label" for="genre-1">Rap</label>

                    </div>
                </div>

                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="filter[genre]" id="genre-2" value="Pop">
                        <label class="custom-control-label" for="genre-2">Pop</label>

                    </div>
                </div>

                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="filter[genre]" id="genre-3" value="R&B">
                        <label class="custom-control-label" for="genre-3">R'n'B</label>

                    </div>
                </div>

                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="filter[genre]" id="genre-4" value="Rock">
                        <label class="custom-control-label" for="genre-4">Rock</label>

                    </div>
                </div>


                <input id="ex2" type="text" class="slider " value="50,150" data-slider-min="10" data-slider-max="200" data-slider-step="5" data-slider-value="[50,150]" data-value="50,150" style="display: none;">
                <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                <a href="#" class="btn btn-lg btn-block btn-primary mt-5" id="filter-button">Szukaj</a>
            </form>

        </div>
    </div>
@endsection
@section('javascript')
    const storagePath = '{{ asset('storage') }}/';

    $(function (){
    $('.delete').click(function (){
    $.ajax({
    method: "POST",
    url: "http://127.0.0.1:8000/home/" + $(this).data("id"),
    //  data: { id: $(this).data("id") }
    })
    .done(function( response ) {
    window.location.reload();
    })

    });
    });
@endsection
@section('js-files')
    <script src="{{asset("js/welcome.js")}}"></script>
@endsection

@section('javascript')
    const storagePath = '{{ asset('storage') }}/';
@endsection
@section('js-files')
<script src="{{asset("js/welcome.js")}}"></script>
@endsection

