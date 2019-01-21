<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Suplier;
use DataTables;

class MasterController extends Controller
{
    public function databarang()
    {
    	return view('master/databarang/databarang');
    }
    public function datasuplier()
    {
    	return view('master/datasuplier/datasuplier');
    }
    public function datatable_datasuplier(){
        $suplier = DB::table('suplier')->orderBy('id', 'DESC');


        return DataTables::of($suplier)
                ->addIndexColumn()
                ->addColumn('aksi', function($suplier){
                    return '<div class="btn-group">
                                <button class="btn btn-primary btn-sm btn-edit" type="button" data-idx="'.$suplier->id.'" title="Edit"><i class="fa fa-pencil"></i></button>'.
                                '<button class="btn btn-danger btn-sm btn-delete" type="button" data-idx="'.$suplier->id.'" title="Delete"><i class="fa fa-trash"></i></button>'.
                            '</div>';
                })
                ->rawColumns(['aksi'])
                ->make(true);

    }
    public function simpan_datasuplier(Request $request){
        $input = $request->all();

        $insert = DB::table('suplier')->insert($input);

        return response()->json($insert);
    }
    public function get_editdatasuplier(Request $request){
        $id = $request->id;

        $get_data = DB::table('suplier')->where('id', $id)->first();

        return response()->json(['data' => $get_data]);
    }
    public function datacustomerharian()
    {
    	return view('master/datacustomerharian/datacustomerharian');
    }
    public function datacustomerkontraktor()
    {
    	return view('master/datacustomerkontraktor/datacustomerkontraktor');
    }
    public function datapegawai()
    {
    	return view('master/datapegawai/datapegawai');
    }
    public function dataarmada()
    {
    	return view('master/dataarmada/dataarmada');
    }
}

