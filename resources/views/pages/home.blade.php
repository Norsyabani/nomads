@extends('layouts.app')

@section('title')
    NOMADS
@endsection

@section('content')
    
    <!-- Header -->
    <header class="text-center">
        <h1>Explore the Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            Explore the Beautiful World
            <br>
            As Easy One Click
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            GET STARTED
        </a>
    </header>

    <!-- Main-->
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items->take(4) as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                        <div class="travel-country">{{$item->location}}</div>
                            <div class="travel-location">{{$item->title}}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{route('detail', $item->slug)}}" class="btn btn-travel-detail px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <div class="pagination col-sm-6 col-md-4 col-lg mx-auto mt-3 font-weight-bold">
                            {{ $items->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-partners" id="partners">
            <div class="triangel"></div>
            <div class="container">
                <div class="row content-partner">
                    <div class="col-md-4">
                        <h2>Our Partners</h2>
                        <p>Companies are trusted us
                            <br>
                            more than juas a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="/frontend/image/partner.png" alt="Logo Partners">
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="col text-center">
                    <h2>They are Loving Us</h2>
                    <p>moment were giving to them
                        <br>
                        are the best experience
                    </p>
                </div>
            </div>
        </section>
        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial content">
                                <img src="/frontend/image/testimonial-1.png" alt="User 1" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Pandu Norsya'bani Tsany</h3>
                                <p class="testimonial">
                                    " Never could I have imagined the wonderful experiences that awaited me began our trip "                     
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">Trip to Kuta, Bali</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial content">
                                <img src="/frontend/image/testimonial-2.png" alt="User 2" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Anna Elliot</h3>
                                <p class="testimonial">
                                    " Never could I have imagined the wonderful experiences that awaited me began our trip "                     
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">Trip to Borobudur, Magelang</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial content">
                                <img src="/frontend/image/testimonial-3.png" alt="User 3" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Michael Snow</h3>
                                <p class="testimonial">
                                    " Never could I have imagined the wonderful experiences that awaited me began our trip "                     
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">Trip to Machu picchu, Andes</p>
                        </div>
                    </div>
                </div>
                <div class="row btn-action">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I NEED HELP
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            GET STARTED
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
@endsection