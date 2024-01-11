  <!-- Queue Form Modal -->
  <div class="modal fade" id="formAntrianModal" tabindex="-1" role="dialog" aria-labelledby="formAntrianModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="background-color: #c0c7d0; /* Warna sesuai preferensi Anda */">
        <div class="modal-header">
          <h4 class="modal-title fw-bold" id="formAntrianModalLabel" style="color: #0476a0; /* Warna biru gelap */">Form Antrian</h4>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-start">
              <img src="assets/img/fasilitas2.png" class="img-fluid" alt="Form Image">
            </div>
            <div class="col-md-6">
              <!-- Add your queue form elements here -->
              <form action="{{ route('store.antrian') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nomor_hp" class="form-label fw-bold" style="color: #0d5771;">Nomor HP</label>
                  <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" required
                    placeholder="Masukkan Nomor HP"
                    style="color: #0d5771; border: 1px solid #0d5771; /* Warna biru gelap */">
                </div>
                <div class="mb-3">
                  <label for="poliklinik" class="form-label fw-bold" style="color: #0d5771;">Poli</label>
                  <select class="form-select" id="poliklinik" name="poliklinik" required
                    style="color: #0d5771; border: 1px solid #0d5771; /* Warna biru gelap */">
                    <option value="" selected disabled>Pilih Poliklinik</option>
                    <option value="Poli Umum">Poli Umum</option>
                    <option value="Poli Gigi">Poli Gigi</option>
                    <!-- Add more polyclinics as needed -->
                  </select>
                </div>
                <!-- Add more form fields as needed -->

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100" style="background-color: #0d5771; border-color: #0d5771; /* Button color and border color */">
                        <i class="bx bx-id-card"></i> Ambil Antrian
                    </button>
                  </div>

              </form>
              @if (session('success'))
                <script>
                    Swal.fire({
                        title: '<span style="color: #0476a0;">Berhasil &#10004;</span>', // Tambahkan tanda centang Unicode di sini
                        html: '<span style="color: #333;">{{ session('success') }}</span>',
                        icon: 'success',
                        iconColor: '#0476a0',  // Warna ikon
                        background: '#f4f5f7',  // Warna latar belakang
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


