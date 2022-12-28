<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | sales</title>
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
            <button class="btn d-md-none d-block close-btn px-1 py-0"><i class="fa-solid fa-bars-staggered"></i></button>
        </div>

        <ul class="list-unstyled px-3">
            <li class=""><a href="{{url('home')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-table-columns pr-2"></i>Dashboard</a></li>
            <li class=""><a href="#collapseMenu" class="text-decoration-none py-2 px-3 d-block collapse sub-menu-link" data-toggle="collapse"><i class="fa-solid fa-house pr-2"></i>Home <span class="arrowDown"><i class="fa-solid fa-chevron-down"></i></span></a></li>
            <div class="in collapse" id="collapseMenu" aria-expanded="true">
                <ul class="nav d-flex flex-column">
                    <li class="py-1 px-3 sub-menu"><a href="#" class="text-decoration-none"><span class="link-collapse">Form</span></a></li>
                    <li class="py-1 px-3 sub-menu"><a href="#" class="text-decoration-none"><span class="link-collapse">Contact</span></a></li>
                    <li class="py-1 px-3 sub-menu"><a href="tables.html" class="text-decoration-none"><span class="link-collapse">Tables</span></a></li>
                    <li class="py-1 px-3 sub-menu"><a href="#" class="text-decoration-none"><span class="link-collapse">My Profile</span></a></li>

                </ul>
            </div>
            <li class=""><a href="{{url('/users')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-users pr-2"></i>Users</a></li>
            <li class=""><a href="{{url('/spends')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-money-check-dollar pr-2"></i>Spends</a></li>
            <li class=""><a href="{{url('/store')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-store pr-2"></i>Store</a></li>
            <li class=""><a href="{{url('/invoice')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-file-invoice-dollar pr-2"></i>Invoice</a></li>
            <li class="active"><a href="{{url('/sales')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-file-invoice-dollar pr-2"></i>Sales</a></li>
            <li class=""><a href="#" class="text-decoration-none py-2 px-3 d-block d-flex justify-content-between"><span><i class="fa-solid fa-envelope-open-text pr-2"></i>Messages</span>
                    <span class="bg-danger rounded-pill text-white py-0 px-2">02</span>
                </a></li>
            <li class=""><a href="#" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-bell pr-2"></i>Notifications</a></li>
        </ul>
        <hr class="h-color mx-2">

        <ul class="list-unstyled px-3">
            <li class=""><a href="#" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-gear pr-2"></i>Settings</a></li>
            <li class=""><a href="#" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-right-from-bracket pr-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"></i>Log Out</a></li>
        </ul>

        <div class="toggle">
            <span>☀️</span>
            <input type="checkbox" id="toggle-switch" onclick="DarkMode()"/>
            <label for="toggle-switch"></label>
            <span>🌙</span>
        </div>
        <!--        <button id="dark-mode-toggle" class="dark-mode-toggle">-->
        <!--            <svg width="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 496"><path fill="currentColor" d="M8,256C8,393,119,504,256,504S504,393,504,256,393,8,256,8,8,119,8,256ZM256,440V72a184,184,0,0,1,0,368Z" transform="translate(-8 -8)"/></svg>-->
        <!--        </button>-->


    </div>
    <div class="content">
        <nav class="navbar navbar-expand-md navbar-light headNav">
            <div class="container-fluid">
                <div class="d-flex justify-content-between d-md-none d-block logoNav">
                    <button class="btn px-1 py-0 open-btn mr-2"><i class="fa-solid fa-bars-staggered"></i></button>

                    <a class="navbar-brand fs-4" href="#">Attraction</a>
                </div>
                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav  ml-auto">
                        <li class="nav-item mr-3 d-md-block d-none">
                            <a class="nav-link NMn" href="#"><i class="fa-regular fa-comment NM"></i><span class="">3</span></a>
                        </li>
                        <li class="nav-item mr-3 d-md-block d-none">
                            <a class="nav-link NMn" href="#"><i class="fa-solid fa-bell NM"></i><span class="">3</span></a>
                        </li>
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


        <div class="container">
            <div class="row">
                <div class="col-md-11 col-11 mx-auto">
                    <div class="main-card my-3 card" style="background-color: var(--white-color); transition: 0.3s;">
                        <div class="card-header" style="transition: 0.3s">
                            <div class="card-header-title text-capitalize text-danger font-weight-normal" style="border-color: var(--black-color);color:var(--black-color); transition: 0.3s">
                                Sales Table
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                                <thead>
                                <tr style="color:var(--black-color); transition: 0.3s">
                                    <th class="text-center col-1">Id</th>
                                    <th class="text-center col-1">Invoice No.</th>
{{--                                    <th class="text-center col-2">Date</th>--}}
{{--                                    <th class="text-center col-2">Item</th>--}}
{{--                                    <th class="text-center col-1">Quantity</th>--}}
{{--                                    <th class="text-center col-1">Price</th>--}}
{{--                                    <th class="text-center col-2">Total Price</th>--}}
                                    <th class="text-center col-4">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sales as $sale)
                                    <tr>
                                        <td class="text-center text-muted" style="width: 80px;">{{$sale->id}}</td>
                                        <td class="text-center" style="width: 80px;">{{$sale->invoiceNo}}</td>
{{--                                        <td class="text-center" style="width: 80px;">{{$sale->date}}</td>--}}
{{--                                        <td class="text-center" style="width: 80px;">{{$sale->item}}</td>--}}
{{--                                        <td class="text-center" style="width: 80px;">{{$sale->quantity}}</td>--}}
{{--                                        <td class="text-center" style="width: 80px;">{{$sale->price}}</td>--}}
{{--                                        <td class="text-center" style="width: 80px;">{{$sale->total}}</td>--}}

                                        <td class="text-center d-flex justify-content-center">
                                            <a href="{{route('sales.show',$sale->id)}}" class="text-success mr-2"><i class="fa-solid fa-eye mr-2"></i>Show Invoice</a>
{{--                                            <a href="" class="text-success mr-2"><i class="fa-solid fa-pen-ruler"></i></a>--}}

{{--                                            <form action="" method="POST">--}}
{{--                                                @method('DELETE')--}}
{{--                                                @csrf--}}
{{--                                                <button type="submit" class="text-danger border-0" style="background: transparent;"><i class="fa-solid fa-trash-can"></i></button>--}}
{{--                                            </form>--}}
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


<script src="{{asset('/assets/JS/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('/assets/JS/popper.min.js')}}"></script>
<script src="{{asset('/assets/JS/bootstrap.js')}}"></script>
<script src="{{asset('/assets/JS/main.js')}}"></script>
</body>
</html>

