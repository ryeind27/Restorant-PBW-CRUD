@extends('template')
@section('title', 'Edit Data Restoran')

@section('konten')
    @foreach($restorant as $resto)
        <div class="col-md-4 formdata text-center">
            <form action="/restorant/update" method ="post">
                @csrf
                <div class="mb-3">
                    <input type=text, name="id", placeholder = "id", required="required", size="50", value="{{$resto->id}}", readonly>
                </div>
                <div class="mb-3">
                    <input type=text, name="jumlah_pelanggan", placeholder = "Jumlah pelanggan", required="required", size="50", value="{{$resto->jumlah_pelanggan}}">
                </div>
                <div class="mb-3">
                    <input type=text, name="nama_pemesan", placeholder = "Nama Pemesan", required="required", size="50", value="{{$resto->nama_pemesan}}">
                </div>
                <div class="mb-3">
                    <input type=text, name="jumlah_pesanan", placeholder = "Jumlah Pesanan", required="required", size="50", value="{{$resto->jumlah_pesanan}}">
                </div>
                <div class="mb-3">
                    <input type=text, name="harga_total", placeholder = "Harga Total", required="required", size="50", value="{{$resto->harga_total}}">
                </div>
                <div class="mb-3">
                    <input type=text, name="jadwal", placeholder = "Jadwal Reservasi", required="required", size="50", value="{{$resto->jadwal}}">
                </div>
                <input type="submit" value="Konfirmasi Perubahan">
            </form>
        </div>
    @endforeach
@endsection
