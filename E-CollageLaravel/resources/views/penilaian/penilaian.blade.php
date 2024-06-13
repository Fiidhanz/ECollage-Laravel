@extends('layout.dashboard') @section('content')

<div class="pagetitle">
    <h1>Data Penilaian</h1>
</div><!-- End Page Title -->
<div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <div class="buttons">
        <a href="{{ route('addpenilaian') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('pdfpenilaian') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>  
    </div>
    </div>
    <div class="row">
        <div class="col-12">
                <div class="card-body table-responsive">
                    <table class='table datatable table-striped table-bordered' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama </th>
                                <th>Kode Matkul</th>
                                <th>Nilai 1</th>
                                <th>Nilai 2</th>
                                <th>Kuis 1</th>
                                <th>Kuis 2</th>
                                <th>UTS</th>
                                <th>UAS</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($penilaians) > 0)
                            @foreach ($penilaians as $item=>$row)
                            <tr>
                                    <td style="text-align: center;">{{ $item+1 }}</td>
                                    <td>{{ $row->nim}}</td>
                                    <td>{{ $row->nama}}</td>
                                    <td>{{ $row->kd_matkul }}</td>
                                    <td>{{ $row->nilai1 }}</td>
                                    <td>{{ $row->nilai2 }}</td>
                                    <td>{{ $row->kuis1 }}</td>
                                    <td>{{ $row->kuis2 }}</td>
                                    <td>{{ $row->uts }}</td>
                                    <td>{{ $row->uas }}</td>
                                    <td>
                                         <a class='btn-edit' href="{{ route('updatepenilaian', $row->id) }}">
                               Edit
                        </a> | 
                        <a class='btn-delete' href="{{ route('deletepenilaian', $row->id) }}">
                            Hapus
                        </a>
                                    </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="11"><p class="text text-center">No results found.</p></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection