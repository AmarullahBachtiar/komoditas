@extends('layouts.main')
@section('container')
<div class="ibox-tools">
  <a type="button" class="btn btn-primary btn-sm btn-flat" href="{{ route('produksi.create') }}"> <i class=" fa fa-plus"></i> Tambah Data </a>
</div>
<table class="table table-bordered">
  <tr>
    <th>Tanggal</th>
    <th>komoditas</th>
    <th>produksi</th>

    <th width="250px">Opsi</th>
  </tr>
  @foreach ($produksi as $p)
  <tr>
    <td>{{ $p->tanggal }}</td>
    <td>{{$p->komoditas->komoditas_nama }}</td>
    <td>{{ $p->produksi }}</td>
    <td>
      <a href="{{ route('produksi.edit',$p->id)}}" class="btn btn-primary">Edit</a>

      <form action="{{ route('produksi.destroy', $p->id)}}" method="post">
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