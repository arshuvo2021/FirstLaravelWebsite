@extends('layout.app')
@section('title','service')

@section('content')


<div class="container-fluid bg-dark">
    <div class="row p-5">
        <div class="col-md-12 text-center text-white">
            <h4>My Services</h4>

        </div>
    </div>

</div>

<div class="container mt-5">
    <div class="row">

        <div class="col md-4 ">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>

                </div>
            </div>


        </div>
        <div class="col md-4 ">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>

                </div>
            </div>


        </div>
        <div class="col md-4 ">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Service Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>

                </div>
            </div>


        </div>



    </div>

</div>


<div class="container mt-5 mb-5">
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
            <h5>Address</h5>
            <p>Atwary, Panchagarh </p>
            <p> 01747543632</p>
            <p>arshuvo2021@gmail.com</p><br>

            <<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d483.57058830905635!2d90.35861663578706!3d23.767390984095876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a10d14c16f%3A0xe3e75cb5098d83d!2sSuchona%20Community%20Center!5e0!3m2!1sen!2sbd!4v1663332908651!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



        </div>
        



    </div>

</div>

@endsection


