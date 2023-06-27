@section('judul_halaman', 'Halaman Tentang')

@extends('master')

@section('konten')
<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
  border: 1px solid;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
</head>
<body>

<h2>Let the table borders collapse</h2>

<table>
  <tr>
    <th>No</th>
    <th>Nama Buku</th>
    <th>Kategori</th>
    <th>Penerbit</th>
    <th>Tahun</th>
    <th>Jumlah Buku</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Si Kancil</td>
    <td>Anak-Anak</td>
    <td>Bukunesia</td>
    <td>2017</td>
    <td>13</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Geografi Indonesia</td>
    <td>Ilmu Pengetahuan Alam</td>
    <td>Graha Ilmu</td>
    <td>2020</td>
    <td>5</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Kewarganegaraan dan Sosial</td>
    <td>Politik</td>
    <td>Bukunesia</td>
    <td>2019</td>
    <td>8</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Kekuatan</td>
    <td>Religi</td>
    <td>Al Hayat</td>
    <td>2015</td>
    <td>11</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Big Bang Theory</td>
    <td>Ilmu Pengetahuan Alam</td>
    <td>Deepublish</td>
    <td>2016</td>
    <td>3</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Jalan Besar di Langit</td>
    <td>Novel</td>
    <td>Falcon</td>
    <td>2022</td>
    <td>5</td>
  </tr>
  <tr>
    <td>7</td>
    <td>Kutipan Ibu</td>
    <td>Novel</td>
    <td>Kota Depan</td>
    <td>2021</td>
    <td>10</td>
  </tr>
</table>

</body>
</html>


 
    <p>Ini Adalah Halaman Tentang</p>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
 
@endsection
