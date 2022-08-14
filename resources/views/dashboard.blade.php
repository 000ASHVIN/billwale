<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BillWale</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <style>
        .bg-hero {
            position: relative;
        }
        .inner-content {
            padding-top: 0;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        .inner-content h3 {
            /* font-size: 42px; */
            color: #fff;
            font-weight: 600;
        }
        #testmonial img {
            width: auto;
            margin: auto;
        }
        .inquiry_form input {
            width: 100%;
            padding: 5px 10px;
        }
        .inquiry_form input[type='checkbox'] {
            width: auto;
        }
        .terms_and_condition {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .error {
            font-size: 12px !important;
            color: red !important;
        }
        .logo img {
            background-color: #122F97;
            margin-top: 20px;
            padding: 15px 30px;
        }
        .inquiry_form > div {
            margin-bottom: 10px;
        }
        .bg-submit {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .submit-text {
            margin-left: 10px;
        }
        .spinner-border {
            height: 22px;
            width: 22px;
            border-width: 3px;
        }
    </style>
</head>

<body>

    <div>
        {{-- @include('includes.navbar') --}}
        <section class="bg-hero hero-sections" id="home" style="background-image: url('/assets/images/home/man.jpeg');">
            <div class="layer-mobile d-md-none d-block"></div>
            <div class="container">
                <div class="row">
                    <div class="order-md-1 order-2 col-md-6">
                        <div class="inner-content">
                            <div class="logo text-center">
                                <img src="{{ asset('assets/images/home/billwale.png') }}" alt="" style="">
                            </div>
                            <p class="mt-3">Accounting and GST Billing</p>
                            <h1 class="mt-3">Software</h1>
                            {{-- <div class="position-relative">
                                <input type="text" placeholder="Enter Your Mobile Number" class="mobile-get">
                                <button class="try-btn">Get Free Trail</button>
                            </div> --}}
                            <div class="d-flex mt-4">
                                <button class="inquiry-now">Inquiry Now</button>
                                {{-- <button class="more-details ml-3">More Details</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        @include('includes.feature')
        @include('includes.work')
        @include('includes.testmonial')
        
        @include('includes.our_plan')
        
        
        @include('includes.description')

        <div class="footer-custom">
            <section>
                <div class="p-0 container">
                    <div class="text-center"><img src="{{ asset('assets/images/home/billwale.png') }}" alt=""></div>
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
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script> --}}
    
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                // pagination:false,
                // navigation:true,
                responsive:{
                    0:{
                        items:1,
                        // nav:true
                    }
                }
            });

            $.validator.addMethod("acceptTerms", function(value, element) {
                if(value != 'on') {
                    $('.terms_error').show();
                } else {
                    $('.terms_error').hide();
                }
                return value == "on";
            }, "");

            $("#inquiry_form").validate({
                rules: {
                    company: {
                        required: true
                    },
                    name: {
                        required: true
                    },
                    business: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                    phone: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    city: {
                        required: true
                    },
                    terms: {
                        acceptTerms: true
                    }
                },
                messages: {
                    // terms: "Please accept terms and conditions."
                },
                success: function(label) {
                    
                }
            });

            $( ".bg-submit" ).click(function() {
                console.log($('#inquiry_form').valid())
                if($('#inquiry_form').valid()) {
                    $('.spinner-border').show();
                }
                // alert( "Valid: " + form.valid() );
            });

            $('#state').change(function() {
                $('#city .city-option').hide();
                let state = $(this).val();
                $('#city').val("");
                if(state != '') {
                    $('#city').prop('disabled', false);
                    $('#city option[data-state="'+state+'"]').show();
                } else {
                    $('#city').prop('disabled', true);
                }
            });
        });
    </script>
    @if (request()->session()->has('status'))
        <script>
            Swal.fire(
                "Thank you",
                "Thanks for inquiry!",
                "success"
            )
            // swal("Thank you", "Thanks for inquiry!", "success");
        </script>
    @endif
</body>

</html>