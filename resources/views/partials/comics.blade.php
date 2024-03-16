@extends('layout.app')

@section('main-content')
<div class="comics py-5">
    <div class="container">
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
    </div>
</div>
@endsection
