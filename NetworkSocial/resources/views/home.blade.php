@extends('layouts.app')

@section('home')
      <div class="banner-area">
        <div class="container">
          <div class="row justify-content-center generic-height align-items-center">
            <div class="col-lg-8">
              <div class="banner-content text-center">
                <span class="text-white top text-uppercase">share the vibe</span>
                <h1 class="text-white text-uppercase">News Feeds</h1>
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
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="What are you thinking ?">
                  </div>
                  <div class="input-group mb-3">
                    <div class="custom-file">
                      <input class="btn-input-file" type="file" placeholder="Choose file" >
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

          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 box-content">
          <!-- Box Comment -->
            <div class="box box-widget">
              <div class="box-header with-border">
                <div class="user-block">
                  <img class="img-circle" src="frontend/img/icon_user.png" alt="User Image">
                  <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                  <span class="description">Shared publicly - 7:30 PM Today</span>
                </div>
                <!-- /.user-block -->
                <div class="box-tools">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <img class="img-responsive pad" src="frontend/img/photo2.png" alt="Photo">

                <p>I took this photo this morning. What do you guys think?</p>
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                <span class="pull-right text-muted">127 likes - 3 comments</span>
              </div>
              <!-- /.box-body -->
              <div class="box-footer box-comments">
                <div class="box-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="frontend/img/icon_user.png" alt="User Image">

                  <div class="comment-text">
                        <span class="username">
                          Maria Gonzales
                          <span class="text-muted pull-right">8:03 PM Today</span>
                        </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.box-comment -->
                <div class="box-comment">
                  <!-- User image -->
                  <img class="img-circle img-sm" src="frontend/img/icon_user.png" alt="User Image">

                  <div class="comment-text">
                        <span class="username">
                          Luna Stark
                          <span class="text-muted pull-right">8:03 PM Today</span>
                        </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                  </div>
                  <!-- /.comment-text -->
                </div>
                <!-- /.box-comment -->
              </div>
              <!-- /.box-footer -->
              <div class="box-footer">
                <form action="#" method="post">
                  <img class="img-circle img-sm" src="frontend/img/icon_user.png" alt="Alt Text">
                  <!-- .img-push is used to add margin to elements next to floating images -->
                  <div class="img-push">
                    <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                  </div>
                </form>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.box -->
          </div>
        </div>  
@endsection
