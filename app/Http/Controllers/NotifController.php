<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Carbon;
use Pusher\Pusher;

class NotifController extends Controller
{
    public static function SaveNotif($menu,$trigger,$desc)
    {
    	// return $menu.'-'.$trigger.'-'.$desc;

    	$max = DB::table('notifikasi')->max('id');

    	$id = $max + 1;

    	DB::table('notifikasi')->insert([
    		'id' => $id,
    		'id_user' => Auth::user()->id,
    		'aksi_user' => $trigger,
    		'menu' => $menu,
    		'data' => $desc
    	]);

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

		$array = array('user' => Auth::user()->name, 'menu' => $menu, 'aksi' => $trigger,'ket' => $desc);

		$data['response'] = $array;
		$pusher->trigger('my-channel', 'my-event', $data);
    }

    public function get_notif(){
    	$data = DB::table('notifikasi')
    				->leftJoin('users', 'notifikasi.id_user', '=', 'users.id')
    				->select('users.name', 'notifikasi.*')
    				->orderBy('id', 'DESC')
    				
    				->get();

    	return response()->json($data);
    }
}
