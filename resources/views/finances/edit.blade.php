@extends('layout.main')

@section('title', 'Form Edit Data Finance')

@section('container')
<!-- Bagian Judul -->
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Data Finance</h1>

            <!-- Bagian Form -->
            <form method="post" action="/finances/{{ $finance->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Item</label>
                    <input type="text" class="form-control @error('item') is-invalid @enderror" id="item" placeholder="Input the item" name="item" value="{{ $finance->item }}" autofocus>
                    @error('item')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nominal</label>
                    <input type="text" class="form-control @error('nominal') is-invalid @enderror" id="nominal" placeholder="Input the nominal" name="nominal" value="{{ $finance->nominal }}">
                    @error('nominal')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Amount</label>
                    <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" placeholder="Input the amount" name="jumlah" value="{{ $finance->jumlah }}">
                    @error('jumlah')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Total</label>
                    <input type="text" class="form-control @error('total') is-invalid @enderror" id="total" placeholder="Input the total" name="total" value="{{ $finance->total }}">
                    @error('total')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit This Data!</button>
            </form>
            @endsection
