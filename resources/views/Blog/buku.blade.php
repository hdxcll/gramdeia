@section('judul_halaman', 'Halaman Tentang')
@extends('master')
@section('konten')
@if (Auth::check())

<!DOCTYPE html>
<html>
<head> <meta charset="utf-2">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
  
</head>
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
  
  <h2>Data Buku</h2>
  <p> List
    <table class="table table-borderered"> 
      <a href="/ktambah" class="btn btn-success">Tambah Data</a>
      
      <thead>
        <tr>
    <th>No</th>
    <th>Nama Buku</th>
    <th>Kategori</th>
    <th>Penerbit</th>
    <th>Tahun</th>
    <th>Jumlah Buku</th>
    <th>Action</th>
    </tr>  

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
                            </form>
                        </div>
                        <div class="col-4">
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
<br/>
	Halaman : {{ $buku->currentPage() }} <br/>
	Jumlah Data : {{ $buku->total() }} <br/>
	Data Per Halaman : {{ $buku->perPage() }} <br/>
 
 
	{{ $buku->links() }}
 

</body>
</html> 
@else
@endif    
@endsection