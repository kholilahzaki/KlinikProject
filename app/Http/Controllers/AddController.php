<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Bpjs;
use App\Models\Kk;
use App\Models\Ktp;
use App\Models\Lc;

class EventController extends Controller
{
    public function index(){
        // $tambah = Member::all();
        // //$events = 'ini halaman acara';
        // return view('User.index', compact('tambah'));

        //butuh dari tabel ktp, bpjs, lc, member

        $dataktp = Ktp::all();
        $databpjs = Bpjs::all();
        $datalc = Lc::all();
        $datamember = Member::all();

        return view('Dashboard.index', compact('dataktp', 'databpjs', 'datalc', 'datamember'));
        

    }

    public function create(){
        return view('User.add');
    }

    public function store(Request $request){

        $request->validate([
                // 'e_tglAcara' => 'required',
                // 'e_namaAcara' => 'required',
                // 'e_lokasiAcara' => 'required',

                'ktp_nik' => 'required',
                'ktp_nama' => 'required',
                'ktp_tempatlahir' => 'required',
                'ktp_tglLahir' => 'required',
                'ktp_jeniskelamin' => 'required',
                'ktp_alamat' => 'required',
                'ktp_agama' => 'required',
                'ktp_statuskawin' => 'required',
                'ktp_pekerjaan' => 'required',
                'ktp_kewarganegaraan' => 'required',
                'ktp_fotoktp' => 'required',
                'kk_no' => 'required',
                'kk_no_dokumen' => 'required',
                'kk_kepalakeluarga' => 'required',
                'kk_pasangan' => 'required',
                'kk_anak' => 'required',
                'kk_fotokk' => 'required',
                'bpjs_no' => 'required',
                'bpjs_jenis' => 'required',
                'lc_no' => 'required',
                'lc_jenis' => 'required',
                'lc_tglInput' => 'required',
                'lc_sumberdata' => 'required',
                'lc_formlc' => 'required',
                'mem_notelp' => 'required',
                'mem_disabilitas' => 'required',
                'mem_lokasitps' => 'required',
                'mem_status' => 'required',
                'mem_koordinator' => 'required'
            ]);

        $ktp = new Ktp;
        $ktp->ktp_nik = $request -> ktp_nik;
        $ktp->ktp_nama = $request -> ktp_nama;
        $ktp->ktp_tempatlahir = $request -> ktp_tempatlahir;
        $ktp->ktp_tglLahir = $request -> ktp_tglLahir;
        $ktp->ktp_jeniskelamin = $request -> ktp_jeniskelamin;
        $ktp->ktp_alamat = $request -> ktp_alamat;
        $ktp->ktp_agama = $request -> ktp_agama;
        $ktp->ktp_statuskawin = $request -> ktp_statuskawin;
        $ktp->ktp_pekerjaan = $request -> ktp_pekerjaan;
        $ktp->ktp_kewarganegaraan = $request -> ktp_kewarganegaraan;
        $ktp->ktp_fotoktp = $request -> ktp_fotoktp;
        $ktp->save();

        $kk = new Kk;
        $kk->kk_no = $request -> kk_no;
        $kk->kk_no_dokumen = $request -> kk_no_dokumen;
        $kk->kk_kepalakeluarga = $request -> kk_kepalakeluarga;
        $kk->kk_pasangan = $request -> kk_pasangan;
        $kk->kk_anak = $request -> kk_anak;
        $kk->kk_fotokk = $request -> kk_fotokk;
        $kk->save();

        $bpjs = new Bpjs;
        $bpjs->bpjs_no = $request -> bpjs_no;
        $bpjs->bpjs_jenis = $request -> bpjs_jenis;
        $bpjs->save();

        $lc = new Lc;
        $lc->lc_no = $request -> lc_no;
        $lc->lc_jenis = $request -> lc_jenis;
        $lc->lc_tglInput = $request -> lc_tglInput;
        $lc->lc_formlc = $request -> lc_formlc;
        $lc->save();

        $member = new Member;
        $member->mem_notelp = $request -> mem_notelp;
        $member->mem_disabilitas = $request -> mem_disabilitas;
        $member->mem_lokasitps = $request -> mem_lokasitps;
        $member->mem_status = $request -> mem_status;
        $member->mem_koordinator = $request -> mem_koordinator;
        $member->save();

        // $event->e_tglAcara = $request->e_tglAcara;
        // $event->e_namaAcara = $request->e_namaAcara;
        // $event->e_lokasiAcara = $request->e_lokasiAcara;
       

        //$event->save();

        return redirect('/');
    }
}