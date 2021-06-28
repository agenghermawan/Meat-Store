@extends('backend.include.app')

@section('content')

    <div class="section-content section-dashboard-home">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Add New Product</h2>
                <p class="dashboard-subtitle">
                    Create your own product
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('product.update',$data -> id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Product Name</label>
                                                <input type="text" class="form-control" id="name" aria-describedby="name"
                                                    name="ProductName" value="{{ $data -> ProductName}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="number" class="form-control" id="price"
                                                    aria-describedby="price" name="Price" value="{{$data -> Price}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="categories">Category</label>
                                                <select class="form-control" id="category" name="Categories">
                                                    <option>{{$data -> Categories}}</option>
                                                    @if ($data -> Categories == 'Daging Ayam')
                                                    <option>Daging Has</option>
                                                    <option>Daging Iga Sapi</option>
                                                    @elseif($data -> Categories == 'Daging Has') 
                                                    <option>Daging Ayam</option>
                                                    <option>Daging Iga Sapi</option>
                                                    @else
                                                    <option>Daging Ayam</option>
                                                    <option>Daging Has</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="categories">Weight (Kg) </label>
                                                <input type="number" class="form-control" id="price"
                                                    aria-describedby="price" name="Weight" value="{{ $data -> Weight}}" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="Description" id="" cols="30" rows="4"
                                                    class="form-control"> {{$data -> Description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="thumbnails">Thumbnails</label>
                                                <input type="file" multiple class="form-control pt-1" id="thumbnails"
                                                    aria-describedby="thumbnails" name="ThumbnailPhoto" />
                                                <small class="text-muted">
                                                    Kamu dapat memilih Gambar untuk thumbnail
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success btn-block px-5">
                                                    Save Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
