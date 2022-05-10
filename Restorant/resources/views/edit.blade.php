@extends('template')
@section('title', 'Edit Data Mahasiswa')

@section('konten')
    @foreach($mahasiswa as $mhs)
        {{--<form class="formdata" action="/mahasiswa/update" method ="post">
            {{csrf_field()}}
            Jumlah Pelanggan <br>  <input type=text, name="Jumlah_Pelanggan", required="required", value="{{$resto->jumlah_pelanggan}}"><br>
            Nama Pemesan <br> <input type=text, name="Nama_Pemesan", required="required", value="{{$resto->nama_pemesan}}"><br>
            Jumlah Pesanan <br><input type=text, name="Jumlah_Pesanan", required="required", value="{{$resto->jumlah_pesanan}}"><br>
            Total Harga <br> <input type=text, name="Total_Harga", required="required", value="{{$resto->harga_total}}"><br>
            Jadwal Reservasi <br> <input type=text, name="Jadwal_Reservasi", required="required", value="{{$resto->jadwal_reservasi}}"><br>
            <input type="submit" value="Simpan Data">
        </form>--}}
        <div class="col-md-4 formdata text-center">
            <form action="/restorant/store" method ="post">

                <div class="mb-3">
                    <input type=text, name="nama", placeholder = "Jumlah pelanggan", required="required" size="50" value="{{$resto->jumlah_pelanggan}}">
                </div>
                <div class="mb-3">
                    <input type=text, name="nama", placeholder = "Nama Pemesan", required="required" size="50" value="{{$resto->nama_pemesan}}">
                </div>
                <div class="mb-3">
                    <input type=text, name="nama", placeholder = "Jumlah Pesanan", required="required" size="50" value="{{$resto->jumlah_pesanan}}>
                </div>
                <div class="mb-3">
                    <input type=text, name="nama", placeholder = "Harga Total", required="required" size="50" value="{{$resto->harga_total}}>
                </div>
                <div class="mb-3">
                    <input type=text, name="nama", placeholder = "Jadwal Reservasi", required="required" size="50" value="{{$resto->jadwal_reservasi}}>
                </div>
                <input type="submit" value="Pesan">
            </form>
        </div>
    @endforeach
@endsection
