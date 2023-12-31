@extends('client.app')
@section('header')
   <style>
       .form-control option {
           font-size: 16px; /* Đặt kích thước font chữ theo mong muốn */
       }
   </style>
@endsection
@section('content')
 <!--Mask-->
 <div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <form action="{{ route('found.flight.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="form-checkbox">
                                <label for="one-way">
                                    <input type="radio" id="one-way" value="1" name="flight_type" checked>
                                    <span></span>One way
                                </label>
                                <label for="round-trip">
                                    <input type="radio" id="round-trip" value="2" name="flight_type">
                                    <span></span>Round trip
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="form-label">Place Start:</label>
                                    <select class="form-control" style="height: 50px"
                                            aria-label="Default select example" name="place_start">
                                        <option value="" hidden></option>
                                        @foreach(\App\Models\FlightRoute::$place as $place)
                                            @php
                                                $arrString = explode('-', $place);
                                                $result = $arrString[1] . '-' . $arrString[2];
                                            @endphp
                                            <option value="{{ $place }}">{{ $result }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" id="place_end">
                                    <label for="" class="form-label">Place End:</label>
                                    <select class="form-control" style="height: 50px"
                                            aria-label="Default select example" name="place_end">
                                        <option value="" hidden></option>
                                        @foreach(\App\Models\FlightRoute::$place as $place)
                                            @php
                                                $arrString = explode('-', $place);
                                                $result = $arrString[1] . '-' . $arrString[2];
                                            @endphp
                                            <option value="{{ $place }}">{{ $result }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="form-label">Departing</span>
                                    <input class="form-control" type="date" name="departing">
                                </div>
                            </div>
                            <div class="col-md-4 d-none" id="returning">
                                <div class="form-group">
                                    <span class="form-label">Returning</span>
                                    <input class="form-control" type="date" name="returning">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <span class="form-label">Adults (12+)</span>
                                    <select class="form-control" style="height: 50px" name="adults">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <span class="form-label">Children (0-12)</span>
                                    <select class="form-control" style="height: 50px" name="children">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
{{--                            <div class="col-md-3">--}}
{{--                                <div class="form-group">--}}
{{--                                    <span class="form-label">Travel class</span>--}}
{{--                                    <select class="form-control" style="height: 50px" name="travel_class">--}}
{{--                                        <option value="1">Economy Class</option>--}}
{{--                                        <option value="2">Business Class</option>--}}
{{--                                    </select>--}}
{{--                                    <span class="select-arrow"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="col-md-3 justify-content-center">
                                <div class="form-btn">
                                    <button class="submit-btn">Show flights</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.Mask-->
</header>
<div class="container">

    <!--Section: Best Features-->
    <section id="best-features" class="text-center">

        <!-- Heading -->
        <h2 class="mb-5 font-weight-bold">Best Features</h2>

        <!--Grid row-->
        <div class="row d-flex justify-content-center mb-4">

            <!--Grid column-->
            <div class="col-md-8">

                <!-- Description -->
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptate
                    hic
                    provident nulla repellat
                    facere esse molestiae ipsa labore porro minima quam quaerat rem, natus repudiandae debitis
                    est
                    sit pariatur.</p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-4 mb-5">
                <i class="fa fa-camera-retro fa-4x orange-text"></i>
                <h4 class="my-4 font-weight-bold">Experience</h4>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                    maiores nam,
                    aperiam minima
                    assumenda deleniti hic.</p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-1">
                <i class="fa fa-heart fa-4x orange-text"></i>
                <h4 class="my-4 font-weight-bold">Happiness</h4>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                    maiores nam,
                    aperiam minima
                    assumenda deleniti hic.</p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-1">
                <i class="fa fa-bicycle fa-4x orange-text"></i>
                <h4 class="my-4 font-weight-bold">Adventure</h4>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                    maiores nam,
                    aperiam minima
                    assumenda deleniti hic.</p>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Section: Best Features-->

    <hr class="my-5">

    <!--Section: Examples-->
    <section id="examples" class="text-center">

        <!-- Heading -->
        <h2 class="mb-5 font-weight-bold">Stunning Examples</h2>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid"
                        alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>

                <h4 class="my-4 font-weight-bold">Heading</h4>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                    maiores nam,
                    aperiam minima
                    assumenda deleniti hic.</p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" class="img-fluid"
                        alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>

                <h4 class="my-4 font-weight-bold">Heading</h4>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                    maiores nam,
                    aperiam minima
                    assumenda deleniti hic.</p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/29.jpg" class="img-fluid"
                        alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>

                <h4 class="my-4 font-weight-bold">Heading</h4>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                    maiores nam,
                    aperiam minima
                    assumenda deleniti hic.</p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/10.jpg" class="img-fluid"
                        alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>

                <h4 class="my-4 font-weight-bold">Heading</h4>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                    maiores nam,
                    aperiam minima
                    assumenda deleniti hic.</p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/11.jpg" class="img-fluid"
                        alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>

                <h4 class="my-4 font-weight-bold">Heading</h4>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                    maiores nam,
                    aperiam minima
                    assumenda deleniti hic.</p>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/13.jpg" class="img-fluid"
                        alt="">
                    <div class="mask rgba-white-slight"></div>
                </div>

                <h4 class="my-4 font-weight-bold">Heading</h4>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                    maiores nam,
                    aperiam minima
                    assumenda deleniti hic.</p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Section: Examples-->

    <hr class="my-5">

    <!--Section: Gallery-->
    <section id="gallery">

        <!-- Heading -->
        <h2 class="mb-5 font-weight-bold text-center">Gallery heading</h2>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!--Carousel Wrapper-->
                <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade"
                    data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner z-depth-1-half" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
                                alt="First slide">
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
                                alt="Second slide">
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                                alt="Third slide">
                        </div>
                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">

                <!--Excerpt-->
                <a href="" class="teal-text">
                    <h6 class="pb-1"><i class="fa fa-heart"></i><strong> Lifestyle </strong></h6>
                </a>
                <h4 class="mb-3"><strong>This is title of the news</strong></h4>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                    quod maxime
                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut
                    officiis
                    debitis aut rerum.</p>

                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
                    quod maxime
                    placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut
                    officiis
                    debitis aut rerum.</p>
                <p>by <a><strong>Jessica Clark</strong></a>, 26/08/2016</p>
                <a class="btn btn-primary btn-md">Read more</a>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Section: Gallery-->

    <hr class="my-5">

    <!--Section: Contact-->
    <section id="contact">

        <!-- Heading -->
        <h2 class="mb-5 font-weight-bold text-center">Contact us</h2>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-5 col-md-12">
                <!-- Form contact -->
                <form class="p-5 grey-text">
                    <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
                        <input type="text" id="form3" class="form-control form-control-sm">
                        <label for="form3">Your name</label>
                    </div>
                    <div class="md-form form-sm"> <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form2" class="form-control form-control-sm">
                        <label for="form2">Your email</label>
                    </div>
                    <div class="md-form form-sm"> <i class="fa fa-tag prefix"></i>
                        <input type="text" id="form32" class="form-control form-control-sm">
                        <label for="form34">Subject</label>
                    </div>
                    <div class="md-form form-sm"> <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4"></textarea>
                        <label for="form8">Your message</label>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-primary">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                    </div>
                </form>
                <!-- Form contact -->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-7 col-md-12">

                <!--Grid row-->
                <div class="row text-center">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-3">

                        <p><i class="fa fa-map fa-1x mr-2 grey-text"></i>Hà nội</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <p><i class="fa fa-building fa-1x mr-2 grey-text"></i>Mon - Fri, 8:00-22:00</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-3">

                        <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>+ 01 234 567 89</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Google map-->
                <div id="map-container" class="z-depth-1-half map-container mb-5" style="height: 400px">
                </div>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Section: Contact-->

</div>
    <script>
        const inputRadioRound = document.querySelector('#round-trip');
        const inputRadioOn = document.querySelector('#one-way');
        const idPlace = document.querySelector('#returning');
        inputRadioRound.addEventListener('click', function() {
           if(this.checked) {
               idPlace.classList.remove('d-none');
           } else {
               idPlace.classList.add('d-none');
           }
        });
        inputRadioOn.addEventListener('click', function() {
            if(this.checked) {
                idPlace.classList.add('d-none');
            } else {
                idPlace.classList.remove('d-none');
            }
        });
    </script>
@endsection
@section('footer')
    {!! JsValidator::formRequest('App\Http\Requests\FoundFlightRequest') !!}
@endsection
