@section('judul_halaman', 'Halaman Tentang')
@extends('master')
@section('konten')
@if (Auth::check())

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/tabel.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2>Data Buku</h2>
    <a href="/ktambah" class="btn btn-success">Tambah Data</a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th></tr>
          <th>Nama Buku</th>
          <th>Kategori</th>
          <th>Penerbit</th>
          <th>Tahun</th>
          <th>Jumlah Buku</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($buku as $data_buku)
        <tr>
          <td>{{ $data_buku->id }}</td>
          <td>{{ $data_buku->nama_buku }}</td>
          <td>{{ $data_buku->kategori_buku }}</td>
          <td>{{ $data_buku->penerbit_buku }}</td>
          <td>{{ $data_buku->tahun_buku }}</td>
          <td>{{ $data_buku->jumlah_buku }}</td>
          <td>
            <a class="btn btn-primary" href="/buku/edit/{{ $data_buku->id }}">Edit</a>
            <form action="/buku/delete/{{ $data_buku->id }}" method="post">
              @csrf
              <input type="hidden" name="page" value="{{ $buku->currentPage() }}">
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="pagination justify-content-center">
      Halaman: {{ $buku->currentPage() }} |
      Jumlah Data: {{ $buku->total() }} |
      Data Per Halaman: {{ $buku->perPage() }}
      {{ $buku->links() }}
    </div>
  </div>
</body>
</html> 
@else
@endif    
@endsection