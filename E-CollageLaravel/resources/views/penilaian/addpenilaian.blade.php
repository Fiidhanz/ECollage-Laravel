@extends('layout.dashboard') @section('content')

<div class="pagetitle">
    <h1>Tambah Data penilaian</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">penilaian</li>
        <li class="breadcrumb-item"><a href="{{ route('penilaian') }}"></a>Data penilaian</li>
        <li class="breadcrumb-item active">Tambah Data penilaian</li>
      </ol>
    </nav>
</div><!-- End Page Title -->
<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertpenilaian') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nim" class="form-label">nim Mahasiswa</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
          </div>
          <div class="col-12">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="col-12">
            <label for="kd_matkul" class="form-label">kd_matkul</label>
            <input type="text" class="form-control" id="kd_matkul" name="kd_matkul" required>
          </div>
          <div class="col-12">
            <label for="nilai1" class="form-label">nilai1</label>
            <input type="text" class="form-control" id="nilai1" name="nilai1" required>
          </div>
          <div class="col-12">
            <label for="nilai2" class="form-label">nilai2</label>
            <input type="text" class="form-control" id="nilai2" name="nilai2" required>
          </div>
          <div class="col-12">
            <label for="kuis1" class="form-label">kuis1</label>
            <input type="text" class="form-control" id="kuis1" name="kuis1" required>
          </div>
          <div class="col-12">
            <label for="kuis2" class="form-label">kuis2</label>
            <input type="text" class="form-control" id="kuis2" name="kuis2" required>
          </div>
          <div class="col-12">
            <label for="uts" class="form-label">uts</label>
            <input type="text" class="form-control" id="uts" name="uts" required>
          </div>
          <div class="col-12">
            <label for="uas" class="form-label">uas</label>
            <input type="text" class="form-control" id="uas" name="uas" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left"style="margin-top: 20px;" >Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection