@extends('wadmin-dashboard::master')
@section('content')

    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
                <div class="breadcrumb-title pr-3">Danh sách quyền theo module</div>
                <div class="pl-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javaScript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Quản lý quyền theo module</li>
                        </ol>
                    </nav>
                </div>
                <div class="ml-auto">
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary"><i class="bx bx-comment-add"></i> Thêm mới</a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card radius-10">
                <div class="card-header border-bottom-0">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="font-weight-bold mb-0">Danh sách module</h5>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>Vai trò</th>
                                <th>Tiêu đề</th>
                                <th>Mô tả</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                                <tr>
                                    <td>{{$d->name}}</td>
                                    <td>{{$d->display_name}}</td>
                                    <td>{{$d->description}}</td>
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
