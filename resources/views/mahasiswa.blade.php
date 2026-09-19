<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UNPAM - Profile Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                UNPAM - Profile Mahasiswa
            </a>
        </div>
    </nav>

    <div class="container flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card mt-5 shadow-sm">

                    <div class="card-header bg-warning text-white text-center py-4">

                        <div class="d-flex justify-content-center mb-3">
                            <img
                                src="{{ asset('foto.jpg') }}"
                                class="rounded-circle img-thumbnail shadow-sm"
                                style="width: 120px; height: 120px; object-fit: cover;"
                                alt="Foto Profile Ali Sopyan">
                        </div>

                        <h4 class="mb-1">Data Mahasiswa</h4>

                        <span class="badge bg-success">
                            {{ $mahasiswa['status'] }}
                        </span>

                    </div>

                    <div class="card-body">

                        <p>
                            <strong>Nama:</strong>
                            {{ $mahasiswa['nama'] }}
                        </p>

                        <p>
                            <strong>NIM:</strong>
                            {{ $mahasiswa['nim'] }}
                        </p>

                        <p>
                            <strong>Jurusan:</strong>
                            {{ $mahasiswa['prodi'] }}
                        </p>

                        <p>
                            <strong>Kampus:</strong>
                            {{ $mahasiswa['kampus'] }}
                        </p>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <footer class="bg-light text-dark border-top text-center py-3 mt-auto">
        <p class="mb-0">&copy; {{ date('Y') }} UNPAM. All rights reserved.</p>
    </footer>

</body>

</html>