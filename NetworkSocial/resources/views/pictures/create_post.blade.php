@extends('layouts.app')

@section('create_post')
<div class="banner-area">
        <div class="container">
          <div class="row justify-content-center generic-height align-items-center">
            <div class="col-lg-8">
              <div class="banner-content text-center">
                <span class="text-white top text-uppercase">share the vibe</span>
                <h1 class="text-white text-uppercase">Create Post</h1>
              </div>
            </div>
          </div>
          {{-- Create post area --}}
          <div class="col-xl-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Create Post</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="What are you thinking ?" name="status_post">
                  </div>
                  <div class="input-group mb-3">
                    <div class="custom-file">
                      <input class="btn-input-file" type="file" placeholder="Choose file" name="picture_post">
                    </div>
                    <div class="btn-box-footer">
                      <button type="submit" class="btn btn-primary-box" class="genric-btn info-border circle arrow">Post<span class="lnr lnr-arrow-up"></span></button>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
              </form>
            </div>
          </div>

@endsection