@extends('layouts.layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- FORM INPUT -->
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Guru</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">NISN</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nomor Induk" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Siswa</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Siswa" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas</label>
          <select class="form-control" id="">
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jurusan</label>
          <select class="form-control" id="">
            <option hidden>Jurusan</option>
            <option>TJKT</option>
            <option>Animasi</option>
            <option>PPLG</option>
            <option>BRC</option>
            <option>TEI</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jenis Kelamin</label>
          <select class="form-control" id="">
            <option hidden>Jenis kelamin</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection