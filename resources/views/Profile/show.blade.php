@extends('layouts.app')

@section('title','Profile')

@section('content')
<div class="card">
<div class="cardbody">
    
    <h3>nama :{{ $profile['nama'] }} </h3>
    <h3>tgl :{{ $profile['tgl'] }} </h3>
    <h3>jenis :{{ $profile['jenis'] }} </h3>
    <h3>Alamat teman :{{ $profile['alamat'] }} </h3>
    <h3>no_tlp:{{ $profile['no_tlp'] }} </h3>
    <h3>email :{{ $profile['email'] }} </h3>

 </div>
</div>

@endsection