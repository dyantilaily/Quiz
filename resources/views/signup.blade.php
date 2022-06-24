<!doctype html>
<html lang="en" class="ms-5 me-5">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="{{ asset('../resources/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('../resources/img/logo.png') }}">

        <title>PLN</title>
    </head>
        <div class="container-fluid w-100 border-start border-end border-bottom text-start py-4 align-middle" style="height:600px">
            <h3 class="mb-5">Form Registrasi</h3>
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }} <a href="../public">Silahkan Login</a>
                <button class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
            </div>
            @endif
            <form action="user/store" method="post" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label class="form-label">Nama User</label>
                    <input type="text" class="form-control" placeholder="Nama User" name="user_nama" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Handphone</label>
                    <input type="text" class="form-control" placeholder="Handphone" name="user_hp" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="user_email" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="user_password" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat" name="user_alamat" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Kode Pos</label>
                    <input type="text" class="form-control" placeholder="Kode Pos" name="user_pos" required>
                </div>
                <div class="w-50">
                    <label class="form-label">Aktif</label>
                    <select class="form-select w-50" name="user_aktif">
                        <option selected>Pilih...</option>
                        <option value="1">Aktif</option>
                        <option value="2">Tidak Aktif</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Role</label>
                    <select class="form-select" name="user_role">
                        <option selected>Pilih...</option>
                        <option value="1">Administrator</option>
                        <option value="2">User</option>
                    </select>
                </div>
                <div class="col-12">
                    <a href="../public" class="btn btn-secondary" name="btn_kembali">Kembali</a>
                    <button type="submit" class="btn btn-warning" name="btn_tambah">Tambah</button>
                </div>
            </form>
        </div>
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