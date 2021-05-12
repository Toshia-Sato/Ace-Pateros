<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ACE PATEROS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/side.js') }}" defer></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="resources/style.css">
</head>
<body>

    <script>
        $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

        });
    </script>

    <div id="app">
        <div class="wrapper">
            <nav id="sidebar">
            <div class="sidebar-header">
                    
                        <a class="nav-link link-light text-white pl-0 text-justify"></a>
                        <div class="logo-image">
                            <img src="/img/logo.jpg" class=" rounded-circle img-thumbnail" style="width: 200px;" alt="">
                        </div>
                    
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="/">HOME</a>
                </li>
                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">OUR SERVICES</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="/services/promo-packages">PROMO PACKAGES</a>
                        </li>
                        <li>
                            <a href="/services/ancillary-services">ANCILLARY SERVICES</a>
                        </li>
                        <li>
                            <a href="/services/nursing-services">NURSING SERVICES</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#physicianSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">OUR PHYSICIANS</a>
                    <ul class="collapse list-unstyled" id="physicianSubmenu">
                        <li>
                            <a href="/physicians/dental">DENTAL</a>
                        </li>
                        <li>
                            <a href="/physicians/ent">ENT</a>
                        </li>
                        <li>
                            <a href="/physicians/internal-medicine">INTERNAL MEDICINE</a>
                        </li>
                        <li>
                            <a href="/physicians/ophthalmology">OPHTHALMOLOGY</a>
                        </li>
                        <li>
                            <a href="/physicians/pediatric">PEDIATRIC</a>
                        </li>
                        <li>
                            <a href="/physicians/surgery-doctors">SURGERY DOCTORS</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="accredited-hmos">ACCREDITED HMOs</a>
                </li>
                <li>
                    <a href="floor-directory">FLOOR DIRECTORY</a>
                </li>
                <li>
                    <a href="careers">CAREERS</a>
                </li>
                <li>
                    <a ></a>
                </li>
                <li>
                    <a href="about-us">ABOUT US</a>
                </li>
                <li>
                    <a href="contact-us">CONTACT US</a>
                </li>
                <li>
                    <a href="faqs">FAQS</a>
                </li>
                <li>
                    <a href="#"></a>
                </li>

                <div class="nav-brand text-center d-flex">
                
                <li class="d-flex text-center">
                         <div class="logo-image ml-2">
                            <a href="https://www.facebook.com/acemedicalcenterpateros" target="_blank">
                            <img src="/img/logo.jpg" class="center rounded-circle img-thumbnail" style="width: 50px;">
                            </a>
                        </div>
                        <div class="logo-image">
                            <a href="https://www.facebook.com/acemedicalcenterpateros" target="_blank">
                            <img src="/img/logo.jpg" class="center rounded-circle img-thumbnail" style="width: 50px;">
                            </a>
                        </div>
                        <div class="logo-image">
                            <a href="https://www.facebook.com/acemedicalcenterpateros" target="_blank">
                            <img src="/img/logo.jpg" class="center rounded-circle img-thumbnail" style="width: 50px;">
                            </a>
                        </div>
                </li>
                </div>
                <li>
                    <a href="#"></a>
                </li>
                <li class="text-center">
                    <a href="#">@ ALL RIGHTS RESERVED 2021</a>
                </li>

            </ul>
            </nav>

            <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn">
                        <i class="fas fa-align-left"></i>

            </button>

        </div>
        </div>

        
                    </nav>
                    <div class="container">
                    <main class="py-4">
                    @yield('content')
                </main>
                    </div>
                </div>
                </div>
 
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
