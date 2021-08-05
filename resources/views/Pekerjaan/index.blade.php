@extends('layouts.app')

@section('title', 'Works')
@section('content')

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nama Perusahaan</th>
      <th scope="col">Tahun</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($Pekerjaan as $Pekerjaan)
    <tr>
    <td><a href="/pekerjaan/{{$pekerjaan->id}}" >{{$pekerjaan->nama}}</td>
    <td>{!!$perkerjaan->tahun !!}</td>
    <td><a href="/pekerjaan/{{$work->id}}/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/pekerjaan/{{ $pekerjaan->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{ $pekerjaan-> links() }}
    </div>
@endsection