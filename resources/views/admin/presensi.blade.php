@extends('layouts.app')

@section('title', 'presensi')

@section('content')
<div class="flex min-h-screen w-full">
        <div id="sidebar" class="w-[280px] shrink-0 bg-white border-r border-slate-100 hidden lg:block">
            </div>

        <div class="main flex-1 p-6 overflow-y-auto bg-[#F8FAFC]">
            
            <div id="header"></div>

            <div id="view-kelas" class="fade-in block space-y-6">
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    
                    <div class="card bg-white p-4 rounded-xl border border-slate-100 shadow-sm flex flex-col gap-3">
                        <div class="flex items-center gap-3">
                            <div class="bg-blue-50 text-blue-600 w-12 h-12 rounded-xl flex items-center justify-center shrink-0">
                                <i data-lucide="calendar" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-slate-800 leading-none m-0">45</h2>
                                <h5 class="text-xs font-semibold text-slate-800 m-0 mt-1">Total Kelas Hari Ini</h5>
                            </div>
                        </div>
                        <p class="text-[10px] text-slate-400 font-medium m-0 pl-[60px]">Rabu, 29 April 2026</p>
                    </div>

                    <div class="card bg-white p-4 rounded-xl border border-slate-100 shadow-sm flex flex-col gap-3 justify-between">
                        <div class="flex items-center gap-3">
                            <div class="bg-emerald-50 text-emerald-600 w-12 h-12 rounded-xl flex items-center justify-center shrink-0">
                                <i data-lucide="user-check" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-slate-800 leading-none m-0">2.320</h2>
                                <h5 class="text-xs font-semibold text-slate-800 m-0 mt-1">Mahasiswa Hadir</h5>
                            </div>
                        </div>
                        <span class="inline-flex items-center w-fit text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded"><i data-lucide="arrow-up" class="w-3 h-3 mr-0.5"></i> 8.2%</span>
                    </div>

                    <div class="card bg-white p-4 rounded-xl border border-slate-100 shadow-sm flex flex-col gap-3 justify-between">
                        <div class="flex items-center gap-3">
                            <div class="bg-orange-50 text-orange-600 w-12 h-12 rounded-xl flex items-center justify-center shrink-0">
                                <i data-lucide="user" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-slate-800 leading-none m-0">151</h2>
                                <h5 class="text-xs font-semibold text-slate-800 m-0 mt-1">Izin / Sakit</h5>
                            </div>
                        </div>
                        <span class="inline-flex items-center w-fit text-[10px] font-bold text-orange-600 bg-orange-50 px-2 py-0.5 rounded"><i data-lucide="arrow-up" class="w-3 h-3 mr-0.5"></i> 8.2%</span>
                    </div>

                    <div class="card bg-white p-4 rounded-xl border border-slate-100 shadow-sm flex flex-col gap-3 justify-between">
                        <div class="flex items-center gap-3">
                            <div class="bg-red-50 text-red-600 w-12 h-12 rounded-xl flex items-center justify-center shrink-0">
                                <i data-lucide="user-x" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-slate-800 leading-none m-0">50</h2>
                                <h5 class="text-xs font-semibold text-slate-800 m-0 mt-1">Alfa</h5>
                            </div>
                        </div>
                        <span class="inline-flex items-center w-fit text-[10px] font-bold text-red-600 bg-red-50 px-2 py-0.5 rounded"><i data-lucide="arrow-down" class="w-3 h-3 mr-0.5"></i> 8.2%</span>
                    </div>

                </div>

                <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm flex gap-3 items-end">
                    <div>
                        <label class="block text-[10px] text-slate-400 font-semibold mb-1 uppercase pl-1">Program Studi</label>
                        <select class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-sm outline-none text-slate-600 font-medium min-w-[200px] cursor-pointer hover:border-slate-300">
                            <option>Semua Program Studi</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[10px] text-slate-400 font-semibold mb-1 uppercase pl-1">Kelas</label>
                        <select class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-sm outline-none text-slate-600 font-medium min-w-[150px] cursor-pointer hover:border-slate-300">
                            <option>Semua Kelas</option>
                        </select>
                    </div>
                    <button class="h-[38px] px-3 bg-white border border-slate-200 rounded-xl text-slate-600 hover:bg-slate-50 transition flex items-center justify-center"><i data-lucide="filter" class="w-4 h-4"></i></button>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                    
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-bold text-slate-800 m-0">Daftar Presensi Mahasiswa</h3>
                        <div class="flex items-center gap-3">
                            <span class="text-sm font-medium text-slate-500">Sort by</span>
                            <select class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-sm outline-none text-slate-700 font-medium cursor-pointer hover:border-slate-300">
                                <option>ID Kelas (A-Z)</option>
                            </select>
                            <button class="p-2 bg-white border border-slate-200 rounded-xl text-slate-600 hover:bg-slate-50 transition"><i data-lucide="list" class="w-5 h-5"></i></button>
                        </div>
                    </div>

                    <table class="w-full text-left table-rounded whitespace-nowrap">
                        <thead class="bg-slate-50 text-slate-500 text-[11px] font-bold uppercase tracking-wider">
                            <tr>
                                <th class="p-4 rounded-tl-lg">ID</th>
                                <th class="p-4">Kelas</th>
                                <th class="p-4 text-center rounded-tr-lg w-48">Kehadiran</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 cursor-pointer transition" onclick="switchView('matkul')">
                                <td class="p-4 font-bold text-slate-800">AK01</td>
                                <td class="p-4 font-semibold text-slate-600">AK-2A</td>
                                <td class="p-4">
                                    <div class="flex flex-col items-end">
                                        <div class="flex gap-4 mb-1.5">
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="check-circle" class="w-[18px] h-[18px] text-emerald-500 stroke-[2.5]"></i> 32</span>
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="clock" class="w-[18px] h-[18px] text-orange-500 stroke-[2.5]"></i> 1</span>
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-500 stroke-[2.5]"></i> 2</span>
                                        </div>
                                        <div class="w-[125px] h-1 bg-emerald-500 rounded-full"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 cursor-pointer transition" onclick="switchView('matkul')">
                                <td class="p-4 font-bold text-slate-800">MI01</td>
                                <td class="p-4 font-semibold text-slate-600">MI-2A</td>
                                <td class="p-4">
                                    <div class="flex flex-col items-end">
                                        <div class="flex gap-4 mb-1.5">
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="check-circle" class="w-[18px] h-[18px] text-emerald-500 stroke-[2.5]"></i> 32</span>
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="clock" class="w-[18px] h-[18px] text-orange-500 stroke-[2.5]"></i> 1</span>
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-500 stroke-[2.5]"></i> 2</span>
                                        </div>
                                        <div class="w-[125px] h-1 bg-emerald-500 rounded-full"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 cursor-pointer transition" onclick="switchView('matkul')">
                                <td class="p-4 font-bold text-slate-800">MI02</td>
                                <td class="p-4 font-semibold text-slate-600">MI-4B</td>
                                <td class="p-4">
                                    <div class="flex flex-col items-end">
                                        <div class="flex gap-4 mb-1.5">
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="check-circle" class="w-[18px] h-[18px] text-emerald-500 stroke-[2.5]"></i> 32</span>
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="clock" class="w-[18px] h-[18px] text-orange-500 stroke-[2.5]"></i> 1</span>
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-500 stroke-[2.5]"></i> 2</span>
                                        </div>
                                        <div class="w-[125px] h-1 bg-emerald-500 rounded-full"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 cursor-pointer transition" onclick="switchView('matkul')">
                                <td class="p-4 font-bold text-slate-800">TI01</td>
                                <td class="p-4 font-semibold text-slate-600">TI-4C</td>
                                <td class="p-4">
                                    <div class="flex flex-col items-end">
                                        <div class="flex gap-4 mb-1.5">
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="check-circle" class="w-[18px] h-[18px] text-emerald-500 stroke-[2.5]"></i> 32</span>
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="clock" class="w-[18px] h-[18px] text-orange-500 stroke-[2.5]"></i> 1</span>
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-500 stroke-[2.5]"></i> 2</span>
                                        </div>
                                        <div class="w-[125px] h-1 bg-emerald-500 rounded-full"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 cursor-pointer transition" onclick="switchView('matkul')">
                                <td class="p-4 font-bold text-slate-800">TL01</td>
                                <td class="p-4 font-semibold text-slate-600">TL-2B</td>
                                <td class="p-4">
                                    <div class="flex flex-col items-end">
                                        <div class="flex gap-4 mb-1.5">
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="check-circle" class="w-[18px] h-[18px] text-emerald-500 stroke-[2.5]"></i> 32</span>
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="clock" class="w-[18px] h-[18px] text-orange-500 stroke-[2.5]"></i> 1</span>
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-500 stroke-[2.5]"></i> 2</span>
                                        </div>
                                        <div class="w-[125px] h-1 bg-emerald-500 rounded-full"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50 cursor-pointer transition" onclick="switchView('matkul')">
                                <td class="p-4 font-bold text-slate-800">TP01</td>
                                <td class="p-4 font-semibold text-slate-600">TP-6A</td>
                                <td class="p-4">
                                    <div class="flex flex-col items-end">
                                        <div class="flex gap-4 mb-1.5">
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="check-circle" class="w-[18px] h-[18px] text-emerald-500 stroke-[2.5]"></i> 32</span>
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="clock" class="w-[18px] h-[18px] text-orange-500 stroke-[2.5]"></i> 1</span>
                                            <span class="flex items-center text-slate-800 font-semibold text-sm gap-1.5"><i data-lucide="x-circle" class="w-[18px] h-[18px] text-red-500 stroke-[2.5]"></i> 2</span>
                                        </div>
                                        <div class="w-[125px] h-1 bg-emerald-500 rounded-full"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="flex justify-center mt-6">
                        <button class="text-slate-400 font-medium text-sm flex items-center gap-1 hover:text-slate-600 transition">Lainnya <i data-lucide="chevron-down" class="w-4 h-4"></i></button>
                    </div>
                </div>
            </div>

            <div id="view-matkul" class="fade-in hidden space-y-6">
                <button onclick="switchView('kelas')" class="flex items-center gap-2 text-poliban font-bold text-sm bg-transparent border-none cursor-pointer mb-2 hover:opacity-80">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> Kembali ke Daftar Kelas
                </button>
                <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm">
                    <h2 class="text-xl font-bold mb-8">Daftar Matakuliah TI - 4C</h2>
                    <table class="w-full text-left">
                        <thead class="text-slate-400 text-[11px] font-bold uppercase tracking-wider">
                            <tr><th class="pb-4">ID</th><th class="pb-4">Matakuliah</th><th class="pb-4">Dosen</th></tr>
                        </thead>
                        <tbody class="text-sm font-medium">
                            <tr class="hover:bg-slate-50 cursor-pointer transition" onclick="switchView('mhs')">
                                <td class="py-5 border-b border-slate-50">C0320403</td>
                                <td class="py-5 border-b border-slate-50 font-bold">Metode Numerik</td>
                                <td class="py-5 border-b border-slate-50">Nitami Lestari Putri, S.Kom, M.Kom</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="view-mhs" class="fade-in hidden space-y-6">
                <button onclick="switchView('matkul')" class="flex items-center gap-2 text-poliban font-bold text-sm bg-transparent border-none cursor-pointer mb-2 hover:opacity-80">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> Kembali ke Daftar Matakuliah
                </button>
                <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm">
                    <h2 class="text-xl font-bold mb-8">Daftar Presensi Mahasiswa TI-4C</h2>
                    <table class="w-full text-left">
                        <thead class="text-slate-400 text-[11px] font-bold uppercase tracking-wider">
                            <tr><th class="pb-4">NIM</th><th class="pb-4">Nama Mahasiswa</th><th class="pb-4 w-1/3">Presentase</th><th class="pb-4 text-center">Aksi</th></tr>
                        </thead>
                        <tbody class="text-sm font-medium">
                            <tr class="hover:bg-slate-50">
                                <td class="py-5 border-b border-slate-50">C030324011</td>
                                <td class="py-5 border-b border-slate-50 font-semibold">Aufa Qonita Salsabila</td>
                                <td class="py-5 border-b border-slate-50">
                                    <div class="flex items-center gap-3">
                                        <div class="flex-1 bg-slate-100 h-2.5 rounded-full overflow-hidden">
                                            <div class="bg-poliban h-full" style="width: 75%"></div>
                                        </div>
                                        <span class="text-[10px] text-slate-500 font-semibold">75%</span>
                                    </div>
                                </td>
                                <td class="py-5 border-b border-slate-50 text-center">
                                    <button onclick="switchView('detail')" class="w-8 h-8 rounded-full bg-blue-50 text-poliban border-none cursor-pointer hover:bg-poliban hover:text-white transition inline-flex items-center justify-center">
                                        <i data-lucide="eye" class="w-4 h-4"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="view-detail" class="fade-in hidden space-y-6">
                <button onclick="switchView('mhs')" class="flex items-center gap-2 text-poliban font-bold text-sm bg-transparent border-none cursor-pointer mb-2 hover:opacity-80">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> Kembali ke Daftar Mahasiswa
                </button>
                
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex flex-wrap justify-between items-center gap-6">
                    <div class="flex items-center gap-6">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center font-bold text-xl text-poliban shadow-sm">AQ</div>
                        <div>
                            <h2 class="text-2xl font-bold text-slate-800 m-0 leading-tight">Aufa Qonita Salsabila</h2>
                            <p class="text-slate-500 text-sm mt-1 font-medium">NIM: <span class="text-slate-700">C030324011</span></p>
                        </div>
                    </div>
                    <div class="flex gap-6 border-l border-slate-100 pl-6">
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase m-0">Program Studi</p>
                            <p class="text-sm font-semibold text-slate-700 m-0">D3 Teknik Informatika</p>
                        </div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase m-0">Kelas</p>
                            <p class="text-sm font-semibold text-slate-700 m-0">TI-4C</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-5">
                    <div class="bg-blue-50 p-5 rounded-2xl border border-blue-100 flex items-center gap-4">
                        <div class="bg-white text-poliban w-10 h-10 rounded-lg flex items-center justify-center shrink-0 shadow-sm"><i data-lucide="calendar" class="w-5 h-5"></i></div>
                        <div>
                            <p class="text-[10px] font-bold text-blue-400 uppercase m-0">Total Pertemuan</p>
                            <h3 class="text-xl font-bold text-blue-700 m-0">11/16</h3>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="bg-emerald-50 text-emerald-600 w-10 h-10 rounded-lg flex items-center justify-center shrink-0 shadow-sm"><i data-lucide="user-check" class="w-5 h-5"></i></div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase m-0">Hadir</p>
                            <h3 class="text-xl font-bold text-slate-800 m-0">10</h3>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="bg-orange-50 text-orange-600 w-10 h-10 rounded-lg flex items-center justify-center shrink-0 shadow-sm"><i data-lucide="user" class="w-5 h-5"></i></div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase m-0">Izin/Sakit</p>
                            <h3 class="text-xl font-bold text-slate-800 m-0">1</h3>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-center gap-4">
                        <div class="bg-red-50 text-red-600 w-10 h-10 rounded-lg flex items-center justify-center shrink-0 shadow-sm"><i data-lucide="user-x" class="w-5 h-5"></i></div>
                        <div>
                            <p class="text-[10px] font-bold text-slate-400 uppercase m-0">Alfa</p>
                            <h3 class="text-xl font-bold text-slate-800 m-0">0</h3>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
                    <table class="w-full text-left table-rounded">
                        <thead class="bg-slate-50 text-slate-500 text-[11px] font-bold uppercase tracking-wider">
                            <tr><th class="p-4 rounded-tl-lg">Pertemuan</th><th class="p-4">Tanggal</th><th class="p-4">Materi</th><th class="p-4 rounded-tr-lg">Status</th></tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr class="border-b border-slate-50 hover:bg-slate-50/50">
                                <td class="p-4 font-semibold text-slate-800">1</td>
                                <td class="p-4 font-medium text-slate-600">Kamis, 12 Februari 2026</td>
                                <td class="p-4 font-medium text-slate-600">Kontrak Perkuliahan</td>
                                <td class="p-4"><span class="bg-emerald-50 text-emerald-600 px-3 py-1 rounded text-xs font-bold">Hadir</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <script src="../js/sidebar.js"></script>
    <script src="../js/header.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            if (typeof lucide !== 'undefined') lucide.createIcons();
        });

        function switchView(target) {
            // Sembunyikan semua layar
            const views = ['view-kelas', 'view-matkul', 'view-mhs', 'view-detail'];
            views.forEach(v => {
                const el = document.getElementById(v);
                if(el) { el.classList.add('hidden'); el.classList.remove('block'); }
            });

            // Munculkan layar yang dituju
            const targetEl = document.getElementById(`view-${target}`);
            if(targetEl) {
                targetEl.classList.remove('hidden');
                targetEl.classList.add('block');
            }

            // TARGETKAN ELEMEN HEADER 
            const pageTitle = document.getElementById("pageTitle");
            const welcomeText = document.getElementById("welcomeText");

            // LOGIKA PERUBAHAN TEKS DINAMIS
            if (target === 'kelas') {
                if (pageTitle) pageTitle.innerText = "Presensi";
                if (welcomeText) welcomeText.innerText = "Kelola Presensi/Kehadiran Mahasiswa";
            } 
            else if (target === 'matkul') {
                if (pageTitle) pageTitle.innerText = "Presensi Mahasiswa";
                if (welcomeText) welcomeText.innerText = "Presensi Mahasiswa Per Matakuliah";
            } 
            else if (target === 'mhs') {
                if (pageTitle) pageTitle.innerText = "Presensi Matakuliah Metode Numerik";
                if (welcomeText) welcomeText.innerText = "Kelola Presensi/Kehadiran Mahasiswa";
            } 
            else if (target === 'detail') {
                if (pageTitle) pageTitle.innerText = "Presensi Matakuliah Metode Numerik";
                if (welcomeText) welcomeText.innerText = "Detail Presensi Mahasiswa";
            }

            // Refresh icon 
            if (typeof lucide !== 'undefined') lucide.createIcons();
        }
    </script>
@endsection
