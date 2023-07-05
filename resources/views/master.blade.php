<!DOCTYPE html>
<html>
    <head>
    <title>Laravel Blade View</title>
    </head>
    <body style="text-align: center">
        <h2>GRAMEDIA PROJECT</h2>
        @if(Auth::check())
        <nav>
            <link href="css/tabel.css" rel="stylesheet">
                
                        <!--- navigation --->
                            <!--- logo --->
                            <a href="#" class="logo">Gramedia</a>
                            <!--- menu --->
                            <ul>
                                <li><a href="home" class="active">Home</a></li>
                                <li><a href="buku">Data Buku</a></li>
                                <li><a href="tentang">Tentang</a></li>
                                <li><a href="kontak">Contact</a></li>
                                <li><a href="logout">Logout</a></li>
                            </ul>
                        </nav>
                            <hr/></nav><br/>
                  @else
                  @endif
    <h3> @yield('judul_halaman') </h3>
    
    
    <!-- bagian konten blog -->
    @yield('konten')
    
    </body>
    </html>