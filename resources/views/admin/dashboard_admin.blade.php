@extends('layouts.app')

@section('title', 'dashboard_admin')

@section('sidebar')
    @include('components.sidebar')
@endsection

@section('content')

@include('components.header', [
    'title' => 'Dashboard Admin',
    'subtitle' => 'Selamat datang di dashboard admin'
])

    <div class="container flex min-h-screen w-full">

        <div class="main flex-1 p-6 md:p-8 lg:p-10 w-full overflow-y-auto bg-[#f8fafc]">

            <div class="cards grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
                <div
                    class="card bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                    <div class="card-top flex items-center justify-start gap-4 mb-4">
                        <div
                            class="card-icon blue bg-blue-50 text-blue-600 w-11 h-11 rounded-xl flex items-center justify-center shrink-0 shadow-sm">
                            <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h5 class="text-[11px] font-bold text-slate-400 uppercase tracking-wider m-0 mb-0.5">Total
                                mahasiswa</h5>
                            <h2 id="data-total-mahasiswa" class="text-2xl font-bold text-slate-800 m-0 leading-tight">0</h2>
                        </div>
                    </div>
                    <div class="card-bottom flex items-center gap-1.5 border-t border-slate-50 pt-3">
                        <span
                            class="up blue-text flex items-center text-[11px] font-bold text-blue-600 bg-blue-50 px-2 py-0.5 rounded">↑
                            8.2%</span>
                        <p class="text-[11px] text-slate-400 m-0">Seluruh mahasiswa terdaftar</p>
                    </div>
                </div>

                <div
                    class="card bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                    <div class="card-top flex items-center justify-start gap-4 mb-4">
                        <div
                            class="card-icon green bg-emerald-50 text-emerald-600 w-11 h-11 rounded-xl flex items-center justify-center shrink-0 shadow-sm">
                            <i data-lucide="users" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h5 class="text-[11px] font-bold text-slate-400 uppercase tracking-wider m-0 mb-0.5">Mahasiswa
                                Aktif</h5>
                            <h2 id="data-mahasiswa-aktif" class="text-2xl font-bold text-slate-800 m-0 leading-tight">0</h2>
                        </div>
                    </div>
                    <div class="card-bottom flex items-center gap-1.5 border-t border-slate-50 pt-3">
                        <span
                            class="up green-text flex items-center text-[11px] font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded">↑
                            6.1%</span>
                        <p class="text-[11px] text-slate-400 m-0">Aktif dalam perkuliahan</p>
                    </div>
                </div>

                <div
                    class="card bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                    <div class="card-top flex items-center justify-start gap-4 mb-4">
                        <div
                            class="card-icon orange bg-orange-50 text-orange-600 w-11 h-11 rounded-xl flex items-center justify-center shrink-0 shadow-sm">
                            <i data-lucide="wallet" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h5 class="text-[11px] font-bold text-slate-400 uppercase tracking-wider m-0 mb-0.5">Tagihan UKT
                            </h5>
                            <h2 id="data-tagihan-ukt" class="text-2xl font-bold text-slate-800 m-0 leading-tight">0</h2>
                        </div>
                    </div>
                    <div class="card-bottom flex items-center gap-1.5 border-t border-slate-50 pt-3">
                        <span
                            class="up orange-text flex items-center text-[11px] font-bold text-orange-600 bg-orange-50 px-2 py-0.5 rounded">↑
                            12%</span>
                        <p class="text-[11px] text-slate-400 m-0">Belum melakukan pembayaran</p>
                    </div>
                </div>
            </div>

            <div class="content grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="box bg-white p-6 rounded-2xl border border-slate-100 shadow-sm w-full">
                    <div class="box-header flex justify-between items-center mb-5 border-b border-slate-50 pb-3">
                        <h3 class="text-sm font-bold text-slate-800 m-0 tracking-wide">Jadwal Mendatang</h3>
                    </div>

                    <div id="container-jadwal" class="flex flex-col gap-4">
                    </div>

                </div>

                <div class="lg:col-span-1 invisible"></div>
            </div>

        </div>

    </div>

    <script>
        lucide.createIcons();
    </script>
@endsection