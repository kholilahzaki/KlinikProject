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
            /* Button Cari */
            .button-fill { background: #394E91; color: white; }
            .button-fill:hover { background: #293A79; }

            /* Button Tambah Anggota */
            a.button-fill-second { background: #7888B6; color: white; }
            a.button-fill-second:hover { background: #5C6EA8; }

            /* Button Aksi daftar KK */
            a.button-ghost:hover { background: #EEEFF4; }
        </style>
    </head>
    <body>

        @include('component.navbar')

        <main>
            <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">

                <!-- HERO SECTION -->
                <div style="align-self: stretch; padding-left: 176px; padding-right: 176px; padding-top: 80px; padding-bottom: 80px; background: #3F559A; flex-direction: column; justify-content: center; align-items: flex-start; gap: 24px; display: flex">
                    <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 8px; display: flex">
                        <div style="text-align: justify; color: white; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Selamat Datang di Klinik Raycare</div>
                        <div style="align-self: stretch; text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                    </div>
                </div>

                <!-- Main Section -->
                <div style="align-self: stretch; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                    <!-- MAIN CONTENT SECTION -->
                    <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                        <div style="text-align: justify; color: #1D1B20; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Cari Anggota</div>
                        <div style="width: 100%; height: 100%; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                            <input type="search" name="search" id="search" placeholder="Cari Nama, NIK, atau Nomor LC" style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word; flex: 1 1 0; padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; background: #FAFAFA; border-radius: 10px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                            <button class="button-fill" type="submit" style="padding: 16px 24px; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Cari Anggota</div>
                            </button>
                        </div>
                        <!-- TABLE SECTION -->
                        <div style="align-self: stretch; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
                            <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Jumlah: 300 Pengguna</div>
                            </div>
                            <div style="align-self: stretch;border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; background: #E8EAF2; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nama</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                        <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">NIK</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                        <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor BPJS</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                        <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor LC</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                                        <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">Nomor Telepon</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; padding-left: 16px; justify-content: flex-start; align-items: flex-start; display: flex">
                                        <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">KK</div>
                                    </div>
                                </div>
                                <!-- Dibagian sini foreach dimulai -->
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Reyhan</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123456789</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">9876543210</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">1110002525</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">081888754165</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <a href="/daftar-kartu-keluarga" role="button" class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Daftar KK</div>
                                        </a>
                                    </div>
                                </div>
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rani</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123456789</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">9876543210</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">1110002525</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">081456810552</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <a href="#" role="button" class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Daftar KK</div>
                                        </a>
                                    </div>
                                </div>
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Nana</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123456789</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">9876543210</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">1110002525</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">0857554681004</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <a href="#" role="button" class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Daftar KK</div>
                                        </a>
                                    </div>
                                </div>
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Syahrini</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123456789</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">9876543210</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">1110002525</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">083456811068</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <a href="#" role="button" class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Daftar KK</div>
                                        </a>
                                    </div>
                                </div>
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">John Doe</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123456789</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">9876543210</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">1110002525</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">085741940562</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <a href="#" role="button" class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Daftar KK</div>
                                        </a>
                                    </div>
                                </div>
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Nando</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">123456789</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">9876543210</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">1110002525</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">081784001457</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <a href="#" role="button" class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Daftar KK</div>
                                        </a>
                                    </div>
                                </div>
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <a href="#" role="button" class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Daftar KK</div>
                                        </a>
                                    </div>
                                </div>
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <a href="#" role="button" class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Daftar KK</div>
                                        </a>
                                    </div>
                                </div>
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <a href="#" role="button" class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Daftar KK</div>
                                        </a>
                                    </div>
                                </div>
                                <div style="align-self: stretch; padding-left: 20px; padding-right: 20px; padding-top: 16px; padding-bottom: 16px; border-bottom: 1px rgba(217, 217, 217, 0.50) solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Rp25.000</div>
                                    </div>
                                    <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                        <a href="#" role="button" class="btn button-ghost" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                                            <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; word-wrap: break-word">Daftar KK</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- PAGINATION SECTION -->
                            <div style="background: linear-gradient(0deg,  0%,  100%), linear-gradient(0deg, white 0%, white 100%); border-radius: 5px; border: 0.50px #DADDE5 solid; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                <div style="height: 48px; padding-left: 16px; padding-right: 16px; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                                    <div style="justify-content: center; align-items: center; display: inline-flex">
                                        <div style="text-align: justify; color: #9E9E9E; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Sebelumnya</div>
                                    </div>
                                </div>
                                <a href="#" class="page-link" style="align-self: stretch; padding-left: 16px; padding-right: 16px; border-left: 1px rgba(217, 217, 217, 0.50) solid; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">1</div>
                                </a>
                                <a href="#" class="page-link" style="align-self: stretch; padding-left: 16px; padding-right: 16px; border-left: 1px rgba(217, 217, 217, 0.50) solid; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">2</div>
                                </a>
                                <a href="#" class="page-link" style="align-self: stretch; padding-left: 16px; padding-right: 16px; border-left: 1px rgba(217, 217, 217, 0.50) solid; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">3</div>
                                </a>
                                <a href="#" class="page-link" style="align-self: stretch; padding-left: 16px; padding-right: 16px; border-left: 1px rgba(217, 217, 217, 0.50) solid; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">4</div>
                                </a>
                                <a href="#" class="page-link" style="align-self: stretch; padding-left: 16px; padding-right: 16px; border-left: 1px rgba(217, 217, 217, 0.50) solid; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">5</div>
                                </a>
                                <div style="height: 48px; padding-left: 16px; padding-right: 16px; border-left: 1px rgba(217, 217, 217, 0.50) solid; flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                                    <div style="justify-content: center; align-items: center; display: inline-flex">
                                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Selanjutnya</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>