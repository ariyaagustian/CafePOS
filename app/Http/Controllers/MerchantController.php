<?php

namespace App\Http\Controllers;

use App\Merchant;
use Illuminate\Http\Request;
use DataTables;

class MerchantController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Merchant::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';

                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('superadmin.merchants.index');
    }

    public function store(Request $request)
    {
        Merchant::updateOrCreate(['id' => $request->product_id],
                ['merchant_name' => $request->merchant_name],
                ['merchant_address' => $request->merchant_address]);

        return response()->json(['success'=>'Product saved successfully.']);
    }

    public function edit($id)
    {
        $merchant = Merchant::find($id);
        return response()->json($merchant);
    }

    public function destroy($id)
    {
        Merchant::find($id)->delete();
        return response()->json(['success'=>'Merchant deleted successfully.']);
    }
}
