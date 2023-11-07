{{--  pakai antara include dan extend  --}}
@extends('blank')
@section('jihad')
    @if(request()->is('kelolamenu'))
@include('auth.laporan.kelola_menu')

        @else
        @include('auth.laporan.input_menu')

    @endif
@endsection

@section('footer')
@include('auth.footer')
@endsection
