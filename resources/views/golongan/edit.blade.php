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
            <a class="navbar-brand" href="../../dashboard"><img src="{{ asset('../resources/img/logo.png') }}" alt="" width="100" height="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light fs-4" aria-current="page" href="../../pelanggan">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-4" href="../../golongan">Golongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-4" href="../../user/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container-fluid w-100 border-start border-end border-bottom text-start py-4 align-middle" style="height:600px">
            <h3 class="mb-5">Edit Golongan</h3>
            <form action="../update/{{ $golongan->id }}" method="post" class="row g-3">
                @method('put')
                @csrf
            <input type="hidden" name="gol_id" value="">
                <div class="">
                    <label class="form-label">Nama Golongan</label>
                    <input type="text" class="form-control w-50" placeholder="Nama Golongan" name="gol_nama" value="{{ $golongan->gol_nama }}" required>
                </div>
                <div class="">
                    <label class="form-label">Kode Golongan</label>
                    <input type="text" class="form-control w-50" placeholder="Kode Golongan" name="gol_kode" value="{{ $golongan->gol_kode }}" disabled>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-warning" name="btn_update">Simpan</button>
                </div>
            </form>
        </div>
        <p class="position-absolute top-100 start-50 translate-middle text-center mt-5">Copyright &copy; 2022<br>Created by Dwi Yanti Laily</p>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>