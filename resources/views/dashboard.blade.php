@extends('app')

{{-- v=spf1 +a +mx +ip4:172.105.62.126 include:spf.mysecurecloudhost.com ~all --}}

@section('content')
    @include('includes.header')
    @include('includes.info')
    @include('includes.discount')
    @include('includes.benifits')
    @include('includes.feature')
    {{-- @include('includes.work') --}}
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