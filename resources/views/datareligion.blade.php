@extends('layout.admin')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Religion</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Religion </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container">
      <a href="/tambahagama" class="btn btn-success mb-3">Tambah +</a>
      {{-- {{ Session::get('halaman_url') }} --}}
      
    
      <div class="row ">
        {{-- @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
          {{ $message }}
        </div>
        @endif --}}
        <table class="table table-bordered">
          <thead class="table-dark" >
            <tr>
              <th scope="col" >No</th>
              <th scope="col">Nama</th>
              <th scope="col">Foto</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">No Telepon</th>
              <th scope="col">Dibuat</th>
              <th scope="col" width='14%'>Aksi</th>
            </tr>
          </thead>
          <tbody>
            {{-- @php
              $no =1;
            @endphp
            @foreach($data as $index=> $row)
              <tr>
                <th scope="row">{{  $index + $data->firstItem() }}</th>
                <td>{{ $row->nama }}</td>
                <td>
                  <img src="{{ asset('fotopegawai/'.$row->foto) }}" style="width:40px " alt="">
                </td>
                <td>{{ $row->jeniskelamin }}</td>
                <td>0{{ $row->notelepon }}</td>
                <td>{{ $row->created_at->format('D M Y')}}</td>
                <td>
                  <a href="/tampilkandata/{{ $row->id }}" class="btn btn-primary">Edit</a>
                  <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" 
                    data-nama="{{ $row->nama }}">Delete</a>
                </td>
              </tr>
            @endforeach --}}
          </tbody>
        </table>
        {{-- {{ $data->links() }} --}}
      </div>
    </div>

  </div>
  <!-- /.content-header -->
  
</div>



@endsection