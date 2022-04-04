@extends('frontend.include.app')

@section('content')

    <!-- Page Content -->
    <div class="page-content page-categories">
        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center" data-aos="fade-up">
                        <h5 class="text-center" style="font-weight: 700"> Categories</h5>
                    </div>
                </div>
                <div class="row mt-4">
                    @foreach($category as $item)
                        <div class="col-6 col-md-3 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <a class="component-categories d-block" href="">
                            <div class="categories-image">
                                <img src="{{ Storage::url($item->image) }}" style="border-radius: 0 20px" alt="Gadgets Categories"
                                    class="w-100" height="217px" />
                            </div>
                            <p class="categories-text">
                                {{$item->name}}
                            </p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>


@endsection

@section('fixed', 'fixed-bottom')
