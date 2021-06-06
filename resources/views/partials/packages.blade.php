@foreach ($packages as $package)
           
            <!-- Pro Tier -->
            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">{{$package->package_name}}</h5>
                  <h6 class="card-price text-center">{{$package->currency}} {{$package->max}}<span class="period">/Price</span></h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>{{$package->period}} days period </strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>{{$package->days_interval}} days payment interval</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Referral bonus {{$package->ref_bonus}}</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Daily ROI {{$package->daily_interest}}%</li>
                  </ul>
                  <a href="{{route('login')}}" class="btn btn-block btn-primary ">Click Here To Purchase Package</a>
                </div>
              </div>
            </div>


@endforeach

