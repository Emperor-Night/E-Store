<div id="demo" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset("storage/images/slider/slider1.jpg") }}" alt="slider1" class="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="{{ asset("storage/images/slider/slider2.jpg") }}" alt="slider2" class="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="{{ asset("storage/images/slider/slider3.jpg") }}" alt="slider3" class="img-fluid">
        </div>
    </div>

    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>