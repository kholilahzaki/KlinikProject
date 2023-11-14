<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- css -->
        <link rel="stylesheet" href="/css/styles.css">
        <title>Klinik Raycare - {{ $title }}</title>

        <style>
            a.nav-link {color: #394E91;}
            a.nav-link:hover {color: #293A79;} 
            body {background-color: #F5F6FA;}

            /* button primary */
            .button {background: #394E91;}

            /* Button in hero section */
            .button-hero {background: #7888B6;}
            .button-hero:hover {background: #5C6EA8;}
        </style>
    </head>
    <body>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a class="body-medium nav-link px-2" href="#">Dashboard</a></li>
                    <li><a class="body-medium nav-link px-2"  href="#">Acara</a></li>
                </ul>

        <main>
            <div style="width: 100%; height: 100%; flex-direction: column; justify-content: flex-start; align-items: center; display: inline-flex">

                <!-- Hero section -->
                <div style="align-self: stretch; padding-left: 176px; padding-right: 176px; padding-top: 80px; padding-bottom: 80px; background: #3F559A; flex-direction: column; justify-content: center; align-items: flex-start; gap: 24px; display: flex">
                    <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; gap: 8px; display: flex">
                        <div style="text-align: justify; color: white; font-size: 40px; font-family: Inter; font-weight: 700; line-height: 56px; word-wrap: break-word">Selamat Datang di Klinik Raycare</div>
                        <div style="align-self: stretch; text-align: justify; color: white; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                    </div>
                    <a class="btn button-hero" style="padding: 16px; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex" href="#" role="button">
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

                    <div style="align-self: stretch; padding-left: 176px; padding-right: 176px; padding-top: 40px; padding-bottom: 40px; background: white; border-radius: 10px; border: 1px #DADDE5 solid; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: flex">
                        <svg width="150" viewBox="0 0 200 197" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="undraw_no_data_re_kwbl 1" opacity="0.5" clip-path="url(#clip0_195_2852)">
                            <path id="Vector" d="M126.968 44.7929H73.077C71.849 44.7944 70.6716 45.283 69.8032 46.1513C68.9348 47.0197 68.4463 48.1971 68.4448 49.4252V169.199L67.8272 169.388L54.6068 173.436C53.9802 173.627 53.3035 173.562 52.7251 173.254C52.1467 172.947 51.7139 172.423 51.5218 171.796L12.1972 43.3446C12.0058 42.718 12.071 42.0411 12.3785 41.4626C12.686 40.8842 13.2106 40.4514 13.837 40.2595L34.2096 34.0215L93.2705 15.9434L113.643 9.70534C113.953 9.60993 114.279 9.57658 114.602 9.60722C114.925 9.63786 115.238 9.73189 115.525 9.88391C115.812 10.0359 116.065 10.243 116.272 10.4932C116.478 10.7434 116.633 11.0319 116.728 11.3421L126.78 44.1753L126.968 44.7929Z" fill="#F2F2F2"/>
                            <path id="Vector_2" d="M138.728 44.1755L126.613 4.60385C126.412 3.94452 126.082 3.33136 125.644 2.79942C125.205 2.26748 124.666 1.82718 124.057 1.50368C123.448 1.18018 122.781 0.979825 122.095 0.914063C121.409 0.848301 120.716 0.918424 120.057 1.12042L91.4145 9.88768L32.3567 27.9688L3.71411 36.7392C2.38352 37.1478 1.26941 38.0676 0.616305 39.2967C-0.0367959 40.5259 -0.175524 41.964 0.230578 43.2953L41.6366 178.535C41.9665 179.61 42.6321 180.55 43.5359 181.219C44.4396 181.887 45.5338 182.249 46.658 182.25C47.1783 182.25 47.6957 182.172 48.1927 182.018L67.8272 176.009L68.4448 175.817V175.172L67.8272 175.36L48.0106 181.428C46.8361 181.786 45.5675 181.664 44.4832 181.088C43.3989 180.512 42.5873 179.529 42.2265 178.356L0.823631 43.1131C0.644854 42.5316 0.582546 41.9205 0.640271 41.3149C0.697997 40.7092 0.874618 40.1209 1.16003 39.5837C1.44544 39.0464 1.83404 38.5707 2.30357 38.1838C2.77309 37.7969 3.31431 37.5064 3.89625 37.329L32.5389 28.5587L91.5968 10.4806L120.239 1.71026C120.681 1.57556 121.14 1.50687 121.601 1.50644C122.592 1.50867 123.555 1.82797 124.351 2.41758C125.147 3.00719 125.733 3.83612 126.024 4.78297L138.083 44.1755L138.274 44.7931H138.917L138.728 44.1755Z" fill="#3F3D56"/>
                            <path id="Vector_3" d="M37.8858 40.3606C37.2905 40.3601 36.7111 40.169 36.2325 39.8151C35.7539 39.4613 35.4013 38.9634 35.2264 38.3944L31.2488 25.402C31.1419 25.053 31.1048 24.6864 31.1396 24.3231C31.1745 23.9597 31.2805 23.6068 31.4518 23.2845C31.623 22.9621 31.8561 22.6767 32.1376 22.4444C32.4192 22.2122 32.7438 22.0377 33.0928 21.9309L87.4254 5.29692C88.1303 5.08183 88.8916 5.15519 89.5424 5.50088C90.1933 5.84656 90.6803 6.43634 90.8968 7.14076L94.8744 20.1333C95.0894 20.8382 95.0159 21.5995 94.6703 22.2502C94.3246 22.901 93.7349 23.3881 93.0306 23.6046L38.6977 40.2386C38.4346 40.3193 38.161 40.3605 37.8858 40.3606Z" fill="#394E91"/>
                            <path id="Vector_4" d="M58.7222 14.7706C62.1333 14.7706 64.8985 12.0054 64.8985 8.59428C64.8985 5.1832 62.1333 2.41797 58.7222 2.41797C55.3111 2.41797 52.5459 5.1832 52.5459 8.59428C52.5459 12.0054 55.3111 14.7706 58.7222 14.7706Z" fill="#394E91"/>
                            <path id="Vector_5" d="M58.7225 12.5052C60.8826 12.5052 62.6336 10.7541 62.6336 8.59413C62.6336 6.43413 60.8826 4.68311 58.7225 4.68311C56.5625 4.68311 54.8115 6.43413 54.8115 8.59413C54.8115 10.7541 56.5625 12.5052 58.7225 12.5052Z" fill="white"/>
                            <path id="Vector_6" d="M186.103 180.672H81.7236C81.0276 180.671 80.3604 180.395 79.8683 179.902C79.3762 179.41 79.0994 178.743 79.0986 178.047V52.977C79.0994 52.281 79.3762 51.6138 79.8683 51.1217C80.3604 50.6296 81.0276 50.3528 81.7236 50.3521H186.103C186.799 50.3529 187.466 50.6297 187.958 51.1218C188.45 51.6139 188.727 52.2811 188.728 52.977V178.047C188.727 178.743 188.45 179.41 187.958 179.902C187.466 180.394 186.799 180.671 186.103 180.672Z" fill="#E6E6E6"/>
                            <path id="Vector_7" d="M138.083 44.1753H73.077C71.6853 44.1773 70.3511 44.731 69.367 45.7151C68.3829 46.6992 67.8291 48.0334 67.8271 49.4252V175.36L68.4448 175.172V49.4252C68.4463 48.1971 68.9348 47.0197 69.8032 46.1513C70.6716 45.2829 71.8489 44.7944 73.077 44.7929H138.274L138.083 44.1753ZM194.75 44.1753H73.077C71.6853 44.1773 70.3511 44.731 69.367 45.7151C68.3829 46.6992 67.8291 48.0334 67.8271 49.4252V190.863C67.8291 192.254 68.3829 193.589 69.367 194.573C70.3511 195.557 71.6853 196.11 73.077 196.112H194.75C196.142 196.11 197.476 195.557 198.46 194.573C199.444 193.589 199.998 192.254 200 190.863V49.4252C199.998 48.0334 199.444 46.6992 198.46 45.7151C197.476 44.731 196.142 44.1773 194.75 44.1753ZM199.382 190.863C199.381 192.091 198.892 193.268 198.024 194.136C197.156 195.005 195.978 195.493 194.75 195.495H73.077C71.8489 195.493 70.6716 195.005 69.8032 194.136C68.9348 193.268 68.4463 192.091 68.4448 190.863V49.4252C68.4463 48.1971 68.9348 47.0197 69.8032 46.1513C70.6716 45.2829 71.8489 44.7944 73.077 44.7929H194.75C195.978 44.7944 197.156 45.2829 198.024 46.1513C198.892 47.0197 199.381 48.1971 199.382 49.4252V190.863Z" fill="#3F3D56"/>
                            <path id="Vector_8" d="M162.325 57.7633H105.502C104.766 57.7624 104.059 57.4693 103.538 56.9483C103.017 56.4272 102.724 55.7208 102.723 54.9839V41.396C102.724 40.6592 103.017 39.9527 103.538 39.4317C104.059 38.9106 104.766 38.6175 105.502 38.6167H162.325C163.061 38.6175 163.768 38.9106 164.289 39.4317C164.81 39.9527 165.103 40.6592 165.104 41.396V54.9839C165.103 55.7208 164.81 56.4272 164.289 56.9483C163.768 57.4693 163.061 57.7624 162.325 57.7633Z" fill="#394E91"/>
                            <path id="Vector_9" d="M133.914 39.5435C137.325 39.5435 140.09 36.7783 140.09 33.3672C140.09 29.9561 137.325 27.1909 133.914 27.1909C130.503 27.1909 127.737 29.9561 127.737 33.3672C127.737 36.7783 130.503 39.5435 133.914 39.5435Z" fill="#394E91"/>
                            <path id="Vector_10" d="M133.913 37.1289C135.991 37.1289 137.675 35.4446 137.675 33.3669C137.675 31.2893 135.991 29.605 133.913 29.605C131.836 29.605 130.151 31.2893 130.151 33.3669C130.151 35.4446 131.836 37.1289 133.913 37.1289Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_195_2852">
                            <rect width="200" height="195.225" fill="white" transform="translate(0 0.887695)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <div style="opacity: 0.50; text-align: justify; color: #394E91; font-size: 24px; font-family: Inter; font-weight: 600; line-height: 33.60px; word-wrap: break-word">Cari atau tambah pengguna untuk ditampilkan disini</div>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>