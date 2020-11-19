@extends('wadmin-dashboard::master')
@section('content')

    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pr-3">Bài viết</div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javaScript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Quản lý bài viết</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto">
                    <div class="btn-group">
                        <a href="{{route('wadmin::post.create.get')}}" class="btn btn-primary"><i class="bx bx-comment-add"></i> Thêm tài khoản mới</a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card radius-10">
                <div class="card-header border-bottom-0">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="font-weight-bold mb-0">Danh sách bài viết</h5>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Ngày post</th>
                                <th>Trạng thái</th>
                                <th>Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                                <tr>
                                    <td>
                                        <div class="product-img bg-transparent border">
                                            <img src="{{$d->thumbnail}}" width="35" alt="">
                                        </div>
                                    </td>
                                    <td>{{$d->title}}</td>
                                    <td>{{$d->created_at}}</td>
                                    <td><a href="#" class="btn btn-sm btn-success radius-30">Đã kích hoạt</a>
                                    </td>
                                    <td>Xóa</td>
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
