<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;
use DataTables;

class UnitController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Unit::latest()->get();
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

        return view('superadmin.units.index');
    }

    public function store(Request $request)
    {
        Unit::updateOrCreate(['id' => $request->product_id],
                ['unit_name' => $request->unit_name],
                ['unit_code' => $request->unit_code]);

        return response()->json(['success'=>'Product saved successfully.']);
    }

    public function edit($id)
    {
        $unit = Unit::find($id);
        return response()->json($unit);
    }

    public function destroy($id)
    {
        Unit::find($id)->delete();
        return response()->json(['success'=>'Unit deleted successfully.']);
    }
}
