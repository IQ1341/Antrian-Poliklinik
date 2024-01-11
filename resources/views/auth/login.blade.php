<!-- Login Form Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background-color: #c0c7d0; /* Background color */">
        <div class="modal-header">
          <h4 class="modal-title fw-bold" id="loginModalLabel" style="color: #0476a0; /* Text color */">Form Login</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-start">
              <img src="assets/img/signin.png" class="img-fluid" alt="Login Form Image">
            </div>
            <div class="col-md-6">
              <form action="{{ url('login') }}" method="POST" novalidate>
                @csrf
  
                <div class="mb-3">
                  <label for="email" class="form-label fw-bold" style="color: #0d5771;">Email</label>
                  <input type="text" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" id="email" required
                    style="color: #0d5771; border: 1px solid #0d5771; /* Text and border color */">
                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
  
                <div class="mb-3">
                  <label for="password" class="form-label fw-bold" style="color: #0d5771;">Password</label>
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required
                    style="color: #0d5771; border: 1px solid #0d5771; /* Text and border color */">
                  @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
  
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary w-100" style="background-color: #0d5771; border-color: #0d5771; /* Button color and border color */">
                    <i class="bx bx-log-in"></i> Masuk
                  </button>
                </div>
  
                <div class="text-center">
                  <p class="mb-0">Belum Memiliki Akun?</p>
                  <a href="#" class="getstarted scrollto" data-bs-toggle="modal" data-bs-target="#registerModal" style="color: #0d5771; /* Text color */">Daftar Sekarang</a>
                </div>
              </form>
              @if(session('errors'))
<script>
                Swal.fire({
                    title: '<span style="color: #0476a0;">Gagal Login !!</span>', // Tambahkan tanda centang Unicode di sini
                    icon: 'error',
                    text: '{{ session('errors')->first('email') }}',
                    confirmButtonColor: '#0476a0',  // Warna tombol konfirmasi
                    confirmButtonText: 'OK',
                    width: '350px',  // Mengatur lebar kotak menjadi 300px
                    customClass: {
                        title: 'fw-bold',  // Font-weight bold untuk judul
                        content: 'text-dark',  // Warna teks konten
                        confirmButton: 'btn btn-primary'  // Menyesuaikan kelas tombol konfirmasi
                    }
                });
            </script>
@endif

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  