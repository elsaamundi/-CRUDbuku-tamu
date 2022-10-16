<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class bukutamuCon extends Controller
{
    //read
    public function index()
    {
        $bukutamu = DB::table('dtbukutamu')-> get();
        return view('bukutamu',['bukutamu' => $bukutamu]);
    }

    //create
    //method tambah
    public function tambah()
    {
        return view('bukutamu');
    }
    //method store
    public function store(Request $request)
    {
        //insert data ke bukutamu
        DB::table('dtbukutamu')->insert([
            'nama_tamu'=> $request->nama,
            'hp_tamu'=>$request->hp,
            'email_tamu'=>$request->email,
            'pesan_tamu'=>$request->pesan          
        ]);
        return redirect ('/bukutamu');
    }

    //edit
    public function edit($id)
    {
        $bukutamu = DB::table('dtbukutamu')->where('idtamu',$id)->get();
        return view('editbukutamu',['bukutamu'=> $bukutamu]);
    }
    //update
    public function storeupdate(Request $request)
    {
        //insert data ke bukutamu
        DB::table('dtbukutamu')->where('idtamu',$request->id)->update([
            'nama_tamu'=> $request->nama,
            'hp_tamu'=>$request->hp,
            'email_tamu'=>$request->email,
            'pesan_tamu'=>$request->pesan          
        ]);
        return redirect ('/bukutamu');
    }

    //hapus
    public function hapus($id)
    {
         DB::table('dtbukutamu')->where('idtamu',$id)->delete();
         return redirect('/bukutamu');

    }
   
}

