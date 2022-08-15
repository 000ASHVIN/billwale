@extends('app')

@section('content')
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
                            <a href="#inquiry-form" class="inquiry-now">Inquiry Now</a>
                            {{-- <button class="more-details ml-3">More Details</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('includes.info')
    @include('includes.discount')
    @include('includes.benifits')
    @include('includes.feature')
    @include('includes.work')
    @include('includes.testmonial')

    @include('includes.our_plan')


    @include('includes.description')
@endsection

@push('script')
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
@endpush