@extends('master')

@section('title')
    <title>Edit Category</title>
@endsection

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Kategori</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Kategori</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Form Edit</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('PUT')
                <table class="table table-bordered">
                    <tr>
                        <td>Nama Kategori:</td>
                        <td><input type="text" value="{{ $category->nama_kategori }}" class="form-control" name="nama_kategori"></td>
                    </tr>
                    <tr>
                        <td>Keterangan:</td>
                        <td><input type="text" value="{{ $category->description }}" class="form-control" name="description"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><button type="submit" class="btn btn-info">Save Data</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</section>
@endsection

