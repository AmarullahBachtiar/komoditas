@extends('layouts.main')
@section('container')

<div class="col-md-12">
  <div class="card card-outline card-dark">
    <div class="card-header">
      <h3 class="card-title">Form Komoditas</h3>
    </div>
    <form action="{{ route('produksi.update', $produksi->id) }}">
      @csrf
      @method('PUT')
      <div class="card-body">

        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label for=""><b>Komoditas</b></label>
              <select class="form-control" style="width: 100%;" name="komoditas_kode" id="komoditas_kode">
                <option disabled value>Pilih Komoditas</option>
                @foreach ($komoditas as $k)
                <option value="{{ $k->id}} ">{{ $k->komoditas_nama }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for=""><b>produksi</b></label>
              <!-- <textarea name="alamat" id="alamat" cols="67" rows="5" aria-describedby="alamat" required></textarea> -->
              <input type="text" name="produksi" class="form-control" id="produksi" value="{{ $produksi ->produksi }}" required>
            </div>
          </div>

        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-sm btn-info">Simpan</button>
          <button type="reset" class="btn btn-sm btn-warning">Reset</button>
          <a class="btn btn-sm btn-success" href="{{ route('produksi.index') }}">Kembali</a>
        </div> <!--  -->
        <!-- /.row -->
      </div>
    </form><!-- /.container-fluid -->
  </div>
</div>
@endsection