<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Suplier;
use DataTables;
use Pusher\Pusher;
use App\Http\Controllers\NotifController;
use Auth;

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


        $id = DB::table('suplier')->max('id');

        $max_id = $id + 1;

        if($request->id === null){
            $id = array('id' => $max_id);

            array_merge($input, $id);

            $insert = DB::table('suplier')->insert($input);

            NotifController::SaveNotif('Data Suplier', 'Simpan', $request->nama_sup);

        } else {

             // return $input;
            // return $input = array_splice($input, 0,0, array('id'));


            $insert = DB::table('suplier')->where('id', $input['id'])->update($input);

            NotifController::SaveNotif('Data Suplier', 'Edit', $request->nama_sup);

        }

        return response()->json($insert);
    }
    public function get_editdatasuplier(Request $request){
        $id = $request->id;

        $get_data = DB::table('suplier')->where('id', $id)->first();

        return response()->json(['data' => $get_data]);
    }
    public function delete_datasuplier(Request $request){
        $id = $request->id;

        $data = DB::table('suplier')->where('id', $id)->first();

        NotifController::SaveNotif('Data Suplier', 'Delete', $data->nama_sup);


        $remove = DB::table('suplier')->where('id', $id)->delete();

        return response()->json($remove);
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
    public function pusher(){
          $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'useTLS' => true
          );
          $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
          );

          $data['message'] = 'hello world';
          $pusher->trigger('my-channel', 'my-event', $data);

    }
}

