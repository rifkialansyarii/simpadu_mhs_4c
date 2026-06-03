@extends('layouts.app')

@section('title', 'login')

@section('content')
<div class="container">

        <!-- LEFT -->
        <div class="left">

            <div class="brand">

                <div class="logo">
                    <img src="../assets/img/logo_poliban.png" alt="">
                </div>

                <div class="brand-text">

                    <h1>SIMPADU</h1>
                    <h2>ADMIN PORTAL</h2>

                    <p>
                        POLITEKNIK NEGERI BANJARMASIN
                    </p>

                    <div class="accent"></div>

                </div>

            </div>

            <div class="hero">

                <h3>
                    Kelola Data Akademik<br>
                    Secara Terintegrasi<br>
                    dan Efisien
                </h3>

            </div>

            <div class="card">

                <img src="../assets/img/poliban.jpeg" alt="Poliban">

                <div class="badge">
                    <h4>Politeknik Negeri Banjarmasin</h4>
                    <p>Excellence in Technical Education</p>
                </div>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="right">

            <div>

                <!-- LOGO -->
                <div class="top-logo">

                    <div class="circle">
                        <img src="../assets/img/logo_poliban.png" alt="">
                    </div>

                    <h1>POLIBAN</h1>

                    <p>Sistem Informasi Akademik Terpadu</p>
                    <p>Politeknik Negeri Banjarmasin</p>

                </div>

                <!-- LOGIN BOX -->
                <div class="login-box">

                    <h2>Masuk dan Verifikasi</h2>

                    <p class="subtitle">
                        Masukkan kredensial untuk mengakses sistem
                    </p>

                    <!-- FORM -->
                    <form id="loginForm">

                        <!-- EMAIL -->
                        <div class="form-group">

                            <label>Email</label>

                            <div class="input-box">

                                <i class="fa-regular fa-envelope"></i>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="admin@poliban.ac.id"
                                    required
                                    autocomplete="off"
                                >

                            </div>

                        </div>

                        <!-- PASSWORD -->
                        <div class="form-group">

                            <label>Password</label>

                            <div class="input-box">

                                <i class="fa-solid fa-lock"></i>

                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    placeholder="••••••••"
                                    required
                                    minlength="6"
                                    autocomplete="off"
                                >

                                <i class="fa-regular fa-eye-slash eye-icon"></i>

                            </div>

                        </div>

                        <!-- REMEMBER -->
                        <div class="row">

                            <label>
                                <input type="checkbox">
                                Ingat saya
                            </label>

                            <a href="#">
                                Lupa password?
                            </a>

                        </div>

                        <!-- BUTTON -->
                        <button type="submit" id="loginBtn">
                            Masuk ke Sistem
                        </button>

                        <!-- ERROR -->
                        <p class="error-message" id="errorMsg"></p>

                        <!-- SUCCESS -->
                        <p class="success-message" id="successMsg"></p>

                    </form>

                    <!-- FOOTER -->
                    <div class="footer">

                        © 2026 Politeknik Negeri Banjarmasin
                        <br>

                        Sistem Informasi Akademik Terpadu

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
