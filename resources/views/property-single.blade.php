<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>property information</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png')  }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }} " rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css')  }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')  }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')  }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')  }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')  }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: EstateAgency - v4.3.0
    * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Property Search Section ======= -->
<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
        <form class="form-a">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label class="pb-2" for="Type">Keyword</label>
                        <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="Type">Type</label>
                        <select class="form-control form-select form-control-a" id="Type">
                            <option>All Type</option>
                            <option>For Rent</option>
                            <option>For Sale</option>
                            <option>Open House</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="city">City</label>
                        <select class="form-control form-select form-control-a" id="city">
                            <option>All City</option>
                            <option>Alabama</option>
                            <option>Arizona</option>
                            <option>California</option>
                            <option>Colorado</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bedrooms">Bedrooms</label>
                        <select class="form-control form-select form-control-a" id="bedrooms">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="garages">Garages</label>
                        <select class="form-control form-select form-control-a" id="garages">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="bathrooms">Bathrooms</label>
                        <select class="form-control form-select form-control-a" id="bathrooms">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group mt-3">
                        <label class="pb-2" for="price">Min Price</label>
                        <select class="form-control form-select form-control-a" id="price">
                            <option>Unlimite</option>
                            <option>$50,000</option>
                            <option>$100,000</option>
                            <option>$150,000</option>
                            <option>$200,000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-b">Search Property</button>
                </div>
            </div>
        </form>
    </div>
</div><!-- End Property Search Section -->>

<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="index.html">Estate<span class="color-b">Agency</span></a>

        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="index.html">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="about.html">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="property-grid.html">Property</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="blog-grid.html">Blog</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item active" href="property-single.html">Property Single</a>
                        <a class="dropdown-item " href="blog-single.html">Blog Single</a>
                        <a class="dropdown-item " href="agents-grid.html">Agents Grid</a>
                        <a class="dropdown-item " href="agent-single.html">Agent Single</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact.html">Contact</a>
                </li>
            </ul>
        </div>

        <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01">
            <i class="bi bi-search"></i>
        </button>

    </div>
</nav><!-- End Header/Navbar -->

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"> {{ $property->id }} : Property ID</h1>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="property-grid.html">Properties</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Property ID :{{ $property->id }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="property-single-carousel" class="swiper-container">
                        <div class="swiper-wrapper">
                            {{--@foreach($property->Secondary_photos as $a)
                                <div class="carousel-item-b swiper-slide">
                                    <img src="{{ asset('assets/img/'.a) }}" height="500px" alt="">
                                </div>
                            @endforeach--}}
                        </div>
                    </div>
                    <div class="property-single-carousel-pagination carousel-pagination"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">

                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-4">
                            <div class="property-price d-flex justify-content-center foo">
                                <div class="card-header-c d-flex">
                                    <div class="card-box-ico">
                                        <span class="bi bi-cash">$</span>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h5 class="title-c">{{ $property->price }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d section-t4">
                                            <h3 class="title-d">Quick Summary</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        <li class="d-flex justify-content-between">
                                            <strong>Property ID:</strong>
                                            <span>{{ $property->id }} </span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>City:</strong>
                                            <span>{{ $property->get_city->name }} </span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Town:</strong>
                                            <span>{{ $property->get_town->name }} </span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Property Type:</strong>
                                            <span>{{ $property->type }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Status:</strong>
                                            @if( $property->for_sale)
                                                <span>sale</span>
                                            @else
                                                <span>rent @if( $property->duration_of_rent !=null)
                                                        {{   $property->duration_of_rent }} month
                                                    @endif
                                                </span>
                                            @endif
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Area:</strong>
                                            <span>{{ $property->area }}m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        @if( $property->number_of_rooms !=null)
                                            <li class="d-flex justify-content-between">
                                                <strong>Room:</strong>
                                                <span>{{ $property->number_of_rooms }} </span>
                                            </li>
                                        @endif

                                        @if( $property->number_of_bathrooms !=null)
                                            <li class="d-flex justify-content-between">
                                                <strong>Bath:</strong>
                                                <span>{{ $property->number_of_bathrooms }} </span>
                                            </li>
                                        @endif

                                        <li class="d-flex justify-content-between">
                                            <strong>floor:</strong>
                                            <span>{{ $property-> floor_number}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>number floor:</strong>
                                            <span>{{ $property->number_of_floors }}</span>
                                        </li>
                                        @if( $property->dimension_of_the_city !=null )
                                            <li class="d-flex justify-content-between">
                                                <strong>The city is far away :</strong>
                                                <span>{{ $property->dimension_of_the_city }}</span>
                                            </li>
                                        @endif
                                        @if( $property->dimension_of_the_school !=null )
                                            <li class="d-flex justify-content-between">
                                                <strong>The school is far away :</strong>
                                                <span>{{ $property->dimension_of_the_school }}</span>
                                            </li>
                                        @endif
                                        @if( $property->dimension_of_the_market !=null )
                                            <li class="d-flex justify-content-between ">
                                                <strong>The market is far away :</strong>
                                                <span>{{ $property->dimension_of_the_market }}</span>
                                            </li>
                                        @endif
                                        <li class="d-flex justify-content-between">
                                            <strong>Announcement date :</strong>
                                            <span>{{ $property->created_at }}</span>
                                        </li>
                                        @if( $property->updated_at !=null )
                                            <li class="d-flex justify-content-between">
                                                <strong>update date :</strong>
                                                <span>{{ $property->updated_at }}</span>
                                            </li>
                                        @endif
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 section-md-t3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Property Description</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <p class="description color-text-a">
                                    {{ $property->owner_description }}
                                </p>
                                <p class="description color-text-a no-margin">

                                </p>
                            </div>
                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Amenities</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="amenities-list color-text-a">
                                <ul class="list-a no-margin">
                                    @if( $property->furnished )
                                        <li>furnished</li>
                                    @endif
                                    @if($property->phone_subscription)
                                        <li>phone_subscription</li>
                                    @endif
                                    @if($property->net_subscription)
                                        <li>net_subscription</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row section-t3">
                        <div class="col-sm-12">
                            <div class="title-box-d">
                                <h3 class="title-d">Seller information</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <img src="{{   asset('assets/img/agent-4.jpg')   }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="property-agent">
                                <h3 class="title-agent">name</h3>
                                <ul class="list-unstyled">

                                    <li class="d-flex justify-content-between">
                                        <strong>Mobile:</strong>
                                        <span class="color-text-a"></span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Email:</strong>
                                        <span class="color-text-a">annabella@example.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Property Single-->

</main><!-- End #main -->

<!-- ======= Footer ======= -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="nav-footer">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Property</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Blog</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="socials-a">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="bi bi-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="bi bi-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="   {{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}  "></script>
<script src="   {{ asset('assets/vendor/php-email-form/validate.js')}}   "></script>
<script src="  {{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}  "></script>

<!-- Template Main JS File -->
<script src="  {{ asset('/js/main.js')}}  "></script>

</body>

</html>
