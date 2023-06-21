<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    
    function show(){
      $data['profil'] = Profil::all();

      return view('profil', $data);
    }

    function profil(){
    $profil = Profil::first();
    if ($profil){
        $data =[
            'nis' => $profil->nis,
            'nama' => $profil->nama,
            'ttl' => $profil->ttl,
            'sekolah' => $profil->sekolah,
            'alamat' => $profil->alamat,
            // 'jk' => $profil->jk,
            'foto' => $profil->foto,
            'about' => $profil->about,
            'action' => '/profil/update/',$profil->nis
        ];
        return view('profil',$data);
    }else{
        $data =[
                'nis' => '',
                'nama' => '',
                'ttl' => '',
                'sekolah' => '',
                'alamat' => '',
                // 'jk' => '',
                'foto' => '',
                'about' => '',
                'action' => 'profil/create/'
        ];
        return view('profil',$data);
        
    }
}
    function create(Request $request){
       Profil::create([
        'nis' => $request->nis,
        'nama' => $request->nama,
        'ttl' => $request->ttl,
        'sekolah' => $request->sekolah,
        'alamat' => $request->alamat,
        // 'jk' => $request->jk,
        'foto'=> $request->file('foto')->store('foto'),
        'about'=> $request->about
       ]); 

       return redirect('profil');
    }
    function edit($id){
        $data['profil'] = Profil::find($id);
        $data['action'] = url('profil/update').'/'.$data['profil']->nis;
        $data['tombol'] = "Update";

        return view('profil',$data);
    }
    function update(Request $request){
        $data = Profil::where('nis',$request->nis)->first();
        if($request->foto == ''){
            $foto = $data->foto;
        }else{
            $foto = $request->file('foto')->store('foto');
        }
       Profil::where('nis',$request->nis)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'sekolah' => $request->sekolah,
            'alamat' => $request->alamat,
            // 'jk' => $request->jk,
            'foto' => $foto,
            'about' => $request->about
        ]);

        return redirect('profil');
    }
   
}
    


