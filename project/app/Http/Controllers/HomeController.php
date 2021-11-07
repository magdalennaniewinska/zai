<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('opiekun.home');
        }
        else
        {
            $data= Product::paginate(3);
            return view('student.home', compact('data'));
        }
    }
    public function index()
    {
        $data= Product::paginate(3);
        return view('student.home', compact('data'));
    }
    public function searchtag(Request $req, $tag)
    {
        if($tag=='')
        {
            $data= Product::paginate(3);
            return view('student.home', compact('data'));
        }
        $data= Product::where('tag','Like',$tag)->get();
        return view('student.home', compact('data'));
    }
    public function showallproduct()
    {
        $data= Product::all();
        return view('student.home', compact('data'));
    }
    public function wypozycz(Request $req, $id)
    {
        if(Auth::id())
        {
            $usertype=Auth::user()->usertype;

            if($usertype=='1')
            {
                $opiekun=auth()->user();
                $product=product::find($id);

                $cart=new Cart;
                $cart->opiekun_name=$opiekun->name;
                $cart->product_name=$product->name;
                $cart->quantity=$req->quantity;
                $cart->save();

                $product->available=$product->available - $req->quantity;
                $product->save();

                return redirect()->back()->with('message',"Pomyślnie dodano do koszyka!");
            }
            else
            {
                return redirect()->back()->with('message',"Wypozyczać sprzęt moze tylko opiekun!");
            } 
        }
        else
        {
            return redirect('login');
        }
    }
    public function showcart()
    {
        
        if(Auth::id())
        {
            $user=Auth::user();
            $usertype=Auth::user()->usertype;

            if($usertype=='1')
            {
                $cart=Cart::where('opiekun_name',$user->name)->get();
                return view('student.showcart',compact('cart'));
            }
            else
            {
                return redirect()->back()->with('message',"Wypozyczać sprzęt moze tylko opiekun!");
            } 
        }
        else
        {
            return redirect('login');
        }
    }
    public function deletecart($id)
    {
        $data=Cart::find($id);
        $user=Auth::user();
        $product_name=$data->product_name;

        if($data->opiekun_name==$user->name)
        {
            $product=Product::where('name',$product_name)->first();
            $product->available=$product->available + $data->quantity;
            $product->save();
            $data->delete();
            return redirect()->back()->with('message',"Pozycja wysakowana z koszyka");
        }
        else
        {
            return redirect("/")->with('message',"Nie masz uprawnień do wykonania tej akcji!");
        }
    }
}
