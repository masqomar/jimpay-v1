@extends('layouts.users.app')

@section('title', trans('Detail Simpanan Sukarela'))

@section('navName', trans('Detail Simpanan Sukarela'))

@section('content')
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
            @foreach ($simpananSukarela as $sukarela)
            @if($anggotaID == Auth::user()->id)
            <tr>
                <td class="text-center">{{ $sukarela->deposit_date}}</td>
                <td class="text-center">{{ $sukarela->month}} {{ $sukarela->year}}</td>
                <td class="text-center">@rupiah ($sukarela->amount)</td>
            </tr>
            @endif
            @endforeach


        </tbody>
    </table>

    <br>
    Halaman : {{ $simpananSukarela->currentPage() }} <br />
    Jumlah Data : {{ $simpananSukarela->total() }} <br />
    Data Per Halaman : {{ $simpananSukarela->perPage() }} <br />


    {{ $simpananSukarela->links() }}
</div>
@endsection