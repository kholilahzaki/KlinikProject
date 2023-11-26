<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
        <!-- css -->
        <link rel="stylesheet" href="/css/styles.css">
        <title>Klinik Raycare - Tambah Anggota</title>

        <style>
             /*button kembali  */
             a.button-underline { text-decoration: none; }
             a.button-underline:hover { text-decoration: underline; text-decoration-color: #394E91; }

            /* button tambah anggota */
            a.button-fill {background: #394E91;}
            a.button-fill:hover {background: #293A79;}

            /* button tambah acara */
            .button-fill {background: #394E91;}
            .button-fill:hover {background: #293A79;}

            /* Button Aksi daftar KK */
            a.button-ghost:hover { background: #EEEFF4; }
        </style>
    </head>
    <body>
        @include('component.navbar')
        <main>
            <form action="/Event" method="POST">
            @csrf
                <div style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <a href="/Event" class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex" role="button">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="Button-Icons">
                                    <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                                </g>
                            </svg>
                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kembali ke Halaman Daftar Acara</div>
                        </a>
                        <div style="justify-content: center; align-items: center; display: inline-flex">
                            <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Tambah Acara</div>
                        </div>
                    </div>
                    <div style="align-self: stretch; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-end; gap: 24px; display: flex">
                        <div style="align-self: stretch; padding-left: 40px; padding-right: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-end; gap: 40px; display: flex">
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                <div style="align-self: stretch; height: 376px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                                    <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                        <label style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word" for="e_tglAcara">Tanggal Acara</label>
                                        <input type="date" id="e_tglAcara" placeholder="Pilih tanggal acara" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="e_tglAcara" value="{{old('e_tglAcara')}}">
                                    </div>
                                    <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                        <label style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word" for="e_namaAcara">Nama Acara</label>
                                        <input type="text" id="e_namaAcara" placeholder="Masukkan Nama Acara" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="e_namaAcara" value="{{old('e_namaAcara')}}">
                                    </div>
                                    <div style="align-self: stretch; height: 152px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                        <label style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word" for="e_lokasiAcara">Lokasi Acara</label>
                                        <textarea id="e_lokasiAcara" placeholder="Masukkan Lokasi Acara" rows="3" style="align-self: stretch; padding-top: 16px; padding-left: 16px; padding-right: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex" name="e_lokasiAcara" value="{{old('e_lokasiAcara')}}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Daftar Anggota</div>
                                        <div style="text-align: justify; color: #9E9E9E; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Tambahkan anggota klinik yang mengikuti acara ini</div>
                                    </div>
                                    <a class="btn button-fill" data-bs-toggle="modal" data-bs-target="#addUser" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex" href="#" role="button">
                                        <div style="text-align: justify; color: white;  font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Anggota</div>
                                    </a>
                                    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header" style="padding: 24px 32px; align-self: stretch;">
                                                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Tambah Anggota</div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" style="padding: 24px 32px;">
                                                    <div style="width: 100%; height: 100%; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex; margin-bottom: 16px;">
                                                        <input type="search" name="search" id="search" placeholder="Cari Nama atau Nomor LC" style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word; flex: 1 1 0; padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; background: #FAFAFA; border-radius: 10px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                                                        <button class="button-fill" type="submit" style="padding: 16px 24px; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                                                            <div style="color: white; text-align: justify; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Cari</div>
                                                        </button>
                                                    </div>
                                                    <div style="width: 100%; height: 100%; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
                                                            <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 16px; height: 16px; border: 2px #394E91 solid">
                                                                </div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nama Anggota</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Jenis Kartu</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
                                                            <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 16px; height: 16px; border: 2px #394E91 solid">
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rayhan</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123456789</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">R</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
                                                            <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 16px; height: 16px; border: 2px #394E91 solid">
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rayhan</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123456789</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">R</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
                                                            <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 16px; height: 16px; border: 2px #394E91 solid">
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rayhan</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123456789</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">R</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
                                                            <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="width: 16px; height: 16px; border: 2px #394E91 solid">
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rayhan</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123456789</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">R</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#" data-bs-dismiss="modal" role="button" class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Batal</div>
                                                    </a>
                                                    <a class="btn button-fill" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex" href="#" type="submit">
                                                        <div style="text-align: justify; color: white;  font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="align-self: stretch; padding-top: 40px; padding-bottom: 40px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: center; align-items: center; display: flex">
                                    <div style="opacity: 0.50; text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Belum ada daftar anggota untuk mengikuti acara ini</div>
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; height: 0px; border: 1px #DADDE5 solid"></div>
                        <div style="padding: 0px 40px; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-end; display: flex">
                            <button type="submit" class="button-fill p-3" style="color: #ffffff; border-radius: 10px; font-size: 16px; font-family: 'Inter', Sans-serif; font-weight: 600; line-height: 24px;">Tambah Acara</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- <form action="/Event" method="POST">
            @csrf
            <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                <div style="align-self: stretch; padding-top: 56px; padding-bottom: 56px; background: #394E91; justify-content: center; align-items: center; display: inline-flex">
                    <div style="text-align: justify; color: white; font-size: 40px; font-family: 'Inter', Sans-serif; font-weight: 700; line-height: 56px; word-wrap: break-word">Acara</div>
                </div>
                <div style="align-self: stretch; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                    <div style="align-self: stretch; height: 610px; padding: 40px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-end; gap: 32px; display: flex">
                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: 'Inter', Sans-serif; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Tambah Data Acara</div>
                        </div>
                        <div style="align-self: stretch; height: 376px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word" for="e_tglAcara">Tanggal Acara</label>
                                <input type="date" id="e_tglAcara" placeholder="Pilih tanggal acara" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="e_tglAcara" value="{{old('e_tglAcara')}}">
                            </div>
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word" for="e_namaAcara">Nama Acara</label>
                                <input type="text" id="e_namaAcara" placeholder="Masukkan Nama Acara" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="e_namaAcara" value="{{old('e_namaAcara')}}">
                            </div>
                            <div style="align-self: stretch; height: 152px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <label style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word" for="e_lokasiAcara">Lokasi Acara</label>
                                <textarea id="e_lokasiAcara" placeholder="Masukkan Lokasi Acara" rows="3" style="align-self: stretch; padding-top: 16px; padding-left: 16px; padding-right: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex" name="e_lokasiAcara" value="{{old('e_lokasiAcara')}}"></textarea>
                            </div>
                        </div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-end; display: flex">
                            <button type="submit" class="btn button-fill p-3" style="color: #ffffff; border-radius: 10px; font-size: 16px; font-family: 'Inter', Sans-serif; font-weight: 600; line-height: 24px;">Tambah Acara</button>
                        </div>
                    </div>
             </form>
                     -->
        </main>
    </body>

    <script>

    </script>
</html>