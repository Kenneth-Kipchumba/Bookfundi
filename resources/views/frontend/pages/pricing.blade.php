@extends('frontend.layout.main')

@section('content')

<section class="rounded-0 mb-0" style="background-color: #f27a21;">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-5 text-light">
                    <h1 class="mb-2">Billing Information</h1>
                   
                </div>
            </div>

         
          <div class="row mt-5">
            
            
            <div class="col-md-7 mb-3 text-light">
                <h3 class="font-weight-bold"> Customer Name</h3>
                <p class="lead mb-0" >Email: customer@bookfundi.com</p>
                <p class="lead mb-0">Phone: 0123456789</p>
                <a href="#" class="btn btn-primary my-3">Edit billing Info</a>            
              
            
            </div>
            <div class="col-md-5 ">
                <div class="card border-0  ">
                    <div class="card-body p-4">
                        
                        <div class="row">
                            <div class="col-md-12 mb-3">
                               <h3 class="font-weight-bold"> Your Order</h3>
                            </div>
                            <div class="col-md-6">
                                <h5 class="font-weight-bold"> Premium Plan</h3>
                             </div>
                             <div class="col-md-6 mb-3 mb-md-0 text-md-right">
                                 <h5 class="font-weight-bold"> Ksh 6,000</h3>
                              </div>
                             <div class="col-md-9">
                                 <p class="lead mb-0" >Order ID: LA-123</p>
                                 <p class="lead mb-0">Billing Cycle: Monthly</p>
                                 <p class="lead mb-0">Users: 1-3</p>
                                     
 
                             </div>
                             <div class="col-md-12">
                                 <hr class="mb-4">
                             </div>
                            <div class="col-6 mb-3 mb-md-0">
                                <h5 class="font-weight-bold"> Sub Total</h5>
                             </div>
                            <div class="col-6 text-right">
                                <p class="lead mb-0 text-muted" >Ksh 6,000</p>

                            </div>
                            <div class="col-6 mb-3 mb-md-0">
                                <h5 class="font-weight-bold"> VAT</h5>
                             </div>
                            <div class="col-6 text-right">
                                <p class="lead mb-0 text-muted" >Ksh 6,000</p>

                            </div>
                           
                            <div class="col-6 my-3">
                                <h5 class="font-weight-bold"> Total</h5>
                             </div>
                             
                            <div class="col-6 text-right my-3">
                                <p class="lead mb-0 text-muted" >Ksh 6,000</p>

                            </div>
                            <div class="col-12">
                                <a href="ipay" class="btn btn-primary btn-lg btn-block">Complete Purchase</a>

                            </div>
                            
                            
                        </div>  

                    </div>
                </div>
            </div>
            
          </div>
            
        </div>
    </section>

@endsection