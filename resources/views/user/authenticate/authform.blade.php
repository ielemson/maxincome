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
              <form method="POST" enctype="multipart/form-data" action="">
                  @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>{{ __('Valid ID Card') }}</label>
                            <input id="adr" type="file" v class="form-control" name="fname" required>
                        </div>
                    </div>  
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>{{ __('Proof Of Address') }}</label>
                            <input id="adr" type="file" value="addres_proof" class="form-control" name="addres_proof" required>
                        </div>
                    </div>                               
                    
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>{{ __('Passport Picture') }}</label>
                            <div class="input-group">                                                       
                                <input id="passport" type="file"  class="form-control" name="passport" required>
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