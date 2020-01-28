<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Buku;
use Auth;

class BukuController extends Controller
{
    public function index(){
        if(Auth::user()->level=="admin"){
            $dt_buku=Buku::get();
            return response()->json($dt_buku);
        } else {
            return response()->json(['status'=>'anda bukan admin']);
        }
    }
    public function store(Request $req){
        if(Auth::user()->level=="admin"){
        $validator = Validator::make($req->all(),
        [
            'judul' => 'required',
            'penerbit' => 'required',
            'pengarang' => 'required'
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors()->toJson(),400);
        }

        $simpan = Buku::create([
            'judul' => $req->judul,
            'penerbit' => $req->penerbit,
            'pengarang' => $req->pengarang,
            'foto' => $req->foto
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
            'judul' => 'required',
            'penerbit' => 'required',
            'pengarang' => 'required'
        ]);
        if($validator->fails()){
            return Response()->json($validator->errors()->toJson(),400);
        }
        $ubah=Buku::where('id',$id)->update([
            'judul' => $req->judul,
            'penerbit' => $req->penerbit,
            'pengarang' => $req->pengarang,
            'foto' => $req->foto
        ]);
            return Response()->json(compact('status', 'message'));
        }else {
            return Response()->json(['status'=> 0]);
        }
    }
    public function destroy($id)
    {
        if(Auth::user()->level=="admin"){
        $hapus=Buku::where('id',$id)->delete();
            return Response()->json(compact('status', 'message'));
        }else {
            return Response()->json(['status'=> 0]);
        }
    }

}

    
