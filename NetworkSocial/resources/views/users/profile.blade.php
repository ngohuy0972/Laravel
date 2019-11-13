@extends('layouts.app')

@section('profile')

  <!-- Main content -->
  <div class="banner-area">
        <div class="container">
          <div class="row justify-content-center generic-height align-items-center">
            <div class="col-lg-8">
              <div class="banner-content text-center">
                <span class="text-white top text-uppercase">share the vibe</span>
                <h1 class="text-white text-uppercase">Profile</h1>
              </div>
            </div>
          </div>
          <!-- Main content -->
  <div class= "col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black">
              <h3 class="widget-user-username">Huy Ngo</h3>
              <h5 class="widget-user-desc">Web Designer</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="frontend/img/icon_user.png" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
  </div>
  <div class="section-top-border">
            <h3>Image Gallery</h3>
            <div class="row gallery-item">
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <a href="frontend/img/g1.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(frontend/img/g1.jpg);"></div></a>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <a href="frontend/img/g2.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(frontend/img/g2.jpg);"></div></a>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <a href="frontend/img/g3.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(frontend/img/g3.jpg);"></div></a>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <a href="frontend/img/g4.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(frontend/img/g4.jpg);"></div></a>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <a href="frontend/img/g5.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(frontend/img/g5.jpg);"></div></a>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <a href="frontend/img/g6.jpg" class="img-pop-up"><div class="single-gallery-image" style="background: url(frontend/img/g6.jpg);"></div></a>
              </div>
            </div>
  </div>
        </div>
    <!-- /.content --> 
  </div>

@endsection