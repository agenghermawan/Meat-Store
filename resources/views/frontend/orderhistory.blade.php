@extends('frontend.include.app')

@section('content')

    <!-- Page Content -->

    <div class="page-content page-categories">  
    <h3 class="container-fluid mr-2 text-center"> Order History </h3>
        <div class="card">
            <div class="col-12 mt-2">
                    <div class="card-body">
                        <table class="table container">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col" class="pt-4 pb-4">Code Order</th>
                                <th scope="col" class="pt-4 pb-4">Total Price</th>
                                <th scope="col" class="pt-4 pb-4">Name</th>
                                <th scope="col" class="pt-4 pb-4">Status</th>
                                <th scope="col" class="pt-4 pb-4">Payment</th>
                                <th scope="col" class="pt-4 pb-4">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($history as $item)
                                <tr>
                                    <td>
                                       <h4> {{$item  -> code}} </h4>
                                       <p> {{ $item  -> created_at }}</p>
                                    </td>
                                    <td>
                                        {{$item -> total_price}}
                                    </td>
                                    <td>
                                        {{$item -> name}}
                                    </td>
                                    <td>
                                        {{$item  -> province}}
                                    </td>
                                    <td>
                                        {{$item  -> transaction_status}}
                                    </td>
                                    
                                    <td>
                                        <form action="{{ route('ordershow',$item  -> id)}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                            <button type="submit" class="btn btn-primary"> Show </button>
                                        </form>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                          </table>
                    </div>
            </div>
        </div>
    </div>
@endsection

@section('fixed','fixed-bottom')
