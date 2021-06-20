@extends('master')

@section('title')
    <title>Halaman Kategori</title>
@endsection

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Kategori</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kategori</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <a href="{{ route('category.create') }}" title="Add Category" class="btn btn-primary">Tambah Data</a>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Keterangan</th>
                    <th>Tools</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($category as $ct)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ct->nama_kategori}}</td>
                        <td>{{ $ct->description }}</td>
                        <td><a href="{{ route('category.edit', $ct->id) }}" class="btn btn-warning text-white">Edit</a> |

                            <form action="#" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak Ada Data</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Data Kategori
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
@endsection
