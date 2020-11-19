@extends('wadmin-dashboard::master')

@section('js')
    <script type="text/javascript" src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
@endsection

@section('js-init')
    <script type="text/javascript" src="{{asset('adminux/vendor/select2/dist/js/init.js')}}"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection

@section('content')

    <div class="page-content-wrapper">
        <div class="page-content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="margin-bottom: 0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" enctype="multipart/form-data" >
            {{csrf_field()}}
            <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                    <div class="breadcrumb-title pr-3">Bài viết</div>
                    <div class="pl-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href=""><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Thêm bài viết</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ml-auto">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary m-1"><i class="bx bx-user mr-1"></i>Lưu lại</button>
                            <button type="submit" name="continue_post" value="1" class="btn btn-success m-1"><i class="bx bx-home-alt mr-1"></i>Lưu và thêm mới</button>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">Nhập thông tin để thêm bài viết mới</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input class="form-control"
                                               name="title"
                                               type="text"
                                               value="{{old('title')}}"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input class="form-control"
                                               name="slug"
                                               type="text"
                                               value="{{old('slug')}}"
                                               placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả ngắn</label>
                                        <textarea rows="4" class="form-control"
                                               name="description"
                                               >{{old('description')}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <textarea rows="8" id="editor1" class="form-control"
                                               name="content" placeholder="">{{old('content')}}</textarea>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">Tùy chọn</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select name="status" class="form-control">
                                            <option value="active">Kích hoạt</option>
                                            <option value="disable">Tạm khóa</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Ảnh đại diện</label>
                                        <div class="custom-file">
                                            <input type="file" name="thumbnail" value="{{old('thumbnail')}}" class="custom-file-input" id="inputGroupFile01" >
                                            <label class="custom-file-label" for="inputGroupFile01">{{old('thumbnail')}}</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="ml-auto">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary m-1"><i class="bx bx-user mr-1"></i>Lưu lại</button>
                                    <button type="submit" name="continue_post" value="1" class="btn btn-success m-1"><i class="bx bx-refresh mr-1"></i>Lưu và thêm mới</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </div>

@endsection
