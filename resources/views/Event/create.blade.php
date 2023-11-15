<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- css -->
        <link rel="stylesheet" href="/css/styles.css">
        <title>Klinik Raycare - Acara</title>
        

        <style>
            a.nav-link {color: #394E91; font-weight: 500;}
            a.nav-link:hover {color: #293A79; font-weight: 500;}
            a.nav-link:focus {color: #1E2A62; font-weight: 700;}
            
            body {background-color: #F5F6FA;}

            /* button primary */
            .button-fill {background: #394E91;}
            .button-fill:hover {background: #293A79;}
        </style>
    </head>
    <body>
        <header>
            <div class="d-flex align-items-center justify-content-md-between py-3" style="width: 100%; height: 100%; padding-left:40px; padding-right:40px; background:#FFFFFF; box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.25);">
                <!-- <div>
                    <a href="/" class="h5 nav-link" style="text-align:justify; color:#394E91;">Klinik Raycare</a>
                </div>
                <div class="d-flex justify-content-center align-items-center gap-3" style="flex: 1 0 0;">
                    <div class="d-flex justify-content-center align-items center align-self-stretch">
                        <a href="#" class="nav-link body-medium text-align-justify" style="color:#394E91;">Dashboard</a>
                    </div>
                    <div class="d-flex justify-content-center align-items center align-self-stretch">
                        <a href="#" class="nav-link body-medium text-align-justify" style="color:#394E91;">Acara</a>
                    </div>
                    <div class="d-flex justify-content-center align-items center align-self-stretch">
                        <a href="#" class="nav-link body-medium text-align-justify" style="color:#394E91;">TPS</a>
                    </div>
                </div>
                <div>
                    <img src="https://github.com/mdo.png" alt="" width="40" height="40" class="rounded-circle me-2">
                </div> -->
                <div class="col-md-3 mb-2 mb-md-0">
                    <a href="/" class="h5 d-inline-flex link-body-emphasis text-decoration-none" style="color: #394E91;">
                        Klinik Raycare
                    </a>
                </div>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a class="nav-link px-2" href="#" style="text-align: justify; font-size: 16px; font-family: 'Inter', Sans-serif; line-height: 24px; word-wrap: break-word">Dashboard</a></li>
                    <li><a class="nav-link px-2" href="#" style="text-align: justify; font-size: 16px; font-family: 'Inter', Sans-serif; line-height: 24px; word-wrap: break-word">Acara</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                </div>
            </div>
        </header>
        <main>
            <form action="/Event" method="POST">
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
                            <!-- <a class="btn button-fill" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="#" role="button">
                                <input type="submit" placeholder="Tambah Acara" style="text-align: justify; color: white; font-size: 16px; font-family: 'Inter', Sans-serif; font-weight: 600; line-height: 24px; word-wrap: break-word">
                            </a> -->
                            <button type="submit" class="btn button-fill p-3" style="color: #ffffff; border-radius: 10px; font-size: 16px; font-family: 'Inter', Sans-serif; font-weight: 600; line-height: 24px;">Tambah Acara</button>
                        </div>
                    </div>
             </form>
                    
                    </div>
                </div>
            </div>
        </main>
    </body>

    <script>

    </script>
</html>