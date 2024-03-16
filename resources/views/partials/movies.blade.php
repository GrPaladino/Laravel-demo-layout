@extends('layout.app')

@section('main-content')
<div class="comics py-5">
    <div class="container">
        <p class="title fs-4 py-2">
            CURRENT SERIES
        </p>
        <div class="row g-3">

            @foreach($comics as $comic)
            <a class="col-2" href="#">
                <div class=" card card-img-top">
                    <div class="img">
                        <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                    </div>

                    <h6 class="py-3">{{$comic["series"]}}</h6>

                </div>
            </a>
            @endforeach


        </div>
        <a class="load py-2" href="#">LOAD MORE</a>
    </div>
</div>
@endsection
