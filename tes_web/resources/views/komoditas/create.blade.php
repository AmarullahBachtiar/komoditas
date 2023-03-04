@extends('layouts.main')
@section('container')

<div class="col-md-12">
  <div class="card card-outline card-dark">
    <div class="card-header">
      <h3 class="card-title">Form Komoditas</h3>
    </div>
    <form action="{{ route('komoditas.store') }}" method="POST">
      @csrf
      <div class="card-body">

        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label for=""><b>Kode</b></label>
              <input type="text" name="komoditas_kode" class="form-control" required>
            </div>
            <div class="form-group">
              <label for=""><b>Nama</b></label>
              <!-- <textarea name="alamat" id="alamat" cols="67" rows="5" aria-describedby="alamat" required></textarea> -->
              <input type="text" name="komoditas_nama" class="form-control" id="komoditas_nama" required>
            </div>
          </div>

        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-sm btn-info">Simpan</button>
          <button type="reset" class="btn btn-sm btn-warning">Reset</button>
          <a class="btn btn-sm btn-success" href="{{ route('komoditas.index') }}">Kembali</a>
        </div> <!--  -->
        <!-- /.row -->
      </div>
    </form><!-- /.container-fluid -->
  </div>
</div>
@endsection