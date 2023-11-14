{{--  pakai antara include dan extend  --}}
@extends('blank')
@section('jihad')
    @if(request()->is('kelolamenu'))
            @include('auth.laporan.kelola_menu')

        @elseif(request()->is('tambah_menu'))
            @include('auth.laporan.input_menu')
        @elseif(request()->is('register'))
            @include('auth.laporan.register')
        @elseif(request()->is('kelolauser'))
            @include('auth.laporan.kelola_user')

    @endif
@endsection

{{--  @section('footer')
@include('auth.footer')
@endsection  --}}
