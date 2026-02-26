<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <link rel="stylesheet" href="css/menulogin.css">
    <title>Document</title>
</head>
<body>
    <div class="container1">
        <div class="wadah1">
            <div class="judulmenu">
                <h3> 
                SELAMAT DATANG😊
                </h3>   
            </div>
            <div class="plog">
                <em><p>Mohon masukan identitas anda</p></em>
            </div>
            <div class="wadahlogin">
                <div class="logpenjual">
                    <button class="penjual" onclick="window.location.href='logpenjual.php'">
                        <i class="ri-apple-fill"> Masuk Sebagai Penjual</i> 
                    </button>
                </div>
                <div class="logguru">
                    <button class="guru" onclick="window.location.href='logguru.php'">
                        <i class="ri-apple-fill"> Masuk Sebagai Guru</i> 
                    </button>
                </div> 
            </div>
            <em>
                or
            </em>
            <div class="logemail">
                <input type="email" class="inpemail" placeholder="Email">
                <i class="ri-mail-fill"></i>
            </div>
            <div class="logpass">
                <input type="password" class="inppass" placeholder="Password">
                <i class="ri-eye-close-line"></i>
            </div>
            <div class="forgotpass">
                <em>
                    <p>
                        <a href="forgot.php">
                            Reset Sandi
                        </a>
                    </p>
                </em>
            </div>
            <button class="logpembeli">
                Masuk
            </button>
            <div class="newakun">
                <em>
                    <p>
                        Tidak Memiliki Akun? 
                        <a href="newakun.php">
                            Buat Akun
                        </a>
                    </p>
                </em>
            </div>
        </div>
    </div>
</body>
</html>