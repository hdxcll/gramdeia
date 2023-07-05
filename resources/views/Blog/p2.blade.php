<link href="css/iflogin.css" rel="stylesheet">   
@if (Auth::check())
<!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/tabel.css" rel="stylesheet">
    </head>     
    <body>
        <section>
            <!--- navigation --->
            <nav>
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
     
            <!--- text --->
            <div class="text-container">
                <p></p>
                <p>Si Kancil</p>
                <p>Buku Si Kancil </p>
                <p>Buku Si Kancil adalah sebuah karya yang memukau, mengisahkan petualangan seru dan ceria <br> 
                karakter yang sangat dikagumi di dunia dongeng Indonesia, yaitu Si Kancil. Dalam buku ini, Akan <br>
                diajak mengikuti perjalanan  Si Kancil melalui hutan yang penuh dengan intrik dan tantangan.</p>
                <button class="down-cv">Buy Rp 74.400</button>
            </div>
            <!-- model -->
            <img alt="model" class="model" src="images/ilustrasi.jpg">  
          
    </body>    
    </html>
    @else
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="text-container">
        
    <p class="nav-item" style="text-align: center">
    <button><a class= "nav-link" href="<?php echo url('/gramedia') ?>" style="color: rgb(0, 0, 0) " >Login</a>
    </button></p></p></div>

    
    @endif