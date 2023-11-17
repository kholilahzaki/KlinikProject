<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/app.css">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
    </head>
    <body>
        <!-- navbar -->
        <header>
            <div style="width: 100%; height: 100%; padding-left: 40px; padding-right: 40px; padding-top: 16px; padding-bottom: 16px; background: white; box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.25); justify-content: space-between; align-items: center; display: inline-flex">
                <div style="text-align: justify; color: #394E91; font-size: 18px; font-family: Inter; font-weight: 700; line-height: 25.20px; word-wrap: break-word">NAME</div>
                <div style="flex: 1 1 0; justify-content: center; align-items: center; gap: 24px; display: flex">
                    <div style="width: 83px; justify-content: center; align-items: center; display: flex">
                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Dashboard</div>
                    </div>
                    <div style="width: 44px; justify-content: center; align-items: center; display: flex">
                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Acara</div>
                    </div>
                    <div style="width: 31px; justify-content: center; align-items: center; display: flex">
                        <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">TPS</div>
                    </div>
                </div>
                <div style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: flex">
                    <div style="text-align: justify; color: #394E91; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Button</div>
                </div>
            </div>    
        </header>

        <!-- main content -->
        <div class="main">

            <!-- title page -->
            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex;">
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
            
            <!-- card -->
            <div class="container">
                <!-- <div class="progress-bar">
                    <div class="step">
                        <p>
                            Name
                        </p>
                        <div class="bullet">
                            <span>1</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            Contact
                        </p>
                        <div class="bullet">
                            <span>2</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            Birth
                        </p>
                        <div class="bullet">
                            <span>3</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                            <p>
                                Submit
                            </p>
                            <div class="bullet">
                                <span>4</span>
                            </div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>
                            Final
                        </p>
                        <div class="bullet">
                            <span>5</span>
                        </div>
                        <div class="check fas fa-check"></div>
                    </div>
                </div> -->
                <div class="form-outer">
                    <form action="#">
                        <div class="page slide-page">
                            <div style="width: 100%; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">NIK</div>
                                <input type="text" id="nik" placeholder="Masukkan NIK Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex;">
                            </div>
                            <div style="width: 100%; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama</div>
                                <input type="text" id="nama-pengguna" placeholder="Masukkan Nama Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex;">
                            </div>
                            <div class="row" style="margin-bottom: 24px;">
                                <div class="col-6" style=" flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Tempat Lahir</div>
                                    <input type="text" id="tempat-lahir" placeholder="Masukkan Tempat Lahir Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                </div>
                                <div class="col-6" style=" flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Lahir</div>
                                    <input type="date" id="tanggal-lahir" placeholder="Masukkan Tanggal Lahir Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                </div>
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kelamin</div>
                                <div style="justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="laki-laki">
                                        <label class="form-check-label" for="laki-laki" style="text-align: right; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="perempuan">
                                        <label class="form-check-label" for="perempuan" style="text-align: right; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 24px;">
                                <div class="col-6" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Provinsi</div>
                                    <select class="form-select" style="padding-top: 16px; padding-bottom: 16px; padding-left: 16px; width: 100%; border-radius: 5px; border: 1px #DADDE5 solid;">
                                        <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                        <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">One</option>
                                        <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Two</option>
                                        <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Three</option>
                                    </select>
                                </div>
                                <div class="col-6" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Kabupaten/Kota</div>
                                    <select class="form-select p-3" style="padding-top: 16px; padding-bottom: 16px; padding-left: 16px; width: 100%; border-radius: 5px; border: 1px #DADDE5 solid;">
                                        <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                        <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">One</option>
                                        <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Two</option>
                                        <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 24px;">
                                <div class="col-6" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Kecamatan</div>
                                    <select class="form-select p-3" style="padding-top: 16px; padding-bottom: 16px; padding-left: 16px; width: 100%; border-radius: 5px; border: 1px #DADDE5 solid;">
                                        <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                        <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">One</option>
                                        <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Two</option>
                                        <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Three</option>
                                    </select>
                                </div>
                                <div class="col-6" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Kode Pos</div>
                                    <input type="text" id="kode-pos" placeholder="Masukkan Kode Pos" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex;">
                                </div>
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat Lengkap</div>
                                <div style="align-self: stretch; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                    <textarea id="alamat" placeholder="Masukkan Alamat Lengkap Pengguna" rows="3" style="align-self: stretch; padding-top: 16px; padding-left: 16px; padding-right: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex"></textarea>
                                    <div style="padding-right: 110px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 14px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 21px; word-wrap: break-word">???</div>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Agama</div>
                                <select class="form-select p-3" style="padding-top: 16px; padding-bottom: 16px; padding-left: 16px; width: 100%; border-radius: 5px; border: 1px #DADDE5 solid;">
                                    <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                    <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Budha</option>
                                    <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Hindu</option>
                                    <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Islam</option>
                                    <option value="4" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Kristen</option>
                                    <option value="5" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Katolik</option>
                                    <option value="6" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Khonghucu</option>
                                </select>
                            </div>
                            <div style="width: 100%; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Status Nikah</div>
                                <select class="form-select p-3" style="padding-top: 16px; padding-bottom: 16px; padding-left: 16px; width: 100%; border-radius: 5px; border: 1px #DADDE5 solid;">
                                    <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                    <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Kawin</option>
                                    <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Tidak Kawin</option>
                                </select>
                            </div>
                            <div style="width: 100%; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Pekerjaan</div>
                                <input type="text" id="pekerjaan" placeholder="Masukkan Pekerjaan Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex;">
                            </div>
                            <div style="width: 100%; justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex; margin-bottom: 24px;">
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Warna Negara</div>
                                    <select class="form-select p-3" style="padding-top: 16px; padding-bottom: 16px; padding-left: 16px; width: 100%; border-radius: 5px; border: 1px #DADDE5 solid;">
                                        <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                        <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">WNI</option>
                                        <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">WNA</option>
                                    </select>
                                </div>
                                <div style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: inline-flex">
                                    <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Asal Negara</div>
                                    <select class="form-select p-3" style="padding-top: 16px; padding-bottom: 16px; padding-left: 16px; width: 100%; border-radius: 5px; border: 1px #DADDE5 solid;">
                                        <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                        <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">One</option>
                                        <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Two</option>
                                        <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Unggah File KTP</div>
                                <div style="width: 100%; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                    <input class="form-control" type="file" id="formFile" style="padding: 16px; padding-right: 48px; justify-content: flex-start; align-items: center; display: inline-flex; border-radius: 5px; border: 1px #DADDE5 solid;">
                                    <div style="padding-right: 110px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 14px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 21px; word-wrap: break-word">Format: JPG atau PDF</div>
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-end; display: flex">
                                <button type="button" class="firstNext btnNext btn">Selanjutnya</button>
                            </div>
                        </div>

                        <!-- kartu keluarga -->
                        <div class="page">
                            <div style="width: 100%; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Status</div>
                                <select class="form-select p-3" style="padding-top: 16px; padding-bottom: 16px; padding-left: 16px; width: 80%; border-radius: 5px; border: 1px #DADDE5 solid;">
                                    <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                    <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Kepala Keluarga</option>
                                    <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pasangan</option>
                                    <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Anak</option>
                                </select>
                            </div>
                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">No KK</div>
                                <input type="text" id="nik" placeholder="Masukkan NIK Pengguna" style="width: 80%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex;">
                            </div>
                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">No Dokumen KK</div>
                                <input type="text" id="nik" placeholder="Masukkan NIK Pengguna" style="width: 80%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex;">
                            </div>
                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Nama</div>
                                <input type="text" id="nik" placeholder="Masukkan NIK Pengguna" style="width: 80%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex;">
                            </div>
                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Unggah File KK</div>
                                <div style="width: 80%; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                    <input class="form-control" type="file" id="formFile" style="padding: 16px; padding-right: 48px; justify-content: flex-start; align-items: center; display: inline-flex; border-radius: 5px; border: 1px #DADDE5 solid;">
                                    <div style="padding-right: 110px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 14px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 21px; word-wrap: break-word">Format: JPG atau PDF</div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="field btns">
                                <button class="prev-1 prev">Previous</button>
                                <button class="next-1 next">Next</button>
                            </div> -->
                            <div class="d-flex flex-row-reverse" style="gap: 8px; width: 80%;">
                                <button type="button" class="next-1 btnNext btn btn-primary">Selanjutnya</button>
                                <button type="button" class="prev-1 btnPrev btn btn-outline-light">Sebelumnya</button>
                            </div>
                        </div>

                        <!-- Loyalty Card -->
                        <div class="page">
                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">No Loyalty Card</div>
                                <input type="text" id="nik" placeholder="Masukkan NIK Pengguna" style="width: 80%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex;">
                            </div>
                            <div style="width: 100%; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu</div>
                                <select class="form-select p-3" style="padding-top: 16px; padding-bottom: 16px; padding-left: 16px; width: 80%; border-radius: 5px; border: 1px #DADDE5 solid;">
                                    <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                    <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">L</option>
                                    <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">R</option>
                                    <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">LR</option>
                                    <option value="4" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">LN</option>
                                    <option value="5" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">PADI</option>
                                </select>
                            </div>
                            <div style="width: 80%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Tanggal Lahir</div>
                                <input type="date" id="tanggal-lahir" placeholder="Masukkan Tanggal Lahir Pengguna" style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex;">
                            </div>
                            <div class="d-flex flex-row-reverse" style="gap: 8px; width: 80%;">
                                <button type="button" class="next-2 btnNext btn btn-primary">Selanjutnya</button>
                                <button type="button" class="prev-2 btnPrev btn btn-outline-light">Sebelumnya</button>
                            </div>
                        </div>

                        <!-- BPJS -->
                        <div class="page">
                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor BPJS</div>
                                <input type="text" id="nik" placeholder="Masukkan NIK Pengguna" style="width: 80%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex;">
                            </div>
                            <div style="width: 100%; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Jenis Kartu BPJS</div>
                                <select class="form-select p-3" style="padding-top: 16px; padding-bottom: 16px; padding-left: 16px; width: 80%; border-radius: 5px; border: 1px #DADDE5 solid;">
                                    <option selected style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Pilih salah satu</option>
                                    <option value="1" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">PBI APBD</option>
                                    <option value="2" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">PBI APBN</option>
                                    <option value="3" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Mandiri</option>
                                    <option value="4" style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Perusahaan</option>
                                </select>
                            </div>
                            <div class="d-flex flex-row-reverse" style="gap: 8px; width: 80%;">
                                <button type="button" class="next-3 btnNext btn btn-primary">Selanjutnya</button>
                                <button type="button" class="prev-3 btnPrev btn btn-outline-light">Sebelumnya</button>
                            </div>
                        </div>

                        <!-- Informasi Lainnya -->
                        <div class="page">
                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Nomor Telepon</div>
                                <input type="text" id="nik" placeholder="Masukkan NIK Pengguna" style="width: 80%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex;">
                            </div>
                            <!-- TPS-->
                            <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">TPS</div>
                                <input type="text" id="nik" placeholder="Masukkan NIK Pengguna" style="width: 80%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex;">
                            </div>
                            <!-- Alamat TPS -->
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Alamat TPS</div>
                                <div style="align-self: stretch; border-radius: 5px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 4px; display: flex">
                                    <textarea id="alamat" placeholder="Masukkan Alamat Lengkap Pengguna" rows="3" style="align-self: stretch; padding-top: 16px; padding-left: 16px; padding-right: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex"></textarea>
                                    <!-- <div style="padding-right: 110px; justify-content: flex-start; align-items: center; display: inline-flex">
                                        <div style="text-align: justify; color: #757575; font-size: 14px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 21px; word-wrap: break-word">???</div>
                                    </div> -->
                                </div>
                            </div>
                            <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex; margin-bottom: 24px;">
                                <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Penyandang Disabilitas</div>
                                <div style="justify-content: flex-start; align-items: flex-start; gap: 24px; display: inline-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="laki-laki">
                                        <label class="form-check-label" for="laki-laki" style="text-align: right; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Iya, memiliki disabilitas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="perempuan">
                                        <label class="form-check-label" for="perempuan" style="text-align: right; color: #1D1B20; font-size: 16px; font-family: 'Inter', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse" style="gap: 8px; width: 80%;">
                                <button type="button" class="submit btnNext btn btn-primary">Tambah Pengguna</button>
                                <button type="button" class="prev-4 btnPrev btn btn-outline-light">Sebelumnya</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      <script src="script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   </body>
</html>