@extends('superadmin.layouts.master')

@section('superadmin.layouts.main')
<!-- Main Content -->
<section class="section">
        <div class="section-header">
        <h1>Form Laporan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Menu</a></div>
            <div class="breadcrumb-item"><a href="#">Form Laporan</a></div>
        </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form Laporan Patroli Harian</h2>
            <p class="section-lead">
                Lengkapi data berikut, untuk melakukan laporan patroli harian
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                            <div class="card-body">
                                <form action="{{ route('superadmin.lahan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Petani :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="petani" required>
                                            <option selected="true" disabled="disabled">--Pilih Petani--</option>
                                            @foreach ($petani as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Tanaman :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="tanaman" required>
                                            <option selected="true" disabled="disabled">--Pilih Tanaman--</option>
                                            @foreach ($tanaman as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Hama :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="hama" required>
                                            <option selected="true" disabled="disabled">--Pilih Hama--</option>
                                            @foreach ($hama as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pilih Pupuk :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="pupuk" required>
                                            <option selected="true" disabled="disabled">--Pilih Pupuk--</option>
                                            @foreach ($pupuk as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Luas Lahan :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" id="luaslahan" name="luaslahan" placeholder="M2" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Alamat jalan" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Provinsi :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="provinsi" required>
                                            <option selected="true" disabled="disabled">--Pilih Provinsi--</option>
                                            @foreach ($provinsi as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kota :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="kota" class="form-control" required>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kecamatan :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="kecamatan" class="form-control" required>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Desa :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="desa" class="form-control" required>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ketinggian Lahan :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="number" class="form-control" id="ketinggian" name="ketinggian" placeholder="MDPL" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button id="submit" type="submit" class="btn btn-success">Upload Data</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
