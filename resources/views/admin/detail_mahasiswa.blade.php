@extends('layouts.app')

@section('title', 'detail_mahasiswa')

@section('content')
<div class="container">
    
    <div id="sidebar"></div>

    <div class="main">

        <div id="header"></div>

        <div class="back" onclick="goBack()">
            <i data-lucide="arrow-left"></i>
            Kembali ke Daftar Mahasiswa
        </div>

        <div class="card">
            <div class="profile">

                <div class="profile-left">
                    <div class="avatar-lg">
                        <i data-lucide="user"></i>
                    </div>
                    <div class="user-info">
                        <h2 id="head-nama">Memuat...</h2>
                        <p id="head-nim">NIM -</p>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="profile-middle">
                    <div class="info-group">
                        <span>Program Studi</span>
                        <strong id="head-prodi">-</strong>
                    </div>
                    <div class="info-group">
                        <span>Kelas</span>
                        <strong id="head-kelas">-</strong>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="profile-right">
                    <div class="info-group">
                        <span>Tahun Akademik</span>
                        <strong id="head-tahun">-</strong>
                    </div>
                    <div class="info-group">
                        <span>Status</span>
                        <div class="status-badge" id="head-status">Aktif</div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card">

            <div class="tabs">
                <div class="tab active" onclick="showTab('identitas')">
                    <i data-lucide="user"></i> Identitas
                </div>
                <div class="tab" onclick="showTab('domisili')">
                    <i data-lucide="map-pin"></i> Domisili
                </div>
                <div class="tab" onclick="showTab('orangtua')">
                    <i data-lucide="users"></i> Orang Tua/Wali
                </div>
                <div class="tab" onclick="showTab('sekolah')">
                    <i data-lucide="graduation-cap"></i> Sekolah
                </div>
            </div>

            <div id="identitas" class="tab-content active">
                <div class="detail-title">Identitas Mahasiswa</div>
                <div class="detail-grid">
                    <div class="detail-item"><span class="label">NIM</span><span class="value" id="det-nim">-</span></div>
                    <div class="detail-item"><span class="label">Jenis Kelamin</span><span class="value" id="det-jk">-</span></div>
                    <div class="detail-item"><span class="label">Nama Lengkap</span><span class="value" id="det-nama">-</span></div>
                    <div class="detail-item"><span class="label">Agama</span><span class="value" id="det-agama">-</span></div>
                    <div class="detail-item"><span class="label">Email</span><span class="value email" id="det-email">-</span></div>
                    <div class="detail-item"><span class="label">Status Mahasiswa</span><span class="value" id="det-status">-</span></div>
                    <div class="detail-item"><span class="label">Tanggal Lahir</span><span class="value" id="det-tgllahir">-</span></div>
                    <div class="detail-item"><span class="label">No. Hp</span><span class="value" id="det-nohp">-</span></div>
                </div>
            </div>

            <div id="domisili" class="tab-content">
                <div class="detail-title">Domisili</div>
                <div class="detail-grid">
                    <div class="detail-item"><span class="label">Alamat</span><span class="value" id="det-alamat">-</span></div>
                    <div class="detail-item"><span class="label">Kabupaten/Kota</span><span class="value" id="det-kabkota">-</span></div>
                    <div class="detail-item"><span class="label">RT</span><span class="value" id="det-rt">-</span></div>
                    <div class="detail-item"><span class="label">Kecamatan</span><span class="value" id="det-kecamatan">-</span></div>
                    <div class="detail-item"><span class="label">RW</span><span class="value" id="det-rw">-</span></div>
                    <div class="detail-item"><span class="label">Kelurahan/Desa</span><span class="value" id="det-kelurahan">-</span></div>
                    <div class="detail-item"><span class="label">No</span><span class="value" id="det-no">-</span></div>
                    <div class="detail-item"><span class="label">Kode Pos</span><span class="value" id="det-kodepos">-</span></div>
                    <div class="detail-item"><span class="label">Provinsi</span><span class="value" id="det-provinsi">-</span></div>
                    <div class="detail-item"><span class="label">Status Tinggal</span><span class="value" id="det-tinggal">-</span></div>
                </div>
            </div>

            <div id="orangtua" class="tab-content">
                <div class="detail-title">Orang Tua/Wali</div>
                <div class="detail-grid-ortu">
                    <div class="detail-item"><span class="label">Nama Ayah</span><span class="value" id="det-ayah">-</span></div>
                    <div class="detail-item"><span class="label">Nama Ibu</span><span class="value" id="det-ibu">-</span></div>
                    <div class="detail-item"><span class="label">Nama Wali</span><span class="value" id="det-wali">-</span></div>
                    <div class="detail-item"><span class="label">Pekerjaan Ayah</span><span class="value" id="det-kerja_ayah">-</span></div>
                    <div class="detail-item"><span class="label">Pekerjaan Ibu</span><span class="value" id="det-kerja_ibu">-</span></div>
                    <div class="detail-item"><span class="label">Pekerjaan Wali</span><span class="value" id="det-kerja_wali">-</span></div>
                    <div class="detail-item"><span class="label">No. Hp Ayah</span><span class="value" id="det-hp_ayah">-</span></div>
                    <div class="detail-item"><span class="label">No. Hp Ibu</span><span class="value" id="det-hp_ibu">-</span></div>
                    <div class="detail-item"><span class="label">No. Hp Wali</span><span class="value" id="det-hp_wali">-</span></div>
                    <div class="detail-item"><span class="label">Penghasilan Ayah</span><span class="value" id="det-gaji_ayah">-</span></div>
                    <div class="detail-item"><span class="label">Penghasilan Ibu</span><span class="value" id="det-gaji_ibu">-</span></div>
                    <div class="detail-item"><span class="label">Penghasilan Wali</span><span class="value" id="det-gaji_wali">-</span></div>
                </div>
            </div>

            <div id="sekolah" class="tab-content">
                <div class="detail-title">Sekolah</div>
                <div class="detail-grid">
                    <div class="detail-item"><span class="label">Jenis Sekolah</span><span class="value" id="det-jn_sekolah">-</span></div>
                    <div class="detail-item"><span class="label">No Ijazah Sekolah</span><span class="value" id="det-no_ijazah">-</span></div>
                    <div class="detail-item"><span class="label">Sekolah</span><span class="value" id="det-nm_sekolah">-</span></div>
                    <div class="detail-item"><span class="label">NISN</span><span class="value" id="det-nisn">-</span></div>
                    <div class="detail-item"><span class="label">Provinsi Sekolah</span><span class="value" id="det-prov_sekolah">-</span></div>
                    <div class="detail-item"><span class="label">File Ijazah Terakhir</span><span class="value" id="det-file_ijazah">-</span></div>
                    <div class="detail-item"><span class="label">Kota Sekolah</span><span class="value" id="det-kota_sekolah">-</span></div>
                    <div class="detail-item"><span class="label">Alamat Sekolah</span><span class="value" id="det-alamat_sekolah">-</span></div>
                </div>
            </div>

        </div> </div> </div> <script>
function goBack(){
    window.location.href = "data_mahasiswa.html";
}

function showTab(tabId){
    document.querySelectorAll('.tab-content').forEach(el=> el.classList.remove('active'));
    document.querySelectorAll('.tab').forEach(el=> el.classList.remove('active'));
    document.getElementById(tabId).classList.add('active');
    document.querySelectorAll('.tab').forEach(tab=>{
        if(tab.getAttribute("onclick").includes(tabId)){
            tab.classList.add('active');
        }
    });
}
</script>

<script src="../js/sidebar.js"></script>
<script src="../js/header.js"></script>
<script src="../js/data_mhs.js"></script>
@endsection
