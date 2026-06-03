@extends('layouts.app')

@section('title', 'jadwal_kuliah')

@section('content')
<div class="container-layout">
        
        <div id="sidebar"></div>

        <div class="main flex-1 w-full p-6 md:p-8 overflow-y-auto">
            
            <div id="header"></div>

            <div class="mt-6 w-full max-w-7xl mx-auto">
                <div class="bg-white border border-gray-200 rounded-2xl shadow-[0_2px_12px_-4px_rgba(0,0,0,0.05)] p-6 md:p-8">
                    
                    <h2 class="text-lg font-bold text-gray-900 mb-6">Daftar Jadwal Kuliah Kelas TI-4C</h2>
                    
                    <div class="overflow-x-auto rounded-xl">
                        <table class="w-full border-collapse border border-gray-200 text-center text-sm min-w-[800px]">
                            <thead>
                                <tr class="bg-[#fafafa] text-gray-700 font-semibold">
                                    <th class="p-4 border border-gray-200 w-36 whitespace-nowrap">Jam</th>
                                    <th class="p-4 border border-gray-200 w-[16%]">Senin</th>
                                    <th class="p-4 border border-gray-200 w-[16%]">Selasa</th>
                                    <th class="p-4 border border-gray-200 w-[16%]">Rabu</th>
                                    <th class="p-4 border border-gray-200 w-[16%]">Kamis</th>
                                    <th class="p-4 border border-gray-200 w-[16%]">Jumat</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-800">
                                
                                <tr>
                                    <td class="p-4 border border-gray-200 text-gray-500 font-medium whitespace-nowrap">08.00 - 09.40</td>
                                    
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-blue-100 text-blue-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">PPLBO</div>
                                            <div class="text-[13px] opacity-80">H-203</div>
                                        </div>
                                    </td>
                                    
                                    <td class="p-2.5 border border-gray-200"></td>
                                    
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-emerald-100 text-emerald-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">Pemrograman web</div>
                                            <div class="text-[13px] opacity-80">Lab. Rekayasa 1</div>
                                        </div>
                                    </td>
                                    
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-orange-100 text-orange-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">Metode Numerik</div>
                                            <div class="text-[13px] opacity-80">Lab. ARVR</div>
                                        </div>
                                    </td>
                                    
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-purple-100 text-purple-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">Keamanan Jaringan</div>
                                            <div class="text-[13px] opacity-80">Lab. Jaringan</div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="p-4 border border-gray-200 text-gray-500 font-medium whitespace-nowrap">09.40 - 10.30</td>
                                    <td class="p-2.5 border border-gray-200"></td>
                                    <td class="p-2.5 border border-gray-200"></td>
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-emerald-100 text-emerald-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">Pemrograman web</div>
                                            <div class="text-[13px] opacity-80">Lab. Rekayasa 1</div>
                                        </div>
                                    </td>
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-orange-100 text-orange-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">Metode Numerik</div>
                                            <div class="text-[13px] opacity-80">Lab. ARVR</div>
                                        </div>
                                    </td>
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-purple-100 text-purple-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">Keamanan Jaringan</div>
                                            <div class="text-[13px] opacity-80">Lab. Jaringan</div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="p-4 border border-gray-200 text-gray-500 font-medium whitespace-nowrap">10.30 - 12.10</td>
                                    <td class="p-2.5 border border-gray-200"></td>
                                    <td class="p-2.5 border border-gray-200"></td>
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-emerald-100 text-emerald-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">Pemrograman web</div>
                                            <div class="text-[13px] opacity-80">Lab. Rekayasa 1</div>
                                        </div>
                                    </td>
                                    <td class="p-2.5 border border-gray-200"></td>
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-purple-100 text-purple-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">Keamanan Jaringan</div>
                                            <div class="text-[13px] opacity-80">Lab. Jaringan</div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="p-4 border border-gray-200 text-gray-500 font-medium whitespace-nowrap">13.30 - 16.00</td>
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-red-100 text-red-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">PPB</div>
                                            <div class="text-[13px] opacity-80">UPT-TIK 103</div>
                                        </div>
                                    </td>
                                    <td class="p-2.5 border border-gray-200"></td>
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-cyan-100 text-cyan-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">Administrasi Database</div>
                                            <div class="text-[13px] opacity-80">UPT-TIK 103</div>
                                        </div>
                                    </td>
                                    <td class="p-2.5 border border-gray-200"></td>
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-fuchsia-100 text-fuchsia-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">Kecerdasan Buatan</div>
                                            <div class="text-[13px] opacity-80">H-205</div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="p-4 border border-gray-200 text-gray-500 font-medium whitespace-nowrap">16.00 - 18.00</td>
                                    <td class="p-2.5 border border-gray-200"></td>
                                    <td class="p-2.5 border border-gray-200"></td>
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-cyan-100 text-cyan-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">Administrasi Database</div>
                                            <div class="text-[13px] opacity-80">UPT-TIK 103</div>
                                        </div>
                                    </td>
                                    <td class="p-2.5 border border-gray-200"></td>
                                    <td class="p-2.5 border border-gray-200 align-top">
                                        <div class="bg-fuchsia-100 text-fuchsia-900 p-3.5 rounded-xl text-left h-full">
                                            <div class="font-bold mb-1.5 leading-tight">Kecerdasan Buatan</div>
                                            <div class="text-[13px] opacity-80">H-205</div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
    </div>

    <script src="../..{{ asset('js/sidebar.js') }}"></script>
    <script src="../..{{ asset('js/header.js') }}"></script>
@endsection
