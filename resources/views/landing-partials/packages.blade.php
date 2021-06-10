<section class="pricing-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title">Our Package Plans</div>
            <h2>A Monthly Package <br> Price Plans</h2>
        </div>
        
        <div class="row clearfix">
            @foreach ($packages as $package)
            <!-- Price Block -->
            <div class="price-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3>{{$package->package_name}}</h3>
                    <div class="text">Designed for monthly investment plans</div>
                    <div class="price">{{$package->currency}} {{$package->max}}<span>/ Per Month</span></div>
                    <ul class="price-list">
                        <li>{{$package->period}} day period</li>
                        <li>{{$package->ref_bonus}} Referall bonus</li>
                        <li>Daily ROI {{$package->daily_interest}}</li>
                        {{-- <li>Unlimited Support</li> --}}
                    </ul>
                    <div class="btn-box">
                        <a href="{{route('login')}}" class="theme-btn btn-style-one"><span class="txt">Get Started</span></a>
                    </div>
                </div>
            </div>
            
         @endforeach
            
        </div>
        
    </div>
</section>