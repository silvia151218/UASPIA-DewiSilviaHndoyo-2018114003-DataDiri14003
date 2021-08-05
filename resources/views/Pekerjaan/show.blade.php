@extends('layouts.app')

@section('title','Pekerjaan')

@section('content')
<div class="card">
<div class="cardbody">
<h3>Nama :{{ $Pekerjaan['nama'] }} </h3>
<h3>Tahun :{{ $Pekerjaan['tahun'] }} </h3>
 </div>
</div>
@endsection

    
