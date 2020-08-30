@extends('admin/layout/app')

@section('main-content')
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Main Things</h3>
                </div>
                <!-- /.card-header -->
                
                @include('include.message')

                <!-- form start -->
              <form role="form" action="{{ route('post.update',$post->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $post->title }}">
                                </div>
        
                                <div class="form-group">
                                    <label for="subtitle">Post Sub Title</label>
                                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter sub title" value="{{ $post->subtitle }}">
                                </div>
        
                                <div class="form-group">
                                    <label for="slug">Post Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug" value="{{ $post->slug }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cover">Cover Photo</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="cover" name="cover">
                                        <label class="custom-file-label" for="cover">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="status" id="status" @if($post->status==1)checked @endif>
                                    <label class="form-check-label" for="status">Publish post</label>
                                </div>
                            </div>
                        </div>

                      </div>
                      <!-- /.card-body -->
                        
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">
                                Write Post
                                <small></small>
                            </h3>
                            <!-- tools box -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body pad">
                            <div class="mb-3">
                                <textarea class="textarea" name="body" placeholder="Place post content here"
                            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->body}}</textarea>
                            </div>
                            </div>
                        </div>
                        

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('post.index')}}" class="btn btn-warning">Back</a>
                    </div>
              </form>
            </div>
            <!-- /.card -->   
            

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

@endsection

@section('footerSection')
  <!-- summmer note-->
  <!-- jQuery -->
  <script src="{{asset('../../admin/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('../../admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('../../admin/dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('../../admin/dist/js/demo.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('../../admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <script>
    $(function () {
      // Summernote
      $('.textarea').summernote()
    })
  </script>
@endsection