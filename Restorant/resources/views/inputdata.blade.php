@extends('navbar')
@section('Input Data Restorant')

@section('konten')

    <div class="col-md-4 formdata text-center">
        <form action="/restorant/store" method ="post">
            @csrf
            <div class="mb-3">
                <input type=text, name="jumlah_pelanggan", placeholder = "Jumlah pelanggan", required="required", size="50">
            </div>
            <div class="mb-3">
                <input type=text, name="nama_pemesan", placeholder = "Nama Pemesan", required="required", size="50">
            </div>
            <div class="mb-3">
                <input type=text, name="jumlah_pesanan", placeholder = "Jumlah Pesanan", required="required", size="50">
            </div>
            <div class="mb-3">
                <input type=text, name="harga_total", placeholder = "Harga Total(Rp.5000 etc..)", required="required", size="50">
            </div>
            <div class="mb-3">
                <input type=text, name="jadwal", placeholder = "Jadwal Reservasi(Senin, Selasa etc..)", required="required", size="50">
            </div>
            <input type="submit" value="Pesan">
        </form>
    </div>

@endsection
