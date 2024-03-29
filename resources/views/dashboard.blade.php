@extends('layouts.dashboard')
@section('isidashboard')
@can('admin')
<!-- Sales Card -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card sales-card">

    

    <div class="card-body">
      <h5 class="card-title">Transaksi <span>| Today</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-cart"></i>
        </div>
        <div class="ps-3">
          <h6>{{ $transaksi }}</h6>
       

        </div>
      </div>
    </div>

  </div>
</div><!-- End Sales Card -->

<!-- Revenue Card -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card revenue-card">

   

    <div class="card-body">
      <h5 class="card-title">Layanan</h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-currency-dollar"></i>
        </div>
        <div class="ps-3">
          <h6>{{ $layanan }}</h6>
          <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">Peningkatan</span>

        </div>
      </div>
    </div>

  </div>
</div><!-- End Revenue Card -->

<!-- Customers Card -->
<div class="col-xxl-4 col-xl-12">

  <div class="card info-card customers-card">

   

    <div class="card-body">
      <h5 class="card-title">Customers <span>| This Year</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-people"></i>
        </div>
        <div class="ps-3">
          <h6>{{ $user }}</h6>
          <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Penurunan</span>

        </div>
      </div>

    </div>
  </div>

</div><!-- End Customers Card -->
@elsecan('superadmin')
<div class="col-xxl-4 col-md-6">
  <div class="card info-card sales-card">

    

    <div class="card-body">
      <h5 class="card-title">Jumlah layanan</h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-cart"></i>
        </div>
        <div class="ps-3">
          <h6>145</h6>
          <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

        </div>
      </div>
    </div>

  </div>
</div><!-- End Sales Card -->

<!-- Revenue Card -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card revenue-card">

   

    <div class="card-body">
      <h5 class="card-title">Jumlah admin</h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-currency-dollar"></i>
        </div>
        <div class="ps-3">
          <h6>$3,264</h6>
          <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

        </div>
      </div>
    </div>

  </div>
</div><!-- End Revenue Card -->

<!-- Customers Card -->
<div class="col-xxl-4 col-xl-12">

  <div class="card info-card customers-card">

   

    <div class="card-body">
      <h5 class="card-title">Customers <span>| This Year</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-people"></i>
        </div>
        <div class="ps-3">
          <h6>1244</h6>
          <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

        </div>
      </div>

    </div>
  </div>

</div><!-- End Customers Card -->
@elsecan('user')
<div class="col-xxl-4 col-md-6">
  <div class="card info-card sales-card">

    

    <div class="card-body">
      <h5 class="card-title">Jumlah layanan</h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-cart"></i>
        </div>
        <div class="ps-3">
          <h6>145</h6>
          <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

        </div>
      </div>
    </div>

  </div>
</div><!-- End Sales Card -->

<!-- Revenue Card -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card revenue-card">

   

    <div class="card-body">
      <h5 class="card-title">Jumlah admin</h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-currency-dollar"></i>
        </div>
        <div class="ps-3">
          <h6>$3,264</h6>
          <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

        </div>
      </div>
    </div>

  </div>
</div><!-- End Revenue Card -->

<!-- Customers Card -->
<div class="col-xxl-4 col-xl-12">

  <div class="card info-card customers-card">

   

    <div class="card-body">
      <h5 class="card-title">Customers <span>| This Year</span></h5>

      <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
          <i class="bi bi-people"></i>
        </div>
        <div class="ps-3">
          <h6>1244</h6>
          <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

        </div>
      </div>

    </div>
  </div>

</div><!-- End Customers Card -->
@endcan
@endsection
@section('berita')
<div class="col-lg-4">

        

    <div class="card">
            

        <div class="card-body pb-0">
          <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>
    
          <div class="news">
            <div class="post-item clearfix">
              <img src="assets/img/news-1.jpg" alt="">
              <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
              <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
            </div>
    
            <div class="post-item clearfix">
              <img src="assets/img/news-2.jpg" alt="">
              <h4><a href="#">Quidem autem et impedit</a></h4>
              <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
            </div>
    
            
    
       
    
          </div><!-- End sidebar recent posts-->
    
        </div>
      </div><!-- End News & Updates -->

  

   

  </div>
 <!-- News & Updates Traffic -->
 
@endsection