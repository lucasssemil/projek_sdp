<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
		$user = DB::table("pegawai")->where("peg_user",$request->username)->first();
		if ($user == null)
		{
			$data['msg'] = "Username not found";
			return view("login",$data);
		}
		else
		{
			if ($request->password != $user->peg_pass)
			{
				$data['msg'] = "Wrong password";
				return view("login",$data);
			}
			else
			{
				return redirect()->route("admin");
			}
		}
    }
}
    