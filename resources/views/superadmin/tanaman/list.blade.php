@extends('superadmin.layouts.master')

@section('superadmin.layouts.main')
<section class="section">
          <div class="section-header">
            <h1>Data Tanaman</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Menu</a></div>
              <div class="breadcrumb-item"><a href="#">Data Tanaman</a></div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                        <a class="btn btn-success btn-sm" href="{{ route('superadmin.tanaman.create') }}"><i class="fa fa-plus"></i> Tambah Data Tanaman</a>
                        </div>
                    </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-tanaman">
                        <thead>
                          <tr>
                            <th width=15>
                              No
                            </th>
                            <th width=250>Nama Tanaman</th>
                            <th width=150>Foto Tanaman</th>
                            <th width=100>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($tanaman as $data)    
                          <tr>
                            <td class="number"></td>
                            <td>{{ $data->nama_tanaman }}</td>
                            <td width=150>
                                @if($data->foto == "Tidak Ada")
                                  <p>Tidak ada</p>
                                @else
                                    <img src="{{ url('uploads/tanaman/')}}/{{ $data->foto }}" alt="{{ $data->foto }}" width="100">
                                @endif
                            </td>
                            <td>
                                <div class="row">
                                  <div class="col-6">
                                    <a class="btn btn-xs btn-success btn-flat" href="{{ route('superadmin.tanaman.edit', $data->kodeunik_tanaman) }}"><i class="fa fa-pen"></i></a>
                                  </div>
                                  <div class="col-6">
                                    <form action="{{ route('superadmin.tanaman.delete',$data->kodeunik_tanaman) }}" method="POST">
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