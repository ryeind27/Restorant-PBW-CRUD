@extends('template')
@section('title', 'Data Mahasiswa')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <h2> Data Reservasi Restorant </h2>
	<div class="row">
        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>Jumlah Pelanggan</th>
                    <th>Nama Pemesan</th>
                    <th>Jumlah Pesanan</th>
                    <th>Harga Total</th>
                    <th>Jadwal Reservasi</th>
                </thead>
            <tbody>
                @foreach($restorant as $resto)
                <tr>
                    <td>{{$resto->jumlah_pelanggan}}</td>
                    <td>{{$resto->nama_pemesan}}</td>
                    <td>{{$resto->jumlah_pesanan}}</td>
                    <td>{{$resto->harga_total}}</td>
                    <td>{{$resto->jadwal_reservasi}}</td>
                    <td>
                        <a href="/mahasiswa/edit/{{ $mhs->nim}}">Ubah</a>
                        <!-- <a href="">Edit</a>&nbsp;&nbsp;&nbsp; -->
                        <a style="color:red;" href="/mahasiswa/hapus/{{ $mhs->nim}}">Batalkan</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
