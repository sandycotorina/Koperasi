@extends('layouts.app')

@section('content')
<div class="col-lg-6 col-md-6 mx-auto">
    <div class="card card-user">
        <div class="image">
        <img src="{{asset('asset/img/bgindah2.jpg')}}" width="100%" alt="...">
        </div>
        <div class="d-flex justify-content-center">
            <div class="content text-center">
            <img class="avatar border-white " src="{{asset('asset/img/avatar.png')}}" alt="...">
            <h4 class="title font-weight-bolder">{{Auth::user()->name}}<br>
            <a href="#" class="text-muted">
                <small>{{Auth::user()->email}}</small>
            </a>
            </h4>
            <small>{{Auth::user()->created_at->diffForHumans()}}</small>
            </div>
        </div>
        <hr>
        <div class="text-center">
            <div class="row">
                @role('anggota')
                <div class="col-md-4 col-md-offset-1">
                    <h5>
                        <br>
                        <small class="text-muted">Saldo Simpanan</small>
                    </h5>
                </div>
                @else
                <div class="col-md-4 col-md-offset-1">
                    <h5>

                        <br>
                    <small>Tabungan</small>
                </h5>

                </div>
                @endrole
                @role('anggota')
                <div class="col-md-3">
                    <h5>
                    {{--  {{auth()->user()->dataPinjaman()->count()}}  --}}
                    <br>
                    <small class="text-muted">Data Pinjaman</small>
                    </h5>
                </div>
                @else
                <div class="col-md-3">
                    <h5>

                        <br>
                    <small>Data Pinjaman</small>
                    </h5>
                </div>
                @endrole
                @role('anggota')
                <div class="col-md-3">
                    <h5>

                    <br>
                    <small class="text-muted">Total Pinjaman</small>
                    </h5>
                </div>
                @else
                    <div class="col-md-3">
                        <h5>

                        <br>
                        <small>Total Pinjaman</small>
                        </h5>
                    </div>
                @endrole
                @role('anggota')
                <div class="col-md-4">
                    <h5>
                        <br>
                        <small class="text-muted">Pengajuan pinjaman</small>
                        </h5>
                </div>
                @else
                <div class="col-md-4">
                    <h5>
                       Pengajuan
                    <br>
                        <small class="text-muted">Pengajuan pinjaman</small>
                    </h5>
                </div>
                @endrole
                @role('anggota')
                <div class="col-md-4">
                    <h5>

                        <br>
                        <a href="">
                            <small class="text-muted">Penarikan</small>
                        </a>
                    </h5>
                </div>
                @else
                <div class="col-md-4">
                    <h5 class="mb-3">
                        penarikan
                        <br>

                    <a href="">
                            <small class="text-muted">Penarikan</small>
                        </a>
                    </h5>
                </div>
                @endrole
            </div>
        </div>
    </div>
</div>
@endsection
