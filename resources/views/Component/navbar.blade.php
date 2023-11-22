<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- css -->
        <link rel="stylesheet" href="/css/styles.css">

        <style>
            a.nav-link {
                color: #394E91;
                font-size: 16px;
                font-family: Inter;
                font-weight: 500;
                line-height: 24px;
                word-wrap: break-word
            }
            /* lihat hover warnanya di figma: success */
            a.nav-link:hover {
                color: #293A79;
                font-size: 16px;
                font-family: Inter;
                font-weight: 500;
                line-height: 24px;
                word-wrap: break-word;
            } 
            a.nav-link:focus {
                color: #1E2A62;
                font-size: 16px;
                font-family: Inter;
                font-weight: 600;
                line-height: 24px;
                word-wrap: break-word;
            }
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
                    <li><a class="body-medium nav-link px-2" href="/">Dashboard</a></li>
                    <li><a class="body-medium nav-link px-2"  href="/Event">Acara</a></li>
                </ul>

                <div class="col-md-3 text-end">
                    <a href="/logout"><button type="button" class="btn btn-primary">Logout</button></a>
                </div>
            </div>
        </header>

        <!-- <main>
            @yield('content')
        </main> -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

</html>