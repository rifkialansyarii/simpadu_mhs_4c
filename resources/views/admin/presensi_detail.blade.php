@extends('layouts.app')

@section('title', 'presensi_detail')

@section('content')
<div class="container">

    <!-- SIDEBAR -->
    <div id="sidebar"></div>

    <!-- MAIN -->
    <div class="main">

        <!-- HEADER -->
        <div class="header">
            <div>
                <h1>Presensi Matakuliah Metode Numerik</h1>
                <p>Kelola Presensi/Kehadiran Mahasiswa</p>
            </div>

            <div class="header-right">
                <div class="notif">
                    <i data-lucide="bell"></i>
                    <span>12</span>
                </div>
                <div class="avatar">AD</div>
            </div>
        </div>

        <!-- BACK -->
        <span class="back" onclick="history.back()">
            ← Kembali ke Daftar Matakuliah
        </span>

        <!-- TABLE -->
        <div class="table-box">

            <div style="display:flex; justify-content:space-between; margin-bottom:15px;">
                <h3>Daftar Presensi Mahasiswa TI-4C</h3>

                <div style="display:flex; gap:10px;">
                    <select>
                        <option>NIM (A-Z)</option>
                    </select>

                    <button style="padding:8px;border-radius:8px;border:1px solid #ddd;">
                        <i data-lucide="list"></i>
                    </button>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>C030324003</td>
                        <td>Ahmad Ridho Kurniawan</td>
                        <td><span class="badge hadir">Hadir</span></td>
                        <td><i data-lucide="eye"></i></td>
                    </tr>

                    <tr>
                        <td>C030324007</td>
                        <td>Alfyan Losong</td>
                        <td><span class="badge hadir">Hadir</span></td>
                        <td><i data-lucide="eye"></i></td>
                    </tr>

                    <tr>
                        <td>C030324011</td>
                        <td>Aufa Qonita Salsabila</td>
                        <td><span class="badge izin">Sakit</span></td>
                        <td><i data-lucide="eye"></i></td>
                    </tr>

                    <tr>
                        <td>C030324015</td>
                        <td>Denys Kenan Dau</td>
                        <td><span class="badge hadir">Hadir</span></td>
                        <td><i data-lucide="eye"></i></td>
                    </tr>

                    <tr>
                        <td>C030324019</td>
                        <td>Ghina Dwi Putri Dahliana</td>
                        <td><span class="badge hadir">Hadir</span></td>
                        <td><i data-lucide="eye"></i></td>
                    </tr>

                    <tr>
                        <td>C030324023</td>
                        <td>Linggar Anugerah Wijaya</td>
                        <td><span class="badge alfa">Alfa</span></td>
                        <td><i data-lucide="eye"></i></td>
                    </tr>

                    <tr>
                        <td>C030324027</td>
                        <td>Muhamat Andra</td>
                        <td><span class="badge izin">Sakit</span></td>
                        <td><i data-lucide="eye"></i></td>
                    </tr>

                </tbody>
            </table>

            <p style="text-align:center; margin-top:15px; color:#888;">
                Lainnya ⌄
            </p>

        </div>

    </div>
</div>

<!-- SCRIPT -->
<script src="../js/sidebar.js"></script>

<script>
lucide.createIcons();
</script>
@endsection
