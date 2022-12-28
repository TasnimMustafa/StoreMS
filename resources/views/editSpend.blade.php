<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Form1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/assets/CSS/style.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/CSS/bootstrap.css')}}">
</head>
<body>

<div class="form-container px-3 pt-4">
    <div class="form-content">
        <div class="row">
            <div class="formAll col-12 d-flex flex-wrap justify-content-center">
                <div class="col-lg-4 col-md-12 col-12 justify-content-sm-center mb-2" style="transition: 0.3s; background-color: var(--white-color)">
                    <div class="imgcontainer">
                        <img src="{{asset('assets/images/foo_logo.png')}}" alt="Avatar" class="avatar">
                    </div>
    <form action="{{route('spends.update',$spend->id)}}" method="POST">
        @method('PUT')
        @csrf

        <label for="type" class="form-label"><b>Type</b></label>
        <input type="text" placeholder="Enter Type" name="type" value="{{$spend->type}}" required>

        <label for="date" class="form-label"><b>Date</b></label>
        <input type="date" placeholder="Enter Date" name="date" value="{{$spend->date}}" required>

        <label for="cost" class="form-label"><b>Cost</b></label>
        <input type="number" placeholder="Enter Cost" name="cost" value="{{$spend->cost}}" required>

        <button type="submit" class="btn-login">Update</button>

    </form>
                </div>
                <div class="col-lg-4 col-md-12 col-12 justify-content-sm-center mb-2 bgForm text-center p-5" style="height: 500px;">
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
