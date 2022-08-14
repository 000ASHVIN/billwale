<section class="bg-testiimonial" id="testmonial">
    <div class="container">
        <div class="row">
            <div class="text-md-left text-center col-md-2"><img src="{{ asset('assets/images/home/avater.png') }}" alt="" class="user-img">
            </div>
            <div class="col-md-10">
                <div class="owl-carousel owl-theme">
                    @for ($i = 1; $i <= 3; $i++)
                        <div> 
                            <div class="testimonial-content" tabindex="-1"
                                style="width: 100%; display: inline-block;">
                                <h5> It so numerous if he outlived disposal. How but sons mrs lady when.
                                    Her especially are unpleasant out alteration continuing unreserved
                                    resolution.</h5>
                                <h2 class="mt-3">sondagar ravi</h2>
                                <h5 class="mt-3">jwellers</h5><img src="{{ asset('assets/images/home/five-star.png') }}" alt=""
                                    class="mt-3 mx-md-0">
                            </div>
                        </div>
                    @endfor
                </div>
                {{-- <div class="slick-slider slick-initialized" dir="ltr">
                    <div class="slick-list">
                        <div class="slick-track"
                            style="width: 6440px; opacity: 1; transform: translate3d(-2760px, 0px, 0px);">
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
                    <ul class="slick-dots" style="display: block;">
                        <li class=""><button>1</button></li>
                        <li class=""><button>2</button></li>
                        <li class="slick-active"><button>3</button></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</section>