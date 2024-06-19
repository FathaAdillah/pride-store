@extends('layouts.app')

@section('title', 'Pengeluaran')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Pengeluaran</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Pengeluaran</a></div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                {{-- <h2 class="section-title">Sumber Pengeluaran</h2>
                <p class="section-lead">
                    You can manage all Pengeluaran
                </p> --}}
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Input</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('pengeluaran.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="sumber_pengeluaran">Sumber Pengeluaran</label>
                                        <select class="form-control selectric" name="sumber_pengeluaran" id="sumber_pengeluaran" required>
                                            <option value="">Pilih Sumber Pengeluaran</option>
                                            @foreach ($sumbers as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea class="form-control" name="keterangan" id="keterangan" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Qty</label>
                                        <input type="number" class="form-control" name="qty" id="qty" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nominal">Nominal</label>
                                        <input type="number" class="form-control" name="nominal" id="nominal" placeholder="Rp." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control datepicker" name="tanggal" id="tanggal" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Produk</label>
                                        <select class="form-control selectric" name="produk_id" id="produk_id" required>
                                            <option value="">Pilih Produk</option>
                                            @foreach ($produks as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                    <button href="{{ route('pengeluaran.index') }}" class="btn btn-warning">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
