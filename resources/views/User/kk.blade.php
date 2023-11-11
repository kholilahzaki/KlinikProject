<!DOCTYPE html>
<html lang="en">
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
        <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>-->

    <div class="MainContain" style="width: 100%; height: 100%; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: inline-flex">
        <!--header judul-->
        <div class="Header" style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
            <div class="Button" style="border-radius: 10px; justify-content: center; align-items: center; gap: 4px; padding-bottom: 10px; display: inline-flex">
                <div class="ButtonIcons" style="width: 24px; height: 24px; position: relative">
                    <div class="Vector" style="width: 15.58px; height: 15.17px; left: 4.42px; top: 4.41px; position: absolute; background: #394E91"></div>
                </div>
                <div class="Button" style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; position:relative; word-wrap: break-word">Kembali ke Halaman Utama</div>
            </div>
                <div class="TitlePage" style="justify-content: center; align-items: center; display: inline-flex">
                    <div class="Dashboard" style="text-align: justify; color: #1D1B20; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Tambah Pengguna</div>
                </div>
        </div>

        <!--urutan step-->
        <div class="Stepper" style="width: 100%; height: 100%; justify-content: flex-start; align-items: center; display: inline-flex">
            <div class="Step" style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                <div class="Group143" style="width: 48px; height: 48px; position: relative">
                    <div class="Ellipse8" style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #394E91; border-radius: 9999px"></div>
                    <div class="IcRoundCheck" style="width: 32px; height: 32px; left: 8px; top: 8px; position: absolute">
                        <div class="Vector" style="width: 22.34px; height: 16.77px; left: 5.10px; top: 8.01px; position: absolute; background: white"></div>
                    </div>
                </div>
                <div class="Step1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Step 1</div>
            </div>
            <div class="Line1" style="flex: 1 1 0; height: 0px; border: 1px #DADDE5 solid"></div>
            <div class="Step" style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                <div class="Group143" style="width: 48px; height: 48px; position: relative">
                    <div class="Ellipse8" style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #394E91; border-radius: 9999px"></div>
                    <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">2</div>
                 </div>
                <div class="Step1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Step 2</div>
            </div>
            <div class="Line2" style="flex: 1 1 0; height: 0px; border: 1px #DADDE5 solid"></div>
            <div class="Step" style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                <div class="Group143" style="width: 48px; height: 48px; position: relative">
                    <div class="Ellipse8" style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #757575; border-radius: 9999px"></div>
                    <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">3</div>
                </div>
                <div class="Step1" style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Step 3</div>
            </div>
            <div class="Line3" style="flex: 1 1 0; height: 0px; border: 1px #DADDE5 solid"></div>
            <div class="Step" style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                <div class="Group143" style="width: 48px; height: 48px; position: relative">
                    <div class="Ellipse8" style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #757575; border-radius: 9999px"></div>
                     <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">4</div>
                </div>
                <div class="Step1" style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Step 4</div>
            </div>
            <div class="Line4" style="flex: 1 1 0; height: 0px; border: 1px #DADDE5 solid"></div>
            <div class="Step" style="flex-direction: column; justify-content: center; align-items: center; display: inline-flex">
                <div class="Group143" style="width: 48px; height: 48px; position: relative">
                    <div class="Ellipse8" style="width: 48px; height: 48px; left: 0px; top: 0px; position: absolute; background: #757575; border-radius: 9999px"></div>
                    <div style="left: 19px; top: 12px; position: absolute; text-align: right; color: white; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">5</div>
                </div>
                <div class="Step1" style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Step 5</div>
            </div>
        </div>
        
        <!--tabel isian-->
        <div class="Frame9" style="width: 100%; height: 100%; background: white; border-radius: 10px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 32px; display: inline-flex">
            <div class="Frame6" style="align-self: stretch; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                <div class="KartuKeluargaKk" style="text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Kartu Keluarga (KK)</div>
            </div>
            <div class="Frame5" style="align-self: stretch; height: 561px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">

                <!--status--> 
                <div class="TitleInputField" style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                    <div class="Title" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Status</div>
                    <div class="InputFields" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 10px; border: 1px #DADDE5 solid; justify-content: space-between; align-items: center; display: inline-flex">
                        <div class="Placeholder" style="width: 1432px; height: 24px; padding-right: 1319px; justify-content: flex-start; align-items: center; display: flex">
                            <div class="Placeholder" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</div>
                        </div>
                        <div class="IcRoundKeyboardArrowDown" style="width: 24px; height: 24px; position: relative">
                            <div class="Vector" style="width: 11.17px; height: 6.58px; left: 6.41px; top: 9px; position: absolute; background: #1D1B20"></div>
                        </div>
                    </div>
                </div>

                <!--no kk-->
                <div class="TitleInputField" style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                    <div class="Title" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor KK</div>
                    <input placeholder="Masukkan Nomor KK" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                    <!-- <div class="InputFields" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                        <div class="Placeholder" style="width: 1456px; height: 24px; padding-right: 1366px; justify-content: flex-start; align-items: center; display: flex">
                            <div class="Placeholder" style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Placeholder</div>
                        </div>
                    </div> -->
                </div>

                <!--no dokumen-->
                <div class="TitleInputField" style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                    <div class="Title" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Dokumen KK</div>
                    <input placeholder="Masukkan Nomor Dokumen KK" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                    <!-- <div class="InputFields" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                        <div class="Placeholder" style="width: 1456px; height: 24px; padding-right: 1366px; justify-content: flex-start; align-items: center; display: flex">
                            <div class="Placeholder" style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Placeholder</div>
                        </div>
                    </div> -->
                </div>

                <!--nama-->
                <div class="TitleInputField" style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                    <div class="Title" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama</div>
                    <input placeholder="Masukkan Nama" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                    <!-- <div class="InputFields" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                        <div class="Placeholder" style="width: 1456px; height: 24px; padding-right: 1366px; justify-content: flex-start; align-items: center; display: flex">
                            <div class="Placeholder" style="text-align: justify; color: #757575; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Placeholder</div>
                        </div>
                    </div> -->
                </div>

                <!--upload-->
                <div class="TitleInputField" style="align-self: stretch; height: 113px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                    <div class="Title" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Unggah Foto KK</div>
                    <div class="InputFields" style="align-self: stretch; height: 81px; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; display: flex">
                        <div class="Frame47" style="align-self: stretch; justify-content: flex-start; align-items: center; display: inline-flex; padding-top: 20px">
                            <div class="Frame15" style="padding: 10px; background: #757575; border-top-left-radius: 5px; border-top-right-radius: 5px; justify-content: center; align-items: center; display: flex">
                                <div class="ChooseFile" style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Choose File</div>
                            </div>
                            <div class="Frame11" style="flex: 1 1 0; height: 56px; padding: 16px; background: #FAFAFA; border-top-left-radius: 5px; border-top-right-radius: 5px; border-top: 1px #DADDE5 solid; border-right: 1px #DADDE5 solid; border-bottom: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: flex">
                                <div class="Placeholder" style="width: 133px; height: 24px; padding-right: 1243px; justify-content: flex-start; align-items: center; display: flex">
                                    <div class="Placeholder" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Dokumen KK</div>
                                </div>
                            </div>
                        </div>
                        <div class="TheFieldIsRequired" style="width: px; height: 21px; padding-right: 56px; justify-content: flex-start; align-items: center; display: inline-flex">
                            <div class="TheFieldIsRequired" style="text-align: justify; color: #757575; font-size: 14px; font-family: Inter; font-weight: 500; word-wrap: break-word">Format: PDF atau JPG</div>
                        </div>
                    </div>
                </div>
            </div>

            <!--tombol submit-->
            <div class="Frame49" style="align-self: stretch; justify-content: flex-end; align-items: flex-start; gap: 8px; display: inline-flex">
                <div class="Button" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                    <div class="Button" style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Sebelumnya</div>
                </div>
                <div class="Button" style="padding: 16px; background: #394E91; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                    <div class="Button" style="text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Selanjutnya</div>
                </div>
            </div>
        </div>
    </div>
    </main>
</body>
</html>