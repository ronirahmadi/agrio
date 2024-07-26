@extends('superadmin.layouts.master')

@section('superadmin.layouts.main')
<section class="section">
          <div class="section-header">
            <h1>Data Hama</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Menu</a></div>
              <div class="breadcrumb-item"><a href="#">Data Hama</a></div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                        <a class="btn btn-success btn-sm" href="{{ route('superadmin.hama.create') }}"><i class="fa fa-plus"></i> Tambah Data Hama</a>
                        </div>
                    </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-hama">
                        <thead>
                          <tr>
                            <th width=15>
                              No
                            </th>
                            <th width=150>Nama Hama</th>
                            <th width=100>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($hama as $data)    
                          <tr>
                            <td class="number"></td>
                            <td>{{ $data->nama_hama }}</td>
                            <td>
                                <div class="row">
                                  <div class="col-6">
                                    <a class="btn btn-xs btn-success btn-flat" href="{{ route('superadmin.hama.edit', $data->kodeunik_hama) }}"><i class="fa fa-pen"></i></a>
                                  </div>
                                  <div class="col-6">
                                    <form action="{{ route('superadmin.hama.delete',$data->kodeunik_hama) }}" method="POST">
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