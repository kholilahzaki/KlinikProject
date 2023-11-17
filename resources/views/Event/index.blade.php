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
                    <li><a class="nav-link px-2" href="/" style="text-align: justify; font-size: 16px; font-family: 'Inter', Sans-serif; line-height: 24px; word-wrap: break-word">Dashboard</a></li>
                    <li><a class="nav-link px-2" href="/Event" style="text-align: justify; font-size: 16px; font-family: 'Inter', Sans-serif; line-height: 24px; word-wrap: break-word">Acara</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                </div>
            </div>
        </header>
        <main>
            <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                <div style="width: 100%; padding-top: 56px; padding-bottom: 56px; background: #394E91; justify-content: center; align-items: center; display: inline-flex">
                    <div style="text-align: justify; color: white; font-size: 40px; font-family: 'Inter', Sans-serif; font-weight: 700; line-height: 56px; word-wrap: break-word">Acara</div>
                </div>
                <div style="align-self: stretch; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                    <div style="align-self: stretch; padding: 40px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                        <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                        <div class="Frame373" style="width: 100%; height: 100%; justify-content: space-between; align-items: center; display: inline-flex">
                            <div class="DaftarAcara" style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Daftar Acara</div>
                                <div class="Button" style="padding: 16px; background: #394E91; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                                <a class="Button" style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word; text-decoration:none" href="/Event/create">Tambah Acara</a>
                            </div>
                        </div>
                            @foreach ( $acara as $acr )
                            <a style="align-self: stretch; height: 117px; padding: 16px; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex; text-decoration:none" href="/detail-acara">
                                <div style="align-self: stretch; text-align: justify; color: #1D1B20; font-size: 18px; font-family: 'Inter', Sans-serif; font-weight: 700; line-height: 25.20px; word-wrap: break-word">{{ $acr->e_namaAcara }}</div>
                                <div style="align-self: stretch; height: 52px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="ic:round-location-on">
                                                <path id="Vector" d="M10.0002 1.6665C6.50016 1.6665 3.3335 4.34984 3.3335 8.49984C3.3335 11.1498 5.37516 14.2665 9.45016 17.8582C9.76683 18.1332 10.2418 18.1332 10.5585 17.8582C14.6252 14.2665 16.6668 11.1498 16.6668 8.49984C16.6668 4.34984 13.5002 1.6665 10.0002 1.6665ZM10.0002 9.99984C9.0835 9.99984 8.3335 9.24984 8.3335 8.33317C8.3335 7.4165 9.0835 6.6665 10.0002 6.6665C10.9168 6.6665 11.6668 7.4165 11.6668 8.33317C11.6668 9.24984 10.9168 9.99984 10.0002 9.99984Z" fill="#757575"/>
                                            </g>
                                        </svg>
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: 'Inter', Sans-serif', Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $acr->e_lokasiAcara }}</div>
                                    </div>
                                    <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 4px; display: inline-flex">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="ic:twotone-date-range">
                                                <path id="Vector" opacity="0.3" d="M4.1665 6.66667H15.8332V5H4.1665V6.66667Z" fill="#757575"/>
                                                <path id="Vector_2" d="M5.83333 9.1665H7.5V10.8332H5.83333V9.1665ZM15.8333 3.33317H15V1.6665H13.3333V3.33317H6.66667V1.6665H5V3.33317H4.16667C3.24167 3.33317 2.50833 4.08317 2.50833 4.99984L2.5 16.6665C2.5 17.1085 2.67559 17.5325 2.98816 17.845C3.30072 18.1576 3.72464 18.3332 4.16667 18.3332H15.8333C16.75 18.3332 17.5 17.5832 17.5 16.6665V4.99984C17.5 4.08317 16.75 3.33317 15.8333 3.33317ZM15.8333 16.6665H4.16667V8.33317H15.8333V16.6665ZM15.8333 6.6665H4.16667V4.99984H15.8333V6.6665ZM12.5 9.1665H14.1667V10.8332H12.5V9.1665ZM9.16667 9.1665H10.8333V10.8332H9.16667V9.1665Z" fill="#757575"/>
                                            </g>
                                        </svg>
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: 'Inter', Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">{{ $acr->e_tglAcara }}</div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>
</html>