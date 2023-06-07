@extends('layouts.admin')

@section('kategori-admin')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kategori Admin</title>
        <link rel="stylesheet" href="assets/css/kategori-admin.css">
    </head>
    <body>
    <!-- begin::kategori-admin -->
    <div class="content">
        <h1 class="page-title">Kategori</h1>
        <!-- begin::card -->
        <div class="card">
            <!-- begin::modal-tambah -->
            <div class="modal-tambah">
                <button id="modal-button">Tambah</button> 
            </div>
            <!-- end::modal-tambah -->
            <!-- begin::modal-tambah-konten -->
            <div id="modal" class="modal">
                <div class="modal-content">
                <span class="close">&times;</span>
                <!-- begin::input-kategori -->
                <div class="input-group">
                    <label for="kategori-input">Tambah Kategori</label>
                    <br><br>
                    <input type="text" id="kategori-input" placeholder="Masukkan kategori">
                    <br><br>
                    <div class="button-group">
                    <button type="reset" class="btn-reset">Reset</button>
                    <button type="submit" class="btn-submit">Simpan</button>
                    </div>
                </div>
                <!-- end::input-kategori -->
                </div>
            </div>
            <!-- end::modal-tambah-konten -->
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
                        <th width="5%">No</th>
                        <th width="40%">Nama</th>
                        <th width="25%">Jumlah Proyek</th>
                        <th width="25%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>5</td>
                        <td>
                            <button class="btn-ubah">Ubah</button>
                            <button class="btn-hapus">Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>3</td>
                        <td>
                            <button class="btn-ubah">Ubah</button>
                            <button class="btn-hapus">Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Jane Smith 2</td>
                        <td>3</td>
                        <td>
                            <button class="btn-ubah">Ubah</button>
                            <button class="btn-hapus">Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>4</td>
                        <td>Jane Smith 2</td>
                        <td>3</td>
                        <td>
                            <button class="btn-ubah">Ubah</button>
                            <button class="btn-hapus">Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>5</td>
                        <td>Jane Smith 2</td>
                        <td>3</td>
                        <td>
                            <button class="btn-ubah">Ubah</button>
                            <button class="btn-hapus">Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>6</td>
                        <td>Jane Smith 2</td>
                        <td>3</td>
                        <td>
                            <button class="btn-ubah">Ubah</button>
                            <button class="btn-hapus">Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>7</td>
                        <td>Jane Smith 2</td>
                        <td>3</td>
                        <td>
                            <button class="btn-ubah">Ubah</button>
                            <button class="btn-hapus">Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>8</td>
                        <td>Jane Smith 2</td>
                        <td>3</td>
                        <td>
                            <button class="btn-ubah">Ubah</button>
                            <button class="btn-hapus">Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>9</td>
                        <td>Jane Smith 2</td>
                        <td>3</td>
                        <td>
                            <button class="btn-ubah">Ubah</button>
                            <button class="btn-hapus">Hapus</button>
                        </td>
                        </tr>
                        <tr>
                        <td>10</td>
                        <td>Jane Smith 2</td>
                        <td>3</td>
                        <td>
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
    <!-- end::kategori-admin -->
    {{-- begin::script --}}
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
    </script>
        
    {{-- end::script --}}
    </body>
    </html>
@endsection