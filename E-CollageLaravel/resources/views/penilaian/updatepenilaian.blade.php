@extends('layout.dashboard') @section('content')

<div class="pagetitle">
    <h1>Ubah Data penilaian</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">penilaian</li>
        <li class="breadcrumb-item"><a href="{{ route('penilaian') }}"></a>penilaian</li>
        <li class="breadcrumb-item active">Ubah Data penilaian</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updatepenilaian', $penilaians->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="nim" class="form-label">nim Mahasiswa</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ $penilaians->nim }}" required>
          </div>
          <div class="col-12">
            <label for="nama" class="form-label">nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $penilaians->nama }}" required>
          </div>
          <div class="col-12">
            <label for="kd_matkul" class="form-label">kd_matkul</label>
            <input type="text" class="form-control" id="kd_matkul" name="kd_matkul" value="{{ $penilaians->kd_matkul }}" required>
          </div>
           <div class="col-12">
            <label for="nilai1" class="form-label">nilai1</label>
            <input type="text" class="form-control" id="nilai1" name="nilai1" value="{{ $penilaians->nilai1 }}" required>
          </div>
          <div class="col-12">
            <label for="nilai2" class="form-label">nilai2</label>
            <input type="text" class="form-control" id="nilai2" name="nilai2" value="{{ $penilaians->nilai2 }}" required>
          </div>
          <div class="col-12">
            <label for="kuis1" class="form-label">kuis1</label>
            <input type="text" class="form-control" id="kuis1" name="kuis1" value="{{ $penilaians->kuis1 }}" required>
          </div>
          <div class="col-12">
            <label for="kuis2" class="form-label">kuis2</label>
            <input type="text" class="form-control" id="kuis2" name="kuis2" value="{{ $penilaians->kuis2 }}" required>
          </div>
          <div class="col-12">
            <label for="uts" class="form-label">uts</label>
            <input type="text" class="form-control" id="uts" name="uts" value="{{ $penilaians->uts }}" required>
          </div>
          <div class="col-12">
            <label for="uas" class="form-label">uas</label>
            <input type="text" class="form-control" id="uas" name="uas" value="{{ $penilaians->uas }}" required>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection