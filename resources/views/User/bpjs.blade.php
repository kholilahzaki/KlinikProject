<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- css -->
        <link rel="stylesheet" href="/css/styles.css">

        <style>
            a.nav-link {color: #394E91;}
            /* lihat hover warnanya di figma: success */
            a.nav-link:hover {color: #293A79;} 
            body {background-color: #F5F6FA;}

        </style>
    </head>

    <body>
        <header>
            <div class="d-flex align-items-center justify-content-md-between py-3" style="padding-left:40px; padding-right:40px; background:#FFFFFF; box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.25);">
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
                    <li><a class="body-medium nav-link px-2" href="#">Dashboard</a></li>
                    <li><a class="body-medium nav-link px-2"  href="#">Acara</a></li>
                    <li><a class="body-medium nav-link px-2" href="#">TPS</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                </div>
            </div>
        </header>

        <main>
            <div style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: inline-flex">
                <!-- Title page -->
                    <div style="align-self: stretch; height: 80px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                        <div style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; display: inline-flex">
                            <button type="button" class="btn" style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Button-Icons">
                                        <path id="Vector" d="M19 11H7.83005L12.71 6.12001C13.1 5.73001 13.1 5.09001 12.71 4.70001C12.6175 4.6073 12.5076 4.53375 12.3867 4.48357C12.2657 4.43339 12.136 4.40756 12.005 4.40756C11.8741 4.40756 11.7444 4.43339 11.6234 4.48357C11.5024 4.53375 11.3926 4.6073 11.3 4.70001L4.71005 11.29C4.61734 11.3825 4.5438 11.4924 4.49361 11.6134C4.44343 11.7344 4.4176 11.864 4.4176 11.995C4.4176 12.126 4.44343 12.2557 4.49361 12.3766C4.5438 12.4976 4.61734 12.6075 4.71005 12.7L11.3 19.29C11.3926 19.3826 11.5025 19.456 11.6235 19.5061C11.7445 19.5562 11.8741 19.582 12.005 19.582C12.136 19.582 12.2656 19.5562 12.3866 19.5061C12.5076 19.456 12.6175 19.3826 12.71 19.29C12.8026 19.1974 12.8761 19.0875 12.9262 18.9665C12.9763 18.8456 13.0021 18.7159 13.0021 18.585C13.0021 18.4541 12.9763 18.3244 12.9262 18.2035C12.8761 18.0825 12.8026 17.9726 12.71 17.88L7.83005 13H19C19.55 13 20 12.55 20 12C20 11.45 19.55 11 19 11Z" fill="#394E91"/>
                                    </g>
                                </svg>    
                            Kembali ke Halaman Utama
                            </button>
                        </div>
                        <div style="justify-content: center; align-items: center; display: inline-flex">
                            <div style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Tambah Pengguna</div>
                        </div>
                    </div>
                    <div style="align-self: stretch; height: 530px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                        <!-- stepper -->
                        <div style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex">
                            <div style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                            <div style="width: 48px; height: 48px; position: relative">
                                <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #394E91; border-radius: 9999px"></div>
                                <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">1</div>
                            </div>
                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">KTP</div>
                        </div>
                        <div style="flex: 1 1 0; height: 0px; border: 1px #DADDE5 solid"></div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                            <div style="width: 48px; height: 48px; position: relative">
                                <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #394E91; border-radius: 9999px"></div>
                                <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">2</div>
                            </div>
                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Kartu Keluarga</div>
                        </div>
                        <div style="flex: 1 1 0; height: 0px; border: 1px #DADDE5 solid"></div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                            <div style="width: 48px; height: 48px; position: relative">
                                <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #394E91; border-radius: 9999px"></div>
                                <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">3</div>
                            </div>
                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Loyalty Card</div>
                        </div>
                        <div style="flex: 1 1 0; height: 0px; border: 1px #DADDE5 solid"></div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                            <div style="width: 48px; height: 48px; position: relative">
                                <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #394E91; border-radius: 9999px"></div>
                                <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">4</div>
                            </div>
                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">BPJS</div>
                        </div>
                        <div style="flex: 1 1 0; height: 0px; border: 1px #DADDE5 solid"></div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                            <div style="width: 48px; height: 48px; position: relative">
                                <div style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #757575; border-radius: 9999px"></div>
                                <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">5</div>
                            </div>
                            <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Informasi Lainnya</div>
                        </div>
                    </div>

                    <!-- main content -->
                    <div style="align-self: stretch; padding-left: 40px; padding-right: 40px; padding-top: 32px; padding-bottom: 32px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: flex">
                        <div style="align-self: stretch; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">BPJS</div>
                        </div>
                        <div style="align-self: stretch; height: 200px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                            
                            <!-- No BPJS -->
                            <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor BPJS</div>
                                <input type="text" placeholder="Masukkan Nomor BPJS" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                <!-- <div style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                    <div style="width: 1456px; height: 24px; padding-right: 1366px; justify-content: flex-start; align-items: center; display: flex">
                                        <div style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Placeholder</div>
                                    </div>
                                </div> -->
                            </div>

                            <!-- Jenis Kartu BPJS -->
                                <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu BPJS</div>
                                    <select class="form-select p-3 align-self-stretch" style="border-radius: 5px; border: 1px #DADDE5 solid;">
                                        <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">--Pilih salah satu--</option>
                                        <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PBI APBD</option>
                                        <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">PBI APBN</option>
                                        <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Mandiri</option>
                                        <option style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Perusahaan</option>
                                    </select>
                                    <!-- <div style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 10px; border: 1px #DADDE5 solid; justify-content: space-between; align-items: center; display: inline-flex">
                                        <div style="width: 1432px; height: 24px; padding-right: 1319px; justify-content: flex-start; align-items: center; display: flex">
                                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</div>
                                        </div>
                                        <div style="width: 24px; height: 24px; position: relative">
                                            <div style="width: 11.17px; height: 6.58px; left: 6.41px; top: 9px; position: absolute; background: #1D1B20"></div>
                                        </div>
                                    </div> -->
                                </div>

                        </div>
                        <div style="align-self: stretch; justify-content: flex-end; align-items: flex-start; gap: 8px; display: inline-flex">
                            <div style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Sebelumnya</div>
                            </div>
                            <div style="padding: 16px; background: #394E91; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                                <div style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Selanjutnya</div>
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