  @extends('admin.layout.index')

  @section('content')

  <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                          @if(isset($errors) && count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach     
                                </div>
                             @endif

                             @if(session('thongbao'))
                                 <div class="alert alert-success">
                                    {{session('thongbao')}}
                                 </div>
                            @endif
                        
                        <form action="admin/slide/them" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                        

                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="Ten" placeholder="Vui lòng nhập tên slide" />
                            </div>
                
                            <div class="form-group">
                                <label>Link</label>
                                <input class="form-control" name="link" placeholder="Vui lòng nhập link" />
                            </div>
                

                            <div class="form-group">
                                <label>Nội Dung</label>
                                <textarea name="NoiDung" id="demo" class="form-control ckeditor" rows="5"></textarea>
                            </div>

                            <div
                                class="form-group">
                                <label>Hình Ảnh</label>
                                <input type="file" name="Hinh" class="form-control"/>
                                    
                                </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm Mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


@endsection
