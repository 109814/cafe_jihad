@extends('blank')
@section('jihad')
<div class="card">
    <div class="card_header">
        <a href="kelolamenu" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card-body">
        <form class="user" method="POST" action="{{ route('updateMenu', $menu->id_menu) }}">
            @csrf
            {{--  @method('PUT')  --}}
            <div class="form-group">
                <label>Nama Menu</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Menu">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="Masukan Harga Menu">
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis">
                <option value="">--Pilih Jenis Menu--</option>
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                </select>
            </div>
            <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
            <span class="text">Simpan</span>
            </button>
            <button type="reset" class="btn btn-secondary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-undo"></i>
                </span>
            <span class="text">Kosongkan</span>
            </button>
            </div>
        </form>
    </div>
</div>
@endsection
