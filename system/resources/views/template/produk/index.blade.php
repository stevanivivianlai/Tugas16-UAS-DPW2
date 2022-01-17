@inject('timeServices', 'App\Services\Timeservices')

@extends('template.base')

@section('content')
    <div class="container">
      <div class="card mt-3 pt-3">
      <div class="row ml-1 mr-2 mb-3">
         <div class="col-md-12">
             <div class="float-right">
                    <b>Jam</b> <strong> {{ $timeServices->showTimeNow() }}</strong> 
                        </div>
            <h4>Filter</h4>
         </div>
                    <div class="card-body">
                        <form action="{{ url('admin/produk/filter') }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama produk</label>
                                <input type="text" class="form-control" name="nama" value="{{ $nama ?? "" }}">
                            </div>

                            <div class="form-group">
                                <label for="" class="control-label">Stok</label>
                                <input type="text" class="form-control" name="stok" value="{{ $stok ?? "" }}">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Harga Min</label>
                                        <input type="text" class="form-control" name="harga_min" value="{{ $harga_min ?? "" }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Harga Max</label>
                                        <input type="text" class="form-control" name="harga_max" value="{{ $harga_max ?? "" }}">
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-dark float-right" ><i class="fa fa-search"></i> Filter</button>
                        </form>
                    </div>
                </div>


               <div class="container">
      <div class="card mt-3 pt-3">
      <div class="row ml-1 mr-2 mb-3">
         <div class="col-md-10">
            <h2>Data Produk</h2>
         </div>
         <div class="col-md-2">
            <a href="{{url('admin/produk/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data Produk</a>
         </div>
      </div>
      <hr>

    <div class="container">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Brand</th>
                <th>Stok</th>
                <th>Tanggal</th>

            </thead>
                            <tbody>
                                @foreach ($list_produk as $produk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                           <div class="btn btn-group">

                              <a href="{{ url('admin/produk', $produk->uuid) }}" class="btn btn-primary"><i class="fa fa-info"></i></a>

                              <a href="{{ url('admin/produk', $produk->uuid) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>

                              @include ('template.utils.delete', ['url' => url('admin/produk', $produk->uuid)])
                           </div>  
                                        </td>
                                        <td>{{ $produk->nama }}</td>
                                        <td>{{ $produk->harga }}</td>
                                        <td>{{ $produk->brand }}</td>
                                        <td>{{ $produk->stok }}</td>
                                        <td>{{ $produk->created_at->format("F j, Y, g:i a") }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
