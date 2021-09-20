<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Telepon;
use App\Kelas;
use App\Hobi;
use App\Http\Requests\SiswaRequest;

class SiswaController extends Controller
{
    public function index(){
    	$siswa_list = Siswa::orderBy('nisn', 'asc')->Paginate(5);
    	$jumlah_siswa = Siswa::count();
    	return view('siswa.index', compact('siswa_list', 'jumlah_siswa'));
    }

    public function create(){
    	return view('siswa.create');
    }

    public function store(SiswaRequest $request){
    	$input = $request->all();

        //simpan data siswa
    	$siswa = Siswa::create($input);

        //simpan data telepon
        if($request->filled('nomor_telepon')){
            $telepon = new Telepon;
            $telepon->nomor_telepon = $request->input('nomor_telepon');
            $siswa->telepon()->save($telepon);
        }

        //simpan hobi
        $siswa->hobi()->attach($request->input('hobi_siswa'));

    	return redirect('siswa');
    }

    public function show(Siswa $siswa){
    	return view('siswa.show', compact('siswa'));
    }

    public function edit(Siswa $siswa){
        if (!empty($siswa->telepon->nomor_telepon)) {
            $siswa->nomor_telepon = $siswa->telepon->nomor_telepon;
        }

    	return view('siswa.edit', compact('siswa'));
    }

    public function update(Siswa $siswa, SiswaRequest $request){
    	$input = $request->all();

        //update data siswa
    	$siswa->update($request->all());

        // update nomor telepon, jika sebelumnya sudah ada no telp.
        if($siswa->telepon){
            //jika telp diisi, update.
            if($request->filled('nomor_telepon')){
                $telepon = $siswa->telepon;
                $telepon->nomor_telepon = $request->input('nomor_telepon');
                $siswa->telepon()->save($telepon);
            }
            //jika telp tidak diisi, hapus.
            else{
                $siswa->telepon()->delete();
            }
        }
        //Buat entry baru, jika sebelumnya tidak ada telp.
        else{
            if($request->filled('nomor_telepon')){
                $telepon = new Telepon;
                $telepon->nomor_telepon = $request->input('nomor_telepon');
                $siswa->telepon()->save($telepon);
            }
        }

        //update datas hobi
        $siswa->hobi()->sync($request->input('hobi_siswa'));

    	return redirect('siswa');
    }

    public function destroy(Siswa $siswa){
    	$siswa->delete();
    	return redirect('siswa');
    }

    public function dateMutator(){
    	$siswa = Siswa::findOrFail(1);
    	$nama = $siswa->nama_siswa;
    	$tanggal_lahir = $siswa->tanggal_lahir->format('d-m-y');
    	$ulang_tahun = $siswa->tanggal_lahir->addYears(30)->format('d-m-y');
    	return "Siswa {$nama} lahir pada {$tanggal_lahir}.<br>
    	Ulang tahun ke-30 akan jatuh pada {$ulang_tahun}.";
    }
}
