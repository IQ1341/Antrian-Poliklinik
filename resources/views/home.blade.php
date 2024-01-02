@extends('layouts.main')

@include('partials.navbar')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Selamat Datang <br> Di Website Poliklinik Politeknik Negeri Jember</h1>
            <h2>Memberikan pelayanan yang benar-benar nyaman, gampang, efisien, cepat, dan menghadirkan nuansa yang menunjang kesembuhan pasien.</h2>

            <!-- Informasi Antrian -->
            @if(auth()->check())
              <a href="#" class="btn btn-success" data-toggle="modal" data-target="#formAntrianModal">
                <i class="bx bx-id-card"></i> Ambil Antrian
              </a>
            @else
            <div id="statusAntrian" class=" p-3 rounded mt-3 text-white" style="background-color: #0876dd;">
              <div class="d-flex justify-content-between">
                <div>
                  <h4>Status Antrian:</h4>
                  <p>Nomor Antrian: <span id="nomorAntrian" class="fw-bold">XYZ</span></p>
                  <p>Poli: <span id="poliAntrian" class="fw-bold">Poli ABC</span></p>
                </div>
                <div>
                  <i class="bx bx-time"></i>
                  <span id="waktuTunggu" class="fw-bold">00:15:30</span>
                </div>
              </div>
            
              <div class="mt-2">
                <div class="progress">
                  <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated"
                    style="width: 70%;" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small>Proses Antrian</small>
              </div>
            
              <button type="button" class="btn btn-danger btn-sm mt-2" onclick="batalkanAntrian()">
                <i class="bx bx-x"></i> Batalkan Antrian
              </button>
            </div>
            @endif
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="assets/img/home.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
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
              <form>
                <!-- Form fields go here -->
                <div class="mb-3">
                  <label for="nama" class="form-label fw-bold" style="color: #0d5771;">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" required
                    placeholder="Masukkan Nama" style="color: #0d5771; border: 1px solid #0d5771; /* Warna biru gelap */">
                </div>
                <div class="mb-3">
                  <label for="nomor_antrian" class="form-label fw-bold" style="color: #0d5771;">Nomor HP</label>
                  <input type="text" class="form-control" id="nomor_antrian" name="nomor_antrian" required
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

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#formAntrianModal"
                  style="background-color: #0d5771; border-color: #0d5771; /* Warna biru gelap */">
                  <i class="bx bx-id-card"></i> Ambil Antrian
                </button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  
  



    <!-- ======= Details Section ======= -->
    
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/visi.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Visi</h3>
            <p class="fst-italic">
              “Mendukung Visi Dan Misi Kementerian Pendidikan Dan Kebudayaan Dengan Mewujudkan Pendidikan Tinggi Vokasi Yang Unggul Dan Berdaya Saing Dibidang Teknologi Terapan Yang Menghasilkan Lulusan Berkarakter”
            </p>
            <h3>Misi</h3>
            <ul>
              <li> Meningkatkan Pendidikan Terapan Yang Inovatif Dan Berdaya Saing.</li>
              <li> Meningkatkan Penelitian Terapan, Pengabdian Kepada Masyarakat Dan Kewirausahaan Untuk Menghasilkan Nilai Tambah Produk Inovasi.</li>
              <li> Mewujudkan Tata Kelola Polije Yang Lebih Baik Dalam Rangka Reformasi Birokrasi (Good Polije Governance).</li>
              <li> Mengembangkan Kerjasama Tingkat Nasional Maupun Internasional.</li>
            </ul>
          </div>
        </div>

      <section id="details" class="details">
        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/fasilitas.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Fasilitas Poliklinik POLIJE: Mendukung Gaya Hidup Sehat di Lingkungan Perguruan Tinggi</h3>
            <p>
              Poliklinik kampus juga memainkan peran penting dalam mempromosikan gaya hidup sehat di lingkungan kampus. Dengan menyediakan fasilitas seperti konseling gizi dan olahraga, poliklinik kampus dapat membantu mahasiswa dan karyawan kampus untuk memperoleh informasi terkait pentingnya menjaga kesehatan secara holistik dan memperbaiki pola hidup mereka. Oleh karena itu, fasilitas poliklinik kampus menjadi hal yang penting dan harus tersedia di setiap kampus perguruan tinggi sebagai fasilitas pendukung kesehatan bagi mahasiswa dan karyawan kampus.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/fasilitas2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Fasilitas Poliklinik POLIJE: Mendukung Kesehatan Pasien</h3>
            <p>
              Layanan kesehatan yang disediakan oleh poliklinik kampus dapat membantu mahasiswa dan karyawan kampus dalam mengatasi masalah kesehatan yang mereka alami. Fasilitas medis yang lengkap dan memadai seperti poliklinik kampus juga dapat membantu dalam pencegahan penyakit dengan melakukan pemeriksaan kesehatan secara rutin. Fasilitas ini juga dapat memberikan panduan dan saran medis terkait kesehatan bagi mahasiswa dan karyawan kampus.            
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/fasilitas3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Fasilitas Poliklinik POLIJE: Optimalisasi Pelayanan Kesehatan bagi Pasien</h3>
            <p>
              Secara keseluruhan, fasilitas poliklinik kampus memiliki peran penting dalam menyediakan pelayanan kesehatan yang optimal bagi mahasiswa dan karyawan kampus. Dengan adanya fasilitas medis dan non-medis yang memadai, poliklinik kampus dapat membantu mahasiswa dan karyawan kampus untuk menjaga kesehatan dan memperoleh gaya hidup yang lebih sehat. Terdapat 3 Poli di Poliklinik POLIJE yaitu Poli Umum, Poli THT dan Poli Gigi.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Details Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info">
                <i class="bx bx-map"></i>
                <h4>Alamat</h4>
                <p>Jl. Mastrip PO BOX 164, Jember <br>Jawa Timur, Indonesia</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-phone"></i>
                <h4>Telepon</h4>
                <p>+62 331 333533<br>+62 331 333531</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-envelope"></i>
                <h4>Email</h4>
                <p>poliklinik@polije.ac.id<br>politeknik@polije.ac.id</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-time-five"></i>
                <h4>Jam Kerja</h4>
                <p>Senin - Kamis : Jam 9 sampai Jam 5 <br>Jumat : Jam 8 sampai Jam 11 </p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
      <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Kami Siap Melayani Berbagai Keluhan Anda</h4>
              <a href="">Konsultasi</a>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <img src="assets/img/apple-touch-icon.png" class="img-fluid" alt="">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Poliklinik Negeri Jember</h4>
            <p>Politeknik Negeri Jember</p>
            <p>
              Jl. Mastrip PO BOX 164, Jember <br>Jawa Timur, Indonesia <br><br>
              <strong>Phone:</strong> +62 331 333533<br>
              <strong>Fax:</strong> +62 331 333531<br>
              <strong>Email:</strong> politeknik@polije.ac.id<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Tautan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://polije.ac.id/">Politeknik Negeri Jember</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://perpustakaan.polije.ac.id/">Perpustakaan POLIJE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://pusatkarir.polije.ac.id/">Career POLIJE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://publikasi.polije.ac.id/">Jurnal POLIJE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://pintu.polije.ac.id/">PINTU POLIJE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://lsp.polije.ac.id/">LSP POLIJE</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->


  </main><!-- End #main -->
@endsection

