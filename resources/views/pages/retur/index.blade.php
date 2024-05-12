@extends('layouts.app')

@section('title', 'Sumber Pengeluaran')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>History Pengembalian</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Retur Baju</a></div>
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
                                <h4>All Posts</h4>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <form method="GET" action="{{ route('retur.index') }}">
                                            <div class="form-group">
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form method="GET" action="{{ route('retur.index') }}">
                                            <div class="form-group">
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy"
                                                    id="from" name="tanggal">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <form method="GET" action="{{ route('retur.index') }}">
                                        <div>
                                            <button type="submit" class="btn btn-info">Cari</button>
                                            <button type="submit" class="btn btn-info">Lihat Semua Data</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="float-right">
                                    <form method="GET" action="{{ route('retur.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search"
                                                name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix mb-3"></div>
                                <div class="table-responsive">
                                    <table class="table-striped table-bordered table">
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis Produk</th>
                                            <th>jumlah Produk</th>
                                            <th>tanggal</th>
                                        </tr>
                                        @foreach ($returs as $retur)
                                            <tr>
                                                <td>{{ $retur->id }}</td>
                                                <td>{{ $retur->jenis_produk->jenis_produk }}</td>
                                                <td>{{ $retur->jumlah }}</td>
                                                <td>{{ $retur->tanggal }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $returs->withQueryString()->links() }}
                                </div>
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
