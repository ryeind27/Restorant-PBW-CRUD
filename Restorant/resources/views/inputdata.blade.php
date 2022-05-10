@extends('template')
@section('title', 'Input Data Mahasiswa')

@section('konten')

    <div class="col-md-4 formdata text-center">
        <form action="/restorant/store" method ="post">

            <div class="mb-3">
                <input type=text, name="nama", placeholder = "Jumlah pelanggan", required="required" size="50">
            </div>
            <div class="mb-3">
                <input type=text, name="nama", placeholder = "Nama Pemesan", required="required" size="50">
            </div>
            <div class="mb-3">
                <input type=text, name="nama", placeholder = "Jumlah Pesanan", required="required" size="50">
            </div>
            <div class="mb-3">
                <input type=text, name="nama", placeholder = "Harga Total", required="required" size="50">
            </div>
            <div class="mb-3">
                <input type=text, name="nama", placeholder = "Jadwal Reservasi", required="required" size="50">
            </div>
            <input type="submit" value="Pesan">
        </form>
    </div>

@endsection
