<?php

namespace App\Http\Controllers;

//use App\Repositories\ProductRepository;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
//    public $productRepository;
//
//    public function __construct(ProductRepository $productRepository)
//    {
//       $this->productRepository = $productRepository;
//    }

    public function index()
    {
        $products = DB::table("products")->get();
        return view('list', compact('products'));
    }


    public function create()
    {
        $statuses = Status::all();
        return view('create',compact('statuses'));
    }


    public function store(Request $request)
    {
        $data = $request->except('_token');
        DB::table("products")->insert($data);
        return redirect()->route("product.index");
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $statuses = Status::all();
        $product = DB::table("products")->where("id",$id)->first();
        return view("update", compact("product","statuses"));
    }


    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        DB::table("products")->where("id",$id)->update($data);
        return redirect()->route("product.index");
    }


    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('product.index');
    }
}
