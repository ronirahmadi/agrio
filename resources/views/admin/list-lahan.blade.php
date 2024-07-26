@extends('admin.layouts.master')

@section('admin.layouts.main')
<section class="section">
          <div class="section-header">
            <h1>Data Lahan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Menu</a></div>
              <div class="breadcrumb-item"><a href="#">Data lahan</a></div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                        <a class="btn btn-success btn-sm" href=""><i class="fa fa-plus"></i> Tambah</a>
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
                          <tr>
                            <td class="number"></td>
                            <td></td>
                            <td>
                                <div class="row">
                                  <div class="col-6"></div>
                                  <div class="col-6"></div>
                                </div>
                            </td>
                          </tr>
                        
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