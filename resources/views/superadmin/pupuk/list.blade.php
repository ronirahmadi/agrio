@extends('superadmin.layouts.master')

@section('superadmin.layouts.main')
<section class="section">
          <div class="section-header">
            <h1>Data Pupuk</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Menu</a></div>
              <div class="breadcrumb-item"><a href="#">Data Pupuk</a></div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                        <a class="btn btn-success btn-sm" href="{{ route('superadmin.pupuk.create') }}"><i class="fa fa-plus"></i> Tambah Data Pupuk</a>
                        </div>
                    </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-pupuk">
                        <thead>
                          <tr>
                            <th width=15>
                              No
                            </th>
                            <th width=250>Nama Pupuk</th>
                            <th width=150>Foto Pupuk</th>
                            <th width=100>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($pupuk as $data)    
                          <tr>
                            <td class="number"></td>
                            <td>{{ $data->nama_pupuk }}</td>
                            <td width=150>
                                @if($data->foto == "Tidak Ada")
                                  <p>Tidak ada</p>
                                @else
                                    <img src="{{ url('uploads/pupuk/')}}/{{ $data->foto }}" alt="{{ $data->foto }}" width="100">
                                @endif
                            </td>
                            <td>
                                <div class="row">
                                  <div class="col-6">
                                    <a class="btn btn-xs btn-success btn-flat" href="{{ route('superadmin.pupuk.edit', $data->kodeunik_pupuk) }}"><i class="fa fa-pen"></i></a>
                                  </div>
                                  <div class="col-6">
                                    <form action="{{ route('superadmin.pupuk.delete',$data->kodeunik_pupuk) }}" method="POST">
                                    <button type="submit" class="btn btn-xs btn-danger btn-flat" data-toggle="tooltip" name="delete">@csrf @method('DELETE')<i class="fa fa-trash"></i></button>
                                    </form>
                                  </div>
                                </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
@endsection