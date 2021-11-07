<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;

class AdminController extends Controller
{
    //
    public function product()
    {
        return view('opiekun.product');
    }
    public function uploadproduct(Request $req)
    {
        $data=new product;

        $data->name=$req->name;
        $data->tag=$req->tag;
        $data->model=$req->model;
        $data->description=$req->description;
        $data->quantity=$req->quantity;
        $data->link=$req->link;
        $data->image=$req->image;

        $data->save();

        return redirect()->back()->with('message',"Produkt poprawnie dodany!");

    }
    public function showproduct()
    {
        $data=product::all();
        return view('opiekun.showproduct', compact('data'));
    }
    public function deleteproduct($id)
    {
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message',"Produkt poprawnie usunięty!");
    }
    public function updateview($id)
    {
        $data=product::find($id);
        return view('opiekun.updateview', compact(('data')));
    }
    public function updateproduct(Request $req, $id)
    {
        $data=product::find($id);

        $data->name=$req->name;
        $data->tag=$req->tag;
        $data->model=$req->model;
        $data->description=$req->description;
        $data->quantity=$req->quantity;
        $data->link=$req->link;
        $data->image=$req->image;

        $data->save();

        return redirect()->back()->with('message',"Produkt poprawnie edytowany!");

    }
    public function showstudents()
    {
        $data=user::all();
        return view('opiekun.showstudent', compact('data'));
    }
    public function deletestudent($id)
    {
        $data=user::find($id);
        if($data->usertype)
        {
            return redirect()->back()->with('message',"Nie mozesz usunąć uzytkownika z statusem opiekun!");
        }
        else
        {
            $data->delete();
            return redirect()->back()->with('message',"Student poprawnie usunięty!");
        }
    }
    public function updatestudentview($id)
    {
        $data=user::find($id);
        if($data->usertype)
        {
            return redirect()->back()->with('message',"Nie mozesz edytować uzytkownika z statusem opiekun!");
        }
        else
        {
            return view('opiekun.updatestudentview', compact(('data')));
        }
        
    }
    public function updatestudent(Request $req, $id)
    {
        $data=user::find($id);
        if($data->usertype)
        {
            return redirect()->back()->with('message',"Nie mozesz edytować uzytkownika z statusem opiekun!");
        }
        else
        {
            $data->name=$req->name;
            $data->email=$req->email;
            $data->usertype=$req->usertype;

            $data->save();

            return redirect()->back()->with('message',"Student poprawnie edytowany!");
        }
        
    }
    public function updatestudentcartview(Request $req, $id)
    {
        $cart=Cart::find($id);
        $req->session()->put('cart_id', $cart);
        $data=user::where('usertype',0)->get();
        return view('opiekun.updatestudentcartview', compact('data'));
        
    }
    public function updatestudentcart(Request $req, $id)
    {
        $student=user::find($id);

        $id_cart=$req->session()->pull('cart_id');
        $cart=Cart::find($id_cart)->first();
        $cart->student_name=$student->name;

        $cart->save();

        return redirect("/showcart")->with('message',"Student dodany jako wypozyczający!");
        
    }
    public function confirmorder(Request $req)
    {
        $user=auth()->user();

        foreach($req->product_name as $key=>$product_name)
        {
            $order=new Order;
            $order->product_name=$req->product_name[$key];
            $order->quantity=$req->quantity[$key];
            $order->student_name=$req->student_name[$key];

            $order->opiekun_name=$user->name;

            $order->save();

        }

        DB::table('carts')->where('opiekun_name', $user->name)->delete();
        return redirect("/showcart")->with('message',"Wypozyczenie zapisane!");
        
    }
    public function showorder()
    {
        $order=Order::all();
        return view('opiekun.showorder', compact('order'));
    }
    public function return(Request $req)
    {
       
        $product=Product::where('name',$req->product_name)->first();
        $product->available=$product->available + $req->quantity;
        $product->save();
        DB::table('orders')->where('id', $req->id)->delete();
        $order=Order::all();
        return view('opiekun.showorder', compact('order'));
    }
}
