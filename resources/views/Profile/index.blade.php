@extends('layouts.app')

@section('title', 'profile')
@section('content')

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">Golongan Darah</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($profile as $profile)
    <tr>
    <td><a href="/profiles/{{$profile->id}}" >{{$profile->nama}}</td>
    <td>{!!$profile->ttl !!}</td>
    <td>{!!$profile->jenis !!}</td>
    <td>{!!$profile->alamat !!}</td>
    <td>{!!$profile->Golongan !!}</td>
    <td>{!!$profile->email !!}</td>
    <td><a href="/profile/{{$profile->id}}/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/profile/{{ $profile->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{ $profile -> links() }}
    </div>
@endsection