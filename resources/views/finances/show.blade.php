@extends('layout.main')

@section('title', 'About | Bastian Learn Laravel')

@section('container')
<!-- Bagian Judul -->
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Data Finance</h1>

            <!-- Bagian content -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>ITEM : </b>{{ $finance->item }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted"><b>NOMINAL : </b>{{ $finance->nominal }}</h6>
                    <p class="card-text"><b>AMOUNT : </b> {{ $finance->jumlah }}</p>
                    <p class="card-text"><b>TOTAL : </b>{{ $finance->total }}</p>

                    <!-- Bagian Button -->
                    <a href="{{ $finance->id }}/edit" class="btn btn-primary">edit</a>
                    <form action="/finances/{{ $finance->id  }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>

                    <br><br>
                    <a href="/finances" class="card-link">return</a>
                </div>
            </div>
            @endsection
