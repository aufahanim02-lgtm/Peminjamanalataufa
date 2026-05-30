@extends('layouts.apptamu')

@section('content')

<!-- Bootstrap Icon -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

    body{
        background: linear-gradient(135deg, #0d6efd, #198754);
        min-height: 100vh;
    }

    .login-wrapper{
        min-height: 85vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-card{
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        animation: fadeIn 0.5s ease;
    }

    .login-header{
        background: #0d6efd;
        color: white;
        padding: 30px;
        text-align: center;
    }

    .login-header h3{
        margin: 0;
        font-weight: bold;
    }

    .login-header p{
        margin-top: 5px;
        margin-bottom: 0;
        opacity: 0.9;
    }

    .card-body{
        padding: 35px;
        background: white;
    }

    .form-label{
        font-weight: 600;
        margin-bottom: 8px;
    }

    .form-control{
        height: 50px;
        border-radius: 12px;
    }

    .form-control:focus{
        box-shadow: none;
        border-color: #0d6efd;
    }

    .input-group-text{
        background: #f1f1f1;
        border-radius: 12px 0 0 12px;
    }

    .show-password{
        cursor: pointer;
        background: #f1f1f1;
    }

    .btn-login{
        height: 50px;
        border-radius: 12px;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-login:hover{
        transform: scale(1.02);
    }

    .footer-text{
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
        color: #777;
    }

    @keyframes fadeIn{
        from{
            opacity: 0;
            transform: translateY(20px);
        }

        to{
            opacity: 1;
            transform: translateY(0);
        }
    }

</style>

<div class="container login-wrapper">

    <div class="row justify-content-center w-100">

        <div class="col-md-5">

            <div class="card login-card">

                <!-- HEADER -->
                <div class="login-header">

                    <h3>
                        <i class="bi bi-person-circle"></i>
                        Login User
                    </h3>

                    <p>
                        Sistem Peminjaman Alat
                    </p>

                </div>

                <!-- BODY -->
                <div class="card-body">

                    {{-- ALERT ERROR --}}
                    @if(session('error'))

                        <div class="alert alert-danger">

                            {{ session('error') }}

                        </div>

                    @endif

                    <form
                    method="POST"
                    action="{{ route('login.user.proses') }}">

                        @csrf

                        <!-- USERNAME -->
                        <div class="mb-3">

                            <label class="form-label">

                                Username

                            </label>

                            <div class="input-group">

                                <span class="input-group-text">

                                    <i class="bi bi-person"></i>

                                </span>

                                <input
                                type="text"
                                name="username"
                                class="form-control"
                                placeholder="Masukkan username"
                                required>

                            </div>

                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-4">

                            <label class="form-label">

                                Password

                            </label>

                            <div class="input-group">

                                <span class="input-group-text">

                                    <i class="bi bi-lock"></i>

                                </span>

                                <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-control"
                                placeholder="Masukkan password"
                                required>

                                <span
                                class="input-group-text show-password"
                                onclick="togglePassword()">

                                    <i
                                    class="bi bi-eye"
                                    id="iconPassword"></i>

                                </span>

                            </div>

                        </div>

                        <!-- BUTTON LOGIN -->
                        <button
                        type="submit"
                        class="btn btn-primary w-100 btn-login">

                            <i class="bi bi-box-arrow-in-right"></i>

                            LOGIN

                        </button>

                    </form>

                    <!-- FOOTER -->
                    <div class="footer-text">

                        © 2026 Sistem Peminjaman Alat

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

    function togglePassword(){

        const password =
        document.getElementById('password');

        const icon =
        document.getElementById('iconPassword');

        if(password.type === 'password'){

            password.type = 'text';

            icon.classList.remove('bi-eye');

            icon.classList.add('bi-eye-slash');

        }else{

            password.type = 'password';

            icon.classList.remove('bi-eye-slash');

            icon.classList.add('bi-eye');

        }
    }

</script>

@endsection