@extends('layouts.app')

@section("head_title", "Daftar Produk")
@section("title")
<div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box" id="breadcrumb">
                    <h4 class="page-title">Produk Mebel</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Menampilkan Seluruh Data Produk
                        </li>
                    </ol>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="container-fluid" id="result">           
    <div class="row">
        <div class="col-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Daftar Produk</h4>
                    <p class="text-muted m-b-30 font-14">Berikut adalah data seluruh produk</p>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="card-actions ">
                        <a class='btn btn-primary float-left' href="{{ route('masakan.create') }}"><i class='ti ti-plus'></i> Tambah masakan</a>
                        <form action="" method="get" class='form-inline float-right mb-3'>
                            <input type="text" class="form-control" placeholder='Cari nama..' name='search'>
                            <button type="submit" class='btn btn-primary ml-2'>Cari</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Gambar</th>
                            </tr>
                            @foreach($produk as $produks)
                            <tr>
                                <td>{{ $produk->id_produk }}</td>
                                <td><img src="{{ Storage::url('produk/'.$produk->nama_gambar) }}" style='width:100px'></td>
                                <td>{{ $produk->nama_produk }}</td>
                                <td>Rp {{ number_format($produk->harga) }}</td>
                                <td><span class="badge badge-{{ $produk->status ? 'success':'danger'   }}">{{ $produk->status ? 'Tersedia' : 'Tidak Tersedia' }}</span></td>
                                <td>  
                                    <div class="d-inline-flex">
                                        <a href="{{ route('produk.edit', ['produk' => $produk->id_produk]) }}" class='btn btn-warning mr-2' id="edit">Edit</a>
                                        <form action="{{ route('produk.destroy', ['produk' => $produk->id_produk]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class='btn btn-danger'>Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @forelse($produk as $produks)
                            @empty
                            <tr class='text-center'>
                                <td colspan="6">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


</div> <!-- end container-fluid -->
@endsection
