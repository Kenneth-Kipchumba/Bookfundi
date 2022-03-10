@extends('frontend.layout.main')

@section('content')

<section class="p-5 text-white rounded-0 mb-0" style="background-color: #f27a21;">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="mb-3">Case Search</h1>
                </div>
            </div>

         
          <div class="row d-flex align-items-center">
            
            
            <div class="col-12">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-lg btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choose Category</button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">LawAfrica Law Reports</a>
                    <a class="dropdown-item" href="#">Odunga's Digest</a>
                    <a class="dropdown-item" href="#">Uganda Law Reports</a>
                    <a class="dropdown-item" href="#">Uganda Law Society Reports</a>
                    <a class="dropdown-item" href="#">Tanzania Law Reports</a>
                    <a class="dropdown-item" href="#">Souther Sudan Law Reports and Journals</a>
                    <a class="dropdown-item" href="#">East Africa Law Reports</a>
                    <a class="dropdown-item" href="#">East Africa Court of Appeal Reports</a>
                    <a class="dropdown-item" href="#">East Africa Protectorate General Reports</a>
                    <a class="dropdown-item" href="#">East Africa General Reports</a>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Company Registry Search</a>
                  </div>
                </div>
                  <input type="text" class="form-control border-0 form-control-lg" placeholder="Search Case" aria-label="Search Case" aria-describedby="search">
                  
                  <div class="input-group-append">
                    <button class="btn btn-primary btn-lg" type="button" id="search"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              
            
            </div>
            
          </div>
            
        </div>
    </section>
    <section class="jumbotron bg-transparent rounded-0 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="h4 text-muted mb-5">A total of <strong>290</strong> Reports Found</h3>
                    <h3 class="h5 text-primary ">Filter By</h3>
                    <form class=" my-3">
       
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            
                            <select class="form-control d-block w-100" id="Country" required="">
                              <option value="">Country</option>
                              <option>Kenya</option>
                              <option>Tanzania</option>
                              <option>Uganda</option>
                            </select>
                            
                          </div>
                          <div class="col-md-9 mb-3">
                            
                            <select class="form-control d-block w-100" id="Court" required="">
                              <option value="">Court</option>
                              <option>Quartely</option>
                              <option>Yearly</option>
                            </select>
                          </div>
                          <div class="col mb-3">
                            
                            <select class="form-control d-block w-100" id="decision" required="">
                              <option value="">Decision</option>
                              <option>Quartely</option>
                              <option>Yearly</option>
                            </select>
                          </div>
                          <div class="col mb-3">
                            
                            <select class="form-control d-block w-100" id="Case" required="">
                              <option value="">Case</option>
                              <option>Quartely</option>
                              <option>Yearly</option>
                            </select>
                          </div>
                          <div class="col mb-3">
                            
                            <select class="form-control d-block w-100" id="Year" required="">
                              <option value="">Year</option>
                              <option>Quartely</option>
                              <option>Yearly</option>
                            </select>
                          </div>
                        </div>
                
                      </form>
                     
                </div>
                
                
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="card bg-light search-result-single">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                   <h4> <a href="search-article">Panama Secretarial College Limited V Pioneer General Assurance Society Limited</a> </h4>
                                </div>
                                <div class="col-md-2 mb-3 mb-md-0">
                                    <small>Case ID <strong>LLR 6746 (HCK)   </strong></small>
                                 </div>
                                <div class="col-md-9">
                                    <p>The Applicant Is A Tenant Of The Respondent At The Respondent'S Plot Number 33 Kahoti Market. There Is A Dispute Between Them In Respect Of Termination Of Rent Which Has Been Referred To The Tribunal ...</p>

                                </div>
                                <div class="col-md-10 mb-3 mb-md-0">
                                    <small>Court: <strong>High Court of Kenya   </strong></small>
                                    <small>Case: <strong>Civil   </strong></small>
                                    <small>Decision Type: <strong>Ruling   </strong></small>
                                    <small>Year: <strong>1997   </strong></small>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-warning btn-sm btn-block">Add to bookmark</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card bg-light search-result-single">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                   <h4> <a href="search-article">Panama Secretarial College Limited V Pioneer General Assurance Society Limited</a> </h4>
                                </div>
                                <div class="col-md-2 mb-3 mb-md-0">
                                    <small>Case ID <strong>LLR 6746 (HCK)   </strong></small>
                                 </div>
                                <div class="col-md-9">
                                    <p>The Applicant Is A Tenant Of The Respondent At The Respondent'S Plot Number 33 Kahoti Market. There Is A Dispute Between Them In Respect Of Termination Of Rent Which Has Been Referred To The Tribunal ...</p>

                                </div>
                                <div class="col-md-10 mb-3 mb-md-0">
                                    <small>Court: <strong>High Court of Kenya   </strong></small>
                                    <small>Case: <strong>Civil   </strong></small>
                                    <small>Decision Type: <strong>Ruling   </strong></small>
                                    <small>Year: <strong>1997   </strong></small>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-warning btn-sm btn-block">Add to bookmark</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-5">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
              </li>
            </ul>
          </nav>
    </section>

@endsection