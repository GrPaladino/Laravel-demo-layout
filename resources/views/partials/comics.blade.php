@extends('layout.app')

@section('main-content')
<div class="comics py-5">
    <div class="container">
        <p class="title fs-4 py-2">
            CURRENT SERIES
        </p>
        <div class="row g-3">
            @foreach($comics as $comic)
            <div class="col-2">
                <div class=" card card-img-top">
                    <div class="img">
                        <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                    </div>

                    <h6 class="py-3">{{$comic["series"]}}</h6>

                </div>
            </div>

            @endforeach
        </div>
        <a class="py-2" href="#">LOAD MORE</a>
    </div>
</div>
@endsection
