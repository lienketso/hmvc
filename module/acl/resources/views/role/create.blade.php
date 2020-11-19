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
            <form method="post" action="{{route('wadmin::role.create.post')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                    <div class="breadcrumb-title pr-3">Vai trò tài khoản</div>
                    <div class="pl-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href=""><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">tạo vai trò mới</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ml-auto">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary m-1"><i class="bx bx-user mr-1"></i>Lưu lại
                            </button>
                            <button type="submit" name="continue_post" value="1" class="btn btn-success m-1"><i
                                        class="bx bx-home-alt mr-1"></i>Lưu và thêm mới
                            </button>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">Nhập thông tin để thêm vai trò</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tên vai trò</label>
                                        <input class="form-control"
                                               name="name"
                                               type="text"
                                               value="{{old('name')}}"
                                               placeholder="ex : Administrator">
                                    </div>
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input class="form-control"
                                               name="display_name"
                                               type="text"
                                               value="{{old('display_name')}}"
                                               placeholder="ex : Quản trị hệ thống">
                                    </div>

                                    <div class="form-group">
                                        <label>Mô tả vai trò</label>
                                       <textarea name="description"
                                                 class="form-control"
                                                 placeholder="ex : Quản trị hệ thống cao nhất"
                                       >{{old('description')}}</textarea>
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
                                            <option value="active">Hiển thị</option>
                                            <option value="disabled">Ẩn</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="ml-auto">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary m-1"><i class="bx bx-user mr-1"></i>Lưu
                                        lại
                                    </button>
                                    <button type="submit" name="continue_post" value="1" class="btn btn-success m-1"><i
                                                class="bx bx-refresh mr-1"></i>Lưu và thêm mới
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </div>

@endsection
