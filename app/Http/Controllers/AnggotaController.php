<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Anggota;
use Auth;

class AnggotaController extends Controller
{
    public function index(){
        if(Auth::user()->level=="admin"){
            $dt_anggota=Anggota::get();
            return response()->json($dt_anggota);
        } else {
            return response()->json(['status'=>'anda bukan admin']);
        }
    }
    public function store(Request $req){
        if(Auth::user()->level=="admin"){
        $validator = Validator::make($req->all(),
        [
            'nama_anggota' => 'required',
            'alamat' => 'required',
            'telp' => 'required'
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors()->toJson(),400);
        }

        $simpan = Anggota::create([
            'nama_anggota' => $req->nama_anggota,
            'alamat' => $req->alamat,
            'telp' => $req->telp
        ]);
            return Response()->json(compact('status', 'message'));
        }else {
            return Response()->json(['status'=> 0]);
        }
    }

    public function update($id, Request $req)
    {
        if(Auth::user()->level=="admin"){
        $validator=Validator::make($req->all(),
        [
            'nama_anggota' => 'required',
            'alamat' => 'required',
            'telp' => 'required'
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors()->toJson(),400);
        }
        $ubah=Anggota::where('id',$id)->update([
            'nama_anggota' => $req->nama_anggota,
            'alamat' => $req->alamat,
            'telp' => $req->telp
        ]);
            return Response()->json(compact('status', 'message'));
        }else {
            return Response()->json(['status'=> 0]);
        }
    }
    public function destroy($id)
    {
        if(Auth::user()->level=="admin"){
        $hapus=Anggota::where('id',$id)->delete();
            return Response()->json(compact('status', 'message'));
        }else {
            return Response()->json(['status'=> 0]);
        }
    }

}

    
