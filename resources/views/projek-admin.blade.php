@extends('layouts.admin')

@section('projek-admin')
    <!DOCTYPE html>
    <html lang="en">
    <!-- begin::head -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projek Admin</title>
        <link rel="stylesheet" href="assets/css/projek-admin.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    </head>
    <!-- end::head -->
    <!-- begin::body -->
    <body>
        <!-- begin::projek-admin -->
        <div class="content">
            <h1 class="page-title">Projek</h1>
            <!-- begin::card -->
            <div class="card">
                <!-- begin::modal-tambah -->
                <div class="modal-tambah">
                    <button id="modal-button">Tambah</button> 
                    <div id="modal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <!-- begin::input-kategori -->
                            <div class="input-group">
                                <label for="kategori-input"><h2>Tambah Projek</h2></label>
                                <!-- begin::form-input -->
                                <div class="form-container">
                                    <div class="form-row">
                                        <div class="form-col">
                                            <label for="judul">Judul:</label>
                                            <input type="text" id="judul" name="judul">
                                        </div>
                                        <div class="form-col">
                                            <label for="kategori">Kategori:</label>
                                            <select id="kategori" name="kategori">
                                                <option value="1">Kategori 1</option>
                                                <option value="2">Kategori 2</option>
                                                <option value="3">Kategori 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label for="deskripsi">Deskripsi:</label>
                                        <textarea id="deskripsi" name="deskripsi"></textarea>
                                    </div>
                                    <div class="form-row">
                                        <label for="body">Body:</label>
                                        <textarea id="body" name="body"></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-col">
                                            <label for="tanggal-publish">Tanggal Publish:</label>
                                            <input type="date" id="tanggal-publish" name="tanggal-publish">
                                        </div>
                                        <div class="form-col">
                                            <label for="status">Status:</label>
                                            <select id="status" name="status">
                                                <option value="public">Public</option>
                                                <option value="pending">Pending</option>
                                                <option value="archived">Archived</option>
                                            </select>
                                        </div>
                                        <div class="form-col">
                                            <label for="gambar">Upload Gambar:</label>
                                            <input type="file" id="gambar" name="gambar">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="form-col"></div>
                                        <div class="form-col">
                                            <div class="button-group">
                                                <button type="reset" class="btn-reset">Reset</button>
                                                <button type="submit" class="btn-submit">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end::input-kategori -->
                        </div>
                    </div>
                </div>
                <!-- end::modal-tambah -->
                <br>
                <!-- begin::date-filter -->
                <div class="date-filter">
                    <div class="kiri">
                        <!-- begin::select-tabel -->
                        <label for="Status">Status</label>
                        <select>
                            <option value="public">Public</option>
                            <option value="pending">Pending</option>
                            <option value="archived">Archived</option>
                        </select>  
                        <!-- end::select-tabel -->
                    </div>
                    <div class="kanan">
                        <!-- bagin::tgl-mulai -->
                        <div>
                            <label for="tanggalMulai">Tanggal Mulai:</label>
                            <br>
                            <input type="text" id="tanggalMulai" name="tanggalMulai">
                        </div>                          
                        <!-- end::tgl-mulai -->
                        <!-- bagin::tgl-mulai -->
                        <div>
                            <label for="tanggalAkhir">Tanggal Akhir:</label>
                            <br>
                            <input type="text" id="tanggalAkhir" name="tanggalAkhir">
                        </div>                          
                        <!-- end::tgl-mulai -->
                    </div>
                </div>
                <!-- begin::date-filter -->
                <br>
                <!-- begin::filter-tabel -->
                <div class="filter-tabel">
                    <!-- begin::dropdown-tabel -->
                    <div class="dropdown-tabel">
                        <label for="show">Tampilkan</label>
                        <select id="show">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        </select>
                        <label for="show">Entri</label>
                    </div>
                    <!-- end::dropdown-tabel -->
                    <!-- begin::quick-search -->
                    <div class="quick-search">
                        <form>
                        <input type="text" placeholder="Search">
                        <button type="submit">Cari</button>
                        </form>
                    </div>
                    <!-- end::quick-search -->
                </div>
                <!-- end::filter-tabel -->
                <br>
                <!-- begin::tabel-kategori -->
                <div class="tabel-kategori">
                    <table>
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Publish</th>
                        <th>Status</th>
                        <th>Author</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>
                            <div class="deskripsi">
                            <img src="gambar1.jpg" alt="Gambar 1">
                            <p>Deskripsi 1</p>
                            </div>
                        </td>
                        <td>2023-05-26 09:00:00</td>
                        <td>Aktif</td>
                        <td>Rangga</td>
                        <td>
                            <button class="btn-lihat">Lihat</button>
                            <button class="btn-ubah">Ubah</button>
                            <button class="btn-hapus">Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>
                            <div class="deskripsi">
                            <img src="gambar2.jpg" alt="Gambar 2">
                            <p>Deskripsi 2</p>
                            </div>
                        </td>
                        <td>2023-05-27 10:30:00</td>
                        <td>Aktif</td>
                        <td>Riski</td>
                        <td>
                            <button class="btn-lihat">Lihat</button>
                            <button class="btn-ubah">Ubah</button>
                            <button class="btn-hapus">Hapus</button>
                        </td>
                        </tr>
                        <!-- Tambahkan baris lainnya di sini -->
                    </tbody>
                    </table>
                </div>
                <!-- end::tabel-kategori -->
                <!-- begin::pagination -->
                <div class="pagination">
                    <a href="#" class="prev">&laquo; Prev</a>
                    <a href="#" class="page active">1</a>
                    <a href="#" class="page">2</a>
                    <a href="#" class="page">3</a>
                    <a href="#" class="page">4</a>
                    <a href="#" class="next">Next &raquo;</a>
                    </div>
                <!-- end::pagination -->
            </div>
            <!-- end::card -->
        </div>
        <!-- end::projek-admin -->

        <script>
            // begin::modal-tambah
            const modalButton = document.getElementById("modal-button");
            const modal = document.getElementById("modal");
            const close = document.getElementsByClassName("close")[0];
            
            modalButton.addEventListener("click", function() {
                modal.style.display = "block";
            });
            
            close.addEventListener("click", function() {
                modal.style.display = "none";
            });
            
            window.addEventListener("click", function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
            // end::modal-tambah

            //begin::date-picker
            $(function() {
                $("#tanggalMulai").datepicker({
                dateFormat: "yy-mm-dd", // Format tanggal (YYYY-MM-DD)
                changeMonth: true, // Tampilkan pilihan bulan
                changeYear: true, // Tampilkan pilihan tahun
                showButtonPanel: true, // Tampilkan panel tombol
                maxDate: 0, // Batasi pemilihan tanggal hanya hingga hari ini
                });
            });
            $(function() {
                $("#tanggalAkhir").datepicker({
                dateFormat: "yy-mm-dd", // Format tanggal (YYYY-MM-DD)
                changeMonth: true, // Tampilkan pilihan bulan
                changeYear: true, // Tampilkan pilihan tahun
                showButtonPanel: true, // Tampilkan panel tombol
                maxDate: 0, // Batasi pemilihan tanggal hanya hingga hari ini
                });
            });
            //end::date-picker

        </script>
    </body>
    <!-- end::body -->
    </html>
@endsection