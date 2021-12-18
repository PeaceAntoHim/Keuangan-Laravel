@extends('layout.main')

@section('title', 'About | Bastian Learn Laravel')

@section('container')
<!-- Bagian Judul -->
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Data Keuangan</h1>

            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Item</th>
                        <th scope="col" class="text-center">Nominal</th>
                        <th scope="col" class="text-center">Jumlah/bulan</th>
                        <th scope="col" class="text-center">Total</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $keuangan as $ke )
                    <tr>
                        <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                        <td class="text-center">{{ $ke->item }}</td>
                        <td class="text-center">{{ $harga }} {{ $ke->nominal }}</td>
                        <td class="text-center">{{ $ke->jumlah }}</td>
                        <td class="text-center">{{ $harga }} {{ $ke->total }}</td>
                        <td class="text-center">
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
