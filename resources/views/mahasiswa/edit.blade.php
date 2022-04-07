@extends('mahasiswa.layout')
@section('content')
<div class="container mt-5">
<div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Mahasiswa
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your input.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('mahasiswa.update', $Mahasiswa->nim) }}" id="myForm">
 @csrf
 @method('PUT')
 <div class="form-group">
 <label for="nim">Nim</label> 
 <input type="text" name="nim" class="form-control" id="nim" value="{{ $Mahasiswa->nim }}" aria-describedby="nim" > 
 </div>
 <div class="form-group">
 <label for="nama">Nama</label> 
 <input type="text" name="nama" class="form-control" id="nama" value="{{ $Mahasiswa->nama }}" aria-describedby="nama" > 
 </div>
 <div class="form-group">
                        <label for="kelas">Kelas</label>
                       <select class="form-control" name="kelas">
                           @foreach($kelas as $kls)
                           <option value="{{$kls->id}}"{{ $Mahasiswa->kelas_id == $kls->id ? 'selected' : ''}}>{{$kls->nama_kelas}}</option>
                           @endforeach
                       </select>
                    </div>
 <div class="form-group">
 <label for="Jurusan">Jurusan</label> 
 <input type="jurusan" name="jurusan" class="form-control" id="jurusan" value="{{ $Mahasiswa->jurusan }}" aria-describedby="jurusan" > 
 </div>
 <!-- menambah 3 kolom pada view edit -->
 <!-- <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="Email" name="Email"value="{{ $Mahasiswa->email }}" class="form-control" id="Email" aria-describedby="Email">
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="Alamat" name="Alamat" value="{{ $Mahasiswa->alamat}}"class="form-control" id="Alamat" ariadescribedby="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="{{ $Mahasiswa->tanggal_lahir }}"class="form-control" id="tanggal_lahir" ariadescribedby="tanggal_lahir">
                    </div> -->
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
</div>
@endsection