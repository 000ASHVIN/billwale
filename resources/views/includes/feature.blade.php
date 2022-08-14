<section class="details-page position-relative  px-md-5 px-0" id="feature">
    <div class="bg-round-2"> </div>
    <h3 class="title">App Features</h3>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-3 col-md-6"><img src="{{ asset('assets/images/home/about2.png') }}" alt="" class="w-100 pt-5"></div>
            <div class="col-lg-4 col-md-6">
                <div class="details-inner-section">
                    <h4 class="mb-5">Contrary to popular belief, Lorem Ipsum is not simply random text</h4>
                    <div class="mt-2 d-flex"><img src="{{ asset('assets/images/home/check-number.png') }}" alt="" class="right-click">
                        <p class="mt-0 ml-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industrys standard dummy text ever since the
                            1500s.</p>
                    </div>
                    <div class="mt-2 d-flex"><img src="{{ asset('assets/images/home/check-number.png') }}" alt="" class="right-click">
                        <p class="mt-0 ml-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industrys standard dummy text ever since the
                            1500s.</p>
                    </div>
                    <div class="mt-2 d-flex"><img src="{{ asset('assets/images/home/check-number.png') }}" alt="" class="right-click">
                        <p class="mt-0 ml-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industrys standard dummy text ever since the
                            1500s.</p>
                    </div><button class="inquiry-now mt-3">Inquiry Now</button>
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="form-info">
                    <div class="inquiry-now-title row">
                        <div class="col-md-12">
                            <h3>INQUIRY NOW</h3>
                        </div>
                    </div>
                    <form action="/inquiry" method="post" id="inquiry_form">
                        @csrf
                        <div class="row inquiry_form">
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="company">Company Name:</label>
                                <input placeholder="Company Name" type="text" name="company" id="company"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="name">Your Name:</label>
                                <input placeholder="Your Name" type="text" name="name" id="name"/>
                            </div>  
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="business">Nature of Business:</label>
                                <input placeholder="Nature of Business" type="text" name="business" id="business"/>
                            </div>   
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="email">Mail ID:</label>
                                <input placeholder="Email" type="email" name="email" id="email"/>
                            </div>       
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="phone">Phone No.:</label>
                                <input placeholder="Phone" type="text" name="phone" id="phone"/>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="state">State:</label>
                                {{-- <input placeholder="State" type="text" name="state" id="state"/> --}}
                                <select name="state" id="state" class="form-control">
                                    <option value="">Please select state</option>
                                    @foreach ($states as $state => $cities)
                                        <option value="{{ $state }}">{{ $state }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="city">City:</label>

                                <select name="city" id="city" class="form-control" disabled>
                                    <option value="">Please select city</option>
                                    @foreach ($states as $state => $cities)
                                        @foreach ($cities as $city)
                                            <option class="city-option" data-state="{{ $state }}" value="{{ $city }}">{{ $city }}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                                
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="terms_and_condition">
                                    <input type="checkbox" name="terms" name="terms" id="terms">
                                    <label for="terms">Terms and Condition</label>
                                    
                                </div>
                                <p class="terms_error error" style="display: none;"><b>Please accept terms and conditions.</b></p>
                            </div>

                            <div class="col-md-12 form-group form-submit">
                                <button class="bg-submit" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="mb-3 row">
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>