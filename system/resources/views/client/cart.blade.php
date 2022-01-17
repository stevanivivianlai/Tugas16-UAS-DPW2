@extends('client.section.base')

@section('content_front')

  <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{url('public')}}/admin/dist/img/avatar6.jfif" style="width:100%;height:180px;">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">


                        <div class="card-body">
                            <h1 class="h1"> Kaos Bucin Viral</h1>
                            <p class="h3 py-2">Rp. 100.000</p>
                                </div>
                </div>
            </div>
        </div>
    </section>
    <hr>


<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
        <form action="{{url('cart')}}" method="post" enctype="multipart/form-data">
            @csrf
              <h3 class="mb-4 billing-heading">Detail Pemesanan</h3>
              <div class="row align-items-end">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                  <div class="form-group">
                <div class="w-100"></div>
                <div class="col-md-12">
                  <div class="form-group mt-4">
                    <div class="radio">
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-dark float-right">Checkout</button>
            </form><!-- END -->
          </div>
          <div class="col-xl-5">
    
                </div>
              </div>
              <br>
    </section> <!-- .section -->

    @endsection