<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | ShowInvoice</title>
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
    <div class="content">
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
                    Id. : {{$id}}<span></span>
                </p>
                <p>
                    Invoice No. : {{$invNo}}<span></span>
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
                    <th style="text-align: right;">Actions</th>
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


