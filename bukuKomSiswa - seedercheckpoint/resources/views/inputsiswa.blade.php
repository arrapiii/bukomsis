@extends('layouts.layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- FORM INPUT -->
    <form>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama</label>
          <input type="text" class="form-control" placeholder="Nama" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas</label>
          <select class="form-control" id="" required>
            <option hidden>Kelas</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jurusan</label>
          <select class="form-control" id="" required>
            <option hidden>Jurusan</option>
            <option value="TJKT">TJKT</option>
            <option value="Animasi">Animasi</option>
            <option value="PPLG">PPLG</option>
            <option value="BRC">BRC</option>
            <option value="TE">TE</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nis</label>
          <input type="text" class="form-control" placeholder="Nis" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jenis Kelamin</label>
          <select class="form-control" id="" required>
            <option hidden>Jenis kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Alamat</label>
          <input type="text" class="form-control" placeholder="Alamat" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Wali Kelas</label>
          <input type="text" class="form-control" placeholder="Wali Kelas" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection