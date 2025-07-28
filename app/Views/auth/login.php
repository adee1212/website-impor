<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg mt-5 animate__animated animate__fadeIn">
                <div class="card-header" style="background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);">
                    <h3 class="mb-0 text-center text-white"><i class="fas fa-ship mr-2"></i>Login Import System</h3>
                </div>
                <div class="card-body p-4">
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger animate__animated animate__shakeX">
                            <i class="fas fa-exclamation-circle mr-2"></i><?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <form action="/login/process" method="post" id="loginForm">
                        <?= csrf_field() ?>
                        
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group animate__animated animate__fadeInLeft">
                                <span class="input-group-text" style="background-color: #3498db; color: white;">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" 
                                       placeholder="Masukkan email Anda" required>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group animate__animated animate__fadeInRight">
                                <span class="input-group-text" style="background-color: #3498db; color: white;">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" class="form-control" id="password" name="password" 
                                       placeholder="Masukkan password Anda" required>
                                <span class="input-group-text toggle-password" style="cursor: pointer; background-color: #e9ecef;">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block animate__animated animate__pulse animate__infinite animate__slower">
                                <i class="fas fa-sign-in-alt mr-1"></i> Masuk
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center" style="background-color: #ecf0f1;">
                    <small class="text-muted">Belum punya akun? <a href="/register" style="color: #3498db;">Daftar disini</a></small><br>
                    <small class="text-muted"><a href="/forgot-password" style="color: #3498db;">Lupa password?</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
    body {
        background-color: #f5f7fa;
        background-image: url('https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-blend-mode: overlay;
        background-color: rgba(245, 247, 250, 0.9);
    }
    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .card-header {
        border-radius: 0 !important;
        padding: 1.5rem;
    }
    .input-group-text {
        border-right: none;
        transition: all 0.3s ease;
    }
    .form-control {
        border-left: none;
        padding-left: 0;
        transition: all 0.3s ease;
    }
    .form-control:focus {
        border-color: #ced4da;
        box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
    }
    .btn-block {
        padding: 0.75rem;
        font-weight: 500;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
    }
    .btn-primary {
        background-color: #3498db;
        border-color: #3498db;
    }
    .btn-primary:hover {
        background-color: #2980b9;
        border-color: #2980b9;
        transform: translateY(-2px);
    }
    a {
        transition: all 0.3s ease;
    }
    a:hover {
        text-decoration: none;
        opacity: 0.8;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility
    const togglePassword = document.querySelector('.toggle-password');
    const password = document.querySelector('#password');
    
    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
    });

    // Form submission animation
    const form = document.getElementById('loginForm');
    form.addEventListener('submit', function(e) {
        const btn = this.querySelector('button[type="submit"]');
        btn.classList.remove('animate__pulse');
        btn.classList.add('animate__heartBeat');
        btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-1"></i> Memproses...';
    });
    
    // Input focus effects
    const inputs = document.querySelectorAll('.form-control');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.querySelector('.input-group-text').style.backgroundColor = '#2980b9';
            this.parentElement.querySelector('.input-group-text').style.color = 'white';
        });
        input.addEventListener('blur', function() {
            this.parentElement.querySelector('.input-group-text').style.backgroundColor = '#3498db';
            this.parentElement.querySelector('.input-group-text').style.color = 'white';
        });
    });
});
</script>

<?= $this->endSection() ?>