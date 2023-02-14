@extends('layouts.users.app')

@section('title', trans('Simpanan Wajib'))

@section('navName', trans('Simpanan Wajib'))

@section('content')
@if($anggotaID == Auth::user()->id)

<h3 class="text-center"><strong>Total Simpanan Wajib @rupiah($totalSimpananWajib)</strong></h3>
@endif

<div style="overflow-x:auto;">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">Tanggal Setor</th>
                <th class="text-center">Periode</th>
                <th class="text-center">Nominal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($simpananWajib as $wajib)
            @if($anggotaID == Auth::user()->id)
            <tr>
                <td>{{ $wajib->deposit_date}}</td>
                <td>{{ $wajib->month}} {{ $wajib->year}}</td>
                <td>@rupiah ($wajib->amount)</td>
            </tr>
            @endif
            @endforeach


        </tbody>
    </table>

    <br>
    Halaman : {{ $simpananWajib->currentPage() }} <br />
    Jumlah Data : {{ $simpananWajib->total() }} <br />
    Data Per Halaman : {{ $simpananWajib->perPage() }} <br />


    {{ $simpananWajib->links() }}
</div>
@endsection