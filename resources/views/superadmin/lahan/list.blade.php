@extends('superadmin.layouts.master')

@section('superadmin.layouts.main')
<!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Lokasi</h1>
        </div>

        <!-- ISI -->
        <div class="section-body">
            <div>
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Lokasi</h4>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Irwansyah Saputra</td>
                                    <td>2017-01-09</td>
                                    <td><div class="badge badge-success">Active</div></td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Hasan Basri</td>
                                    <td>2017-01-09</td>
                                    <td><div class="badge badge-success">Active</div></td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Kusnadi</td>
                                    <td>2017-01-11</td>
                                    <td><div class="badge badge-danger">Not Active</div></td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rizal Fakhri</td>
                                    <td>2017-01-11</td>
                                    <td><div class="badge badge-success">Active</div></td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Isnap Kiswandi</td>
                                    <td>2017-01-17</td>
                                    <td><div class="badge badge-success">Active</div></td>
                                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
