@extends('dashboard_layouts.app')

@section('title', 'Pemesanan')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-start mb-3">
            <h1 class="h3 mb-0 text-gray-800"><b>Pemesanan Kendaraan</b></h1>
        </div>

        @php
            $role = Auth::user()->role; // Ambil role pengguna saat ini
        @endphp

        @if ($role == 'admin')
            @include('tabel_pemesanan.admin')
        @elseif ($role == 'approver1')
            @include('tabel_pemesanan.acc1')
        @elseif ($role == 'approver2')
            @include('tabel_pemesanan.acc2')
        @endif
    </div>
@endsection
