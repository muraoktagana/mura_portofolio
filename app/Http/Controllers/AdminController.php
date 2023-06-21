<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class AdminController extends Controller
{
    function admin(){
        $data['project']=Portofolio::all();
        return view('admin', $data);
    }

    function add(){
        $data = [
            'action' => url('create'),
            'button' => "Simpan",
            'project' => (object)[
                'judul'=>'',
                'deskripsi'=>''
            ]
        ];
        return view('tambah', $data);
    }

    function create(Request $req){
        $filename=$req->judul . "." . $req->file('foto')->getClientOriginalExtension();
        Portofolio::create([
            'judul'=>$req->judul,
            'deskripsi'=>$req->deskripsi,
            'foto'=>$req->file('foto')->storeAs('foto', $filename)
        ]);
        return redirect('admin');
    }

    function ubah($id){
        $data['project']=Portofolio::find($id);
        $data['action']=url('update').'/'.$data['project']->id;
        $data['button']="Update";

        return view('tambah', $data);
    }

    function update(Request $req,$id){
        $filename = $req->judul . "." . $req->file('foto')->getClientOriginalExtension();
         Portofolio::findOrFail($id)->update([
            'judul'=>$req->judul,
            'deskripsi'=>$req->deskripsi,
            'foto'=>$req->file('foto')->storeAs('foto', $filename)
        ]);
        return redirect('admin');
    }

    function hapus($id){
        Portofolio::where('id', $id)->delete();
        return redirect('admin');
    }


}
