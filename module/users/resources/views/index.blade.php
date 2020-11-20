@extends('wadmin-dashboard::master')
@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
            <div class="breadcrumb-title pr-3">Tài khoản</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javaScript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Quản lý tài khoản</li>
                    </ol>
                </nav>
            </div>
            <div class="ml-auto">
                <div class="btn-group">
                    <a href="{{route('wadmin::users.create.get')}}" class="btn btn-primary"><i class="bx bx-comment-add"></i> Thêm tài khoản mới</a>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card radius-10">
            <div class="card-header border-bottom-0">
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="font-weight-bold mb-0">Danh sách tài khoản</h5>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th>Avatar</th>
                            <th>Email</th>
                            <th>Họ tên</th>
                            <th>Số điện thoại</th>
                            <th>Trạng thái</th>
                            <th>Tùy chọn</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>
                                <div class="product-img bg-transparent border">
                                    <img src="http://hmvc.test/admin/assets/images/icons/shoes.png" width="35" alt="">
                                </div>
                            </td>
                            <td>{{$d->email}}</td>
                            <td>{{$d->fullname}}</td>
                            <td>{{$d->phone}}</td>
                            <td><a href="#" class="btn btn-sm btn-success radius-30">Đã kích hoạt</a></td>
                            <td>
                                <a href="{{route('wadmin::users.edit.get',['id'=>$d->id])}}" class="btn btn-outline-warning m-1">Sửa</a>
                                <a href="#" class="btn btn-outline-danger m-1">Xóa</a>
                            </td>
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
