@extends('layout.app')

@section('main-content')
<div class="comics py-5">
    <div class="blue-line"></div>
    <p class="title fs-4 py-2">
        comic-thumb
    </p>
    <div class="upper-comic pb-4">
        <div class="wrapper">
            <div class="left-comic mt-5">
                <h1 class="mb-3">Comic-title</h1>
                <div class="price-banner">
                    <div class="price px-4">
                        <p>U.S. Price: <span>$19.90</span></p>
                        <p>Availeble</p>
                    </div>

                    <div class="availability">
                        <span>Check Availability</span>
                    </div>
                </div>
                <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate iure alias inventore tempora, quod nulla architecto eveniet ipsam, ad corporis laborum excepturi numquam nisi nesciunt assumenda. Totam laudantium alias explicabo. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur, ex totam aperiam tempore eos nulla molestiae soluta aliquid quidem ea impedit quibusdam praesentium similique dolorum adipisci voluptatum reiciendis nemo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptas aut reiciendis ab sapiente optio officia tenetur, fugit pariatur illum deserunt sunt vel. At distinctio molestias aut, obcaecati doloremque cupiditate!Lorem</p>
            </div>
            <div class="right-comic mt-5">
                <span>ADVERTISEMENT</span>
                <img src="{{Vite::asset('resources/images/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="bottom-comic">
        bottom</div>
</div>
@endsection
