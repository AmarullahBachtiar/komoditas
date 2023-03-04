@extends('layouts.main')
@section('container')
<div class="ibox-tools">
  <a type="button" class="btn btn-primary btn-sm btn-flat" href="{{ route('komoditas.create') }}"> <i class=" fa fa-plus"></i> Tambah Data </a>
</div>
<table class="table table-bordered">
  <tr>
    <th>Kode</th>
    <th>Nama</th>

    <th width="250px">Opsi</th>
  </tr>
  @foreach ($komoditas as $k)
  <tr>
    <td>{{ $k->komoditas_kode }}</td>
    <td>{{ $k->komoditas_nama }}</td>
    <td>
      <a href="{{ route('komoditas.edit', $k->id)}}" class="btn btn-primary">Edit</a>
      <form action="{{ route('komoditas.destroy', $k->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
      </form>
    </td>
  </tr>
  @endforeach
</table>

@endsection

<!-- form tambah data kelurahan -->