@extends('layout.main')

@section('title', 'Data Finance | Bastian Learn Laravel')

@section('container')
<!-- Bagian Judul -->
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Data Finance</h1>

            <a href="/finances/create" class="btn btn-primary my-3">Add Purchase Data</a>
            <a href="/keuangan" class="btn btn-success my-3 float-right">See Data Finance On Table</a>
            @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <!-- Bagian List -->
            <ul class="list-group">
                @foreach( $finances as $finance )
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $finance->item }}
                    <a href="/finances/{{ $finance->id }}" class="badge badge-info"> detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
