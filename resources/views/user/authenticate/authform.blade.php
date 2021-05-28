<div class="col-md-12">                            
    <div class="card">
        <div class="card-header">
            <div class="card-head-row">
                <div class="card-title">{{ __('Complete Verification') }}</div>
                <div class="card-tools">                                            
                </div>
            </div>
        </div>
        <div class="card-body pb-0 mb-5">
            <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                <p class="text-danger">
                   <strong> Please note: Make to upload clear copies of the requested documents.</strong>
                </p>
              <form method="POST" enctype="multipart/form-data" action="{{route('verify_user_id')}}">
                  @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>{{ __('Valid ID Card') }}</label>
                            <input id="id_card" type="file" class="form-control @error('id_card') is-invalid @enderror " name="id_card" value="{{ old('id_card') }}" required autocomplete="id_card" autofocus placeholder="E-Mail Address">

                            @error('id_card')
                                <span class="invalid-feedback" role="alert alert-danger" >
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>  
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>{{ __('Proof Of Address') }}</label>
                            <input id="addres_proof" type="file" class="form-control  @error('addres_proof') is-invalid @enderror " name="addres_proof" value="{{ old('addres_proof') }}" required autocomplete="addres_proof" autofocus placeholder="E-Mail Address">

                            @error('addres_proof')
                                <span class="invalid-feedback" role="alert alert-danger" >
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>                               
                    
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>{{ __('Passport Picture') }}</label>
                            <div class="input-group">                                                       
                                <input id="passport" type="file" class="form-control @error('passport') is-invalid @enderror " name="passport" value="{{ old('passport') }}" required autocomplete="passport" autofocus placeholder="E-Mail Address">

                                @error('passport')
                                    <span class="invalid-feedback" role="alert alert-danger" >
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            
                        </div>
                    </div>     
                                             
                    
                </div>   
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>     
                </div>   

              </form>
                
            </div>                                
        </div>
    </div>
  </div>