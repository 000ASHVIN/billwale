<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BillWale</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.min.css') }}"> --}}
    <style>
        .inner-content h3 {
            /* font-size: 42px; */
            color: #fff;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div>
        <nav class="bg-header navbar navbar-expand-lg navbar-light">
            <div class="container-fluid"><a href="#home" class="navbar-brand"><img src="{{ asset('assets/images/home/billwale.png') }}"
                        alt=""></a><button aria-controls="responsive-navbar-nav" type="button"
                    aria-label="Toggle navigation" class="navbar-toggler collapsed"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="navbar-collapse collapse" id="responsive-navbar-nav" style="">
                    <div class="ml-auto navbar-nav">
                        <a href="#home" data-rb-event-key="#home" class="nav-link">Home</a>
                        <a href="#about" data-rb-event-key="#about" class="nav-link active">About</a>
                        <a href="#work" data-rb-event-key="#work" class="nav-link">How We Work</a>
                        <a href="#feature" data-rb-event-key="#feature" class="nav-link">Feature</a>
                        <a href="#testmonial" data-rb-event-key="#testmonial" class="nav-link">Testimonial</a>
                        <a href="#price" data-rb-event-key="#price" class="nav-link">Price</a>
                    </div>
                </div>
            </div>
        </nav>
        <section class="bg-hero" id="home">
            <div class="container">
                <div class="row">
                    <div class="order-md-1 order-2 col-md-6">
                        <div class="inner-content">
                            <h3>Accounting and GST Billing</h3>
                            <h1>SOFTWARE</h1>
                            <p class="mt-3">Create GST-Compliant Invoices with the Best Billing Software</p>
                            <div class="position-relative"><input type="text" placeholder="Enter Your Mobile Number"
                                    class="mobile-get"><button class="try-btn">Get Free Trail</button></div>
                            <div class="d-flex mt-4">
                                <button class="inquiry-now">Inquiry Now</button>
                                {{-- <button class="more-details ml-3">More Details</button> --}}
                            </div>
                        </div>
                    </div>
                    <div class="order-md-2 order-1 col-md-6"><img src="{{ asset('assets/images/home/hero.png') }}" alt="" class="w-100"></div>
                </div>
            </div>
        </section>
        <section class="about-section" id="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-about text-center"><img src="{{ asset('assets/images/home/tax-about.png') }}" alt="">
                            <h3>What is Lorem Ipsum?</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-about text-center"><img src="{{ asset('assets/images/home/tax-about.png') }}" alt="">
                            <h3>What is Lorem Ipsum?</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-about text-center"><img src="{{ asset('assets/images/home/tax-about.png') }}" alt="">
                            <h3>What is Lorem Ipsum?</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="details-page position-relative" id="feature">
            <div class="bg-round-2"> </div>
            <h3 class="title">App Features</h3>
            <div class="container">
                <div class="row">
                    <div class="order-md-1 order-2 col-md-6">
                        <div class="details-inner-section">
                            <h4 class="mb-5">Contrary to popular belief, Lorem Ipsum is not simply random text</h4>
                            <div class="mt-2 d-flex"><img src="img/check-number.png" alt="" class="right-click">
                                <p class="mt-0 ml-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industrys standard dummy text ever since the
                                    1500s.</p>
                            </div>
                            <div class="mt-2 d-flex"><img src="img/check-number.png" alt="" class="right-click">
                                <p class="mt-0 ml-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industrys standard dummy text ever since the
                                    1500s.</p>
                            </div>
                            <div class="mt-2 d-flex"><img src="img/check-number.png" alt="" class="right-click">
                                <p class="mt-0 ml-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industrys standard dummy text ever since the
                                    1500s.</p>
                            </div><button class="inquiry-now mt-3">Inquiry Now</button>
                        </div>
                    </div>
                    <div class="order-md-2 order-1 col-md-6"><img src="{{ asset('assets/images/home/about2.png') }}" alt="" class="w-100"></div>
                </div>
            </div>
        </section>

        <section class="about-section about-section-two" id="work">
            <div class="container-fluid">
                <h3 class="title">HOW WE WORK</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-about text-center"><img src="{{ asset('assets/images/home/tax-about.png') }}" alt="">
                            <h3>What is Lorem Ipsum?</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-about text-center"><img src="{{ asset('assets/images/home/tax-about.png') }}" alt="">
                            <h3>What is Lorem Ipsum?</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-about text-center"><img src="{{ asset('assets/images/home/tax-about.png') }}" alt="">
                            <h3>What is Lorem Ipsum?</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industrys standard dummy text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div class="owl-carousel">
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
                <div> Your Content </div>
              </div>
        </section>

        <section class="bg-testiimonial" id="testmonial">
            <div class="container">
                <div class="row">
                    <div class="text-md-left text-center col-md-2">
                        <img src="{{ asset('assets/images/home/avater.png') }}" alt="" class="user-img">
                        
                    </div>
                    <div class="col-md-10">
                        <div class="slick-slider slick-initialized" dir="ltr">
                            <div class="slick-list">
                                <div class="slick-track"
                                    style="width: 6440px; opacity: 1; transform: translate3d(-920px, 0px, 0px);">
                                    <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned"
                                        aria-hidden="true" style="width: 920px;">
                                        <div>
                                            <div class="testimonial-content" tabindex="-1"
                                                style="width: 100%; display: inline-block;">
                                                <h5> It so numerous if he outlived disposal. How but sons mrs lady when.
                                                    Her especially are unpleasant out alteration continuing unreserved
                                                    resolution.</h5>
                                                <h2 class="mt-3">sondagar ravi</h2>
                                                <h5 class="mt-3">jwellers</h5><img src="img/five-star.png" alt=""
                                                    class="mt-3 mx-md-0 mx-auto">
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="plan-section" id="price">
            <h3 class="title">Our Plan</h3>
            <div class="p-0 container-fluid">
                <div class="price-table">
                    <table>
                        <thead>
                            <tr>
                                <th><img src="img/billwale.png" alt=""></th>
                                <th>Demo</th>
                                <th>Sliver Plan</th>
                                <th>Golden Plan</th>
                                <th>Platinum Plan</th>
                                <th>Diamond Plan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Software Uses</td>
                                <td class="">Bill + Inventory</td>
                                <td class="">Only Billing</td>
                                <td class="">Bill + Inventory</td>
                                <td class="">Bill + Inventory</td>
                                <td class="">Bill + Inventory</td>
                            </tr>
                            <tr>
                                <td>Software No of staff User</td>
                                <td class="">1 User </td>
                                <td class="">2 User </td>
                                <td class="">3 User </td>
                                <td class="">3 User </td>
                                <td class="">Unlimited </td>
                            </tr>
                            <tr>
                                <td>Access to Billwale</td>
                                <td class="">Android &amp; Web</td>
                                <td class="">Android , Web &amp; IOS</td>
                                <td class="">Android , Web &amp; IOS</td>
                                <td class="">Android , Web &amp; IOS</td>
                                <td class="">Android , Web &amp; IOS </td>
                            </tr>
                            <tr>
                                <td>Generate E-Way Bill</td>
                                <td class="no-color">NO</td>
                                <td class="no-color">NO</td>
                                <td class="no-color">NO</td>
                                <td class="">Unlimited</td>
                                <td class="">Unlimited</td>
                            </tr>
                            <tr>
                                <td>Generate E-Way Invoice</td>
                                <td class="no-color">NO</td>
                                <td class="no-color">NO</td>
                                <td class="no-color">NO</td>
                                <td class="no-color">NO</td>
                                <td class="">Available to add on request</td>
                            </tr>
                            <tr>
                                <td>Generate &amp; Print Pincode</td>
                                <td class="no-color">NO</td>
                                <td class="no-color">NO</td>
                                <td class="no-color">NO</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                            </tr>
                            <tr>
                                <td>SMS Marketing</td>
                                <td class="no-color">NO</td>
                                <td class="no-color">NO</td>
                                <td class="">500 SMS (Per Year)</td>
                                <td class="">1000 SMS (Per Year)</td>
                                <td class="">2000 SMS (Per Year)</td>
                            </tr>
                            <tr>
                                <td>Access to Customer Support</td>
                                <td class="">Call &amp; Chat Support </td>
                                <td class="">Call &amp; Chat Support</td>
                                <td class="">Call &amp; Chat Support</td>
                                <td class="">Priority Call &amp; Chat Support</td>
                                <td class="">Priority Call &amp; Chat Support</td>
                            </tr>
                            <tr>
                                <td>Remove Billwale Branding From Invoice &amp; Greeting</td>
                                <td class="no-color">NO</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                            </tr>
                            <tr>
                                <td>Use Advance GST themes for Bills</td>
                                <td class="no-color">NO</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                            </tr>
                            <tr>
                                <td>Adv. Reports such as GST Report and Profit &amp; Loss</td>
                                <td class="no-color">NO</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                            </tr>
                            <tr>
                                <td>Recover Deleted Invoices (Mobile Only)</td>
                                <td class="no-color">NO</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                            </tr>
                            <tr>
                                <td>Share Premium Bussiness Card (Android)</td>
                                <td class="no-color">NO</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                                <td class="green-color">Yes</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <div class="footer-custom">
            <section>
                <div class="p-0 container">
                    <div class="text-center"><img src="img/billwale.png" alt=""></div>
                    <div class="footer-liink"><a href="#home">Home</a><a href="#about">About</a><a href="#work">How We
                            Work</a><a href="#feature">Feature</a><a href="#testmonial">Testiimonial</a><a
                            href="#price">Price</a></div>
                    <div class="copyrights">
                        <div class="copy-right-inner d-lg-flex align-items-center justify-content-between">
                            <p>Copyright @ Billwale 2022</p>
                            <div><a href="#">Privacy Policy</a><a href="#">Terms &amp; Condition</a></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                navigation : true
            });
        });
    </script>
</body>

</html>