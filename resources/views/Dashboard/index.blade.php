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

            /* button primary */
            a.button-fill {background: #394E91;}
            a.button-fill:hover {background: #293A79;}

            /* Button in hero section */
            a.button-hero {background: #7888B6;}
            a.button-hero:hover {background: #5C6EA8;}

            /* button outline: ubah data */
            .button-outline:hover {background: rgba(57, 78, 145, 0.15);}

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
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" style="flex: 1 1 0; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; gap: 8px; display: flex" />
                            <button type="submit" style="background: #394E91; padding: 16px; padding-right: 24px; padding-left: 24px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" class="btn btn-primary">Primary</button>
                            <!-- <a class="btn button-fill" style="padding: 16px; padding-right: 24px; padding-left: 24px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="#" role="button">
                                <div style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Cari</div>
                            </a> -->
                        </div>
                    </div>

                    <!-- FILL TERISI -->
                    <div style="width: 100%; height: 100%; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
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
                        <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Tanda Penduduk (KTP)</div>
                                <div style="background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                    <a class="btn button-outline" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="#" role="button">
                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                    </a>
                                </div>
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
                                        <div style="padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); border-radius: 10px; border: 1px #C4CBE0 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                            <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                <div style="width: 40px; height: 40px; position: relative">
                                                    <div style="width: 39.85px; height: 39.85px; left: 0.07px; top: 0.07px; position: absolute">
                                                        <div style="width: 39.85px; height: 39.85px; left: 0px; top: 0px; position: absolute; background: #F00B0E"></div>
                                                        <div style="width: 29.63px; height: 28.99px; left: 5.11px; top: 5.43px; position: absolute; background: white"></div>
                                                    </div>
                                                    <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute"></div>
                                                </div>
                                                <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                    <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Keluarga (KK)</div>
                                <div style="background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                    <a class="btn button-outline" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="#" role="button">
                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                    </a>
                                </div>
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
                                </div>
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran KK</div>
                                    </div>
                                    <div style="padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); border-radius: 10px; border: 1px #C4CBE0 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                            <div style="width: 40px; height: 40px; position: relative">
                                                <div style="width: 39.85px; height: 39.85px; left: 0.07px; top: 0.07px; position: absolute">
                                                    <div style="width: 39.85px; height: 39.85px; left: 0px; top: 0px; position: absolute; background: #F00B0E"></div>
                                                    <div style="width: 29.63px; height: 28.99px; left: 5.11px; top: 5.43px; position: absolute; background: white"></div>
                                                </div>
                                                <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute"></div>
                                            </div>
                                            <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Pasangan</div>
                                    </div>
                                    <!-- NAMA PASANGAN -->
                                    <button class="accordion" style="align-self: stretch; padding: 24px; background: linear-gradient(0deg,  0%,  100%), linear-gradient(0deg, white 0%, white 100%); border-radius: 10px; border: 1px #DADDE5 solid; justify-content: space-between; align-items: center; display: inline-flex">Nama Pasangan</button>
                                    <div class="panel">
                                        <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; background: rgba(232, 234, 242, 0.25);">
                                            <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Tanda Penduduk (KTP)</div>
                                                    <div style="background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                                        <a class="btn button-outline" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="#" role="button">
                                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                        </a>
                                                    </div>
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
                                                            <div style="padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); border-radius: 10px; border: 1px #C4CBE0 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                                <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                                    <div style="width: 40px; height: 40px; position: relative">
                                                                        <div style="width: 39.85px; height: 39.85px; left: 0.07px; top: 0.07px; position: absolute">
                                                                            <div style="width: 39.85px; height: 39.85px; left: 0px; top: 0px; position: absolute; background: #F00B0E"></div>
                                                                            <div style="width: 29.63px; height: 28.99px; left: 5.11px; top: 5.43px; position: absolute; background: white"></div>
                                                                        </div>
                                                                        <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute"></div>
                                                                    </div>
                                                                    <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                        <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="margin-top: 24px; margin-bottom: 24px;">
                                            <!-- KK PASANGAN -->
                                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Keluarga (KK)</div>
                                                    <div style="padding: 16px; background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor KK</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">454510554138</div>
                                                        </div>
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Dokumen KK</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">K 123456 DJ</div>
                                                        </div>
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Kepala Keluarga</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">John Doe</div>
                                                        </div>
                                                    </div>
                                                    <div style="align-self: stretch; height: 104px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                        <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran KK</div>
                                                        </div>
                                                        <div style="padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); border-radius: 10px; border: 1px #C4CBE0 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                                <div style="width: 40px; height: 40px; position: relative">
                                                                    <div style="width: 39.85px; height: 39.85px; left: 0.07px; top: 0.07px; position: absolute">
                                                                        <div style="width: 39.85px; height: 39.85px; left: 0px; top: 0px; position: absolute; background: #F00B0E"></div>
                                                                        <div style="width: 29.63px; height: 28.99px; left: 5.11px; top: 5.43px; position: absolute; background: white"></div>
                                                                    </div>
                                                                    <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute"></div>
                                                                </div>
                                                                <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="margin-top: 24px; margin-bottom: 24px;">
                                            <!-- LC -->
                                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Loyalty Card (LC)</div>
                                                    <div style="padding: 16px; background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Umum</div>
                                                        <div style="align-self: stretch; height: 200px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Kartu</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Ditambahkan</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; height: 104px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                                <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran Form Loyalty Card</div>
                                                                </div>
                                                                <div style="padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); border-radius: 10px; border: 1px #C4CBE0 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                                    <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                                        <div style="width: 40px; height: 40px; position: relative">
                                                                            <div style="width: 39.85px; height: 39.85px; left: 0.07px; top: 0.07px; position: absolute">
                                                                                <div style="width: 39.85px; height: 39.85px; left: 0px; top: 0px; position: absolute; background: #F00B0E"></div>
                                                                                <div style="width: 29.63px; height: 28.99px; left: 5.11px; top: 5.43px; position: absolute; background: white"></div>
                                                                            </div>
                                                                            <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute"></div>
                                                                        </div>
                                                                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                            <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
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
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alasan Penarikan</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Pernarikan</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; height: 266px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Upgrade Kartu</div>
                                                    </div>
                                                    <div style="align-self: stretch; height: 225px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Jenis Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Tanggal Diupgrade</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Alasan Diupgrade</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">P</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">L</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; height: 266px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Penggunaan Kartu</div>
                                                    </div>
                                                    <div style="align-self: stretch; height: 225px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Jenis Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nama Acara</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Alamat Acara</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Tanggal Acara</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">P</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">L</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="margin-top: 24px; margin-bottom: 24px;">
                                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">BPJS</div>
                                                    <div style="padding: 16px; background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Umum</div>
                                                        <div style="align-self: stretch; height: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor BPJS</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; height: 266px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat BPJS</div>
                                                    </div>
                                                    <div style="align-self: stretch; height: 225px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Jenis Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Tanggal Diupgrade</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Alasan Diupgrade</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">P</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">L</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="margin-top: 24px; margin-bottom: 24px;">
                                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Informasi Lainnya</div>
                                                    <div style="padding: 16px; background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama TPS</div>
                                                        </div>
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                    </div>
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat TPS</div>
                                                        </div>
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                    </div>
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Penyandang Disabilitas</div>
                                                        </div>
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Anak</div>
                                    </div>
                                    <button class="accordion" style="align-self: stretch; padding: 24px; background: linear-gradient(0deg,  0%,  100%), linear-gradient(0deg, white 0%, white 100%); border-radius: 10px; border: 1px #DADDE5 solid; justify-content: space-between; align-items: center; display: inline-flex">Section 1</button>
                                    <div class="panel">
                                    <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; background: rgba(232, 234, 242, 0.25);">
                                            <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Tanda Penduduk (KTP)</div>
                                                    <div style="background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                                        <a class="btn button-outline" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="#" role="button">
                                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                        </a>
                                                    </div>
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
                                                            <div style="padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); border-radius: 10px; border: 1px #C4CBE0 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                                <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                                    <div style="width: 40px; height: 40px; position: relative">
                                                                        <div style="width: 39.85px; height: 39.85px; left: 0.07px; top: 0.07px; position: absolute">
                                                                            <div style="width: 39.85px; height: 39.85px; left: 0px; top: 0px; position: absolute; background: #F00B0E"></div>
                                                                            <div style="width: 29.63px; height: 28.99px; left: 5.11px; top: 5.43px; position: absolute; background: white"></div>
                                                                        </div>
                                                                        <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute"></div>
                                                                    </div>
                                                                    <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                        <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="margin-top: 24px; margin-bottom: 24px;">
                                            <!-- KK PASANGAN -->
                                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Keluarga (KK)</div>
                                                    <div style="padding: 16px; background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor KK</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">454510554138</div>
                                                        </div>
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Dokumen KK</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">K 123456 DJ</div>
                                                        </div>
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                            <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama Kepala Keluarga</div>
                                                            </div>
                                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">John Doe</div>
                                                        </div>
                                                    </div>
                                                    <div style="align-self: stretch; height: 104px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                        <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran KK</div>
                                                        </div>
                                                        <div style="padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); border-radius: 10px; border: 1px #C4CBE0 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                                <div style="width: 40px; height: 40px; position: relative">
                                                                    <div style="width: 39.85px; height: 39.85px; left: 0.07px; top: 0.07px; position: absolute">
                                                                        <div style="width: 39.85px; height: 39.85px; left: 0px; top: 0px; position: absolute; background: #F00B0E"></div>
                                                                        <div style="width: 29.63px; height: 28.99px; left: 5.11px; top: 5.43px; position: absolute; background: white"></div>
                                                                    </div>
                                                                    <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute"></div>
                                                                </div>
                                                                <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="margin-top: 24px; margin-bottom: 24px;">
                                            <!-- LC -->
                                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Loyalty Card (LC)</div>
                                                    <div style="padding: 16px; background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Umum</div>
                                                        <div style="align-self: stretch; height: 200px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Kartu</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Ditambahkan</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; height: 104px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                                <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran Form Loyalty Card</div>
                                                                </div>
                                                                <div style="padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); border-radius: 10px; border: 1px #C4CBE0 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                                    <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                                        <div style="width: 40px; height: 40px; position: relative">
                                                                            <div style="width: 39.85px; height: 39.85px; left: 0.07px; top: 0.07px; position: absolute">
                                                                                <div style="width: 39.85px; height: 39.85px; left: 0px; top: 0px; position: absolute; background: #F00B0E"></div>
                                                                                <div style="width: 29.63px; height: 28.99px; left: 5.11px; top: 5.43px; position: absolute; background: white"></div>
                                                                            </div>
                                                                            <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute"></div>
                                                                        </div>
                                                                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                            <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
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
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alasan Penarikan</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Pernarikan</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; height: 266px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Upgrade Kartu</div>
                                                    </div>
                                                    <div style="align-self: stretch; height: 225px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Jenis Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Tanggal Diupgrade</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Alasan Diupgrade</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">P</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">L</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; height: 266px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Penggunaan Kartu</div>
                                                    </div>
                                                    <div style="align-self: stretch; height: 225px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Jenis Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nama Acara</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Alamat Acara</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Tanggal Acara</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">P</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">L</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="margin-top: 24px; margin-bottom: 24px;">
                                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">BPJS</div>
                                                    <div style="padding: 16px; background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                    <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Umum</div>
                                                        <div style="align-self: stretch; height: 56px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor BPJS</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                                <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                                                </div>
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; height: 266px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat BPJS</div>
                                                    </div>
                                                    <div style="align-self: stretch; height: 225px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Jenis Kartu</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Tanggal Diupgrade</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Alasan Diupgrade</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">P</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">L</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                        </div>
                                                        <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                                            </div>
                                                            <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="margin-top: 24px; margin-bottom: 24px;">
                                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                    <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Informasi Lainnya</div>
                                                    <div style="padding: 16px; background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                                    </div>
                                                </div>
                                                <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama TPS</div>
                                                        </div>
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                    </div>
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
                                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat TPS</div>
                                                        </div>
                                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                                                    </div>
                                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                                        <div style="height: 24px; justify-content: flex-start; align-items: flex-start; display: flex">
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
                        <div style="align-self: stretch; height: 949px; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Loyalty Card (LC)</div>
                                <div style="background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                    <a class="btn button-outline" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="#" role="button">
                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                    </a>
                                </div>
                            </div>
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
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
                                        <div style="align-self: stretch; height: 104px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                            <div style="justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran Form Loyalty Card</div>
                                            </div>
                                            <div style="padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.10); border-radius: 10px; border: 1px #C4CBE0 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                                <div style="justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                                    <div style="width: 40px; height: 40px; position: relative">
                                                        <div style="width: 39.85px; height: 39.85px; left: 0.07px; top: 0.07px; position: absolute">
                                                            <div style="width: 39.85px; height: 39.85px; left: 0px; top: 0px; position: absolute; background: #F00B0E"></div>
                                                            <div style="width: 29.63px; height: 28.99px; left: 5.11px; top: 5.43px; position: absolute; background: white"></div>
                                                        </div>
                                                        <div style="width: 40px; height: 40px; left: 0px; top: 0px; position: absolute"></div>
                                                    </div>
                                                    <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                                        <div style="color: black; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Dokumen.pdf</div>
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
                            <div style="align-self: stretch; height: 266px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Upgrade Kartu</div>
                                </div>
                                <div style="align-self: stretch; height: 225px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                    <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor Kartu</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Jenis Kartu</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Tanggal Diupgrade</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Alasan Diupgrade</div>
                                        </div>
                                    </div>
                                    <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">P</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                        </div>
                                    </div>
                                    <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">L</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                        </div>
                                    </div>
                                    <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: stretch; height: 266px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Penggunaan Kartu</div>
                                </div>
                                <div style="align-self: stretch; height: 225px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                    <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor Kartu</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Jenis Kartu</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nama Acara</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; display: flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Alamat Acara</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; display: flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Tanggal Acara</div>
                                        </div>
                                    </div>
                                    <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">P</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                        </div>
                                    </div>
                                    <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">L</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                        </div>
                                    </div>
                                    <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; height: 515px; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">BPJS</div>
                                <div style="background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                    <a class="btn button-outline" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="#" role="button">
                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                    </a>
                                </div>
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
                            <div style="align-self: stretch; height: 266px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat BPJS</div>
                                </div>
                                <div style="align-self: stretch; height: 225px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                    <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor Kartu</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Jenis Kartu</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Tanggal Diupgrade</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Alasan Diupgrade</div>
                                        </div>
                                    </div>
                                    <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">P</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                        </div>
                                    </div>
                                    <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">L</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                        </div>
                                    </div>
                                    <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                        </div>
                                        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Lorem Ipsum</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                            <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                    <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Informasi Lainnya</div>
                                    <div style="background: white; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                        <a class="btn button-outline" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="#" role="button">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ubah Data</div>
                                        </a>
                                    </div>
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