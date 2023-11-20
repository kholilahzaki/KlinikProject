<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- css -->
        <link rel="stylesheet" href="/css/styles.css">
        <title>Klinik Raycare - Dashboard</title>

        <style>
            a.nav-link {color: #394E91;}
            a.nav-link:hover {color: #293A79;} 
            body {background-color: #F5F6FA;}
            .main-contain {width: 100%; height: 100%; background: white; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex;}

            /* button primary */
            a.button-fill {background: #394E91;}
            a.button-fill:hover {background: #293A79;}

            /* Button in hero section */
            a.button-hero {background: #7888B6;}
            a.button-hero:hover {background: #5C6EA8;}

            /* button outline: ubah data */
            a.button-outline {padding: 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex}
            a.button-outline:hover {background: rgba(57, 78, 145, 0.15);}

            .file{
                padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; border-radius: 10px; border: 1px #C4CBE0 solid; justify-content: flex-start; align-items: center; display: inline-flex;
            }
            .file:hover {
                background: #DADDE5;
            }

            .table-header{
                text-align: justify; color: #394E91; font-family: Inter; line-height: 25.20px; word-wrap: break-word; align-self: stretch;
            }

            .table-row{
                font-family: 'Inter', sans-serif;
            }

            .accordion {
                background-color: #FFFFFF;
                color: #444;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 15px;
                transition: 0.4s;
            }

            .active, .accordion:hover {
                background-color: #E8EAF2;
            }

            .accordion:after {
                content: '\002B';
                color: #777;
                font-weight: bold;
                float: right;
                margin-left: 5px;
            }

            .active:after {
                content: "\2212";
            }

            .panel {
                align-self: stretch;
                padding: 0px 16px;
                background-color: white;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
                /* border: 1px #DADDE5 solid; */
                /* background-color: rosybrown; */
            }
        </style>
    </head>
    <body>

        @include('component.navbar')

        <main>
            <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">

                <!-- Hero section -->
                <div style="align-self: stretch; padding-left: 176px; padding-right: 176px; padding-top: 80px; padding-bottom: 80px; background: #3F559A; flex-direction: column; justify-content: center; align-items: flex-start; gap: 24px; display: flex">
                    <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; gap: 8px; display: flex">
                        <div style="text-align: justify; color: white; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Selamat Datang di Klinik Raycare</div>
                        <div style="align-self: stretch; text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                    </div>
                    <a class="btn button-hero" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="/tambah-pengguna" role="button">
                        <div style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tambah Pengguna</div>
                    </a>
                </div>

                <!-- Main Section -->
                <div style="align-self: stretch; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                    <div style="width: 100%; height: 100%; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                        <select class="form-select p-3 align-self-stretch" style="border-radius: 5px; border: 1px #DADDE5 solid;">
                            <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                            <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">One</option>
                            <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Two</option>
                            <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Three</option>
                        </select>
                        <div class="input-group gap-2">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Cari Pengguna" aria-describedby="search-addon" style="flex: 1 1 0; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; gap: 8px; display: flex" />
                            <button type="submit" style="background: #394E91; padding: 16px; padding-right: 24px; padding-left: 24px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" class="btn btn-primary">Cari</button>
                            <!-- <a class="btn button-fill" style="padding: 16px; padding-right: 24px; padding-left: 24px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="#" role="button">
                                <div style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Cari</div>
                            </a> -->
                        </div>
                    </div>
                    <div class="main-contain">
                        <div style="align-self: stretch; padding: 24px; background: #394E91; border-radius: 5px; justify-content: space-between; align-items: center; display: inline-flex">
                            <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                <div style="text-align: justify; color: white; font-size: 32px; font-family: Inter; font-weight: 500; line-height: 44.80px; word-wrap: break-word">John Doe</div>
                                <div style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">085414002154</div>
                            </div>
                            <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                <div style="text-align: justify; color: white; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Gaple</div>
                                <div style="text-align: justify; color: white; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Koordinasi Wilayah: Henny</div>
                            </div>
                        </div>
                        <div style="align-self: stretch; height: 100%; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Tanda Penduduk (KTP)</div>
                                <a class="btn button-outline" href="#" role="button">
                                    <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                </a>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">NIK</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">1245787</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tempat Tanggal Lahir</div>
                                        </div>
                                        <div style="flex: 1 1 0; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Jakarta, 01 Januari 1997</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Jenis Kelamin</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Laki-laki</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Agama</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Hindu</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Status Nikah</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Belum Kawin</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Warga Negara</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">WNI</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Asal Negara</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Indonesia</div>
                                    </div>
                                </div>
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Pekerjaan</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Arsitektur</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Provinsi</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">DKI Jakarta</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kabupaten/Kota</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Kota Jakarta Selatan</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kecamatan</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">????</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kode Pos</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123587</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Alamat Lengkap</div>
                                        </div>
                                        <div style="flex: 1 1 0; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Jalan Bumi Permai Blok U no. 124</div>
                                    </div>
                                    <div style="align-self: stretch; height: 104px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                        <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran KTP</div>
                                        </div>
                                        <div class="file">
                                            <!-- box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); -->
                                            <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                <div style="flex-direction: row; justify-content: flex-start; align-items: center; display: inline-flex; gap: 8px;">
                                                    <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-240-56-56 384-384H240v-80h480v480h-80v-344L256-240Z"/></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; height: 100%; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Keluarga (KK)</div>
                                <a class="btn button-outline" href="#" role="button">
                                    <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                </a>
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor KK</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">454510554138</div>
                                    </div>
                                    <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Dokumen KK</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">K 123456 DJ</div>
                                    </div>
                                    <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Kepala Keluarga</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">John Doe</div>
                                    </div>
                                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                        <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran KK</div>
                                        </div>
                                        <div class="file">
                                            <!-- box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); -->
                                            <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                <div style="flex-direction: row; justify-content: flex-start; align-items: center; display: inline-flex; gap: 8px;">
                                                    <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-240-56-56 384-384H240v-80h480v480h-80v-344L256-240Z"/></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                        <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Pasangan</div>
                                        </div>
                                        <button class="accordion" style="align-self: stretch; padding: 24px; background: linear-gradient(0deg,  0%,  100%), linear-gradient(0deg, white 0%, white 100%); border-radius: 10px; border: 1px #DADDE5 solid; justify-content: space-between; align-items: center; display: inline-flex">
                                            <div style="width: 100%; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Syahrini</div>
                                        </button>
                                        <!-- PANEL PASANGAN DI KK -->
                                        <div class="panel">
                                            <div style="background: rgba(232, 234, 242, 0.25); align-self: stretch; height: 100%; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Tanda Penduduk (KTP)</div>
                                                    <a class="btn button-outline" href="#" role="button">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </a>
                                                </div>
                                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">NIK</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">1245787</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tempat Tanggal Lahir</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Jakarta, 01 Januari 1997</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Jenis Kelamin</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Laki-laki</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Agama</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Hindu</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Status Nikah</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Belum Kawin</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Warga Negara</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">WNI</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Asal Negara</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Indonesia</div>
                                                        </div>
                                                    </div>
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Pekerjaan</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Arsitektur</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Provinsi</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">DKI Jakarta</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kabupaten/Kota</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Kota Jakarta Selatan</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kecamatan</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">????</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kode Pos</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123587</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Alamat Lengkap</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Jalan Bumi Permai Blok U no. 124</div>
                                                        </div>
                                                        <div style="align-self: stretch; height: 104px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran KTP</div>
                                                            </div>
                                                            <div class="file">
                                                                <!-- box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); -->
                                                                <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                                    <div style="flex-direction: row; justify-content: flex-start; align-items: center; display: inline-flex; gap: 8px;">
                                                                        <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-240-56-56 384-384H240v-80h480v480h-80v-344L256-240Z"/></svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 100%; height: 100%; border: 1px #C4CBE0 solid"></div>
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Keluarga (KK)</div>
                                                    <a class="btn button-outline" href="#" role="button">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </a>
                                                </div>
                                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor KK</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">454510554138</div>
                                                        </div>
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Dokumen KK</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">K 123456 DJ</div>
                                                        </div>
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Kepala Keluarga</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">John Doe</div>
                                                        </div>
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Anak</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">John Doe</div>
                                                        </div>
                                                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran KK</div>
                                                            </div>
                                                            <div class="file">
                                                                <!-- box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); -->
                                                                <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                                    <div style="flex-direction: row; justify-content: flex-start; align-items: center; display: inline-flex; gap: 8px;">
                                                                        <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-240-56-56 384-384H240v-80h480v480h-80v-344L256-240Z"/></svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 100%; height: 100%; border: 1px #C4CBE0 solid"></div>
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Loyalty Card (LC)</div>
                                                    <a class="btn button-outline" href="#" role="button">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </a>
                                                </div>
                                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; margin-bottom: 8px; display: inline-flex">
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Umum</div>
                                                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Kartu</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Ditambahkan</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran Form Loyalty Card</div>
                                                                </div>
                                                                <div class="file">
                                                                <!-- box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); -->
                                                                    <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                                        <div style="flex-direction: row; justify-content: flex-start; align-items: center; display: inline-flex; gap: 8px;">
                                                                            <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-240-56-56 384-384H240v-80h480v480h-80v-344L256-240Z"/></svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Penarikan</div>
                                                        <div style="align-self: stretch; height: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alasan Penarikan</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Pernarikan</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Upgrade Kartu</div>
                                                    </div>
                                                    <table class="table">
                                                        <thead>
                                                            <tr style="background: #E8EAF2; ">
                                                                <th scope="col" class="table-header">Nomor Kartu</th>
                                                                <th scope="col" class="table-header">Jenis Kartu</th>
                                                                <th scope="col" class="table-header">Tanggal Diupgrade</th>
                                                                <th scope="col" class="table-header">Alasan Diupgrade</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                                <td class="table-row">23 Agustus 2023</td>
                                                                <td class="table-row">Lorem Ipsum</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                                <td class="table-row">23 Agustus 2023</td>
                                                                <td class="table-row">Lorem Ipsum</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                                <td class="table-row">23 Agustus 2023</td>
                                                                <td class="table-row">Lorem Ipsum</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Penggunaan Kartu</div>
                                                    </div>
                                                    <table class="table">
                                                        <thead>
                                                            <tr style="background: #E8EAF2; ">
                                                                <th scope="col" class="table-header">Nomor Kartu</th>
                                                                <th scope="col" class="table-header">Jenis Kartu</th>
                                                                <th scope="col" class="table-header">Nama Acara</th>
                                                                <th scope="col" class="table-header">Lokasi Acara</th>
                                                                <th scope="col" class="table-header">Tanggal Acara</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                                <td class="table-row">Ulang Tahun</td>
                                                                <td class="table-row">Lorem Ipsum</td>
                                                                <td class="table-row">23 Agustus 2023</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                                <td class="table-row">Festival 17 Agustus</td>
                                                                <td class="table-row">23 Agustus 2023</td>
                                                                <td class="table-row">Lorem Ipsum</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                                <td class="table-row">Klinik Anniversary</td>
                                                                <td class="table-row">23 Agustus 2023</td>
                                                                <td class="table-row">Lorem Ipsum</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div style="width: 100%; height: 100%; border: 1px #C4CBE0 solid"></div>
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">BPJS</div>
                                                    <a class="btn button-outline" href="#" role="button">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </a>
                                                </div>
                                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Umum</div>
                                                        <div style="align-self: stretch; height: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor BPJS</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat BPJS</div>
                                                    </div>
                                                    <table class="table">
                                                        <thead>
                                                            <tr style="background: #E8EAF2; ">
                                                                <th scope="col" class="table-header">Nomor Kartu</th>
                                                                <th scope="col" class="table-header">Jenis Kartu</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div style="width: 100%; height: 100%; border: 1px #C4CBE0 solid"></div>
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Informasi Lainnya</div>
                                                    <a class="btn button-outline" href="#" role="button">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </a>
                                                </div>
                                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama TPS</div>
                                                        </div>
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                    </div>
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat TPS</div>
                                                        </div>
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                    </div>
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Penyandang Disabilitas</div>
                                                        </div>
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                        <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Anak</div>
                                        </div>
                                        <button class="accordion" style="align-self: stretch; padding: 24px; background: linear-gradient(0deg,  0%,  100%), linear-gradient(0deg, white 0%, white 100%); border-radius: 10px; border: 1px #DADDE5 solid; justify-content: space-between; align-items: center; display: inline-flex">
                                            <div style="width: 100%; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Syahril</div>
                                        </button>
                                        <div class="panel">
                                            <div style="background: rgba(232, 234, 242, 0.25); align-self: stretch; height: 100%; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Tanda Penduduk (KTP)</div>
                                                    <a class="btn button-outline" href="#" role="button">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </a>
                                                </div>
                                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">NIK</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">1245787</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Tempat Tanggal Lahir</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Jakarta, 01 Januari 1997</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Jenis Kelamin</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Laki-laki</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Agama</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Hindu</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Status Nikah</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Belum Kawin</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Warga Negara</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">WNI</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Asal Negara</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Indonesia</div>
                                                        </div>
                                                    </div>
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Pekerjaan</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Arsitektur</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Provinsi</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">DKI Jakarta</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kabupaten/Kota</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Kota Jakarta Selatan</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kecamatan</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">????</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kode Pos</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123587</div>
                                                        </div>
                                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Alamat Lengkap</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Jalan Bumi Permai Blok U no. 124</div>
                                                        </div>
                                                        <div style="align-self: stretch; height: 104px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran KTP</div>
                                                            </div>
                                                            <div class="file">
                                                                <!-- box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); -->
                                                                <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                                    <div style="flex-direction: row; justify-content: flex-start; align-items: center; display: inline-flex; gap: 8px;">
                                                                        <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-240-56-56 384-384H240v-80h480v480h-80v-344L256-240Z"/></svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 100%; height: 100%; border: 1px #C4CBE0 solid"></div>
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Keluarga (KK)</div>
                                                    <a class="btn button-outline" href="#" role="button">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </a>
                                                </div>
                                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor KK</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">454510554138</div>
                                                        </div>
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Dokumen KK</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">K 123456 DJ</div>
                                                        </div>
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Kepala Keluarga</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">John Doe</div>
                                                        </div>
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Anak</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">John Doe</div>
                                                        </div>
                                                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran KK</div>
                                                            </div>
                                                            <div class="file">
                                                                <!-- box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); -->
                                                                <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                                    <div style="flex-direction: row; justify-content: flex-start; align-items: center; display: inline-flex; gap: 8px;">
                                                                        <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-240-56-56 384-384H240v-80h480v480h-80v-344L256-240Z"/></svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="width: 100%; height: 100%; border: 1px #C4CBE0 solid"></div>
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Loyalty Card (LC)</div>
                                                    <a class="btn button-outline" href="#" role="button">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </a>
                                                </div>
                                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; margin-bottom: 8px; display: inline-flex">
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Umum</div>
                                                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Kartu</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Ditambahkan</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran Form Loyalty Card</div>
                                                                </div>
                                                                <div class="file">
                                                                <!-- box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); -->
                                                                    <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                                        <div style="flex-direction: row; justify-content: flex-start; align-items: center; display: inline-flex; gap: 8px;">
                                                                            <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-240-56-56 384-384H240v-80h480v480h-80v-344L256-240Z"/></svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Penarikan</div>
                                                        <div style="align-self: stretch; height: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alasan Penarikan</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Pernarikan</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Upgrade Kartu</div>
                                                    </div>
                                                    <table class="table">
                                                        <thead>
                                                            <tr style="background: #E8EAF2; ">
                                                                <th scope="col" class="table-header">Nomor Kartu</th>
                                                                <th scope="col" class="table-header">Jenis Kartu</th>
                                                                <th scope="col" class="table-header">Tanggal Diupgrade</th>
                                                                <th scope="col" class="table-header">Alasan Diupgrade</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                                <td class="table-row">23 Agustus 2023</td>
                                                                <td class="table-row">Lorem Ipsum</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                                <td class="table-row">23 Agustus 2023</td>
                                                                <td class="table-row">Lorem Ipsum</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                                <td class="table-row">23 Agustus 2023</td>
                                                                <td class="table-row">Lorem Ipsum</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Penggunaan Kartu</div>
                                                    </div>
                                                    <table class="table">
                                                        <thead>
                                                            <tr style="background: #E8EAF2; ">
                                                                <th scope="col" class="table-header">Nomor Kartu</th>
                                                                <th scope="col" class="table-header">Jenis Kartu</th>
                                                                <th scope="col" class="table-header">Nama Acara</th>
                                                                <th scope="col" class="table-header">Lokasi Acara</th>
                                                                <th scope="col" class="table-header">Tanggal Acara</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                                <td class="table-row">Ulang Tahun</td>
                                                                <td class="table-row">Lorem Ipsum</td>
                                                                <td class="table-row">23 Agustus 2023</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                                <td class="table-row">Festival 17 Agustus</td>
                                                                <td class="table-row">23 Agustus 2023</td>
                                                                <td class="table-row">Lorem Ipsum</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                                <td class="table-row">Klinik Anniversary</td>
                                                                <td class="table-row">23 Agustus 2023</td>
                                                                <td class="table-row">Lorem Ipsum</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div style="width: 100%; height: 100%; border: 1px #C4CBE0 solid"></div>
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">BPJS</div>
                                                    <a class="btn button-outline" href="#" role="button">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </a>
                                                </div>
                                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Umum</div>
                                                        <div style="align-self: stretch; height: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor BPJS</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat BPJS</div>
                                                    </div>
                                                    <table class="table">
                                                        <thead>
                                                            <tr style="background: #E8EAF2; ">
                                                                <th scope="col" class="table-header">Nomor Kartu</th>
                                                                <th scope="col" class="table-header">Jenis Kartu</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-row">12345678</td>
                                                                <td class="table-row">L</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div style="width: 100%; height: 100%; border: 1px #C4CBE0 solid"></div>
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Informasi Lainnya</div>
                                                    <a class="btn button-outline" href="#" role="button">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </a>
                                                </div>
                                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama TPS</div>
                                                        </div>
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                    </div>
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat TPS</div>
                                                        </div>
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                    </div>
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Penyandang Disabilitas</div>
                                                        </div>
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; height: 100%; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Loyalty Card (LC)</div>
                                <a class="btn button-outline" href="#" role="button">
                                    <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                </a>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; margin-bottom: 16px; display: inline-flex">
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Umum</div>
                                    <div style="align-self: stretch; height: 200px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Kartu</div>
                                            </div>
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                        </div>
                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                            </div>
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                        </div>
                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Ditambahkan</div>
                                            </div>
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                        </div>
                                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran Form Loyalty Card</div>
                                            </div>
                                            <div class="file">
                                            <!-- box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); -->
                                                <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                    <div style="flex-direction: row; justify-content: flex-start; align-items: center; display: inline-flex; gap: 8px;">
                                                        <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-240-56-56 384-384H240v-80h480v480h-80v-344L256-240Z"/></svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Penarikan</div>
                                    <div style="align-self: stretch; height: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alasan Penarikan</div>
                                            </div>
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                        </div>
                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Pernarikan</div>
                                            </div>
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Upgrade Kartu</div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr style="background: #E8EAF2; ">
                                            <th scope="col" class="table-header">Nomor Kartu</th>
                                            <th scope="col" class="table-header">Jenis Kartu</th>
                                            <th scope="col" class="table-header">Tanggal Diupgrade</th>
                                            <th scope="col" class="table-header">Alasan Diupgrade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-row">12345678</td>
                                            <td class="table-row">L</td>
                                            <td class="table-row">23 Agustus 2023</td>
                                            <td class="table-row">Lorem Ipsum</td>
                                        </tr>
                                        <tr>
                                            <td class="table-row">12345678</td>
                                            <td class="table-row">L</td>
                                            <td class="table-row">23 Agustus 2023</td>
                                            <td class="table-row">Lorem Ipsum</td>
                                        </tr>
                                        <tr>
                                            <td class="table-row">12345678</td>
                                            <td class="table-row">L</td>
                                            <td class="table-row">23 Agustus 2023</td>
                                            <td class="table-row">Lorem Ipsum</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="align-self: stretch; margin-bottom: 16px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Penggunaan Kartu</div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr style="background: #E8EAF2; ">
                                            <th scope="col" class="table-header">Nomor Kartu</th>
                                            <th scope="col" class="table-header">Jenis Kartu</th>
                                            <th scope="col" class="table-header">Nama Acara</th>
                                            <th scope="col" class="table-header">Lokasi Acara</th>
                                            <th scope="col" class="table-header">Tanggal Acara</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-row">12345678</td>
                                            <td class="table-row">L</td>
                                            <td class="table-row">Ulang Tahun</td>
                                            <td class="table-row">Lorem Ipsum</td>
                                            <td class="table-row">23 Agustus 2023</td>
                                        </tr>
                                        <tr>
                                            <td class="table-row">12345678</td>
                                            <td class="table-row">L</td>
                                            <td class="table-row">Festival 17 Agustus</td>
                                            <td class="table-row">23 Agustus 2023</td>
                                            <td class="table-row">Lorem Ipsum</td>
                                        </tr>
                                        <tr>
                                            <td class="table-row">12345678</td>
                                            <td class="table-row">L</td>
                                            <td class="table-row">Klinik Anniversary</td>
                                            <td class="table-row">23 Agustus 2023</td>
                                            <td class="table-row">Lorem Ipsum</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style="align-self: stretch; height: 100%; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">BPJS</div>
                                <a class="btn button-outline" href="#" role="button">
                                    <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                </a>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Umum</div>
                                    <div style="align-self: stretch; height: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor BPJS</div>
                                            </div>
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                        </div>
                                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                            <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                            </div>
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat BPJS</div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr style="background: #E8EAF2; ">
                                            <th scope="col" class="table-header">Nomor Kartu</th>
                                            <th scope="col" class="table-header">Jenis Kartu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-row">12345678</td>
                                            <td class="table-row">L</td>
                                        </tr>
                                        <tr>
                                            <td class="table-row">12345678</td>
                                            <td class="table-row">L</td>
                                        </tr>
                                        <tr>
                                            <td class="table-row">12345678</td>
                                            <td class="table-row">L</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style="align-self: stretch; height: 100%; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                            <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                    <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Informasi Lainnya</div>
                                    <a class="btn button-outline" href="#" role="button">
                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                    </a>
                                </div>
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama TPS</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat TPS</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Penyandang Disabilitas</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
                } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                } 
            });
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>