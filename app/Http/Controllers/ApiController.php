<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function getAllBarang()
	{
		$barang = DB::table("barang")->get();
		return response()->json($barang);
	}
	
	public function getAllPegawai()
	{
		$pegawai = DB::table("pegawai")->get();
		return response()->json($pegawai);
	}
	
	public function getAllMember()
	{
		$member = DB::table("member")->get();
		return response()->json($member);
	}
	
	public function getAllHjual()
	{
		$hjual = DB::table("hjual")->get();
		return response()->json($hjual);
	}
	
	public function getAllDjual()
	{
		$djual = DB::table("djual")->get();
		return response()->json($djual);
	}
	
	public function searchBarang(Request $request)
	{
		$search = DB::table("barang")->where("barang_name", "like", "%".$request->barang_name."%")->get();
		return response()->json($search);
	}
	
	public function insertBarang(Request $request)
	{
		$this->validate($request,[
			"id_barang" => "required|max:20|unique:barang",
			"barang_name" => "required|max:40",
			"barang_harga" => "required|integer",
			"barang_jumlah" => "required|integer",
		]);
		DB::table("barang")->insert([
			"id_barang" => $request->id_barang,
			"barang_name" => $request->barang_name,
			"barang_harga" => $request->barang_harga,
			"barang_jumlah" => $request->barang_jumlah,
			"barang_status" => 1,
		]);
		return response()->json([
			"message" => "Insert barang berhasil"
		],201);
	}
	
	public function updateBarang(Request $request)
	{
		$this->validate($request,[
			"id_barang" => "required|max:20|exists:barang,id_barang",
			"barang_name" => "required|max:40",
			"barang_harga" => "required|integer",
			"barang_jumlah" => "required|integer",
			"barang_status" => "required|boolean",
		]);
		DB::table("barang")
			->where("id_barang",$request->id_barang)
			->update([
				"barang_name" => $request->barang_name,
				"barang_harga" => $request->barang_harga,
				"barang_jumlah" => $request->barang_jumlah,
				"barang_status" => $request->barang_status,
			]);
		return response()->json([
			"message" => "Update barang berhasil"
		],201);
	}
	
	public function insertPegawai(Request $request)
	{
		$this->validate($request, [
			"peg_user" => "required|min:6|max:12|unique:pegawai",
			"peg_pass" => "required|min:6|max:12|alpha_num",
			"peg_name" => "required|max:20",
			"peg_golongan" => "required|max:10",
		]);
		$gol = strtoupper(substr($request->peg_golongan,0,1));
		$kode = strtoupper(substr($request->peg_name,0,2));
		$urutan = DB::table("pegawai")
			->where("id_pegawai","like","P".$gol.$kode."%")
			->count();
		$urutan = $urutan + 1;
		DB::table("pegawai")->insert([
			"id_pegawai" => "P".$gol.$kode.str_pad($urutan,2,"0",STR_PAD_LEFT),
			"peg_user" => $request->peg_user,
			"peg_pass" => $request->peg_pass,
			"peg_name" => $request->peg_name,
			"peg_golongan" => $request->peg_golongan,
			"peg_status" => 1,
		]);
		return response()->json([
			"message" => "Insert pegawai berhasil"
		],201);
	}
	
	public function updatePegawai(Request $request)
	{
		$this->validate($request,[
			"id_pegawai" => "required|max:6|exists:pegawai,id_pegawai",
			"peg_user" => "required|min:6|max:12|unique:pegawai",
			"peg_pass" => "required|min:6|max:12|alpha_num",
			"peg_name" => "required|max:20",
			"peg_golongan" => "required|max:10",
			"peg_status" => "required|boolean",
		]);
		DB::table("pegawai")
			->where("id_pegawai",$request->id_pegawai)
			->update([
				"peg_user" => $request->peg_user,
				"peg_pass" => $request->peg_pass,
				"peg_name" => $request->peg_name,
				"peg_golongan" => $request->peg_golongan,
				"peg_status" => $request->peg_status,
			]);
		return response()->json([
			"message" => "Update pegawai berhasil"
		],201);
	}
	
	public function insertMember(Request $request)
	{
		$this->validate($request, [
			"member_name" => "required|max:50",
			"member_address" => "required|max:255",
			"member_phone" => "required|numeric",
			"member_email" => "required|email|unique:member",
		]);
		$kode = strtoupper(substr($request->member_name,0,2));
		$urutan = DB::table("member")
			->where("id_member","like","MB".$kode."%")
			->count();
		$urutan = $urutan + 1;
		DB::table("member")->insert([
			"id_member" => "MB".$kode.str_pad($urutan,2,"0",STR_PAD_LEFT),
			"member_name" => $request->member_name,
			"member_address" => $request->member_address,
			"member_phone" => $request->member_phone,
			"member_email" => $request->member_email,
			"member_poin" => 0,
		]);
		return response()->json([
			"message" => "Insert member berhasil"
		],201);
	}
	
	public function updateMember(Request $request)
	{
		$this->validate($request,[
			"id_member" => "required|max:6|exists:member,id_member",
			"member_name" => "required|max:50",
			"member_address" => "required|max:255",
			"member_phone" => "required|numeric",
			"member_email" => "required|email|unique:member",
			"member_poin" => "required|integer",
		]);
		DB::table("member")
			->where("id_member",$request->id_member)
			->update([
				"member_name" => $request->member_name,
				"member_address" => $request->member_address,
				"member_phone" => $request->member_phone,
				"member_email" => $request->member_email,
				"member_poin" => $request->member_poin,
			]);
		return response()->json([
			"message" => "Update member berhasil"
		],201);
	}
	
	public function insertHjual(Request $request)
	{
		$this->validate($request, [
			"h_member" => "required|max:6|exists:member,id_member",
			"h_pegawai" => "required|max:6|exists:pegawai,id_pegawai",
			"h_bayar" => "required",
			"h_total" => "required|integer",
		]);
		$urutan = DB::table("hjual")
			->where("id_nota","like",date("Ymd")."%")
			->count();
		$urutan = $urutan + 1;
		DB::table("hjual")->insert([
			"id_nota" => date("Ymd").str_pad($urutan,3,"0",STR_PAD_LEFT),
			"h_member" => $request->h_member,
			"h_pegawai" => $request->h_pegawai,
			"h_bayar" => $request->h_bayar,
			"h_total" => $request->h_total,
		]);
		return response()->json([
			"message" => "Insert hjual berhasil"
		],201);
	}
	
	public function updateHjual(Request $request)
	{
		$this->validate($request,[
			"id_nota" => "required|max:12|exists:hjual,id_nota",
			"h_member" => "required|max:6|exists:member,id_member",
			"h_pegawai" => "required|max:6|exists:pegawai,id_pegawai",
			"h_bayar" => "required|integer",
			"h_total" => "required|integer",
			"h_date" => "required|date",
		]);
		DB::table("hjual")
			->where("id_nota",$request->id_nota)
			->update([
				"h_member" => $request->h_member,
				"h_pegawai" => $request->h_pegawai,
				"h_bayar" => $request->h_bayar,
				"h_total" => $request->h_total,
				"h_date" => $request->h_date,
			]);
		return response()->json([
			"message" => "Update hjual berhasil"
		],201);
	}
	
	public function insertDjual(Request $request)
	{
		$this->validate($request, [
			"id_nota" => "required|max:12|exists:hjual,id_nota",
			"id_barang" => "required|max:20|exists:barang,id_barang",
			"jumlah" => "required|integer",
		]);
		$barang = DB::table("barang")->where("id_barang",$request->id_barang)->first();
		$subtotal = $barang->barang_harga * $request->jumlah;
		DB::table("djual")->insert([
			"id_nota" => $request->id_nota,
			"id_barang" => $request->id_barang,
			"jumlah" => $request->jumlah,
			"subtotal" => $subtotal,
		]);
		return response()->json([
			"message" => "Insert djual berhasil"
		],201);
	}
	
	public function updateDjual(Request $request)
	{
		$this->validate($request,[
			"id_nota" => "required|max:12|exists:djual,id_nota",
			"id_barang" => "required|max:20|exists:djual,id_barang",
			"jumlah" => "required|integer",
		]);
		$barang = DB::table("barang")->where("id_barang",$request->id_barang)->first();
		$subtotal = $barang->barang_harga * $request->jumlah;
		DB::table("djual")
			->where([
				["id_nota",$request->id_nota],
				["id_barang",$request->id_barang],
			])
			->update([
				"jumlah" => $request->jumlah,
				"subtotal" => $subtotal,
			]);
		return response()->json([
			"message" => "Update djual berhasil"
		],201);
	}
	
}
