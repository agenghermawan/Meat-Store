@extends('frontend.include.app')
@section('content')
    <!-- Page Content -->
    <div class="page-content page-categories">
        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center" data-aos="fade-up">
                        <h5 class="text-center"> About Me</h5>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 col-sm-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <a class="component-categories d-block" href="{{ route('ctigasapi') }}">
                            <div class="categories-image">
                                <img src="{{ asset('frontend/images/dagingigasapi.jpg') }}" alt="Gadgets Categories"
                                    class="w-100" height="400px" />
                            </div>
                            <p class="categories-text">
                                Daging Iga Sapi
                            </p>
                        </a>
                    </div>
                    <div class="col-md-12  col-sm-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <a class="component-categories d-block" href="{{ route('ctigasapi') }}">
                            <div class="categories-image" style="height: 455px">
                               <h5> PD.Adibta Ardia Selaras adalah Supplier daging sapi di Jakarta halal higienis dan kualitas premium. Menjual Daging Rendang, daging IGA, Ayam. </h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('fixed','fixed-bottom')
    
