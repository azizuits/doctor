<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .marg{
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .marg h2{
                font-weight: bold;
                font-size: 2 em;
                padding: 10 20 10 20;

            }
/*
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }


            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
             */
     /*
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

      */
            /*

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            */

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{--@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif--}}
            <!-- navbar start bootstrap -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">FACEMART</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Percel Booking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Branch</a>
                            </li>

                        </ul>
                        @if (Route::has('login'))
                            <div class="form-inline my-2 my-lg-0">
                                @auth
                                    <a class="btn btn-outline-success my-2 my-sm-0" href="{{ url('/home') }}">Home</a>
                                @else
                                    <a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                       {{-- <form class="form-inline my-2 my-lg-0">

                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Register</button>
                        </form>--}}
                    </div>
                </nav>
                <!--navbar bootstrap finish -->
                </div>
      <!--
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
            -->
        <!-- slideshow start -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://fmcourier.com/wp-content/uploads/2020/07/Untitled-10.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://fmcourier.com/wp-content/uploads/2020/04/facemart2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://fmcourier.com/wp-content/uploads/2020/07/Untitled-15.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--slideshow finish -->
        <!-- SERVICE STARTED -->

        <div class="container">
            <div class="marg">
         <center><h2>Services</h2></center>
        <br>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">COD</h5>
                            <p class="card-text"> সারা বাংলাদেশে ক্যাশ অন ডেলিভারি তে কন্ডিশনের টাকার উপর মাত্র ১% চার্জ নেওয়া হয়।</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">ট্রাকিং</h5>
                            <p class="card-text">আপনার ফোল্ডারটি কোন অবস্থায় আছে সেটা আপনি ট্র্যাকিংয়ের মাধ্যমে দেখতে পারবেন।</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">পেমেন্ট</h5>
                            <p class="card-text">  মাত্র 6 থেকে 12 ঘন্টার ভিতরে আমরা আপনার পেমেন্ট টি আপনার একাউন্টে অ্যাকাউন্ট  নাম্বার অথবা অন্য কোন মোবাইল ব্যাংকিং যেমন বিকাশ, রকেট, নগদ ইত্যাদি তে পৌঁছে দি। </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">হোম ডেলিভারি সার্ভিস</h5>
                            <p class="card-text"> ঢাকা চট্টগ্রাম সিলেট ও বরিশাল বিভাগের   নির্দিষ্ট অঞ্চলে আমাদের দক্ষ কর্মীরা আপনার প্রোডাক্ট হোম ডেলিভারি দিবে।  অন্যান্য অঞ্চলের সকলে আমাদের অফিস থেকে আপনাদের প্রোডাক্ট সংগ্রহ করবেন</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">মুভিং প্রোটেকশন</h5>
                            <p class="card-text">আপনার প্রোডাক্ট হাতে পাওয়ার পরে এটা যথাযথভাবে প্যাকিং করা, যত্নের সাথে গাড়িতে তোলা, এবং যত্ন সহকারে আপনার হাতে পৌঁছে দেওয়া আমাদের অঙ্গীকার আর আমরা এটা দুঃখের সাথে পালন করছি।</p>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">দ্রুত ডেলিভারি</h5>
                            <p class="card-text">আমাদের রয়েছে অসংখ্য দক্ষ কর্মী যা আপনার প্রডাক্ট খুব দ্রুত আপনার কাছে পৌছে দিতে সাহায্য করবে।  আমাদের বিভিন্ন ধরনের প্যাকেজ রয়েছে যেটা প্যাকেজের ধরণ অনুযায়ী নির্দিষ্ট সময় আপনার কাছে পৌঁছে দিবে।  এবং মাঝে মাঝে আপনার খুব এমারজেন্সি পার্সেল আমরা প্রয়োজনে বিমানের পৌঁছে দিব।</p>

                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!--end our services -->
            <div class="marg">
                <center><h2>কেন আমরা সেরা</h2></center>
                <div class="row">
                    <div class="col">
                        <img src="https://fmcourier.com/wp-content/uploads/2020/07/a.png" alt="">
                    </div>
                    <div class="col">

                        <div class="card" style="width: 27rem;">

                            <div class="card-body">

                                <p class="card-text">কেন আমরা সেরা এবং আমাদের সার্ভিস বা বৈশিষ্ট্য:-
                                    ১) পার্সেল ডেলিভারির সাথে সাথে কন্ডিশনের টাকা পেয়ে যাবেন। ২) স্বাভাবিক পরিস্থিতিতে সকাল ১০টার পূর্বে পার্সেল বুকিং দিলে বাংলাদেশের যেকোনো প্রান্ত থেকে ঢাকায় দিনে দিনে পার্সেল ডেলিভারি দেওয়া হবে। ৩) সিটি শহরে সকাল ১১টার পূর্বে বুকিং হলে দিনে দিনে পার্সেল ডেলিভারি দেওয়া হবে। ৪) বাংলাদেশের প্রায়ই প্রতিটি গুরুত্বপূর্ণ শহরে পর্যাপ্ত এজেন্ট পয়েন্ট আছে।
                                    ৫) মার্চেন্টদের পার্সেল অফিস/বাসা থেকে পিকআপ করা হয়। ৬) সুদক্ষ কর্মী দ্বারা গ্রাহক সেবা প্রদান। ৭) জীবন রক্ষাকারী ঔষধ সহ সকল গুরুত্বপূর্ণ পার্সেল দ্রুত সময়ে গন্তব্যে পৌঁছানোর জন্য রয়েছে বিশেষ সার্ভিস। ৮)আমাদের কাস্টমার সার্ভিস কল সেন্টার ২৪ ঘন্টা খোলা ও নিজস্ব কল সেন্টারের মাধ্যমে সর্বাধুনিক গ্রাহক সেবা।
                                </p>
                                <a href="#" class="btn btn-primary">READ MORE</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <!--end of one image one writing section-->
            <!-- start tracking -->
           <div class="marg">

           <center><h2>Tracking</h2></center>
            <div class="row">

                <div class="col">
                    <nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Track</button>
                        </form>
                    </nav>
                </div>
                <div class="col">
                    <img src="" alt="">
                </div>
            </div>
           </div>
            <!--end of tracking -->

            <!--start our story -->
            <div class="marg">
            
            <center><h2>Our Story</h2></center>
            <div class="row">
                <div class="col">
                    <img src="https://fmcourier.com/wp-content/uploads/2016/12/service_single_man2.png" alt="">
                </div>
                <div class="col">নভেম্বর ২০১৯ সাল থেকে আমরা আমাদের কাজে গর্বিত হয়েছি এবং আমরা বিশ্বাস করি আমরা যা করি তা আপনার জিনিসগুলি সরানোর বিষয় নয়। এটি আপনার জীবনকে বদলে দেওয়ার বিষয়।
                    Facemart Courier Ltd
                    এটি একটি সর্বাধুনিক দ্রুত নিরাপদ ও অনলাইন কুরিয়ার পরিষেবা! শ্রম মেধা ও অভিজ্ঞতা দিয়ে যুগের সাথে তাল মিলিয়ে সম্মানিত গ্রাহককে যুগোপযোগী সেবা দানের মাধ্যমে গ্রাহক সন্তুষ্টি করন, ও প্রতিযোগিতামূলক বাজারে Facemart Courier Ltd এর স্বমহিমায় যেন প্রতিষ্ঠানের পরিষেবা আরো দৃঢ় বা বড় পরিসরে করতে পারে,সেজন্য সকল ব্যবসায়ী গনের মূল্যবান মালামাল যৌক্তিক চার্জের বিনিময়ে উত্তম সেবা প্রদান করা ও এই সেবা কে সর্বস্তরের গণমানুষের কাছে পৌঁছে দেওয়ার জন্য দ্রুত সেবার নিশ্চয়তায় আমরা বদ্ধপরিকর ও সম্পন্ন গ্রাহকবান্ধব পরিষেবা ভিত্তিক কুরিয়ার তৈরি করা! যার প্রাথমিক অগ্রাধিকার হলো গ্রাহকের চাহিদা এবং প্রত্যাশা পূরণ করা! আশা করছি আগামীতে সকলে আস্তা ভালোবাসা ও সার্বিক সহযোগিতায় আমাদের পরিষেবা অব্যাহত থাকবে</div>
            </div>

            </div>
            <!-- end our story -->

            <!--start our member -->

            <div class="marg">
            <center><h2>Our Member</h2></center>
            <div class="row">
                <div class="col"><div class="card" style="width: 15rem;">
                        <img src="https://fmcourier.com/wp-content/uploads/2016/12/jewl.jpg" class="rounded-circle card-img-top" alt="...">
                        <div class="card-body">
                            <center>
                            <h5 class="card-title">Md X</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Post Name</h6>
                            <a href="#" class="btn btn-primary">Read More</a>
                            </center>
                        </div>
                    </div></div>
                <div class="col"><div class="card" style="width: 15rem;">
                        <img src="https://fmcourier.com/wp-content/uploads/2016/12/jewl.jpg" class="rounded-circle card-img-top" alt="...">
                        <div class="card-body">
                            <center>
                            <h5 class="card-title">Md X</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Post Name</h6>
                            <a href="#" class="btn btn-primary">Read More</a>
                            </center>
                        </div>
                    </div></div>
                <div class="col"><div class="card" style="width: 15rem;">
                        <img src="https://fmcourier.com/wp-content/uploads/2016/12/jewl.jpg" class="rounded-circle card-img-top" alt="...">
                        <div class="card-body">
                            <center>
                            <h5 class="card-title">Md X</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Post Name</h6>
                            <a href="#" class="btn btn-primary">Read More</a>
                            </center>
                        </div>
                    </div></div>

                <div class="col"><div class="card" style="width: 15rem;">
                        <img src="https://fmcourier.com/wp-content/uploads/2016/12/jewl.jpg" class="rounded-circle card-img-top" alt="...">
                        <div class="card-body">
                            <center>
                            <h5 class="card-title">Md X</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Post Name</h6>
                            <a href="#" class="btn btn-primary">Read More</a>
                            </center>
                        </div>
                    </div></div>


            </div>

            </div>
            <!-- end our member -->
            <!-- start news -->
            <div class="marg">
            <center><h2>Blog</h2></center>
            <div class="row">
                <div class="col"><div class="card" style="width: 20rem;">
                        <img src="https://fmcourier.com/wp-content/uploads/2020/06/20200609_001206_0000.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">উদ্যোক্তাদের জন্য সু-খবর</h5>
                            <p class="card-text">আপনি কি উদ্যোত্তা/ব্যবসায়ী? আপনার কি রেগুলার পণ্য/পার্চেল কুরিয়ারে ডেলিভারি করতে হয়? আপনার জন্য বিশাল সু-খবর… বর্তমান সময়ের জন্য  Facemart নিঃসন্দেহে সেরা একটি কুরিয়ার সার্ভিস প্রতিস্টান। আমরা খুব দ্রুত,অধিক নিরাপত্তায় ও</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div></div>
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <img src="https://fmcourier.com/wp-content/uploads/2020/06/20200609_001206_0000.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">উদ্যোক্তাদের জন্য সু-খবর</h5>
                            <p class="card-text">আপনি কি উদ্যোত্তা/ব্যবসায়ী? আপনার কি রেগুলার পণ্য/পার্চেল কুরিয়ারে ডেলিভারি করতে হয়? আপনার জন্য বিশাল সু-খবর… বর্তমান সময়ের জন্য  Facemart নিঃসন্দেহে সেরা একটি কুরিয়ার সার্ভিস প্রতিস্টান। আমরা খুব দ্রুত,অধিক নিরাপত্তায় ও</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <img src="https://fmcourier.com/wp-content/uploads/2020/06/20200609_001206_0000.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">উদ্যোক্তাদের জন্য সু-খবর</h5>
                            <p class="card-text">আপনি কি উদ্যোত্তা/ব্যবসায়ী? আপনার কি রেগুলার পণ্য/পার্চেল কুরিয়ারে ডেলিভারি করতে হয়? আপনার জন্য বিশাল সু-খবর… বর্তমান সময়ের জন্য  Facemart নিঃসন্দেহে সেরা একটি কুরিয়ার সার্ভিস প্রতিস্টান। আমরা খুব দ্রুত,অধিক নিরাপত্তায় ও</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!--end blog -->
        </div>
        <div class="alert alert-secondary" role="alert">
            All right reserved by Facemart & Tentech
        </div>
    <!-- bootstrap javascript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
