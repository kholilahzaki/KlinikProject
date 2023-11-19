<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Klinik Raycare - Login</title>

        <!-- bootstraps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- css -->
        <link rel="stylesheet" href="css/login.css">

        <style>
            body {  
                width: auto; 
                height: auto; 
            }
        </style>
    </head>

    <body class="position-absolute top-50 start-50 translate-middle">
    <!-- <div> -->
        <div style="flex: 1 1 0; align-self: stretch; flex-direction: column; justify-content: center; align-items: center; display: inline-blox;">
            <div style="padding: 56px; background: #E8EAF2; border-radius: 10px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex; width: 400px;">
                
            <!-- Alert Registrasi Berhasil -->
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

                <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: center; display: flex">
                    <div style="text-align: justify; color: #394E91; font-size: 40px; font-family:'Inter', Sans-serif; font-weight: 700; line-height: 56px; word-wrap: break-word">Klinik Raycare</div>
                    <div style="text-align: justify; color: #5C6EA8; font-size: 20px; font-family:'Inter', Sans-serif; font-weight: 500; line-height: 28px; word-wrap: break-word">Born to Serve</div>
                </div>
                <div style="align-self: stretch; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
              
                <form action="/login" method="post" style="width: 100%;">
                @csrf
                    <div style="width: 100%; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 3px; display: flex">
                        <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family:'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Username</div>
                            <input class="form-control @error('username') is-invalid @enderror" type="text" style="width: 100%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="username" id="username" placeholder="Masukkan username" value="{{ old('username') }}" required autofocus>
                            <!-- <div style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                <div style="width: 580px; height: 24px; padding-right: 417px; justify-content: flex-start; align-items: center; display: flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family:'Inter', Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Masukkan email anda</div>
                                </div>
                            </div> -->
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <medium>{{ $message }}</medium>
                                </span>
                            @enderror
                        </div>
                        <div style="align-self: stretch; height: 88px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 8px; display: flex">
                            <div style="text-align: justify; color: #1D1B20; font-size: 16px; font-family:'Inter', Sans-serif; font-weight: 500; line-height: 24px; word-wrap: break-word">Password</div>
                            <input class="form-control" type="password" style="width: 100%; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex" name="password" id="password" placeholder="Masukkan Password" value="" required>
                            <!-- <div style="align-self: stretch; padding: 16px; background: #FAFAFA; border-radius: 5px; border: 1px #DADDE5 solid; justify-content: flex-start; align-items: center; display: inline-flex">
                                <div style="width: 580px; height: 24px; padding-right: 383px; justify-content: flex-start; align-items: center; display: flex">
                                    <div style="text-align: justify; color: #757575; font-size: 16px; font-family:'Inter', Sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word">Masukkan password anda</div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="align-self: stretch; padding: 16px; background: #394E91; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                        <div style="text-align: justify; color: white; font-size: 16px; font-family:'Inter', Sans-serif; font-weight: 600; line-height: 24px; word-wrap: break-word">Masuk</div>
                    </button>
                </form>
                <small style="align-self: stretch; justify-content: center; align-items: center; display: flex;gap: 4px;">Belum punya akun? <a href="/register">Daftar sekarang!</a></small>
                <!-- <div style="align-self: stretch; padding: 16px; background: #394E91; border-radius: 10px; justify-content: center; align-items: center; display: inline-flex">
                    <div style="text-align: justify; color: white; font-size: 16px; font-family:'Inter', Sans-serif; font-weight: 600; line-height: 24px; word-wrap: break-word">Login</div>
                </div> -->
            </div>
        </div>
    <!-- </div> -->
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>