@extends('layouts.layout')

@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>
        
        <a  type="button" class="btn btn-outline-primary" href="/inputsiswa">+ TAMBAH DATA</a>
        <br>
        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Nis</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Wali Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Nis</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Wali Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data as $a)
                                
                            @endforeach
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->nama}}</td>
                                <td>{{ $a->kelas}}</td>
                                <td>{{ $a->jurusan }}</td>
                                <td>00{{ $a->nis }}</td>
                                <td>{{ $a->jeniskelamin }}</td>
                                <td>{{ $a->alamat }}</td>
                                <td>0{{ $a->notelp }}</td>
                                <td>{{ $a->email }}</td>
                                <td>{{ $a->password }}</td>
                                <td>{{ $a->walas }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning">EDIT</button>
                                    <button type="button" class="btn btn-danger">HAPUS</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Arrot</td>
                                <td>11</td>
                                <td>PPLG</td>
                                <td>006512345</td>
                                <td>Laki-laki</td>
                                <td>Sukamaju Baru, Tapos, Depok</td>
                                <td>0808080808</td>
                                <td>mohamadarrafi1304@gmail.com</td>
                                <td>privasicoy</td>
                                <td>Shinta Nur Alifah</td>
                                <td><button class="btn btn-warning">EDIT</button><button class="btn btn-danger">HAPUS</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection