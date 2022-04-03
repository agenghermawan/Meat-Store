@extends('frontend.include.app')
@section('content')
    @php
        use RealRashid\SweetAlert\Facades\Alert;
    @endphp
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
                    @foreach($data as $item)
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="menu-item" style="position: relative">
                            <img src="{{ Storage::url($item->ThumbnailPhoto)}}" style="object-fit: cover" alt="Makeup Categories"
                            class="w-100" height="217px" />
                            <span class="btn btn-primary text-mute price-menu" style=""> Rp {{$item -> Price}}</span>          
                        </div>
                        <p class="title-menu"> {{$item->ProductName}} </p>
                        <div class="row">
                            @auth
                            <form action="{{ route('detail-add', $item->id) }}" method="POST"
                                enctype="multipart/form-data" class="mr-2">
                                @csrf
                                <button type="submit" class="btn btn-success px-4 text-white btn-block mb-3">
                                    Buy Now
                                </button>
                            </form>
                            <form class="addtocard">
                                <input type="hidden" name="addtocard" class="addtocard" value="true">
                                <input type="hidden" name="id" value="{{$item->id}}" class="product-id">
                                <button type="submit" class="btn add-to-card px-4 btn-block mb-3">
                                    Add to card
                                </button>
                            </form>
                            @endauth
                            @guest
                            <form action="{{ route('detail-add', $item->id) }}" method="POST"
                                enctype="multipart/form-data" class="mr-2">
                                @csrf
                                <button type="submit" class="btn btn-success px-4 text-white btn-block mb-3">
                                    Buy Now
                                </button>
                            </form>
                            @endguest
                        </div>
                      </div>   
                    @endforeach
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
    @auth
        @php
            $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
        @endphp
    @endauth
    @guest
        @php
        $carts = 0
       @endphp
    @endguest
      
@endsection

@push('addon-script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })


        $(".addtocard").submit(function (event){
            event.preventDefault();
            var idproduct = $('.product-id').val();
            var addtocard = $('.addtocard').val();

            var Data = {
                id : idproduct,
                addtocard : "true",
            }
            console.log(idproduct)
            var addtocard = $.ajax({
                type: 'post',
                url: "/detail/"+idproduct,
                data: Data,
                dateType: "text",
                success: function(result){
                    Toast.fire({
                        icon: 'success',
                        title: 'Berhasil Memasukan ke keranjang'
                    })
                    var carts = parseInt({{ $carts }})
                    console.log(carts);
                    $(".cart-badge").html(carts + 1)
                }
            })
            addtocard.error(function(e) {
                alert('salah')
            })
        })
    </script>
@endpush

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