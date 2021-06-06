@foreach ($packages as $package)
{{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
  <div class="icon-box">
    <div class="icon"><i class="bx bxl-dribbble"></i></div>
    <h4><a href="">{{$package->package_name}}</a></h4>
    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
    <a href="" class="btn btn-primary mx-auto">Purchase Package</a>
  </div>
</div> --}}

      <div class="col-md-4 mt-2">
          <div class="card">
              <div class="card-body">
                  <div class="card-img-actions"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562074043/234.png" class="card-img img-fluid" width="96" height="350" alt=""> </div>
              </div>
              <div class="card-body bg-light text-center">
                  <div class="mb-2">
                      <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true">{{$package->package_name}}</a> </h6> <a href="#" class="text-muted" data-abc="true">Laptops & Notebooks</a>
                  </div>
                  <h3 class="mb-0 font-weight-semibold">$250.99</h3>
                  <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> </div>
                  <div class="text-muted mb-3">34 reviews</div> <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i>Purchase Package</button>
              </div>
          </div>
      </div>
     
@endforeach

