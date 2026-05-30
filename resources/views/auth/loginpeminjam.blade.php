@extends('layouts.apptamu')

@section('content')

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

    body{
        background: linear-gradient(135deg, #198754, #20c997);
        min-height: 100vh;
    }

    .login-wrapper{
        min-height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-login{
        border: none;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .header-login{
        background: #198754;
        color: white;
        padding: 25px;
        text-align: center;
    }

    .header-login h3{
        margin: 0;
        font-weight: bold;
    }

    .body-login{
        padding: 30px;
        background: white;
    }

    .form-control{
        height: 48px;
        border-radius: 12px;
    }

    .input-group-text{
        background: #f1f1f1;
        border-radius: 12px 0 0 12px;
    }

    .btn-login{
        height: 48px;
        border-radius: 12px;
        font-weight: bold;
    }

    .toggle-pass{
        cursor: pointer;
        background: #f1f1f1;
    }

    .divider{
        text-align: center;
        margin: 20px 0;
        color: #888;
    }

    .register-box{
        border-top: 1px solid #eee;
        padding-top: 20px;
        margin-top: 20px;
    }

    .btn-register{
        background: #0d6efd;
        color: white;
        border-radius: 12px;
        font-weight: bold;
    }

</style>

<div class="container login-wrapper">

    <div class="col-md-5">

        <div class="card card-login">

            <!-- HEADER -->
            <div class="header-login">
                <h3>Login Peminjam</h3>
                <small>Sistem Peminjaman Alat</small>
            </div>

            <div class="body-login">

                {{-- ERROR --}}
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- LOGIN FORM -->
                <form method="POST" action="{{ route('login.peminjam.proses') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="fw-semibold">Username</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person"></i>
                            </span>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="fw-semibold">Password</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-lock"></i>
                            </span>

                            <input type="password" id="password" name="password" class="form-control" required>

                            <span class="input-group-text toggle-pass" onclick="togglePassword()">
                                <i class="bi bi-eye" id="iconPass"></i>
                            </span>
                        </div>
                    </div>

                    <button class="btn btn-success w-100 btn-login">
                        LOGIN
                    </button>

                </form>

                

                   <p class="text-center small">
                    Belum punya akun?
                    <a href="{{ route('register.peminjam') }}">register</a>
                </p>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script>
function togglePassword(){
    let pass = document.getElementById('password');
    let icon = document.getElementById('iconPass');

    if(pass.type === 'password'){
        pass.type = 'text';
        icon.classList.replace('bi-eye','bi-eye-slash');
    }else{
        pass.type = 'password';
        icon.classList.replace('bi-eye-slash','bi-eye');
    }
}
</script>

@endsection