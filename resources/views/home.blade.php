@extends('layouts.main')
@section('content')
    <div class="container mt-5 mb-3">
        <div class="intro">
            <h2 class="text-center">OUR VALUES</h2>
        </div>
        <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-bg-danger mb-3">
                        <div class="card-body text-center">
                                <img src="img/lightbulb-o.png" class="img-fluid" alt="..." style="width: initial">
                                <h4 class="card-title">Innovative</h4>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe excepturi dolorum aspernatur earum doloremque quia aliquid? Saepe aut, eos assumenda quos mollitia ratione earum cumque odio vero veniam qui beatae?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card text-bg-success mb-3">
                        <div class="card-body text-center">
                                <img src="img/bank.png" class="img-fluid" alt="..." style="width: initial">
                                <h4 class="card-title">Loyalty</h4>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe excepturi dolorum aspernatur earum doloremque quia aliquid? Saepe aut, eos assumenda quos mollitia ratione earum cumque odio vero veniam qui beatae?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card text-bg-info mb-3 text-white">
                        <div class="card-body text-center">
                                <img src="img/balance-scale.png" class="img-fluid" alt="..." style="width: initial">
                                <h4 class="card-title">Respect</h4>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe excepturi dolorum aspernatur earum doloremque quia aliquid? Saepe aut, eos assumenda quos mollitia ratione earum cumque odio vero veniam qui beatae?</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <section class="mt-5 mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>
    
        <div class="row justify-content-center" style="">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
                <!--Grid column-->
                <div class="col-md-10 mb-md-0 mb-5">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <form id="contact-form" name="contact-form" action="FormController.php" method="POST">
        
                        <!--Grid row-->
                        <div class="row">
        
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderrror" id="name" value="{{old('name')}}">
                                    <label for="name" class="">Your name</label>
                                    @error('name')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderrror
                                </div>
                            </div>
                            <!--Grid column-->
        
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                                    <label for="email" class="">Your email</label>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!--Grid column-->
        
                        </div>
                        <!--Grid row-->
        
                        <!--Grid row-->
                        <div class="row">
        
                            <!--Grid column-->
                            <div class="col-md-12">
        
                                <div class="md-form">
                                    <input type="text" id="message" name="message" rows="2" class="form-control md-textarea @error('message') is-invalid @enderror" value="{{old('message')}}">
                                    <label for="message">Your message</label>
                                    @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
        
                            </div>
                        </div>
                        <!--Grid row-->
        
                    </form>
        
                    <div class="text-center text-md-auto">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Submit</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->
            </div>
        </div>
    
@endsection