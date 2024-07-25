@extends('superadmin.layouts.master')

@section('superadmin.layouts.main')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
            <a href="{{ route('superadmin.petani') }}" class="btn btn-primary"><i class="fas fa-arrow-left"> Kembali</i></a>
        </div>
        <h1>Form Petani</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Menu</a></div>
            <div class="breadcrumb-item"><a href="#">Form Edit Petani</a></div>
        </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Form Edit Petani</h2>
            <p class="section-lead">
                Lengkapi data berikut, untuk memperbarui petani Anda
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @foreach($detailpetani as $data)
                            <form action="{{ route('superadmin.petani.edit.update', $data->kodeunik_petani) }}" method="POST" enctype="multipart/form-data">
                                @method('PATCH')
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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama petani :</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input id="namapetani" type="text" name="Nama" class="form-control" value="{{ $data->nama_petani ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button id="submit" type="submit" class="btn btn-success">Perbarui Petani</button>
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            @foreach($detailpetani as $data)
                                @if ($data->foto == "Tidak Ada")
                                <form action="{{ route('superadmin.petani.edit.upload-foto', $data->kodeunik_petani) }}" method="POST" enctype="multipart/form-data">
                                @method('PATCH')
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
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Petani</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" name="Foto" class="form-control" required>
                                        <div class="form-text text-muted">Tipe/Format yang diizinkan .WEBP, .PNG, .JPG, .JPEG dengan maksimal ukuran 1MB.</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button id="submit" type="submit" class="btn btn-success">Upload Foto petani Baru</button>
                                </div>
                                </form>
                                @else
                                <div class="card-body">
                                    <div class="form-group d-flex justify-content-center">
                                        <img src="{{ url('uploads/petani/') }}/{{ $data->foto }}" alt="Foto petani" style="max-width: 350px;">
                                    </div>
                                    <form action="{{ route('superadmin.petani.edit.hapus-foto',$data->kodeunik_petani) }}" method="POST">
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fa fa-trash"></i>@csrf @method('PATCH') Hapus Foto petani
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                @endif
                            </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection