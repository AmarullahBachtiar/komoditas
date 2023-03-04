@extends('layouts.main')
@section('container')

<div class="col-md-12">
  <div class="card card-outline card-dark">
    <div class="card-header">
      <h3 class="card-title">detail</h3>
    </div>
    <div class="card-body">
      <table class="table table-bordered border-dark table-hover" border="2">
        <thead>
          <tr>
            <th>Wilayah</th>
            <td>{{ $komoditas->komoditas_kode }}</td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td>{{ $komoditas->komoditas_nama }}</td>
          </tr>

          <tr>
            <th>Tanggal Input</th>
            <td>{{ $komoditas->created_at }}</td>
          </tr>
        </thead>
      </table>
      <br>
      <a class="btn btn-sm btn-default float-right" href="{{ route('komoditas.index') }}">Kembali</a>
    </div>
  </div>
</div>
@endsection