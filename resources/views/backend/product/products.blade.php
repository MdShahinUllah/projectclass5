@extends('layouts.backend')

@section('dashboard')

    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('admin')}}">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.users')}}">
                            <span data-feather="user"></span>
                            Users
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrations
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

{{--        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">--}}
{{--            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">--}}
{{--                <h1 class="h2">Dashboard</h1>--}}
{{--                <div class="btn-toolbar mb-2 mb-md-0">--}}
{{--                    <div class="btn-group me-2">--}}
{{--                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>--}}
{{--                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>--}}
{{--                    </div>--}}
{{--                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">--}}
{{--                        <span data-feather="calendar"></span>--}}
{{--                        This week--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>--}}

        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <h2 align="center">Products List</h2>
            <a href="{{route('product.create')}}" class="btn btn-success"><i class="fa fa-plus-circle" style="padding-right: 10px"></i>New Product</a>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key=>$product)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td><img src="{{asset('uploads/'.$product->photo)}}"alt="" style="width: 50px;"></td>
                        <td>
                            <a class="btn btn-success" href="{{route('product.edit',$product->id)}}">Edit</a>
                            <a class="btn btn-warning">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$products->links('pagination::bootstrap-4')}}
            </div>
        </main>
    </div>

    </div>

@stop
