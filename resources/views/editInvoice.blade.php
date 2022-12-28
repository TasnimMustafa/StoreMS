<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Edit_Invoice</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/assets/CSS/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/CSS/bootstrap.css')}}">
</head>
<body>

<div class="main-container d-flex">
    <div class="content">




        <div class="px-3 pt-4">
            <div class="form-content">
                <div class="row">
                    <div class="formAll col-12 d-flex flex-wrap justify-content-center">
                        <div class="card col-lg-11 col-md-11 col-12 justify-content-sm-center mb-2" style="transition: 0.3s; background-color: var(--white-color)">

                            <form action="{{route('editInvoice.update',$item->id)}}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="container d-flex flex-wrap">

                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12">
                                        <label for="date" class="form-label"><b>Date</b></label>
                                        <input type="date" placeholder="Enter Date" name="date" value="{{$item->date}}" required>

                                    </div>


                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12 justify-content-center">
                                        <label for="item" class="form-label"><b>Item Name</b></label>
                                        <select placeholder="Enter Item Name" name="item"  required>
                                            <option hidden>{{$item->item}}</option>
                                            @foreach($stor as $st)
                                            <option>{{$st->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12">
                                        <label for="quantity" class="form-label" ><b>Quantity</b></label>
                                        <input  id="quantity" onkeyup = 'Total()' type="number" placeholder="Enter Quantity" name="quantity"  required value="{{$item->quantity}}">
                                    </div>
                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12">
                                        <label for="price" class="form-label"><b>Price</b></label>
                                        <input id="price" onkeyup = 'Total()' type="number" placeholder="Enter Price of Item" name="price"  required value="{{$item->price}}">
                                    </div>
                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12">
                                        <label for="total" class="form-label"><b>Total Price</b></label>
                                        <input id="total" type="number" placeholder="Total Price" name="total" readonly value="{{$item->total}}">
                                    </div>

                                    <div class="d-flex flex-column col-lg-4 col-md-3 col-12 justify-content-center">
                                        <label for="invoid" class="form-label"><b>Invoice_id</b></label>
                                        <select name="invoice_id"  required>
                                            <option hidden>{{$item->invoice_id}}</option>
                                            @foreach($invid as $invId)
                                                <option>{{$invId->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-4 col-md-3 col-12 d-flex align-items-end justify-content-center">
                                        <button type="submit" class="btn-login">Update</button>
                                    </div>
                                </div>

                            </form>

                           </div>

                    </div>
                </div>
            </div>
        </div>


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


