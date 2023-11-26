<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
        <!-- css -->
        <link rel="stylesheet" href="/css/styles.css">
        <title>Klinik Raycare - Detail Anggota</title>

        <style>
             /*button kembali  */
             a.button-underline { text-decoration: none; }
             a.button-underline:hover { text-decoration: underline; text-decoration-color: #394E91; }

             /* button edit */
             a.button-line:hover { background: rgba(57, 78, 145, 0.15); }
        </style>
    </head>
    <body>
    @include('component.navbar')
        <main>
            <div style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                    <a href="/daftar-kartu-keluarga" class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex" role="button">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Button-Icons">
                                <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                            </g>
                        </svg>
                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Kembali ke Halaman Daftar Kartu Keluarga</div>
                    </a>
                    <div style="justify-content: center; align-items: center; display: inline-flex">
                        <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Detail Anggota</div>
                    </div>
                </div>
                <div style="align-self: stretch; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
                    <div style="align-self: stretch; padding: 24px; background: #394E91; border-radius: 5px; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="text-align: justify; color: white; font-size: 32px; font-family: Inter; font-weight: 500; line-height: 44.80px; word-wrap: break-word">Rayhan</div>
                            <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                <div style="text-align: justify; color: #C4CBE0; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Nomor Telepon:</div>
                                <div style="text-align: justify; color: white; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">085741654128</div>
                            </div>
                        </div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="text-align: justify; color: white; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Gaple</div>
                            <div style="justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                <div style="text-align: justify; color: #C4CBE0; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Koordinasi Wilayah:</div>
                                <div style="text-align: justify; color: white; font-size: 14px; font-family: Inter; font-weight: 500; line-height: 21px; word-wrap: break-word">Henny</div>
                            </div>
                        </div>
                    </div>
                    <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                        <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                            <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Tanda Penduduk (KTP)</div>
                            <a class="btn button-line" href="#" role="button" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Edit Data</div>
                            </a>
                        </div>
                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                            <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">NIK</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">1245787</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tempat Tanggal Lahir</div>
                                    </div>
                                    <div style="flex: 1 1 0; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Jakarta, 01 Januari 1997</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kelamin</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Laki-laki</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Agama</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Hindu</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat Lengkap</div>
                                    </div>
                                    <div style="flex: 1 1 0; text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Jalan Bumi Permai Blok U no. 124, Kecamatan Keputih, Kota Surabaya, Jawa Timur, 165484</div>
                                </div>
                            </div>
                            <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Status Nikah</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Belum Kawin</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Pekerjaan</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Arsitektur</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Warga Negara</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">WNI</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Asal Negara</div>
                                    </div>
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Indonesia</div>
                                </div>
                                <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran KTP</div>
                                    </div>
                                    <a class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; display: flex" href="#" role="button">
                                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">File KTP.pdf</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                        <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                            <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Loyalty Card (LC)</div>
                            <div style="justify-content: flex-start; align-items: center; gap: 4px; display: flex">
                                <a class="btn button-line" href="#" role="button" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                    <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Edit Data</div>
                                </a>
                                <!-- dropdown: freeze / tarik -->
                                <div>
                                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="ic:round-more-vert">
                                                <path id="Vector" d="M15.9997 10.6668C17.4663 10.6668 18.6663 9.46683 18.6663 8.00016C18.6663 6.5335 17.4663 5.3335 15.9997 5.3335C14.533 5.3335 13.333 6.5335 13.333 8.00016C13.333 9.46683 14.533 10.6668 15.9997 10.6668ZM15.9997 13.3335C14.533 13.3335 13.333 14.5335 13.333 16.0002C13.333 17.4668 14.533 18.6668 15.9997 18.6668C17.4663 18.6668 18.6663 17.4668 18.6663 16.0002C18.6663 14.5335 17.4663 13.3335 15.9997 13.3335ZM15.9997 21.3335C14.533 21.3335 13.333 22.5335 13.333 24.0002C13.333 25.4668 14.533 26.6668 15.9997 26.6668C17.4663 26.6668 18.6663 25.4668 18.6663 24.0002C18.6663 22.5335 17.4663 21.3335 15.9997 21.3335Z" fill="#1D1B20"/>
                                            </g>
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu mt-2">
                                        <li>
                                            <a class="dropdown-item" href="#freezeCard" data-bs-toggle="modal" data-bs-target="#freezeCard">
                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Kartu Freeze</div>
                                            </a>
                                            <!-- INI MASIH BELUM BISA MUNCUL UGH -->
                                            <!-- <div class="modal" id="freezeCard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Penarikan Kartu</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                            <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Umum</div>
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Kartu</div>
                                        </div>
                                        <div style="text-align: justify"><span style="color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">05</span><span style="color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345P</span><span style="color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">64</span></div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Ditambahkan</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lampiran Form Loyalty Card</div>
                                        </div>
                                        <a class="button-underline" style="border-radius: 10px; justify-content: center; align-items: center; display: flex" href="#" role="button">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">File LC.pdf</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: inline-flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Informasi Status Kartu</div>
                                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Status</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Penarikan/Freeze</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                        <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Alasan Penarikan/Freeze</div>
                                        </div>
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                            <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Upgrade Kartu</div>
                                <a class="btn button-line" href="/ganti-kartu" role="button" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                    <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Ganti Kartu</div>
                                </a>
                            </div>
                            <div style="align-self: stretch; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
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
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123450</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">P</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; background: linear-gradient(0deg,  0%,  100%), linear-gradient(0deg, white 0%, white 100%); flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                </div>
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123456</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">L</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; background: linear-gradient(0deg,  0%,  100%), linear-gradient(0deg, white 0%, white 100%); flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                </div>
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12345P</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">12 September 2023</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; background: linear-gradient(0deg,  0%,  100%), linear-gradient(0deg, white 0%, white 100%); flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                            <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Riwayat Penggunaan Kartu</div>
                            </div>
                            <div style="align-self: stretch; height: 114px; padding-top: 40px; padding-bottom: 40px; background: #E8EAF2; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: center; align-items: center; display: flex">
                                <div style="opacity: 0.50; text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Belum mengikuti acara apapun</div>
                            </div>
                        </div>
                    </div>
                    <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                        <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                            <div style="width: 337px; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">BPJS</div>
                            <a class="btn button-line" href="#" role="button" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Edit Data</div>
                            </a>
                        </div>
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
                    <div style="align-self: stretch; padding: 24px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                        <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                            <div style="flex: 1 1 0; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Informasi Lainnya</div>
                            <a class="btn button-line" href="#" role="button" style="padding: 8px 16px; border-radius: 10px; border: 1px #394E91 solid; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Edit Data</div>
                            </a>
                        </div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                <div style="width: 176px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Penyandang Disabilitas</div>
                                </div>
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0564</div>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>