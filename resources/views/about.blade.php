@extends('layout.main')

@section('title', 'About | Bastian Learn Laravel')

@section('container')
<!-- Bagian Judul -->
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Hello, {{$nama}}!</h1>
        </div>
    </div>
</div>
@endsection
