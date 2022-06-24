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
    <body>
    <nav class="navbar navbar-expand-lg bg-primary bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand" href="../dashboard"><img src="{{ asset('../resources/img/logo.png') }}" alt="" width="100" height="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light fs-4" aria-current="page" href="../pelanggan">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-4" href="../golongan">Golongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-4" href="../user/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container-fluid w-100 border-start border-end border-bottom text-start py-4 align-middle" style="height:600px">
            <h3 class="mb-5">Tambah Pelanggan</h3>
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
            </div>
            @endif
            <form action="store" method="post" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control @error('pel_nama')
                        is-invalid
                    @enderror" placeholder="Nama Pelanggan" name="pel_nama">
                </div>
                <div class="col-md-6">
                    <label class="form-label">NIK KTP</label>
                    <input type="text" class="form-control @error('pel_ktp')
                        is-invalid
                    @enderror" placeholder="NIK KTP" name="pel_ktp">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat" name="pel_alamat">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Handphone</label>
                    <input type="text" class="form-control" placeholder="Handphone" name="pel_hp">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Nomor Pelanggan</label>
                    <input type="text" class="form-control" placeholder="Nomor Pelanggan" name="pel_no">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Golongan</label>
                    <select class="form-select" name="pel_id_gol">
                        <option selected>Pilih...</option>
                        @foreach ($golongans as $gol_nama)
                            <option value="{{ $gol_nama->id }}">{{ $gol_nama->gol_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Seri Pelanggan</label>
                    <input type="text" class="form-control" placeholder="Seri Pelanggan" name="pel_seri">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Aktif</label>
                    <select class="form-select" name="pel_aktif">
                        <option value=""    >Pilih...</option>
                        <option value="Y">Aktif</option>
                        <option value="N">Tidak Aktif</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Nomor Meteran</label>
                    <input type="text" class="form-control" placeholder="Nomor Meteran" name="pel_meteran">
                </div>
                <div class="col-md-4">
                    <label class="form-label">User</label>
                    <select class="form-select" name="pel_id_user">
                        <option selected value="">Pilih...</option>
                        @foreach ($users as $user_nama)
                            <option value="{{ $user_nama->id }}">{{ $user_nama->user_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-warning" name="btn_tambah">Tambah</button>
                </div>
            </form>
        </div>
        <p class="position-absolute top-100 start-50 translate-middle text-center mt-5">Copyright &copy; 2022<br>Created by Dwi Yanti Laily</p>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>