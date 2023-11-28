<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kk;
use Carbon\Carbon;
use App\Models\Ktp;
use App\Models\Bpjs;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\Bpjs::factory(10)->create();

        
        // Kk::create([
        //     'kk_nik' => '3217102306960012',
        //     'kk_status' => '3',
        //     'kk_nama' => 'Dina',
        //     'kk_no' => '3217102201200200', 
        //     'kk_no_dokumen' => 'K 32171022345', 
        //     'kk_fotokk' => 'foto kk surya&dina',
        // ]);

        // Kk::create([
        //     'kk_nik' => '3217102306960012',
        //     'kk_status' => '3',
        //     'kk_nama' => 'Dina',
        //     'kk_no' => '3217102201200200', 
        //     'kk_no_dokumen' => 'K 32171022345', 
        //     'kk_fotokk' => 'foto kk surya&dina',
        // ]);
    
        // Kk::create([
        //         'kk_nik' => '3311022801000001',
        //         'kk_status' => '3',
        //         'kk_nama' => 'Rayhan',
        //             'kk_no' => '3311021511950030', 
        //             'kk_no_dokumen' => 'K 33110274112', 
        //             'kk_fotokk' => 'foto kk budi&agnes',
        //         ]);
        
        // Kk::create([
        //         'kk_nik' => '3217081707960003',
        //         'kk_status' => '1',
        //         'kk_nama' => 'Wisnu',
        //             'kk_no' => '3217081310240024', 
        //             'kk_no_dokumen' => 'K 32170865551', 
        //             'kk_fotokk' => 'foto kk wisnu&dinda',
        //         ]);
        
        // Kk::create([
        //         'kk_nik' => '3215031204940006',
        //         'kk_status' => '3',
        //         'kk_nama' => 'Nadia',
        //             'kk_no' => '3215032511920114', 
        //             'kk_no_dokumen' => 'K 32150313748', 
        //             'kk_fotokk' => 'foto kk djarot&dewi',
        //         ]);
        
        // Kk::create([
        //         'kk_nik' => '3210120806870003',
        //         'kk_status' => '2',
        //         'kk_nama' => 'Diana',
        //             'kk_no' => '3210121402140120', 
        //             'kk_no_dokumen' => 'K 32101211244', 
        //             'kk_fotokk' => 'foto kk hendra&diana',
        //         ]);

                
        Ktp::create([
            'ktp_tempatlahir' => 'Bandung', 
            'ktp_tglLahir' => Carbon::create('1993', '01', '16'), 
            'ktp_jeniskelamin' => '1', 
            'ktp_alamat' => 'Jl. Cendana No.23, Jakarta', 
            'ktp_agama' => '1', 
            'ktp_statuskawin' => '2', 
            'ktp_pekerjaan' => 'PNS', 
            'ktp_kewarganegaraan' => '1', 
            'ktp_negaraAsal' => 'Indonesia',
            'ktp_fotoktp' => 'foto-ktp-surya',
            ]);

        Ktp::create([
            'ktp_tempatlahir' => 'Jakarta', 
            'ktp_tglLahir' => Carbon::create('1996', '06', '23'), 
            'ktp_jeniskelamin' => '2', 
            'ktp_alamat' => 'Jl. Cendana No.23, Jakarta', 
            'ktp_agama' => '1', 
            'ktp_statuskawin' => '2', 
            'ktp_pekerjaan' => 'PNS', 
            'ktp_kewarganegaraan' => '1',
            'ktp_negaraAsal' => 'Indonesia', 
            'ktp_fotoktp' => 'foto-ktp-dina',
            ]);

        Kk::create([
            'ktp_id' => '1',
            'kk_nik' => '3217101601930002',
            'kk_status' => '1',
            'kk_nama' => 'Surya',
            'kk_no' => '3217102201200200', 
            'kk_no_dokumen' => 'K 32171022345', 
            'kk_fotokk' => 'foto kk surya&dina',
        ]);

        Kk::create([
            'ktp_id' => '2',
            'kk_nik' => '3217102306960012',
            'kk_status' => '2',
            'kk_nama' => 'Dina',
            'kk_no' => '3217102201200200', 
            'kk_no_dokumen' => 'K 32171022345', 
            'kk_fotokk' => 'foto kk surya&dina',
        ]);

    }
}
