@extends('layouts.app')

@section('title', 'edit_mahasiswa')

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
            <h2 id="head-nama">Andi Pratama</h2>
            <p id="head-nim">NIM A020325112</p>
        </div>
    </div>

    <div class="divider"></div>

    <div class="profile-middle">
        <div class="info-group">
            <span>Program Studi</span>
            <strong id="head-prodi">D3 Teknik Pertambangan</strong>
        </div>

        <div class="info-group">
            <span>Kelas</span>
            <strong id="head-kelas">TP-2C</strong>
        </div>
    </div>

    <div class="divider"></div>

    <div class="profile-right">
        <div class="info-group">
            <span>Tahun Akademik</span>
            <strong id="head-tahun">2025/2026</strong>
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
    <div class="tab active" data-tab="identitas" onclick="showTab('identitas')">
        <i data-lucide="user"></i> Identitas
    </div>

    <div class="tab" data-tab="domisili" onclick="showTab('domisili')">
        <i data-lucide="map-pin"></i> Domisili
    </div>

    <div class="tab" data-tab="orangtua" onclick="showTab('orangtua')">
        <i data-lucide="users"></i> Orang Tua/Wali
    </div>

    <div class="tab" data-tab="sekolah" onclick="showTab('sekolah')">
        <i data-lucide="graduation-cap"></i> Sekolah
    </div>
</div>

<div id="identitas" class="tab-content active">

<div class="detail-title">Identitas Mahasiswa</div>

<div class="form-grid-2">

<div class="form-column">
    
    <div class="form-group">
        <label>NIM <span>*</span></label>
        <input type="text" id="edit-nim" value="A020325112" readonly>
    </div>

    <div class="form-group">
        <label>Nama Lengkap <span>*</span></label>
        <input type="text" id="edit-nama" value="Andi Pratama">
    </div>

    <div class="form-group">
        <label>Email <span>*</span></label>
        <input type="text" id="edit-email" value="andipratama@gmail.com">
    </div>

    <div class="form-group">
        <label>Status Mahasiswa <span>*</span></label>
        <select id="edit-status">
            <option value="Aktif" selected>Aktif</option>
            <option value="Nonaktif">Nonaktif</option>
        </select>
    </div>

</div>

<div class="form-column">

    <div class="form-group">
        <label>Tanggal Lahir <span>*</span></label>
        <input type="date" id="edit-tgl" value="2007-05-17">
    </div>

    <div class="form-group">
        <label>No. Hp <span>*</span></label>
        <input type="text" id="edit-hp" value="0813-0000-2314">
    </div>

    <div class="form-group">
        <label>Jenis Kelamin <span>*</span></label>
        <select id="edit-jk">
            <option value="Laki-laki" selected>Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Agama <span>*</span></label>
        <select id="edit-agama">
            <option value="Islam" selected>Islam</option>
        </select>
    </div>

</div>

</div>
</div>

<div id="domisili" class="tab-content">

<div class="detail-title">Domisili</div>

<div class="form-grid">

<div class="form-group alamat">
    <label>Alamat <span>*</span></label>
    <input type="text" id="edit-alamat" value="Jl. Sultan Adam Komp.Mahligai">
</div>

<div class="form-row-inline">

    <div class="form-group small">
        <label>RT <span>*</span></label>
        <input type="text" id="edit-rt" value="20">
    </div>

    <div class="form-group small">
        <label>RW <span>*</span></label>
        <input type="text" id="edit-rw" value="01">
    </div>

    <div class="form-group small">
        <label>No <span>*</span></label>
        <input type="text" id="edit-no" value="102">
    </div>

</div>

<div class="form-row-3">
    <div class="form-group">
        <label>Provinsi <span>*</span></label>
        <input type="text" id="edit-provinsi" value="Kalimantan Selatan">
    </div>
    <div class="form-group">
        <label>Kabupaten/Kota <span>*</span></label>
        <input type="text" id="edit-kota" value="Kota Banjarmasin">
    </div>
    <div class="form-group">
        <label>Kode Pos <span>*</span></label>
        <input type="text" id="edit-kodepos" value="70121">
    </div>
</div>

<div class="form-row-3">
    <div class="form-group">
        <label>Kecamatan <span>*</span></label>
        <input type="text" id="edit-kecamatan" value="Banjarmasin Utara">
    </div>
    <div class="form-group">
        <label>Kelurahan/Desa <span>*</span></label>
        <input type="text" id="edit-kelurahan" value="Sungai Jingah">
    </div>
    <div class="form-group">
        <label>Status Tinggal <span>*</span></label>
        <select id="edit-status-tinggal">
            <option value="Rumah Orang Tua" selected>Rumah Orang Tua</option>
        </select>
    </div>
</div>

</div>
</div>

<div id="orangtua" class="tab-content">

<div class="detail-title">Orang Tua/Wali</div>

<div class="form-row-3">

<div class="form-column">
    <div class="form-group">
        <label>Nama Ayah <span>*</span></label>
        <input type="text" id="edit-nama-ayah" value="Slamet Riyadi">
    </div>

    <div class="form-group">
        <label>Pekerjaan Ayah <span>*</span></label>
        <select id="edit-kerja-ayah">
            <option value="Karyawan Swasta" selected>Karyawan Swasta</option>
        </select>
    </div>

    <div class="form-group">
        <label>No. Hp Ayah <span>*</span></label>
        <input type="text" id="edit-hp-ayah" value="0812-3422-2100">
    </div>

    <div class="form-group">
        <label>Penghasilan Ayah <span>*</span></label>
        <select id="edit-gaji-ayah">
            <option value="Rp 6.000.000-Rp 8.000.000" selected>Rp 6.000.000-Rp 8.000.000</option>
        </select>
    </div>
</div>

<div class="form-column">
    <div class="form-group">
        <label>Nama Ibu <span>*</span></label>
        <input type="text" id="edit-nama-ibu" value="Fitriyani">
    </div>

    <div class="form-group">
        <label>Pekerjaan Ibu <span>*</span></label>
        <select id="edit-kerja-ibu">
            <option value="Ibu Rumah Tangga" selected>Ibu Rumah Tangga</option>
        </select>
    </div>

    <div class="form-group">
        <label>No. Hp Ibu <span>*</span></label>
        <input type="text" id="edit-hp-ibu" value="0813-2120-0908">
    </div>

    <div class="form-group">
        <label>Penghasilan Ibu <span>*</span></label>
        <select id="edit-gaji-ibu">
            <option value="< Rp 1.000.000" selected>&lt; Rp 1.000.000</option>
        </select>
    </div>
</div>

<div class="form-column">
    <div class="form-group">
        <label>Nama Wali</label>
        <input type="text" id="edit-nama-wali">
    </div>

    <div class="form-group">
        <label>Pekerjaan Wali</label>
        <select id="edit-kerja-wali"></select>
    </div>

    <div class="form-group">
        <label>No. Hp Wali</label>
        <input type="text" id="edit-hp-wali">
    </div>

    <div class="form-group">
        <label>Penghasilan Wali</label>
        <select id="edit-gaji-wali"></select>
    </div>
</div>

</div>
</div>

<div id="sekolah" class="tab-content">

<div class="detail-title">Sekolah</div>

<div class="form-grid-2">

<div class="form-column">

    <div class="form-group">
        <label>Jenis Sekolah <span>*</span></label>
        <select id="edit-jenis-sekolah">
            <option value="SMA" selected>SMA</option>
        </select>
    </div>

    <div class="form-group">
        <label>Sekolah <span>*</span></label>
        <input type="text" id="edit-sekolah" value="30304271 - SMA Negeri 5 Banjarmasin">
    </div>

    <div class="form-group">
        <label>Provinsi Sekolah <span>*</span></label>
        <input type="text" id="edit-prov-sekolah" value="Kalimantan Selatan">
    </div>

    <div class="form-group">
        <label>Kota Sekolah <span>*</span></label>
        <input type="text" id="edit-kota-sekolah" value="Kota Banjarmasin">
    </div>

</div>

<div class="form-column">

    <div class="form-group">
        <label>Alamat Sekolah <span>*</span></label>
        <input type="text" id="edit-alamat-sekolah" value="Jl. Sultan Adam No.76, Surgi Mufti">
    </div>

    <div class="form-group">
        <label>No Ijazah Sekolah <span>*</span></label>
        <input type="text" id="edit-no-ijazah" value="0000011">
    </div>

    <div class="form-group">
        <label>NISN <span>*</span></label>
        <input type="text" id="edit-nisn" value="0078349391">
    </div>

<div class="form-group">
    <label>File Ijazah Terakhir</label>

    <label class="custom-file">
        Pilih File
        <input type="file" id="fileInput">
    </label>

    <span id="file-name"></span>
</div>
</div>

</div>
</div>

    <div class="form-actions">
        <button class="btn-cancel" onclick="goBack()">Batal</button>
        <button class="btn-save" id="btnUpdate">Simpan Perubahan</button>
    </div>
    </div>
</div>

<script>
function goBack(){
    window.location.href = "data_mahasiswa.html";
}

function showTab(tabId){
    document.querySelectorAll('.tab-content').forEach(el=>{
        el.classList.remove('active');
    });
    document.querySelectorAll('.tab').forEach(el=>{
        el.classList.remove('active');
    });
    document.getElementById(tabId).classList.add('active');
    document.querySelectorAll('.tab').forEach(tab=>{
        if(tab.dataset.tab === tabId){
            tab.classList.add('active');
        }
    });
}
</script>

<script src="../js/sidebar.js"></script>
<script src="../js/header.js"></script>
<script src="../js/data_mhs.js"></script>
@endsection
