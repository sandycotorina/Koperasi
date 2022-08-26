@extends('layouts.app')

@section('content')
<div class="col-lg-12">

    <div class="card">
        <h5 class="card-header">Perbaharui Pinjaman : </h5>
        <div class="card-body">
            <form action="{{route('types.update', $type->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nama_jenis_pinjaman">Jenis Pinjaman:</label>
                            <input type="text" name="nama_jenis_pinjaman" value="{{old('nama_jenis_pinjaman', $type->nama_jenis_pinjaman)}}" id="nama_jenis_pinjaman" class="form-control"
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="minimum_jumlah_pinjaman">Minimum Jumlah Pinjaman:</label>
                            <input type="text" name="minimum_jumlah_pinjaman" value="{{old('minimum_jumlah_pinjaman', $type->minimum_jumlah_pinjaman)}}" id="minimum_jumlah_pinjaman" class="form-control"
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="maksimum_jumlah_pinjaman">Maksimum Jumlah Pinjaman:</label>
                            <input type="text" name="maksimum_jumlah_pinjaman" value="{{old('maksimum_jumlah_pinjaman', $type->maksimum_jumlah_pinjaman)}}" id="maksimum_jumlah_pinjaman" class="form-control"
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="minimum_lama_angsuran">Minimum Lama Angsuran:</label>
                            <input type="text" name="minimum_lama_angsuran" value="{{old('minimum_lama_angsuran', $type->minimum_lama_angsuran)}}" id="minimum_lama_angsuran" class="form-control"
                                class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="maksimum_lama_angsuran">Maksimum Lama Angsuran:</label>
                            <input type="text" name="maksimum_lama_angsuran" value="{{old('maksimum_lama_angsuran', $type->maksimum_lama_angsuran)}}" id="maksimum_lama_angsuran" class="form-control"
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bunga">Bunga:</label>
                            <input type="text" name="bunga" value="{{old('bunga', $type->bunga)}}" id="bunga" class="form-control"
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-outline-primary">
                            Simpan
                        </button>
                        <button type="submit" class="btn btn-outline-secondary">
                            Cancel
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
