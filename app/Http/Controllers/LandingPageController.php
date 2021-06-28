<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Review;
use App\Models\Product;
use App\Models\TransactionDetail;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function index(){
       $data  =  Product::with('galleries')->get()->take(8);
       $suggestproduct  =  Product::with('galleries')->get()->take(3);
       return view('frontend.LandingPage',compact('data','suggestproduct'));
    }
    public function detail($id){

        $review = Review::with('product','user')->where('Products_id',$id)->get();

       $data =  Product::with('galleries')->findOrFail($id);
        return view('frontend.details',compact('data','review'));
    }

        public function add(Request $request,$id){
           $data = [
            'products_id' => $id,
            'users_id' => Auth::user()->id
        ];

        Cart::create($data);

        return redirect()->route('cart.index');
    }

        public function categories(){
         $data  =  Product::with('galleries')->get();
        return view('frontend.categories',compact('data'));

    }

    public function addreview(Request $request,$id)
    {
        $data =  $request -> all();
        $data['users_id'] = Auth::user()->id;
        $data['Products_id'] = $id;

        Review::create($data);
        return redirect()->route('detail',$id);

    }

    public function orderhistory()
    {


        $history = Transaction::with('transactiondetail.product.galleries')->where('users_id',Auth::user()->id)->get();
        return view('frontend.orderhistory',compact('history'));
    }

    public function ordershow(Request $request, $id)
    {   
        $history = Transaction::with('transactiondetail.product.galleries')->where('id',$id)->first();

        $items = TransactionDetail::with('transaction','product.galleries')->where('transactions_id',$id)->get();
        return view('frontend.showhistory',compact('history','items'));
    }
    public function aboutme(){
        return view('frontend.about');
    }
}
