<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billvale</title>

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
            /* background-color: #122F97; */
            margin-top: 20px;
            padding: 15px 30px;
            width: 50%;
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
        a.inquiry-now {
            text-decoration: none;
        }
        a.inquiry-now:hover {
            color: white;
        }
        .feature {
            align-items: center;
            gap: 10px;
        }
        .feature img {
            width: 20px;
            height: 20px;
            margin-top: 5px;
        }
        .feature p {
            margin-bottom: 0 !important;
        }
        #info h3 {
            color: #122F97;
            font-weight: bold;
        }
        #info .details-inner-section {
            padding-bottom: 40px;
        }
        .gray-back {
            background-color: #FCFCFC;
            padding-top: 80px;
            padding-bottom: 80px;
        }
        .benifits-page li {
            color: #8C8C8C;
        }
        ul.wholesaler_benifit li {
            color: #8C8C8C;
        }
        #discount {
            background: #122F97;
            min-height: 50px;
        }
        #discount h3 {
            color: white;
            /* margin-bottom: 0; */
            padding: 12px 0 8px;
            font-weight: bold;
        }
    </style>

    @yield('style')
</head>

<body>

    <div>
        @if (!Route::is('home'))
            @include('includes.navbar')
        @endif
        

        @yield('content')
        

        <div class="footer-custom">
            <section>
                <div class="p-0 container">
                    <div class="text-center"><img src="{{ asset('assets/images/logo/whitelogo-mini.png') }}" alt="" width="200"></div>
                    <div class="footer-liink"><a href="#home">Home</a><a href="#about">About</a><a href="#work">How We
                            Work</a><a href="#feature">Feature</a><a href="#testmonial">Testiimonial</a><a
                            href="#price">Price</a></div>
                    <div class="copyrights">
                        <div class="copy-right-inner d-lg-flex align-items-center justify-content-between">
                            <p>Copyright @ Billvale {{ date('Y') }}</p>
                            <div><a href="#">Privacy Policy</a><a href="/terms_and_conditions">Terms &amp; Condition</a></div>
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
    
    
    @stack('script')
</body>

</html>