<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
        <!-- css -->
        <link rel="stylesheet" href="/css/styles.css">
        <title>Klinik Raycare - KTP</title>

        <style>
            a.nav-link {color: #394E91;}
            a.nav-link:hover {color: #293A79;} 
            .main {background-color: #F5F6FA;}

            /* button primary */
            a.button-fill {background: #394E91;}
            a.button-fill:hover {background: #293A79;}

            /* button ghost */
            a.button-ghost {color: #394E91;;}
            a.button-ghost:hover {background-color: #EEEFF4; color: #394E91;}
        </style>
    </head>

    <body>
    @include('component.navbar')
        <main>
            <div class="main" style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: inline-flex;">
                <!-- Title page -->
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex;">
                    <div style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex">
                        <button type="button" class="btn" style="text-align: justify; color: #394E91; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 600; line-height: 24px; word-wrap: break-word">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Button-Icons">
                                    <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                                </g>
                            </svg>    
                            Kembali ke Halaman Utama
                        </button>
                    </div>
                    <div style="justify-content: center; align-items: center; display: inline-flex">
                        <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: 'Inter',Sans-serif; font-weight: 700; line-height: 56px; word-wrap: break-word">Tambah Pengguna</div>
                    </div>
                </div>
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                    <!-- stepper -->
                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                        <div style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                            <div style="width: 48px; height: 48px; position: relative">
                                <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #394E91; border-radius: 9999px"></div>
                                <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: 'Inter',Sans-serif; font-weight: 700; line-height: 25.20px; word-wrap: break-word">1</div>
                            </div>
                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">KTP</div>
                        </div>
                        <div style="flex: 1 1 0; height: 0px; border: 1px #DADDE5 solid"></div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                            <div style="width: 48px; height: 48px; position: relative">
                                <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #757575; border-radius: 9999px"></div>
                                <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: 'Inter',Sans-serif; font-weight: 700; line-height: 25.20px; word-wrap: break-word">2</div>
                            </div>
                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Kartu Keluarga</div>
                        </div>
                        <div style="flex: 1 1 0; height: 0px; border: 1px #DADDE5 solid"></div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                            <div style="width: 48px; height: 48px; position: relative">
                                <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #757575; border-radius: 9999px"></div>
                                <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: 'Inter',Sans-serif; font-weight: 700; line-height: 25.20px; word-wrap: break-word">3</div>
                            </div>
                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Loyalty Card</div>
                        </div>
                        <div style="flex: 1 1 0; height: 0px; border: 1px #DADDE5 solid"></div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                            <div style="width: 48px; height: 48px; position: relative">
                                <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #757575; border-radius: 9999px"></div>
                                <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: 'Inter',Sans-serif; font-weight: 700; line-height: 25.20px; word-wrap: break-word">4</div>
                            </div>
                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">BPJS</div>
                        </div>
                        <div style="flex: 1 1 0; height: 0px; border: 1px #DADDE5 solid"></div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                            <div style="width: 48px; height: 48px; position: relative">
                                <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #757575; border-radius: 9999px"></div>
                                <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: 'Inter',Sans-serif; font-weight: 700; line-height: 25.20px; word-wrap: break-word">5</div>
                            </div>
                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Informasi Lainnya</div>
                        </div>
                    </div>

                    <!-- main content -->
                    <form action="/" method="POST" style="align-self: stretch">
                    @csrf
                    <div style="align-self: stretch; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">

                        <!-- KTP -->
                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: 'Inter',Sans-serif; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Tanda Penduduk (KTP)</div>
                        </div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">NIK</div>
                                <input type="text" id="ktp_nik" placeholder="Masukkan NIK Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="ktp_nik" value="{{old('ktp_nik')}}">
                            </div>
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama</div>
                                <input type="text" id="ktp_nama" placeholder="Masukkan Nama Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="ktp_nama" value="{{old('ktp_nama')}}">
                            </div>
                            <!-- Tempat dan tinggal lahir pengguna -->
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="flex: 1 0 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Tempat Lahir</div>
                                    <input type="text" id="ktp_tempatlahir" placeholder="Masukkan Tempat Lahir Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="ktp_tempatlahir" value="{{old('ktp_tempatlahir')}}">
                                </div>
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Lahir</div>
                                    <input type="date" id="ktp_tglLahir" placeholder="Masukkan Tanggal Lahir Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="ktp_tglLahir" value="{{old('ktp_tglLahir')}}">
                                </div>
                            </div>
                            <!-- Jenis kelamin pengguna -->
                            <div style="align-self: stretch; height: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kelamin</div>
                                <div style="justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="ktp_jeniskelamin" name="ktp_jeniskelamin" value="{{old('ktp_jeniskelamin')}}">
                                        <label class="form-check-label" for="laki-laki" style="text-align: right; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="ktp_jeniskelamin" name="ktp_jeniskelamin" value="{{old('ktp_jeniskelamin')}}">
                                        <label class="form-check-label" for="perempuan" style="text-align: right; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Alamat lengkap -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat Lengkap</div>
                                <div style="align-self: stretch; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                    <textarea id="ktp_alamat" placeholder="Masukkan Alamat Lengkap Pengguna" rows="3" style="align-self: stretch; padding-top: 16px; padding-left: 16px; padding-right: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex" name="ktp_alamat" value="{{old('ktp_alamat')}}"></textarea>
                                    <div style="padding-right: 110px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 14px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 21px; word-wrap: break-word"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Agama -->
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Agama</div>
                                <select id="ktp_agama" class="form-select p-3 align-self-stretch" style="border-radius: 5px; border: 1px #DADDE5 solid;" name="ktp_agama" value="{{old('ktp_agama')}}">
                                    <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                    <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Budha</option>
                                    <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Hindu</option>
                                    <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Islam</option>
                                    <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Kristen</option>
                                    <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Katolik</option>
                                    <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Khonghucu</option>
                                </select>
                            </div>
                            <!-- Status Nikah -->
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Status Nikah</div>
                                <select id="ktp_statuskawin" class="form-select p-3 align-self-stretch" style="border-radius: 5px; border: 1px #DADDE5 solid;" name="ktp_statuskawin" value="{{old('ktp_statuskawin')}}">
                                    <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                    <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Kawin</option>
                                    <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Tidak Kawin</option>
                                </select>
                            </div>
                            <!-- Pekerjaan -->
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Pekerjaan</div>
                                <input type="text" id="ktp_pekerjaan" placeholder="Masukkan Pekerjaan Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="ktp_pekerjaan" value="{{old('ktp_pekerjaan')}}">
                            </div>
                            <!-- Warna Negara & Asal Negara -->
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Warna Negara</div>
                                    <select id="ktp_kewarganegaraan" class="form-select p-3 align-self-stretch" style="border-radius: 5px; border: 1px #DADDE5 solid;" name="ktp_kewarganegaraan" value="{{old('ktp_kewarganegaraan')}}">
                                        <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                        <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">WNI</option>
                                        <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">WNA</option>
                                    </select>
                                </div>
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Asal Negara</div>
                                    <select class="form-select p-3 align-self-stretch" style="border-radius: 5px; border: 1px #DADDE5 solid;">
                                        <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                        <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">One</option>
                                        <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Two</option>
                                        <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Unggah Foto KTP</div>
                                <div style="align-self: stretch; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                    <input class="form-control p-3 pr-5" type="file" id="ktp_fotoktp" style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex; border-radius: 5px; border: 1px #DADDE5 solid;" name="ktp_fotoktp" value="{{old('ktp_fotoktp')}}">
                                    <div style="padding-right: 110px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 14px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 21px; word-wrap: break-word">Format: JPG atau PDF</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- KK -->
                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; display: inline-flex; margin-top: 40px;">
                            <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: 'Inter',Sans-serif; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Keluarga (KK)</div>
                        </div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Status</div>
                                <select id="" class="form-select p-3 align-self-stretch" style="border-radius: 5px; border: 1px #DADDE5 solid;">
                                    <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                    <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Kepala Keluarga</option>
                                    <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pasangan</option>
                                    <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Anak</option>
                                </select>
                            </div>
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">No KK</div>
                                <input type="text" id="nama-pengguna" placeholder="Masukkan Nama Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                            </div>
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">No Dokumen KK</div>
                                <input type="text" id="nama-pengguna" placeholder="Masukkan Nama Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                            </div>
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama</div>
                                <input type="text" id="ktp_nama" placeholder="Masukkan Nama Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="ktp_nama" value="{{old('ktp_nama')}}">
                            </div>
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Unggah Foto KK</div>
                                <div style="align-self: stretch; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                    <input class="form-control p-3 pr-5" type="file" id="formFile" style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex; border-radius: 5px; border: 1px #DADDE5 solid;">
                                    <div style="padding-right: 110px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 14px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 21px; word-wrap: break-word">Format: JPG atau PDF</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- LC -->
                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; display: inline-flex; margin-top: 40px;">
                            <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: 'Inter',Sans-serif; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Loyalty Card (LC)</div>
                        </div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <!-- Nomor LC -->
                            <div class="TitleInputField" style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div class="Title" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Loyalty Card</div>
                                    <input placeholder="Masukkan Nomor Loyalty Card" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                </div>
                            </div>
                            <!-- Jenis LC -->
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                    <select class="form-select p-3 align-self-stretch" style="border-radius: 5px; border: 1px #DADDE5 solid;">
                                        <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                        <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">L</option>
                                        <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">R</option>
                                        <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">LR</option>
                                        <option value="4" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">LN</option>
                                        <option value="5" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</option>
                                    </select>
                                </div>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Ditambahkan</div>
                                    <input type="date" class="form-select align-self-stretch" style="border-radius: 5px; border: 1px #DADDE5 solid;">
                                </div>
                            </div>

                            <!-- INI ANEH, TAPI YAUDAH MASUK DULU AJA SAMA LC | BPJS -->
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; display: inline-flex; margin-top: 24px;">
                                <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: 'Inter',Sans-serif; font-weight: 600; line-height: 33.60px; word-wrap: break-word">BPJS</div>
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">

                                <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor BPJS</div>
                                    <input type="text" placeholder="Masukkan Nomor BPJS" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                </div>
                                <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu BPJS</div>
                                    <select class="form-select p-3 align-self-stretch" style="border-radius: 5px; border: 1px #DADDE5 solid;">
                                        <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">--Pilih salah satu--</option>
                                        <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">PBI APBD</option>
                                        <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">PBI APBN</option>
                                        <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Mandiri</option>
                                        <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Perusahaan</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- INI ANEH, TAPI YAUDAH MASUK DULU AJA SAMA LC | OTHER INFORMATIONS -->
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; display: inline-flex; margin-top: 24px;">
                                <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: 'Inter',Sans-serif; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Informasi Lainnya</div>
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Telepon</div>
                                    <input type="text" id="nomor-telepon" placeholder="Masukkan Nomor Telepon Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                </div>
                                <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">TPS</div>
                                    <input type="text" id="nomor-tps" placeholder="Masukkan Nomor TPS Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                </div>
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat TPS</div>
                                    <div style="align-self: stretch; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                        <textarea id="alamat-tps" placeholder="Masukkan Alamat TPS" rows="3" style="align-self: stretch; padding-top: 16px; padding-left: 16px; padding-right: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex"></textarea>
                                    </div>
                                </div>
                                <div style="align-self: stretch; height: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Disabilitas</div>
                                    <div style="justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="iya">
                                            <label class="form-check-label" for="iya" style="text-align: right; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                                Iya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="tidak">
                                            <label class="form-check-label" for="tidak" style="text-align: right; color: #1D1B20; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BUTTON SUBMIT -->
                            <div style="align-self: stretch; height: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-end; display: flex">
                                <a class="btn button-fill" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="#" role="button">
                                    <div style="text-align: justify; color: white; font-size: 16px; font-family: 'Inter',Sans-serif; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </main>

    </body>
</html>