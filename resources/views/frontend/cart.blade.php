@extends('frontend.include.app')

@section('title')
    Store Cart Page
@endsection

@section('content')
    <!-- Page Content -->
    <!-- Page Content -->
    <div class="page-content page-cart">
        <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Cart
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <form action="{{ route('checkoutdata') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <section class="store-cart">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-12 table-responsive">
                        <table class="table table-borderless table-cart responsive" aria-describedby="Cart">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name &amp; Seller</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $totalPrice = 0 @endphp
                                @forelse ($carts as $cart)
                                    <tr>
                                        <td style="width: 20%;">
                                            @if ($cart->product->galleries)
                                                <img src="{{ Storage::url($cart->product->galleries->first()->Photos) }}"
                                                    alt="" class="cart-image" />
                                            @endif
                                        </td>
                                        <td style="width: 35%;">
                                            <div class="product-title">{{ $cart->product->ProductName }}</div>
                                        </td>
                                        <td style="width: 20%">
                                            <div class="product-title">Rp {{ number_format($cart->product->Price) }}</div>
                                        </td>
                                        <td style="width: 20%;">
                                            <input type="number" name="Quantity" style="width: 100px" min="0" required class="form-control mt-3" placeholder="" required>
                                        </td>
                                        <td style="width: 35%;">
                                            <meta name="csrf-token" content="{{ csrf_token() }}">
                                            <button class="btn btn-remove-cart deleterecord" 
                                                type="button" data-id="{{ $cart->id }}">
                                                Remove
                                            </button>
                                        </td>
                                    </tr>
                                    @php $totalPrice += $cart->product->Price @endphp
                                    @empty
                                        <p class="text-center my-5"> Keranjang anda masih kosong , Silahkan memilih makanan yang ingin anda beli </p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-12">
                        <hr />
                    </div>
                    <div class="col-12">
                        <h2 class="mb-4">Shipping Details</h2>
                    </div>
                </div>
               
                    <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                    <div class="row mb-2" data-aos="fade-up" data-aos-delay="200" id="locations">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address_one">Name </label>
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }} " />
                            </div>
                        </div>
                        <div class=" col-md-6">
                            <div class="form-group">
                                <label for="address_one">Mail </label>
                                <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address_one">Address 1</label>
                                <input type="text" class="form-control" name="address_one" placeholder="Setra Duta Cemara" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address_two">Address 2</label>
                                <input type="text" class="form-control" id="address_two" name="address_two"
                                    placeholder="Blok B2 No. 34" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="provinces_id">Province</label>
                                <select name="province" id="province" class="form-control">
                                    <option> Depok </option>
                                    <option> Jakarta </option>
                                    <option> Bekasi </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="provinces_id">City</label>
                                <select name="city" id="province" class="form-control">
                                    <option> Jawa Barat </option>
                                    <option> Jakarta Selatan </option>
                                    <option> Jakarta Barat </option>
                                    <option> Jakarta Timur </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="zip_code">Postal Code</label>
                                <input type="text" class="form-control" id="zip_code" name="zip_code" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_number">Mobile</label>
                                <input type="text" class="form-control" id="phone_number" name="phone"  required/>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-delay="150">
                        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <button type="submit" class="btn btn-success mt-4 px-4 btn-block">
                                Checkout Now
                            </button>
                        </div>
                        <hr />
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

@section('script')
<script>
    $(".deleterecord").click(function() {
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        $.ajax({
            url: "cart/" + id,
            type: 'DELETE',
            data: {
                "id": id,
                "_token": token,
            },
            success: function() {
                console.log("it Works");
            }
        });
        location.reload(true);
    });

</script>
@endsection