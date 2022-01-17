@extends("template.base")
@section('content')
<!-- start coding -->

   
   <div class="container">
    <div class="card mt-3 pt-3">
    <div class="row ml-1 mr-2 mb-3">
      <h4>Detail Data Produk</h4>
    </div>

    <div class="container">
      <div class="card-body">
        <h3>{{$produk->nama}}</h3>
            <hr>
            <p>{{$produk->harga}} |
   Brand : {{$produk->brand}} |
   Stok : {{$produk->stok}} |
   Seller : {{ $produk->seller->username }} |
   Tanggal Produk : {{$produk->created_at->format("d M Y")}}
</p>
             <p>
                {!! nl2br ($produk->deskripsi) !!}
             </p>
            <p>
               <img src="{{url("public/$produk->foto")}}" alt="{{$produk->foto}}" width="30%">
            </p>
        </div>  
      </div>
      
    </div>

    </div>
   </div>

<!-- end coding -->
@endsection
