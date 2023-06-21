<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    //
    function show(){
       $data['portofolio'] = Portofolio::all();
       return view('portofolio',$data);
    }
    
    function add(){
        $data =[ 
            'action'=> url('portofolio/create'),
            'tombol'=> 'simpan',
            'portofolio'=> (object)[
                'nama_portofolio' => '',
                'kategori' => '',
                'deskripsi' => '',
            ]
        ];
        return view('form_portofolio',$data);
        
    }
    
    function create(Request $request ){
        Portofolio::create([
            'nama_portofolio' => $request->nama_portofolio,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->file('gambar')->store('gambar')
        ]);
        return redirect('portofolio');
    }
    function hapus($id){
        Portofolio::where('id',$id)->delete();
        return redirect('portofolio');
    }

    function edit($id){
        $data['portofolio'] = Portofolio::find($id);
        $data['action'] = url('portofolio/update').'/'.$data['portofolio']->id;
        $data['tombol'] = "Update";

        return view('form_portofolio',$data);
    }

    function update(Request $request){
       Portofolio::where('id', $request->id)->update([
            'nama_portofolio' => $request->nama_portofolio,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('portofolio');
    }

}

