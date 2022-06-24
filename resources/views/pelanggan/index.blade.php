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
            <a class="navbar-brand" href="dashboard"><img src="{{ asset('../resources/img/logo.png') }}" alt="" width="100" height="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light fs-4" aria-current="page" href="pelanggan">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-4" href="golongan">Golongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fs-4" href="user/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container-fluid w-100 border-start border-end border-bottom text-start py-4 align-middle" style="height:550px">
        <a href="pelanggan/create" class="btn btn-dark mb-2 float-end">Tambah Pelanggan</a>
            <table class="table table-striped">
                <tr class="table-primary text-center">
                    <th>ID</td>
                    <th>Nama Pelanggan</td>
                    <th>Nomor Pelanggan</td>
                    <th>NIK</td>
                    <th>Golongan</td>
                    <th>Alamat</td>
                    <th>No. Hp</td>
                    <th>Meteran Pelanggan</td>
                    <th>Aktif</td>
                    <th>User</td>
                    <th colspan="2" >Aksi</td>
                </tr>
                @foreach ($rows as $row)
                <tr>   
                    <td class="text-center">{{ $row->id }}</td>
                    <td>{{ $row->pel_nama }}</td>
                    <td class="text-center">{{ $row->pel_no }}</td>
                    <td class="text-center">{{ $row->pel_ktp }}</td>
                    <td class="text-center">{{ $row->pel_id_gol }}</td>
                    <td>{{ $row->pel_alamat }}</td>
                    <td class="text-center">{{ $row->pel_hp }}</td>
                    <td class="text-center">{{ $row->pel_meteran }}</td>
                    <td class="text-center">{{ $row->pel_aktif }}</td>
                    <td class="text-center">{{ $row->pel_id_user }}</td>
                    <td class="text-center" style="width:50px;"><a href="pelanggan/edit/{{ $row->id }}" class="badge text-bg-success text-decoration-none">Edit</a></td>
                    <td class="text-center" style="width:50px;"><a href="pelanggan/hapus/{{ $row->id }}" class="badge text-bg-danger text-decoration-none" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');">Hapus</a></td>    
                </tr>
                @endforeach
            </table>
        </div>
        <p class="position-absolute top-100 start-50 translate-middle text-center mt-5">Copyright &copy; 2022<br>Created by Dwi Yanti Laily</p>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>