<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Peminjam</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
        }

        .card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
        }

        .left-panel {
            background: #4f46e5;
            color: white;
        }

        .btn-custom {
            background: #4f46e5;
            color: white;
        }

        .btn-custom:hover {
            background: #4338ca;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center">

<div class="col-md-8 col-lg-6">
    <div class="card shadow-lg">
        <div class="row g-0">

            <!-- LEFT -->
            <div class="col-md-5 left-panel d-flex align-items-center justify-content-center p-4">
                <div class="text-center">
                    <h3>Register</h3>
                    <p class="small">Buat akun peminjam</p>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-md-7 p-4 bg-white">

                <h5 class="mb-3">Form Register</h5>

                <form method="POST" action="{{ route('register.peminjam.proses') }}">
                    @csrf

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button class="btn btn-custom w-100">
                        Register
                    </button>
                </form>

                <hr>

                <p class="text-center small">
                    Sudah punya akun?
                    <a href="{{ route('login.peminjam') }}">Login</a>
                </p>

            </div>
        </div>
    </div>
</div>

</body>
</html>