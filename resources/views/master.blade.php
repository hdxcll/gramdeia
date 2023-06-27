<!DOCTYPE html>
<html>
    <head>
    <title>Laravel Blade View</title>
    </head>
    <body style="text-align: center">
        <h2>GRAMEDIA PROJECT</h2>
        @if(Auth::check())
        <nav>
            <link href="css/topnav.css" rel="stylesheet">
            <div class="topnav">
                      <a class="nav-link" href="<?php echo url('/home') ?>">HOME</a></li>
                      <a class="nav-link" href="<?php echo url('/buku') ?>">DATA BUKU</a></li>
                      <a class="nav-link" href="<?php echo url('/tentang') ?>">TENTANG</a></li>
                      <a class="nav-link" href="<?php echo url('/kontak') ?>">KONTAK</a></li>
                      <a class="nav-link" href="<?php echo url('/logout') ?>">LOGOUT</a></li>
                      <a class="nav-link" href="#">{{ Auth::user()->name}}</a></li>  
                  </div>
                <hr/></nav><br/>
                  @else
                  @endif
    <h3> @yield('judul_halaman') </h3>
    
    
    <!-- bagian konten blog -->
    @yield('konten')
    
    <br/>
    <br/>
    <hr/>
    <footer>
    <p>Modul praktikum pemrograman web lanjut 
        tahun @include('tahun') </p>
    </li>
</footer>
    </body>
    </html>