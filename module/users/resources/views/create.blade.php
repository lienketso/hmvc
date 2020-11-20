@extends('wadmin-dashboard::master')
@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{route('wadmin::users.create.post')}}" enctype="multipart/form-data" >
        {{csrf_field()}}
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
            <div class="breadcrumb-title pr-3">Tài khoản</div>
            <div class="pl-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href=""><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">tạo tài khoản mới</li>
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
            <div class="card-header">Nhập thông tin để tạo tài khoản mới</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control"
                           name="email"
                           type="text"
                           value="{{old('email')}}"
                           placeholder="ex : thanhan1507@gmail.com">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input class="form-control" name="password" type="password" placeholder="******">
                </div>
                <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                    <input class="form-control" name="re_password" type="password" placeholder="******">
                </div>
                <div class="form-group">
                    <label>Họ tên</label>
                    <input class="form-control"
                           name="full_name"
                           type="text"
                           value="{{old('full_name')}}"
                           placeholder="ex : Nguyễn Văn A">
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input class="form-control"
                           name="phone"
                           type="text"
                           value="{{old('phone')}}"
                           placeholder="ex : 0979823452">
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input class="form-control"
                           name="address"
                           value="{{old('address')}}"
                           type="text"
                           placeholder="ex : Nam An Khánh, Hoài Đức">
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
                            <option value="disabled">Tạm khóa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phân quyền</label>
                        <select name="role" class="form-control">
                            <option value="">---Chọn quyền---</option>
                            @foreach($roles as $r)
                            <option value="{{$r->id}}">{{$r->display_name}}</option>
                            @endforeach
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
