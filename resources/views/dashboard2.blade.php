@extends('layouts.admin2')

@section('title', 'Dashboard Donatur')

@section('content')
{{-- begin::dashboard-admin --}}
<div class="content">
    <h1 class="page-title">@yield('title')</h1>
    {{-- begin::card --}}
    <div class="card">
        {{-- begin::row-stat1 --}}
        <div class="row1">
            {{-- begin::col-kategori --}}
            <div class="col">
                <p>Kategori</p>
            </div>
            {{-- end::col-kategori --}}
            {{-- begin::col-projek --}}
            <div class="col">
                <p>Projek</p>
            </div>
            {{-- end::col-projek --}}
            {{-- begin::col-projek-pending --}}
            <div class="col">
                <p>Projek Pending</p>
            </div>
            {{-- end::col-projek-pending --}}
            {{-- begin::col-kontak-masuk-baru --}}
            <div class="col">
                <p>Kontak Masuk Baru</p>
            </div>
            {{-- end::col-kontak-masuk-baru --}}
        </div>
        {{-- end::row-stat1 --}}
        <br>
        {{-- begin::row-stat1 --}}
        <div class="row2">
            {{-- begin::col-total-donasi --}}
            <div class="col">
                <p>Total Donasi</p>
            </div>
            {{-- end::col-total-donasi --}}
            {{-- begin::col-donasi-belum-dikonfirmasi --}}
            <div class="col">
                <p>Donasi Belum Dikonfirmasi</p>
            </div>
            {{-- end::col-donasi-belum-dikonfirmasi --}}
            {{-- begin::col-donasi-dikonfirmasi --}}
            <div class="col">
                <p>Donasi Dikonfirmasi</p>
            </div>
            {{-- end::col-donasi-dikonfirmasi --}}
            {{-- begin::col-total-dicairkan --}}
            <div class="col">
                <p>Total Dicairkan</p>
            </div>
            {{-- end::col-total-dicairkan --}}
        </div>
        {{-- end::row-stat1 --}}
    </div>
    {{-- end::card --}}

    <br>

    {{-- begin::card --}}
    <div class="card">
        <h2 class="sub-title">Laporan donasi dan pencairan 2023</h2>
        {{-- begin::chart-line --}}
        <canvas id="myChart"></canvas>
        {{-- end::chart-line --}}
    </div>
    {{-- end::card --}}

    <br>

    {{-- begin::card --}}
    <div class="card">
        {{-- begin::row --}}
        <div class="row-peringkat">
            {{-- begin::col-top-projek --}}
            <div class="col-peringkat">
                <h2 class="sub-title">Top 5 Projek bulan ini</h2>
                {{-- begin::tabel-top-projek --}}
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Status</th>
                            <th>Donasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Judul 1</td>
                        <td>Status 1</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Judul 2</td>
                        <td>Status 2</td>
                        <td>500</td>
                    </tr>
                        <tr>
                        <td>3</td>
                        <td>Judul 3</td>
                        <td>Status 3</td>
                        <td>1500</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Judul 4</td>
                        <td>Status 4</td>
                        <td>2000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Judul 5</td>
                        <td>Status 5</td>
                        <td>800</td>
                    </tr>
                    </tbody>
                </table>
                {{-- end::tabel-top-projek --}}
            </div>
            {{-- end::col-top-projek --}}
            {{-- begin::col-top-projek --}}
            <div class="col-peringkat">
                <h2 class="sub-title">Top 5 Donatur bulan ini</h2>
                {{-- begin::tabel-top-projek --}}
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jumlah Donasi</th>
                            <th>Jumlah Projek</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Riski</td>
                        <td>17</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Rangga</td>
                        <td>16</td>
                        <td>0</td>
                    </tr>
                        <tr>
                        <td>13</td>
                        <td>Egi</td>
                        <td>5</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Yahya</td>
                        <td>4</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Alwan</td>
                        <td>3</td>
                        <td>2</td>
                    </tr>
                    </tbody>
                </table>
                {{-- end::tabel-top-projek --}}
            </div>
            {{-- end::col-top-projek --}}
        </div>
        {{-- end::row --}}
    </div>
    {{-- begin::card --}}
</div>
{{-- end::dashboard-admin --}}

{{-- begin::script --}}
    {{-- begin::chart-line --}}
    <script>
        // Data untuk chart
        var data = {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mai', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember' ],
            datasets: [{
                label: 'Sales',
                data: [50000, 100000, 150000, 200000, 250000, 300000],
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna latar belakang area di bawah garis
                borderColor: 'rgba(54, 162, 235, 1)', // Warna garis
                borderWidth: 1 // Ketebalan garis
            }]
        };
        
        // Pengaturan chart
        var options = {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };
        
        // Membuat chart line
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
    </script>
    {{-- end::chart-line --}}
    {{-- end::script --}}

@endsection