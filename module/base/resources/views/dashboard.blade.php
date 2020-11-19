@extends('wadmin-dashboard::master')
@section('content')

<div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6>Total Profit</h6>
                                <h4 class="font-weight-bold mb-0">$8320</h4>
                            </div>
                            <div class="ml-auto"> <small class="text-danger float-right">(-72.16%) <i class='bx bx-down-arrow-alt'></i></small>
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6>Total Sales</h6>
                                <h4 class="font-weight-bold mb-0">5264</h4>
                            </div>
                            <div class="ml-auto"> <small class="text-success float-right">(+68.26%) <i class='bx bx-up-arrow-alt'></i></small>
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h6>Total Visitors</h6>
                                <h4 class="font-weight-bold mb-0">22.7k</h4>
                            </div>
                            <div class="ml-auto"> <small class="text-success float-right">(+54.34%) <i class='bx bx-up-arrow-alt'></i></small>
                                <div id="chart3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="card radius-10">
            <div class="card-header border-bottom-0">
                <div class="d-lg-flex align-items-center">
                    <div>
                        <h5 class="font-weight-bold mb-2 mb-lg-0">Monthly Revenue</h5>
                    </div>
                    <div class="ml-lg-auto mb-2 mb-lg-0">
                        <div class="btn-group-round">
                            <div class="btn-group">
                                <button type="button" class="btn btn-white">Day</button>
                                <button type="button" class="btn btn-white">Week</button>
                                <button type="button" class="btn btn-white">Month</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary radius-10 ml-lg-3">Download CSV</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="chart4"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card radius-10">
                    <div class="card-header border-bottom-0">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h5 class="font-weight-bold mb-2 mb-lg-0">Historical Analytics</h5>
                            </div>
                            <div class="ml-lg-auto mb-2 mb-lg-0">
                                <div class="btn-group-round">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-white">This Month</button>
                                        <div class="dropdown-menu">	<a class="dropdown-item" href="javaScript:;">This Week</a>
                                            <a class="dropdown-item" href="javaScript:;">This Year</a>
                                        </div>
                                        <button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	<span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart5"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card radius-10 bg-primary">
                    <div class="card-body">
                        <h6 class="text-white">Active Visitors</h6>
                        <h4 class="font-weight-bold text-white">3467</h4>
                        <p class="font-13 text-white">Page view per minute</p>
                        <div id="chart6"></div>
                    </div>
                </div>
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="revenue-by-channel">
                            <h6 class="mb-4 font-weight-bold">Revenue by Channel</h6>
                            <div class="progress-wrapper">
                                <div class="d-flex align-items-center">
                                    <div class="text-secondary">Direct</div>
                                    <div class="ml-auto pr-4">$1,24,685</div>
                                    <div class="text-success">65.6%</div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar" role="progressbar" style="width: 65%"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="text-secondary">Referral</div>
                                    <div class="ml-auto pr-4">$1,22,863</div>
                                    <div class="text-success">45.6%</div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar" role="progressbar" style="width: 55%"></div>
                                </div>
                            </div>
                            <div class="progress-wrapper mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="text-secondary">Social</div>
                                    <div class="ml-auto pr-4">$1,24,685</div>
                                    <div class="text-danger">25.2%</div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar" role="progressbar" style="width: 35%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-stretch">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="font-weight-bold mb-0">Order Status</h5>
                            </div>
                            <div class="dropdown ml-auto">
                                <div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javaScript:;">Action</a>
                                    <a class="dropdown-item" href="javaScript:;">Another action</a>
                                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javaScript:;">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div id="chart7"></div>
                        <div class="d-flex align-items-center justify-content-between text-center">
                            <div>
                                <h5 class="mb-1 font-weight-bold">289</h5>
                                <p class="mb-0 text-secondary">Booked</p>
                            </div>
                            <div class="mb-1">
                                <h5 class="mb-1 font-weight-bold">348</h5>
                                <p class="mb-0 text-secondary">In Progress</p>
                            </div>
                            <div>
                                <h5 class="mb-1 font-weight-bold">152</h5>
                                <p class="mb-0 text-secondary">Canceled</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-stretch">
                <div class="card w-100 radius-10 shadow-none bg-transparent">
                    <div class="card-body p-0">
                        <div class="card radius-10 bg-voilet">
                            <div class="card-body">
                                <div id="chart8"></div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h4 class="mb-0 font-weight-bold text-white">$534.8</h4>
                                        <p class="mb-0 text-white">Average Weekly Sales</p>
                                    </div>
                                    <div><i class='bx bx-diamond font-24 text-white'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-deck mb-0">
                            <div class="card radius-10 mb-sm-0">
                                <div class="card-body">
                                    <div id="chart9"></div>
                                </div>
                            </div>
                            <div class="card radius-10 mb-0">
                                <div class="card-body">
                                    <div id="chart10"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
        <div class="card-deck flex-column flex-lg-row mb-0">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="font-weight-bold mb-0">Best Selling Products</h5>
                        </div>
                        <div class="dropdown ml-auto">
                            <div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javaScript:;">Action</a>
                                <a class="dropdown-item" href="javaScript:;">Another action</a>
                                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javaScript:;">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-list mt-3">
                        <div class="media align-items-center">
                            <div class="product-img">
                                <img src="{{asset('admin/assets/images')}}/icons/ice-cream-cornet.png" width="35" alt="" />
                            </div>
                            <div class="media-body pl-3">
                                <h6 class="mb-0 font-weight-bold">Cone Ice Cream</h6>
                                <p class="mb-0 text-secondary">$29/Each 56 Orders</p>
                            </div>
                            <p class="mb-0 text-purple">$521.52</p>
                        </div>
                        <hr/>
                        <div class="media align-items-center">
                            <div class="product-img">
                                <img src="{{asset('admin/assets/images')}}/icons/wine-glass.png" width="35" alt="" />
                            </div>
                            <div class="media-body pl-3">
                                <h6 class="mb-0 font-weight-bold">Wine Glass</h6>
                                <p class="mb-0 text-secondary">$30/Each 48 Orders</p>
                            </div>
                            <p class="mb-0 text-purple">$406.87</p>
                        </div>
                        <hr/>
                        <div class="media align-items-center">
                            <div class="product-img">
                                <img src="{{asset('admin/assets/images')}}/icons/banana.png" width="35" alt="" />
                            </div>
                            <div class="media-body pl-3">
                                <h6 class="mb-0 font-weight-bold">Banana Toy</h6>
                                <p class="mb-0 text-secondary">$26/Each 66 Orders</p>
                            </div>
                            <p class="mb-0 text-purple">$685.69</p>
                        </div>
                        <hr/>
                        <div class="media align-items-center">
                            <div class="product-img">
                                <img src="{{asset('admin/assets/images')}}/icons/telephone.png" width="35" alt="" />
                            </div>
                            <div class="media-body pl-3">
                                <h6 class="mb-0 font-weight-bold">Old Telephone</h6>
                                <p class="mb-0 text-secondary">$39/Each 26 Orders</p>
                            </div>
                            <p class="mb-0 text-purple">$913.72</p>
                        </div>
                        <hr/>
                        <div class="media align-items-center">
                            <div class="product-img">
                                <img src="{{asset('admin/assets/images')}}/icons/plate.png" width="35" alt="" />
                            </div>
                            <div class="media-body pl-3">
                                <h6 class="mb-0 font-weight-bold">Orange Plate</h6>
                                <p class="mb-0 text-secondary">$22/Each 34 Orders</p>
                            </div>
                            <p class="mb-0 text-purple">$372.62</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="font-weight-bold mb-0">Recent Reviews</h5>
                        </div>
                        <div class="dropdown ml-auto">
                            <div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javaScript:;">Action</a>
                                <a class="dropdown-item" href="javaScript:;">Another action</a>
                                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javaScript:;">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-list mt-3">
                        <div class="media align-items-center">
                            <div class="product-img">
                                <img src="{{asset('admin/assets/images')}}/icons/banana.png" width="35" alt="" />
                            </div>
                            <div class="media-body pl-3">
                                <h6 class="mb-0 font-weight-bold">Banana Toy</h6>
                            </div>
                            <p class="mb-0"><i class='bx bxs-star text-warning mr-1'></i> 5.00</p>
                        </div>
                        <hr/>
                        <div class="media align-items-center">
                            <div class="product-img">
                                <img src="{{asset('admin/assets/images')}}/icons/telephone.png" width="35" alt="" />
                            </div>
                            <div class="media-body pl-3">
                                <h6 class="mb-0 font-weight-bold">Old Telephone</h6>
                            </div>
                            <p class="mb-0"><i class='bx bxs-star text-warning mr-1'></i> 5.00</p>
                        </div>
                        <hr/>
                        <div class="media align-items-center">
                            <div class="product-img">
                                <img src="{{asset('admin/assets/images')}}/icons/wine-glass.png" width="35" alt="" />
                            </div>
                            <div class="media-body pl-3">
                                <h6 class="mb-0 font-weight-bold">Wine Glass</h6>
                            </div>
                            <p class="mb-0"><i class='bx bxs-star text-warning mr-1'></i> 5.00</p>
                        </div>
                        <hr/>
                        <div class="media align-items-center">
                            <div class="product-img">
                                <img src="{{asset('admin/assets/images')}}/icons/plate.png" width="35" alt="" />
                            </div>
                            <div class="media-body pl-3">
                                <h6 class="mb-0 font-weight-bold">Orange Plate</h6>
                            </div>
                            <p class="mb-0"><i class='bx bxs-star text-warning mr-1'></i> 5.00</p>
                        </div>
                        <hr/>
                        <div class="media align-items-center">
                            <div class="product-img">
                                <img src="{{asset('admin/assets/images')}}/icons/ice-cream-cornet.png" width="35" alt="" />
                            </div>
                            <div class="media-body pl-3">
                                <h6 class="mb-0 font-weight-bold">Cone Ice Cream</h6>
                            </div>
                            <p class="mb-0"><i class='bx bxs-star text-warning mr-1'></i> 5.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="font-weight-bold mb-0">Support Inbox</h5>
                        </div>
                        <div class="dropdown ml-auto">
                            <div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javaScript:;">Action</a>
                                <a class="dropdown-item" href="javaScript:;">Another action</a>
                                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javaScript:;">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="support-list mt-3">
                        <div class="media align-items-top">
                            <div class="">
                                <img src="{{asset('admin/assets/images')}}/avatars/avatar-1.png" width="40" height="40" class="rounded-circle" alt="" />
                            </div>
                            <div class="media-body pl-2">
                                <h6 class="mb-1 font-weight-bold">Jordan Ntolo <span class="text-primary float-right font-13">2 hours ago</span></h6>
                                <p class="mb-0 font-13 text-secondary">My item doesn't ship to correct address. Please check It Proper</p>
                            </div>
                        </div>
                        <hr/>
                        <div class="media align-items-top">
                            <div class="">
                                <img src="{{asset('admin/assets/images')}}/avatars/avatar-2.png" width="40" height="40" class="rounded-circle" alt="" />
                            </div>
                            <div class="media-body pl-2">
                                <h6 class="mb-1 font-weight-bold">Carolien Bloeme <span class="text-primary float-right font-13">3 hours ago</span></h6>
                                <p class="mb-0 font-13 text-secondary">You shipped different color, I need it to be changed</p>
                            </div>
                        </div>
                        <hr/>
                        <div class="media align-items-top">
                            <div class="">
                                <img src="{{asset('admin/assets/images')}}/avatars/avatar-3.png" width="40" height="40" class="rounded-circle" alt="" />
                            </div>
                            <div class="media-body pl-2">
                                <h6 class="mb-1 font-weight-bold">Lisanne Viscall <span class="text-primary float-right font-13">12 hours ago</span></h6>
                                <p class="mb-0 font-13 text-secondary">Can you please refund my money. I don't want to wait anymore</p>
                            </div>
                        </div>
                        <hr/>
                        <div class="media align-items-top">
                            <div class="">
                                <img src="{{asset('admin/assets/images')}}/avatars/avatar-4.png" width="40" height="40" class="rounded-circle" alt="" />
                            </div>
                            <div class="media-body pl-2">
                                <h6 class="mb-1 font-weight-bold">Sun Jun <span class="text-primary float-right font-13">12 Yesterday</span></h6>
                                <p class="mb-0 font-13 text-secondary">Please return my phone. it is not iPhon7</p>
                            </div>
                        </div>
                        <hr/>
                        <div class="media align-items-top">
                            <div class="">
                                <img src="{{asset('admin/assets/images')}}/avatars/avatar-5.png" width="40" height="40" class="rounded-circle" alt="" />
                            </div>
                            <div class="media-body pl-2">
                                <h6 class="mb-1 font-weight-bold">Lotila Remo <span class="text-primary float-right font-13">2 days ago</span></h6>
                                <p class="mb-0 font-13 text-secondary">Hello, I need admin template product. how can i purchase?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card radius-10">
            <div class="card-header border-bottom-0">
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="font-weight-bold mb-0">Recent Orders</h5>
                    </div>
                    <div class="ml-auto">
                        <button type="button" class="btn btn-white radius-10">View More</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Product Name</th>
                            <th>Customer</th>
                            <th>Product id</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="product-img bg-transparent border">
                                    <img src="{{asset('admin/assets/images')}}/icons/shoes.png" width="35" alt="">
                                </div>
                            </td>
                            <td>Nike Sports NK</td>
                            <td>Mitchell Daniel</td>
                            <td>#9668521</td>
                            <td>$99.85</td>
                            <td><a href="javaScript:;" class="btn btn-sm btn-success radius-30">Delivered</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-img bg-transparent border">
                                    <img src="{{asset('admin/assets/images')}}/icons/smartphone.png" width="35" alt="">
                                </div>
                            </td>
                            <td>Redmi Airdts</td>
                            <td>Craig Clayton</td>
                            <td>#8627523</td>
                            <td>$59.35</td>
                            <td><a href="javaScript:;" class="btn btn-sm btn-success radius-30">Delivered</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-img bg-transparent border">
                                    <img src="{{asset('admin/assets/images')}}/icons/mouse.png" width="35" alt="">
                                </div>
                            </td>
                            <td>Magic Mouse 2</td>
                            <td>Julia Burke</td>
                            <td>#6875954</td>
                            <td>$42.68</td>
                            <td><a href="javaScript:;" class="btn btn-sm btn-success radius-30">Delivered</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-img bg-transparent border">
                                    <img src="{{asset('admin/assets/images')}}/icons/tshirt.png" width="35" alt="">
                                </div>
                            </td>
                            <td>Coton-T-Shirt</td>
                            <td>Clark Natela</td>
                            <td>#4587892</td>
                            <td>$32.78</td>
                            <td><a href="javaScript:;" class="btn btn-sm btn-success radius-30">Delivered</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="product-img bg-transparent border">
                                    <img src="{{asset('admin/assets/images')}}/icons/headphones.png" width="35" alt="">
                                </div>
                            </td>
                            <td>Headphones 7</td>
                            <td>Robin Mandela</td>
                            <td>#5587426</td>
                            <td>$29.52</td>
                            <td><a href="javaScript:;" class="btn btn-sm btn-success radius-30">Delivered</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
