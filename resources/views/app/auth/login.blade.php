<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glassmorphism Login Form | CodingNepal</title>
  <link rel="stylesheet" href="{{ asset('app/css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
  <div class="wrapper">
    <form action="{{ route('login.submit') }}" method="post">
    @csrf
    <h2>Sistem Informasi Tembok Berita</h2>
    <div class="input-field">
        <input type="email" name="email" required>
        <label>Masukkan Email</label>
        @error('email')
            <span style="color: red; font-size: 12px;">{{ $message }}</span>
        @enderror
    </div>
    <div class="input-field">
        <input type="password" name="password" required>
        <label>Masukkan Password</label>
        @error('password')
            <span style="color: red; font-size: 12px;">{{ $message }}</span>
        @enderror
    </div>
    <div class="forget">
        <label for="remember">
            <input type="checkbox" id="remember" name="remember_me">
            <p>Ingat Saya</p>
        </label>
        <a href="#">Lupa Kata Sandi?</a>
    </div>
    <button type="submit">Masuk</button>
    <div style="text-align: center; color: #fff; margin-top: 20px;">
        <p style="font-size: 12px;">ATAU</p>
    </div>
    <div class="google-login" style="margin-top: 20px;">
        <a href="{{ route('login.google') }}" style="display: inline-block; padding: 10px 20px; background: #dd4b39; color: #fff; border-radius: 2px; font-weight: bold;">
            <i class="fab fa-google"></i> Masuk Dengan Google
        </a>
    </div>
    <div class="register">
        <p>Belum Punya Akun? <a href="#">Mendaftar</a></p>
    </div>
</form>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: "{{ session('error') }}"
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: "{{ session('success') }}"
            });
        </script>
    @endif

</body>
</html>
