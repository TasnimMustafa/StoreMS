<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Invoice</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/assets/CSS/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/CSS/bootstrap.css')}}">
    <style>
        * {
            box-sizing: border-box;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #ddd;
            padding: 10px;
            word-break: break-all;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 16px;
        }
        .h4-14 h4 {
            font-size: 12px;
            margin-top: 0;
            margin-bottom: 5px;
        }
        .img {
            margin-left: auto;
            margin-top: auto;
            height: 30px;
        }
        pre,
        p {
            /* width: 99%; */
            /* overflow: auto; */
            /* bpicklist: 1px solid #aaa; */
            padding: 0;
            margin: 0;
        }
        table {
            font-family: arial, sans-serif;
            width: 100%;
            border-collapse: collapse;
            padding: 1px;
        }
        .hm-p p {
            text-align: left;
            padding: 1px;
            padding: 5px 4px;
        }
        td,
        th {
            text-align: left;
            padding: 8px 6px;
        }
        .table-b td,
        .table-b th {
            border: 1px solid #ddd;
        }
        th {
            /* background-color: #ddd; */
        }
        .hm-p td,
        .hm-p th {
            padding: 3px 0px;
        }
        .cropped {
            float: right;
            margin-bottom: 20px;
            height: 100px; /* height of container */
            overflow: hidden;
        }
        .cropped img {
            width: 400px;
            margin: 8px 0px 0px 80px;
        }
        .main-pd-wrapper {
            /*box-shadow: 0 0 10px #ddd;*/
            background-color: #fff;
            /*border-radius: 10px;*/
            padding:0px 15px;
        }
        .table-bordered td,
        .table-bordered th {
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 14px;
        }
        .invoice-items {
            font-size: 14px;
            border-top: 1px dashed #ddd;
        }
        .invoice-items td{
            padding: 14px 0;

        }
    </style>
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
            <li class="active"><a href="{{url('/invoice')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-file-invoice-dollar pr-2"></i>Invoice</a></li>
            <li class=""><a href="{{url('/sales')}}" class="text-decoration-none py-2 px-3 d-block"><i class="fa-solid fa-file-invoice-dollar pr-2"></i>Sales</a></li>

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

        <div class="px-3 pt-4">
            <div class="form-content">
                <div class="row">
                    <div class="formAll col-12 d-flex flex-wrap justify-content-center">
                        <div class=" col-lg-11 col-md-11 col-12 justify-content-sm-center mb-2" style="transition: 0.3s; background-color: var(--white-color)">
                            {{--                            <div class="imgcontainer">--}}
                            {{--                                <img src="{{asset('assets/images/foo_logo.png')}}" alt="Avatar" class="avatar">--}}
                            {{--                            </div>--}}

                            <form action="{{route('invoice.store')}}" method="POST">
                                @csrf
                                <div class="container d-flex flex-wrap">

{{--                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12">--}}
{{--                                    <label for="date" class="form-label"><b>Date</b></label>--}}
{{--                                    <input type="date" placeholder="Enter Date" name="date" required>--}}
{{--                                    </div>--}}

{{--                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12 justify-content-center">--}}
{{--                                    <label for="item" class="form-label"><b>Item Name</b></label>--}}
{{--                                    <input type="text" placeholder="Enter Item Name" name="item"  required>--}}
{{--    <select placeholder="Enter Item Name" name="item"  required>--}}
{{--        <option hidden></option>--}}
{{--        @foreach($store as $st)--}}
{{--        <option>{{$st->type}}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12">--}}
{{--                                    <label for="quantity" class="form-label" ><b>Quantity</b></label>--}}
{{--                                    <input  id="quantity" onkeyup = 'Total()' type="number" placeholder="Enter Quantity" name="quantity"  required>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12">--}}
{{--                                    <label for="price" class="form-label"><b>Price</b></label>--}}
{{--                                    <input id="price" onkeyup = 'Total()' type="number" placeholder="Enter Price of Item" name="price"  required>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12">--}}
{{--                                    <label for="total" class="form-label"><b>Total Price</b></label>--}}
{{--                                    <input id="total" type="number" placeholder="Total Price" name="total" readonly>--}}
{{--                                    </div>--}}
                                    <div class="col-lg-4 col-md-3 col-12 d-flex align-items-end justify-content-center">
{{--                                        <label for="random" class="form-label mb-0"><b>Invoice No. :</b></label>--}}
                                        <input id="random" type="number" name="invoiceNo" readonly style="border: none; outline: none; display: none;">
                                    </div>
                                    <div class="col-lg-4 col-md-3 col-12 d-flex align-items-end justify-content-center">
                                    <button type="submit" class="btn-login" onclick="randomNo()">Create New Invoice</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        {{--                        <div class="col-lg-4 col-md-12 col-12 justify-content-sm-center mb-2 bgForm text-center p-5" style="height: 500px;">--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>

        <section class="main-pd-wrapper" id="invoice" style=" margin: auto;">
            <div class="card  col-lg-11 col-md-11 col-12 py-2" style="
                  text-align: center;
                  margin: auto;
                  line-height: 1.5;
                  font-size: 14px;
                  color: #4a4a4a;
                ">
                <p>
                    Last Invoice Created With  Id : <span>{{$invoice->id ?? 'Invoice Not Found'}}</span>  &  Invoice No. : <span>{{$invoice->invoiceNo ?? 'Invoice Not Found'}}</span>
                </p>

            </div>
        </section>


        <div class="px-3 pt-4">
            <div class="form-content">
                <div class="row">
                    <div class="formAll col-12 d-flex flex-wrap justify-content-center">
                        <div class="card col-lg-11 col-md-11 col-12 justify-content-sm-center mb-2" style="transition: 0.3s; background-color: var(--white-color)">

                            <form action="{{route('items.store')}}" method="POST">
                                @csrf
                                <div class="container d-flex flex-wrap">

                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12">
                                        <label for="date" class="form-label"><b>Date</b></label>
                                        <input type="date" placeholder="Enter Date" name="date" required>
                                    </div>

                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12 justify-content-center">
                                        <label for="item" class="form-label"><b>Item Name</b></label>
                                        <select placeholder="Enter Item Name" name="item"  required>
                                            <option hidden></option>
                                            @foreach($store as $st)
                                            <option>{{$st->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12">
                                        <label for="quantity" class="form-label" ><b>Quantity</b></label>
                                        <input  id="quantity" onkeyup = 'Total()' type="number" placeholder="Enter Quantity" name="quantity"  required>
                                    </div>
                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12">
                                        <label for="price" class="form-label"><b>Price</b></label>
                                        <input id="price" onkeyup = 'Total()' type="number" placeholder="Enter Price of Item" name="price"  required>
                                    </div>
                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12">
                                        <label for="total" class="form-label"><b>Total Price</b></label>
                                        <input id="total" type="number" placeholder="Total Price" name="total" readonly>
                                    </div>

                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12 justify-content-center">
                                        <label for="invoid" class="form-label"><b>Invoice_id</b></label>
                                        <select name="invoice_id"  required>
                                            <option hidden></option>
                                            @foreach($invoid as $invid)
                                                <option>{{$invid->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-md-3 col-12 d-flex align-items-end justify-content-center">
                                        <button type="submit" class="btn-login">Add To Invoice</button>
                                    </div>
                                </div>

                            </form>

                           </div>

                    </div>
                </div>
            </div>
        </div>

{{--        <!-- Button trigger modal -->--}}
{{--        <div class="col-lg-11 col-md-11 d-flex justify-content-end  col-12 m-auto mb-2">--}}
{{--        <div class="col-lg-3 col-md-4 text-center col-12">--}}
{{--            <button type="submit" class="btn-outline-none border-0 bg-white" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-eye mr-1" style="color: var(--main-color)"></i>Show Invoice</button>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--        <!-- Modal -->--}}
{{--        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--            <div class="modal-dialog">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="">--}}
{{--                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>--}}
{{--                        <button type="button" class="close px-2 py-2" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                                <section class="main-pd-wrapper mt-3 mb-3" id="invoice" style="width: 450px; margin: auto;">--}}
{{--                                    <div style="--}}
{{--                                          text-align: center;--}}
{{--                                          margin: auto;--}}
{{--                                          line-height: 1.5;--}}
{{--                                          font-size: 14px;--}}
{{--                                          color: #4a4a4a;--}}
{{--                                        ">--}}
{{--                                        <img src="{{asset('assets/images/foo_logo.png')}}" >--}}

{{--                                        <p style="font-weight: bold; color: #000; margin-top: 15px; font-size: 18px;">--}}
{{--                                            Lorem Ipsum Lorem Ipsum<br>Your Invoice--}}
{{--                                        </p>--}}
{{--                                        <p style="margin: 15px auto;">--}}
{{--                                            A2, Test Street <br>--}}
{{--                                            Test Area Aga, Mansoura.--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            Id. : <span>{{$invoice->id}}</span>--}}
{{--                                        </p>--}}
{{--                                        <p>--}}
{{--                                            Invoice No. : <span>{{$invoice->invoiceNo}}</span>--}}
{{--                                        </p>--}}
{{--                                        <hr style="border: 1px dashed rgb(131, 131, 131); margin: 25px auto">--}}
{{--                                    </div>--}}
{{--                                    <table style="width: 100%; table-layout: fixed">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th style="width: 220px; padding-left: 0;">Item Name</th>--}}
{{--                                            <th>QTY</th>--}}
{{--                                            <th style="text-align: right; padding-right: 0;">Price</th>--}}
{{--                                            <th style="text-align: right; padding-right: 0;">Total</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        <tr class="invoice-items">--}}
{{--                                            <td></td> --}}{{--$item->item--}}
{{--                                            <td></td>--}}
{{--                                            <td style="text-align: right;"></td>--}}
{{--                                            <td style="text-align: right;"></td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </section>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                        <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


                <section class="main-pd-wrapper mt-3 mb-3" id="invoice" style="width: 460px; margin: auto;">
            <div style="
                  text-align: center;
                  margin: auto;
                  line-height: 1.5;
                  font-size: 14px;
                  color: #4a4a4a;
                ">
                <img src="{{asset('assets/images/foo_logo.png')}}" >

                <p style="font-weight: bold; color: #000; margin-top: 15px; font-size: 18px;">
                    Lorem Ipsum Lorem Ipsum<br>Your Invoice
                </p>
                <p style="margin: 15px auto;">
                    A2, Test Street <br>
                    Test Area Aga, Mansoura.
                </p>
                <p>
                    Id. : <span>
                        {{$invoice->id ?? 'Invoice Not Found'}}
                    </span>
                </p>
                <p>
                    Invoice No. : <span>{{$invoice->invoiceNo ?? 'Invoice Not Found'}}</span>
                </p>
                <hr style="border: 1px dashed rgb(131, 131, 131); margin: 25px auto">
            </div>
            <table style="width: 100%; table-layout: fixed">
                <thead>
                <tr>
                    <th style="width: 180px; padding-left: 0;">Item Name</th>
                    <th class="text-center">QTY</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th>
                    <th style="text-align: right; padding-right: 0;">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                <tr class="invoice-items">
                    <td>{{$item->item}}</td>
                    <td class="text-center">{{$item->quantity}}</td>
                    <td class="text-center">{{$item->price}}</td>
                    <td class="text-center">{{$item->total}}</td>

                    <td  class="d-flex justify-content-end"><a href="{{route('sales.edit',$item->id)}}" class="text-success mr-1"><i class="fa-solid fa-pen-ruler"></i></a>

                        <form action="{{route('sales.destroy',$item->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="text-danger border-0" style="background: transparent;"><i class="fa-solid fa-trash-can"></i></button>
                        </form></td>
                </tr>
                @endforeach
                </tbody>
                <tfoot style="border-top: 1px solid #d1d2d4;">
                <tr class="d-flex justify-content-between">
                    <td class="col-6" style="padding-left: 0; font-weight: bold">Total</td>
                    <td class="col-4" style="padding-left: 0;">{{$total}}</td>
                </tr>
                </tfoot>
            </table>
        </section>


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

<script>

   function Total() {
       var price = document.getElementById("price").value;
       var quantity = document.getElementById("quantity").value;
       if ( price && quantity ) {
           var total = price * quantity;
           document.getElementById("total").value = total;
       }
   }


   function randomNo() {
           // document.getElementById('invoice').style.display = "block";
           document.getElementById('random').value = Math.floor(Math.random() * 1000000);
       }

</script>
</body>
</html>


