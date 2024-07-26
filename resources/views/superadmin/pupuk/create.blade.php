@extends('superadmin.layouts.master')

@section('superadmin.layouts.main')
<!-- Main Content -->
<section class="section">
        <div class="section-header">
            <div class="section-header-back">
            <a href="{{ route('superadmin.pupuk') }}" class="btn btn-primary"><i class="fas fa-arrow-left"> Kembali</i></a>
        </div>
        <h1>Form Pupuk</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Menu</a></div>
            <div class="breadcrumb-item"><a href="#">Form Tambah Pupuk</a></div>
        </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form Tambah Pupuk</h2>
            <p class="section-lead">
                Lengkapi data berikut, untuk menambahkan data pupuk.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                            <div class="card-body">
                                <form action="{{ route('superadmin.pupuk.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama pupuk. :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input id="namapupuk." type="text" name="Nama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Pupuk</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" id="fotopupuk." name="Foto" class="form-control" required>
                                        <div class="form-text text-muted">Tipe/Format yang diizinkan .WEBP, .PNG, .JPG, .JPEG dengan maksimal ukuran 512Kb</div>
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
