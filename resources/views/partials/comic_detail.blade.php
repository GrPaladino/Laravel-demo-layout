@extends('layout.app')

@section('main-content')
<div class="comics py-5">
    <div class="blue-line"></div>
    <p class="title fs-4 py-2">
        ciao
    </p>
    <div class="upper-comic pb-4">
        <div class="wrapper">
            <div class="left-comic mt-5">
                <h1 class="mb-3">{{ $comic["series"] }}</h1>
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
    <div class="bottom-comic pt-5">
        <div class="wrapper">
            <div class="bottom-left col-6">
                <h3>Talent</h3>

                <table class="table mt-3">

                    <tbody>
                        <tr>
                            <th class="col-3" scope="row">Art by:</th>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat aperiam excepturi, dolor quo fugit deleniti similique accusamus iusto. Perspiciatis dolorum temporibus.</td>
                        </tr>
                        <tr>
                            <th scope="row">Written by:</th>
                            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae doloribus, saepe repellendus tempore qui excepturi fuga placeat rem architecto nulla reprehenderit numquam.</td>
                    </tbody>
                </table>
            </div>
            <div class="bottom-right col-6 ps-2">
                <h3>Specs</h3>

                <table class="table mt-3">

                    <tbody>
                        <tr>
                            <th class="col-3" scope="row">Series:</th>
                            <td>Action Comics</td>
                        </tr>
                        <tr>
                            <th scope="row">U.S. Price:</th>
                            <td class="color">$19.99</td>
                        </tr>
                        <tr>
                            <th scope="row">On Sale Date</th>
                            <td class="color">October 02 2018</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="bottom mt-4">
            <div class="wrapper">
                <div class="icon digital">
                    <p>DIGITAL COMICS</p>
                    <img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt="">
                </div>
                <div class="icon shop">
                    <p>SHOP DC</p>
                    <img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt="">

                </div>
                <div class="icon comic">
                    <p>COMIC SHOP LOCATOR</p>
                    <img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt="">


                </div>
                <div class="icon subscrition">
                    <p>SUBSCRIPTION</p>
                    <img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt="">


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
