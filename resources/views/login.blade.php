<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('../resources/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('../resources/img/logo.png') }}">

    <title>PLN</title>
  </head>
  <body>
  <form action="user/log_in" method="post" class="container-sm w-50 border p-5 position-absolute top-50 start-50 translate-middle bg-primary bg-gradient text-center">
        <div class="container">
            <h2 class="text-light">Selamat Datang</h2>
            <h1 class="text-light">PLN</h1>
            <img class="mb-4" src="{{ asset('../resources/img/logo.png') }}" alt="" width="72" height="72">
          
            <div class="mb-1">
                <input type="email" class="form-control p-2" placeholder="Alamat Email" name="user_email" required>
                <label></label>
            </div>
            <div class="mb-4">
                <input type="password" class="form-control p-2" id="floatingPassword" placeholder="Password" name="user_password" required>
            </div>
            <button type="submit" class="btn btn-warning w-50 mb-3" name="btn_masuk">Masuk</button>
          </div>
          <div class="">
            <small class="text-light">Belum Punya Akun ? <a href="register" class="text-light">Daftar!</a> </small>
          </div>
    </form>
    
    <p class="position-absolute top-100 start-50 translate-middle text-center mt-5">Copyright &copy; 2022<br>Created by Dwi Yanti Laily</p> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>