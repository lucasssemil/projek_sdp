<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Charts;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Redirector;
use DB;

class Controller extends BaseController
{
	use ValidatesRequests;
    function insert(Request $req)
	{	
		$idbarang = $req->input('idbarang');
		$barangname = $req->input('barangname');
		$barangharga = $req->input('barangharga');
		$barangjumlah = $req->input('barangjumlah');
		$barangstatus = $req->input('barangstatus');
		
		$data = array(
			'idbarang'     => $idbarang,
			'barangname'   => $barangname,
			'barangharga'  => $barangharga,
			'barangjumlah' => $barangjumlah,
			'barangstatus' => $barangstatus
		);
		DB::table('barang')->insert($data);
		echo "Success";
	}

	function getData()
	{	
		$data['data'] = DB::table('gudang')
						->join('barang','barang.id_barang','=','gudang.id_barang')->get();
						
		if (count($data) > 0)
		{
			return view('Wow', $data);
		}
		else
		{
			return view('wow');
		}
	}
	
	function getitemlist()
	{
		$data['data'] = DB::table('gudang')
						->join('barang','barang.id_barang','=','gudang.id_barang')->get();
						
		if (count($data) > 0)
		{
			return view('item_master',$data);
		}
		else
		{
			return view('item_master');
		}
	}
	
	function getemploylist()
	{
		$data['data'] = DB::table('pegawai')->get();
						
		if (count($data) > 0)
		{
			return view('employ_master',$data);
		}
		else
		{
			return view('employ_master');
		}
	}
	
	function getiteminput()
	{		
			return view('item_input');
	}
	
	function getemployinput()
	{		
			return view('employ_input');
	}
	
	function Login(){
		$data['msg'] = "";
		return view("login",$data);
	}
	
	function cekData(){
		$data['data'] = DB::table('users');
		
		foreach($data as $value)
		{
			if($value->email == $_POST['user'])
			{
				return view('wow',$data);
			}
		}			
						
	} 	
	
	function searchData(){
				$data['data'] = DB::table('gudang')
						->join('barang','barang.id_barang','=','gudang.id_barang')
						->Where('barang_name','like','%'.$_GET['pcari'].'%')->get();
		
		if (count($data) > 0)
		{
			return view('wow',$data);
		}
		else
		{
			return view('wow');
		}		
						
	}
	 function getInsertP(Request $request){
		$this->validate($request, [
			"peg_user" => "required|min:6|max:12|unique:pegawai",
			"peg_pass" => "required|min:6|max:12|alpha_num",
			"peg_cpass" => "required|same:peg_pass",
			"peg_name" => "required|max:20",
			"peg_golongan" => "required|max:10",
		]);
		$gol = strtoupper(substr($request->peg_golongan,0,1));
		$kode = strtoupper(substr($request->peg_name,0,2));
		$urutan = DB::table("pegawai")
			->where("id_pegawai","like","P".$gol.$kode."%")
			->count();
		$urutan = $urutan + 1;
		DB::table('pegawai')->insert([
			'id_pegawai' => "P".$gol.$kode.str_pad($urutan,2,"0",STR_PAD_LEFT),
			'peg_user' => $request->peg_user,
			'peg_pass' => $request->peg_pass,
			'peg_name' => $request->peg_name,
			'peg_golongan' => $request->peg_golongan,
			'peg_status' => 1		
		]);
		$data['data'] = DB::table('pegawai')->get();
		if (count($data) > 0)
		{
			return view('employ_master',$data);
		}
		else
		{
			return view('employ_master');
		}			
	}
	
	function getInsert(){
		
			DB::table('barang')->insert(
			['id_barang' => $_POST['idbarang'],
			'barang_name' => $_POST['nmbarang'],
			'barang_harga' => $_POST['hbarang'],
			'barang_status' => 1,
			'barang_jumlah' => 0]
		
			);
			
			DB::table('gudang')->insert(
			['id_gudang' => $_POST['idbarang'],
			'id_barang' => $_POST['idbarang'],
			'gudang_jumlah' => $_POST['sgudang']]
			);
		
			$data['data'] = DB::table('gudang')
						->join('barang','barang.id_barang','=','gudang.id_barang')->get();
		
			if (count($data) > 0)
			{
				return view('item_master',$data);
			}
			else
			{
				return view('item_master');
			}
			
			//return redirect()->route('login');
				
	}
	 function getDeleteP(){
		
			DB::table('pegawai')->where('id_pegawai', $_GET['deleteid'])->delete();
		
			$data['data'] = DB::table('pegawai')->get();
		
			if (count($data) > 0)
			{
				return view('employ_master',$data);
			}
			else
			{
				return view('employ_master');
			}		
				
	}
	function getDelete(){
		
			DB::table('gudang')->where('id_barang', $_GET['deleteid'])->delete();
			DB::table('barang')->where('id_barang', $_GET['deleteid'])->delete();
		
			$data['data'] = DB::table('gudang')
						->join('barang','barang.id_barang','=','gudang.id_barang')->get();
		
			if (count($data) > 0)
			{
				return view('wow',$data);
			}
			else
			{
				return view('wow');
			}		
				
	}
	function getUpdateP(){
			if ($_GET['status'] == "Aktif")
			{
				$stat = 1;
			}
			else
			{
				$stat = 0;
			}
			DB::table('pegawai')
            ->where('id_pegawai', $_GET['updateid'])
			->update(array('peg_name' => $_GET['pname'],
					'peg_status' => $stat,
					'peg_golongan' => $_GET['golongan']));
			
		
			$data['data'] = DB::table('pegawai')->get();
		
			if (count($data) > 0)
			{
				return view('employ_master',$data);
			}
			else
			{
				return view('employ_master');
			}		
				
	}
	function getUpdate(){
						
			DB::table('barang')
            ->where('id_barang', $_GET['updateid'])
            ->update(['barang_status' => $_GET['status']]);
			
			DB::table('gudang')
            ->where('id_barang', $_GET['updateid'])
            ->update(['gudang_jumlah' => $_GET['jgudang']]);
		
			$data['data'] = DB::table('gudang')
						->join('barang','barang.id_barang','=','gudang.id_barang')->get();
		
			if (count($data) > 0)
			{
				return view('wow',$data);
			}
			else
			{
				return view('wow');
			}		
				
	}
	
	function viewWow(){
		
				$data['data'] = DB::table('gudang')
						->join('barang','barang.id_barang','=','gudang.id_barang')->get();
						
		if (count($data) > 0)
		{
			return view('wow',$data);
		}
		else
		{
			return view('wow');
		}
	}
				
	
}
