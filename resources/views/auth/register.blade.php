<!-- Registration Form Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background-color: #c0c7d0; /* Background color */">
        <div class="modal-header">
          <h4 class="modal-title fw-bold" id="registerModalLabel" style="color: #0476a0; /* Text color */">Form Registrasi</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-start">
              <img src="assets/img/signin.png" class="img-fluid" alt="Login Form Image">
            </div>
            <div class="col-md-6">
              <form action="{{ url('register') }}" method="POST" novalidate>
                @csrf
  
                <!-- Add your registration form fields here -->
                <div class="mb-3">
                  <label for="name" class="form-label fw-bold" style="color: #0d5771;">Nama</label>
                  <input type="text" name="name" placeholder="Nama" class="form-control @error('name') is-invalid @enderror" id="name" required
                    style="color: #0d5771; border: 1px solid #0d5771; /* Text and border color */">
                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
  
                <div class="mb-3">
                  <label for="email" class="form-label fw-bold" style="color: #0d5771;">Email</label>
                  <input type="text" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" id="email" required
                    style="color: #0d5771; border: 1px solid #0d5771; /* Text and border color */">
                  @error('email2')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
  
                <div class="mb-3">
                  <label for="password" class="form-label fw-bold" style="color: #0d5771;">Password</label>
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required
                    style="color: #0d5771; border: 1px solid #0d5771; /* Text and border color */">
                  @error('password2')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
  
                <div class="mb-3">
                  <label for="password_confirmation" class="form-label fw-bold" style="color: #0d5771;">Konfirmasi Password</label>
                  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required
                    style="color: #0d5771; border: 1px solid #0d5771; /* Text and border color */">
                </div>
  
                <div class="mb-3">
                  <button type="submit" class="btn btn-primary w-100" style="background-color: #0d5771; border-color: #0d5771; /* Button color and border color */">
                    <i class="bx bx-user-plus"></i> Daftar
                  </button>
                </div>
  
                <div class="text-center">
                  <p class="mb-0">Sudah Punya Akun?</p>
                  <a href="#loginModal" data-bs-toggle="modal" data-bs-dismiss="modal" style="color: #0d5771; /* Text color */">Masuk Sekarang</a>
                </div>
              </form>
              @if(session('errors'))
<script>
    Swal.fire({
        title: 'Error!',
        text: '{{ $errors->first() }}',
        icon: 'error',
        confirmButtonText: 'OK'
    });
</script>
@endif

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  