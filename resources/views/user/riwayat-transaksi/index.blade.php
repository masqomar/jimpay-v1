@extends('layouts.users.app')

@section('title', trans('Riwayat Transaksi'))

@section('navName', trans('Riwayat Transaksi'))

@section('content')
<div style="overflow-x:auto;">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center" width=30%>Tanggal</th>
                <th class="text-center" width=30%>Nominal</th>
                <th class="text-center" width=40%>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($riwayatTransaksiAll as $riwayatTransaksi)
            <tr>
                <td>{{ $riwayatTransaksi->created_at}}</td>
                <td>@rupiah ($riwayatTransaksi->amount)</td>
                <td>{{ $riwayatTransaksi->meta['description'] ?? 'Tidak Ada Keterangan' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    Halaman : {{ $riwayatTransaksiAll->currentPage() }} <br />
    Jumlah Data : {{ $riwayatTransaksiAll->total() }} <br />
    Data Per Halaman : {{ $riwayatTransaksiAll->perPage() }} <br />


    {{ $riwayatTransaksiAll->links() }}
</div>
@endsection