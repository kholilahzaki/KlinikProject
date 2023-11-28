<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bpjs;
use App\Models\Ktp;
use App\Models\Kk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\Bpjs::factory(10)->create();

        Ktp::create([
            'no_kk' => , 
            'kk_no_dokumen' => , 
            'kk_kepalakeluarga' => , 
            'kk_pasangan' => , 
            'kk_anak' => ,
            'kk_fotokk' => 
        ]);

        Ktp::create([
            'no_nik' => '52531123', 
            'ktp_nama' => 'wahidin', 
            'ktp_tglLahir' => '2001-02-13', 
            'ktp_jeniskelamin' => '1', 
            'ktp_alamat' => 'jalan melayu', 
            'ktp_agama' => '1', 
            'ktp_statuskawin' => 'lajang', 
            'ktp_pekerjaan' => 'pelajar', 
            'ktp_kewarganegaraan' => '1', 
            'ktp_fotoktp' => 'BBBBBBBBBBBBBBBBBBBBBAAAABBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBAAAAABBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBAAAABBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            AABBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBAAAABBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBABBBABBBBBBBBBBAAAAABB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBAAAAAAA
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBABBABBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBAAAAAAAABBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBAAAABBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBAABBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBBBB',
        ]);

        Ktp::create([
            'no_nik' => '11337745', 
            'ktp_nama' => 'riana', 
            'ktp_tglLahir' => '1992-05-23', 
            'ktp_jeniskelamin' => '2', 
            'ktp_alamat' => 'jalan merak', 
            'ktp_agama' => '1', 
            'ktp_statuskawin' => 'kawin', 
            'ktp_pekerjaan' => 'pns', 
            'ktp_kewarganegaraan' => '1', 
            'ktp_fotoktp' => 'BBBBBBBBBBBBBBBBBBBBBAAAABBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBAAAAABBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBAAAABBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            AABBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBAAAABBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBABBBABBBBBBBBBBAAAAABB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBAAAAAAA
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBABBABBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBAAAAAAAABBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBAAAABBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBAABBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBBBB',
        ]);

        Ktp::create([
            'no_nik' => '55343387', 
            'ktp_nama' => 'riri', 
            'ktp_tglLahir' => '2000-07-12', 
            'ktp_jeniskelamin' => '2', 
            'ktp_alamat' => 'jalan melati', 
            'ktp_agama' => '2', 
            'ktp_statuskawin' => 'lajang', 
            'ktp_pekerjaan' => 'pelajar', 
            'ktp_kewarganegaraan' => '1', 
            'ktp_fotoktp' => 'BBBBBBBBBBBBBBBBBBBBBAAAABBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBAAAAABBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBAAAABBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            AABBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBAAAABBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBABBBABBBBBBBBBBAAAAABB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBAAAAAAA
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBABBABBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBAAAAAAAABBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBAAAABBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBAABBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBBBB',
        ]);

        Ktp::create([
            'no_nik' => '53435645', 
            'ktp_nama' => 'gery', 
            'ktp_tglLahir' => '1996-08-12', 
            'ktp_jeniskelamin' => '1', 
            'ktp_alamat' => 'jalan paduka', 
            'ktp_agama' => '3', 
            'ktp_statuskawin' => 'lajang', 
            'ktp_pekerjaan' => 'wiraswasta', 
            'ktp_kewarganegaraan' => '1', 
            'ktp_fotoktp' => 'BBBBBBBBBBBBBBBBBBBBBAAAABBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBAAAAABBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBAAAABBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            AABBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBAAAABBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBABBBABBBBBBBBBBAAAAABB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBAAAAAAAA
            BBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBAAAAAAA
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBABBABBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBAAAAAAAABBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBAAAABBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBAABBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
            BBBBBBBBBBBBBBBBBBBBBBABBBBBBBBBBBBBBBBB',
        ]);
    }
}
