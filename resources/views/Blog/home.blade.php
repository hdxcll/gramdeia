@section('judul_halaman', 'Halaman Home')
@extends('master')
@section('konten')
@if (Auth::check())
        
    <div class="jumbotron">
        <h1>Selamat Datang di Blog Kami!</h1>
        <p>Ini adalah halaman utama blog kami.</p>
        <p>Selamat datang, {{ $nama }}!</p>
    </div>
    <style>
        .jumbotron {
            background-color: #ffffff;
            text-align: center;
            padding: 50px;
        }
        .jumbotron h1 {
            color: #333;
            font-size: 36px;
        }

        .jumbotron p {
            color: #555;
            font-size: 18px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-title {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .card-text {
            font-size: 16px;
            color: #888;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }
        .list-group-item {
            font-size: 18px;
            border-radius: 0;
        }
    </style>
    @else
    <li class="nav-item">
    <a class="nav-link" href="<?php echo url('/gramedia') ?>">Login</a>
        </li>
        @endif
    
@endsection