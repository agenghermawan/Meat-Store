@extends('frontend.include.app')
@section('content')
    <div class="page-content page-home">
        <section class="store-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="zoom-in">
                        <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#storeCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#storeCarousel" data-slide-to="1"></li>
                                <li data-target="#storeCarousel" data-slide-to="2"></li>
                                <li data-target="#storeCarousel" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('frontend/images/bg4.jpg') }}" height="600px"
                                        style="border-radius: 20px" class="d-block w-100 " alt="Carousel Image" />
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('frontend/images/bg2.jpg') }}" class="d-block w-100 "
                                        style="border-radius: 20px" height="600px" alt="Carousel Image" />
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('frontend/images/bg5.jpg') }}" class="d-block w-100 "
                                        style="border-radius: 20px" height="600px" alt="Carousel Image" />
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('frontend/images/bg3.jpg') }}" class="d-block w-100 "
                                        style="border-radius: 20px" height="600px" alt="Carousel Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="categories container mt-4">
            <h3> Categories </h3>
            <div class="row">
                <div class="col-md-4 mb-3">
                        <a class="btn btn-primary text-white" style="position: absolute; right:15px;border-radius:0 15px"> Best</a>
                    <img src="{{ asset('frontend/images/dagingigasapi.jpg') }}" style="object-fit: cover;" alt="Gadgets Categories"
                            class="w-100 h-100" height="193px" />
                        <p class="title-categories"> Daging sapi </p>
                        <p class="title-text"> Daging pilihan </p>
                </div>
                <div class="col-md-4 mb-3">
                    <img src="{{ asset('frontend/images/dagingigasapi.jpg') }}" style="object-fit: cover" alt="Gadgets Categories"
                            class="w-100 mb-3" height="193px"  />
                    <img src="{{ asset('frontend/images/dagingigasapi.jpg') }}" style="object-fit: cover" alt="Gadgets Categories"
                            class="w-100" height="193px" />
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('frontend/images/dagingigasapi.jpg') }}" style="object-fit: cover" alt="Gadgets Categories"
                            class="w-100 mb-3" height="193px" />
                    <img src="{{ asset('frontend/images/dagingigasapi.jpg') }}" style="object-fit: cover" alt="Gadgets Categories"
                            class="w-100" height="193px" />
                </div>
            </div>
        </section>
        <section class="menus">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up" >
                        <div class="row justify-content-between">
                            <h3 class="text-left"> Menus </h3>
                            <h5 class="pt-2"> View More > </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @for($i = 0; $i < 4; $i++)
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="menu-item" style="position: relative">
                            <img src="{{ asset('frontend/images/daginghas2.jpg') }}" style="object-fit: cover" alt="Makeup Categories"
                            class="w-100" height="217px" />
                            <span class="btn btn-primary text-mute price-menu" style=""> Rp 20.000</span>          
                        </div>
                        <p class="title-menu"> Makanan Terbaik  </p>
                        <a href="" class="btn btn-dark">Buy Now </a>
                        <a href="" class="btn add-to-card">Add to Card </a>
                      </div>   
                    @endfor
                </div>
            </div>
        </section>
        <section>
            <div class="container" style="margin-top: 100px">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('frontend/images/bg5.jpg') }}" class="d-block" width="90%"
                        style="border-radius: 20px;border-radius: 100px 15px 15px 15px;" height="450px" alt="Carousel Image" />
                    </div>
                    <div class="col-md-6 p-5">
                        <h5> Review </h5>
                        <img src="{{ asset('frontend/images/start.png')}}" alt="">
                        <p class="font-weight-normal" style="font-size: 24px;line-height:36px" >
                            What a great trip with my family and  <br/>
                            I should try again next time soon ...
                        </p>
                        <p>
                            Ageng, Product Designer
                        </p>
                        <button class="btn btn-primary px-2" style="background: #3252DF;
                        box-shadow: 0px 8px 15px rgba(50, 82, 223, 0.3);
                        border-radius: 4px;">
                            Beli Sekarang
                        </button>
                    </div>
                  
                </div>
            </div>
        </section>
    </div>
@endsection
@push('addon-style')
    <style>
    .categories .row img {
    border-radius: 5px 15px;
    }

    .carousel-inner .carousel-item img {
        object-fit: cover;
    }
    .categories .row .col-md-4 .title-categories {
        position: absolute;
        top: 82%;
        padding-left: 10px;
        font-size: 18px;
        line-height: 30px;
        font-weight: 400;
    }
    .categories .row .col-md-4 .title-text {
        position: absolute;
        top: 90%;
        padding-left: 10px;
        font-size: 18px;
        line-height: 30px;
        font-weight: 400;
    }

    .menus img {
        border-radius: 15px;
    }

    .title-menu{
            font-size: 18px;
        }
        .price-menu{
            position: absolute;
            right:0;
            font-size:12px;
            width:40%;
        }
        .add-to-card{
            background-color: #dae0e5;
            border-color: #dae0e5;
        }
    </style>
@endpush