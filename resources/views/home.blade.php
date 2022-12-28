{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/assets/CSS/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/CSS/bootstrap.css')}}">
</head>
<body>

<div class="main-container d-flex">
    <div class="sidebar" id="side_nav">
        <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
            <!--            <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 mr-2 mt-2">A</span><img src="../../assets/images/logo.png"></h1>-->
            <img src="" class="px-2" id="logo">
            <button class="btn d-lg-none d-block close-btn px-1 py-0"><i class="fa-solid fa-bars-staggered"></i></button>
        </div>

        <ul class="list-unstyled px-3">
            <li class="active"><a href="{{url('home')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-table-columns pr-2"></i>Dashboard</a></li>
            <li class=""><a href="#collapseMenu" class="text-decoration-none py-2 px-3 d-block collapse sub-menu-link" data-toggle="collapse"><i class="fa-solid fa-house pr-2"></i>Home <span class="arrowDown"><i class="fa-solid fa-chevron-down"></i></span></a></li>
            <div class="in collapse" id="collapseMenu" aria-expanded="true">
                <ul class="nav d-flex flex-column">
                    <li class="py-1 px-3 sub-menu"><a href="" class="text-decoration-none"><span class="link-collapse">Form</span></a></li>
                    <li class="py-1 px-3 sub-menu"><a href="#" class="text-decoration-none"><span class="link-collapse">Contact</span></a></li>
                    <li class="py-1 px-3 sub-menu"><a href="" class="text-decoration-none"><span class="link-collapse">Tables</span></a></li>
                    <li class="py-1 px-3 sub-menu"><a href="#" class="text-decoration-none"><span class="link-collapse">My Profile</span></a></li>

                </ul>
            </div>
            <li class=""><a href="{{url('/users')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-users pr-2"></i>Users</a></li>
            <li class=""><a href="{{url('/spends')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-money-check-dollar pr-2"></i>Spends</a></li>
            <li class=""><a href="{{url('/store')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-store pr-2"></i>Store</a></li>
            <li class=""><a href="{{url('/invoice')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-file-invoice-dollar pr-2"></i>Invoice</a></li>
            <li class=""><a href="{{url('/sales')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-file-invoice-dollar pr-2"></i>Sales</a></li>
            <li class=""><a href="#" class="text-decoration-none py-2 px-3 d-block d-flex justify-content-between"><span><i class="fa-solid fa-envelope-open-text pr-2"></i>Messages</span>
                    <span class="bg-danger rounded-pill text-white py-0 px-2">02</span>
                </a></li>
            <li class=""><a href="#" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-bell pr-2"></i>Notifications</a></li>
        </ul>
        <hr class="h-color mx-2">

        <ul class="list-unstyled px-3">
            <li class=""><a href="#" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-gear pr-2"></i>Settings</a></li>
            <li class=""><a class="text-decoration-none py-2 px-3 d-block"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa-solid fa-right-from-bracket pr-2"></i>Log Out</a></li>
        </ul>

        <div class="toggle">
            <span>☀️</span>
            <input type="checkbox" id="toggle-switch" class="toggle-switch" onclick="DarkMode()" />
            <label for="toggle-switch" class="toggle-label"></label>
            <span>🌙</span>
        </div>
        <!--        <button id="dark-mode-toggle" class="dark-mode-toggle">-->
        <!--            <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496"><path fill="currentColor" d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z" transform="translate(-8 -8)"/></svg>-->
        <!--        </button>-->


    </div>
    <div class="content">
        <nav class="navbar navbar-expand-md navbar-light headNav">
            <div class="container-fluid">
                <div class="d-flex justify-content-between d-lg-none d-block logoNav">
                    <button class="btn px-1 py-0 open-btn mr-2"><i class="fa-solid fa-bars-staggered"></i></button>

                    <a class="navbar-brand fs-4" href="#">Attraction</a>
                </div>
                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mr-3 d-md-block d-none">
                            <a class="nav-link NMn" href="#"><i class="fa-regular fa-comment NM"></i><span class="">3</span></a>
                        </li>
                        <li class="nav-item mr-3 d-md-block d-none">
                            <a class="nav-link NMn" href="#"><i class="fa-solid fa-bell NM"></i><span class="">3</span></a>
                        </li>
{{--                        <li class="nav-item active d-flex align-items-center dropdown mr-2">--}}
{{--                            <img src="{{asset('/assets/images/Profile.png')}}" width="40" height="40">--}}
{{--                            <a class="nav-link dropdown-toggle ml-2 admin" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Admin</a>--}}
{{--                            <div class="dropdown-menu">--}}
{{--                                <a class="dropdown-item" href="#">My Profile</a>--}}
{{--                                <a class="dropdown-item" href="#">Settings</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a class="dropdown-item" href="#">Log Out</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}


                                    <li class="nav-item dropdown">
{{--                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                            {{ Auth::user()->name }}--}}
{{--                                        </a>--}}
                                        <a class="nav-link dropdown-toggle ml-2 admin" href="#" role="button" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>


                                        <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>

                    </ul>

                </div>
            </div>
        </nav>

        <div class="dashboard-content px-3 pt-4">
            <div class="dash-overview-container">
                <div class="dashboard-overviews-content d-flex justify-content-center">
                    <div class="dash-overview px-3 pb-5 pt-3 rounded d-md-block d-none col-12">
                        <h2 class="mb-2">My Dashboard</h2>
                        <h5 class="">Overview</h5>
                    </div>
                    <div class="row overview-boxs col-12">
                        <div class="col-lg-3 col-12 mb-2">
                            <div class="card card-warning">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="fa-solid fa-user-group"></i>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="numbers">
                                                <p class="card-category">Items</p>
{{--                                                @foreach($items as $item){--}}
{{--                                                 {{$i=$item->type}}--}}
{{--                                                }--}}
{{--                                                {{$c=collect([$i])}}--}}
{{--                                                {{$tot=$c->count()}}--}}
                                                <h4 class="card-title">{{$items}}</h4>
{{--                                                    @endforeach--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12 mb-2">
                            <div class="card card-danger">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="fa-solid fa-chart-simple"></i>                                    </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="numbers">
                                                <p class="card-category">Sales</p>
                                                <h4 class="card-title">{{$sales}}</h4> {{--{{$sales}}--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-12 mb-2">
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="fa-solid fa-users"></i>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="numbers">
                                                <p class="card-category">Spends</p>
                                                <h4 class="card-title">{{$spends}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-12 mb-2">
                            <div class="card card-success">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="fa-regular fa-circle-check"></i>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="numbers">
                                                <p class="card-category">Users</p>
                                                <h4 class="card-title">{{$users}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="charts-container col-12">
                <div class="row">
                    <div class="col-md-6 col-12 justify-content-sm-center mb-2">
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                    <div class="col-md-6 col-12 justify-content-sm-center mb-2">
                        <canvas id="myChart2" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>

            <div class="container-scroll">
                <div class="row">
                    <div class="c0l-md-11 col-11 mx-auto">
                        <div class="main-card my-3 card" style="background-color: var(--white-color); transition: 0.3s;">
                            <div class="card-header" style="background-color:var(--main-color); transition: 0.3s">
                                <div class="card-header-title text-capitalize font-weight-normal" style="border-color: var(--black-color);color:var(--black-color); transition: 0.3s">
                                    company agents status
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                                    <thead>
                                    <tr style="color:var(--black-color); transition: 0.3s">
                                        <th class="text-center">#</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Company</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Due Date</th>
                                        <th class="text-center">Target Achievement</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center text-muted" style="width: 80px;">1</td>
                                        <td class="text-center" style="width: 80px;">
                                            <img src="{{asset('/assets/images/admin.jpg')}}" width="40" class="rounded-circle">
                                        </td>
                                        <td class="text-center" style="width: 80px;"><a href="#" class="text-decoration-none">Tasneem Mostafa</a></td>
                                        <td class="text-center" style="width: 80px;"><a href="http://attractionme.net" class="text-decoration-none">Attractionme</a></td>
                                        <td class="text-center" style="width: 80px;"><div class="badge badge-pill badge-danger">canceled</div></td>
                                        <td class="text-center" style="width:80px;">2 OCT</td>
                                        <td class="text-center" style="width:200px;"><div class="widget-content p-0">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper d-flex">
                                                        <div class="widget-content-left pr-2">
                                                            <div class="widget-numbers text-danger">60%</div>
                                                        </div>
                                                        <div class="widget-content-right w-100">
                                                            <div class="progress-bar-xs progress">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar bg-danger" role="progressbar" style="width: 60%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></td>
                                        <td class="text-center">
                                            <button class="btn btn-primary shadow">Hire</button>
                                            <button class="btn btn-primary shadow">Fire</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted" style="width: 80px;">1</td>
                                        <td class="text-center" style="width: 80px;">
                                            <img src="{{asset('/assets/images/admin.jpg')}}" width="40" class="rounded-circle">
                                        </td>
                                        <td class="text-center" style="width: 80px;"><a href="#" class="text-decoration-none">Tasneem Mostafa</a></td>
                                        <td class="text-center" style="width: 80px;"><a href="http://attractionme.net" class="text-decoration-none">Attractionme</a></td>
                                        <td class="text-center" style="width: 80px;"><div class="badge badge-pill badge-warning">In Progress</div></td>
                                        <td class="text-center" style="width:80px;">2 OCT</td>
                                        <td class="text-center" style="width:200px;"><div class="widget-content p-0">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper d-flex">
                                                        <div class="widget-content-left pr-2">
                                                            <div class="widget-numbers text-warning">70%</div>
                                                        </div>
                                                        <div class="widget-content-right w-100">
                                                            <div class="progress-bar-xs progress">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar bg-warning" role="progressbar" style="width: 70%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></td>
                                        <td class="text-center">
                                            <button class="btn btn-primary shadow">Hire</button>
                                            <button class="btn btn-primary shadow">Fire</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted" style="width: 80px;">1</td>
                                        <td class="text-center" style="width: 80px;">
                                            <img src="{{asset('/assets/images/admin.jpg')}}" width="40" class="rounded-circle">
                                        </td>
                                        <td class="text-center" style="width: 80px;"><a href="#" class="text-decoration-none">Menna Mostafa</a></td>
                                        <td class="text-center" style="width: 80px;"><a href="http://attractionme.net" class="text-decoration-none">Attractionme</a></td>
                                        <td class="text-center" style="width: 80px;"><div class="badge badge-pill badge-success">completed</div></td>
                                        <td class="text-center" style="width:80px;">2 OCT</td>
                                        <td class="text-center" style="width:200px;"><div class="widget-content p-0">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper d-flex">
                                                        <div class="widget-content-left pr-2">
                                                            <div class="widget-numbers text-success">100%</div>
                                                        </div>
                                                        <div class="widget-content-right w-100">
                                                            <div class="progress-bar-xs progress">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></td>
                                        <td class="text-center">
                                            <button class="btn btn-primary shadow">Hire</button>
                                            <button class="btn btn-primary shadow">Fire</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center text-muted" style="width: 80px;">1</td>
                                        <td class="text-center" style="width: 80px;">
                                            <img src="{{asset('/assets/images/admin.jpg')}}" width="40" class="rounded-circle">
                                        </td>
                                        <td class="text-center" style="width: 80px;"><a href="#" class="text-decoration-none">Reem Osama</a></td>
                                        <td class="text-center" style="width: 80px;"><a href="http://attractionme.net" class="text-decoration-none">Attractionme</a></td>
                                        <td class="text-center" style="width: 80px;"><div class="badge badge-pill badge-primary">On Hold</div></td>
                                        <td class="text-center" style="width:80px;">2 OCT</td>
                                        <td class="text-center" style="width:200px;"><div class="widget-content p-0">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper d-flex">
                                                        <div class="widget-content-left pr-2">
                                                            <div class="widget-numbers text-primary">80%</div>
                                                        </div>
                                                        <div class="widget-content-right w-100">
                                                            <div class="progress-bar-xs progress">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" class="progress-bar bg-primary" role="progressbar" style="width: 80%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></td>
                                        <td class="text-center">
                                            <button class="btn btn-primary shadow">Hire</button>
                                            <button class="btn btn-primary shadow">Fire</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <footer class="mt-3 p-3">
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2022 &copy; Tasneem Elshamia</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><3</span> by <a
                            href="http://attractionme.net" style="color: var(--main-color)">Attractionme</a></p>
                </div>
            </div>
        </footer>
        <a id="button">
            <i class="fa-solid fa-arrow-turn-up"></i>
        </a>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<script src="{{asset('/assets/JS/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('/assets/JS/popper.min.js')}}"></script>
<script src="{{asset('/assets/JS/bootstrap.js')}}"></script>
<script src="{{asset('/assets/JS/main.js')}}"></script>
</body>
</html>
