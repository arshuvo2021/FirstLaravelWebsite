@extends('layout.app')
@section('title','home')@section('content')

@section('content')

<div class="container-fluid parallax mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 topDiv text-center">
            <h1 class="text-white">Web Developer</h1>
            <h3 class="text-white">Front & Backend</h3>
            <button class="btn btn-primary">Learn More</button>
        </div>
    </div>
</div>

<div class="container text-center mt-5 ">

    <h2>My Services<h2><br><br>

            <div class="row">

                <div class="col-md-4 p-1">

                    <div class="card" style="width:100%">

                        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">Service Name</h5>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-1">

                    <div class="card" style="width:100%">

                        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">Service Name</h5>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-1">

                    <div class="card" style="width:100%">

                        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">Service Name</h5>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>

                        </div>
                    </div>
                </div>



            </div>
</div>



<div class="container text-center mt-5 mb-5">

    <h2>Recent Project<h2><br><br>

            <div class="row">

                <div class="col-md-4 p-1">

                    <div class="card" style="width:100%">

                        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">Project Name</h5>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <button class="btn btn-primary">Learn More</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-1">

                    <div class="card" style="width:100%">

                        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">Project Name</h5>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <button class="btn btn-primary">Learn More</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-1">

                    <div class="card" style="width:100%">

                        <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">

                        <div class="card-body">

                            <h5 class="card-title">Project Name</h5>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <button class="btn btn-primary">Learn More</button>

                        </div>
                    </div>
                </div>



            </div>
</div>



<div class="container text-center mt-5 mb-5">
<h2> Contact with Us<h2><br><br>
    <div class="row">

        <div class="col md-6">
            <form>
                <div class="mb-3 form-check">
                    <label for="Name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="Name">
                </div>
                <div class="mb-3 form-check">
                    <label for="Name" class="form-label">Your Mobile Number</label>
                    <input type="text" class="form-control" id="Name">
                </div>
                <div class="mb-3 form-check">
                    <label for="Name" class="form-label">Your Email</label>
                    <input type="Email" class="form-control" id="Name">
                </div>
                <div class="mb-3 form-check">
                    <label for="Name" class="form-label">Your Messege</label>
                    <input type="text" class="form-control" id="Name">
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary " type="button">Button</button>
                </div>
            </form>



        </div>
        <div class="col md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.4427779717353!2d90.35672711481561!3d23.767242184581157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a10d14c16f%3A0xe3e75cb5098d83d!2sSuchona%20Community%20Center!5e0!3m2!1sen!2sbd!4v1661201240773!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


        </div>


    </div>

</div>





@endsection
