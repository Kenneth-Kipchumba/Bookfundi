@extends('frontend.layout.main')

@section('content')
    <section class="p-5 text-white rounded-0 mb-0" style="background-color: #f27a21;">
      <div class="container py-5">
        <div class="d-flex align-items-center justify-content-center ">       
          <div class="col-12 col-md-8 text-center py-5">
            <h1 class="h1 mb-5 text-white">Your digital library</h1>
            <div class="input-group mb-3">
                <input type="text" class="form-control form-control-lg" placeholder="Search Case" aria-label="Search Case" aria-describedby="search">
                <div class="input-group-append">
                  <a href="{{ url('search_result') }}" class="btn btn-primary btn-lg" type="button" id="search">
                      <i class="fas fa-search"></i>
                  </a>
                </div>
              </div>
          </div>
        </div>
          
      </div>
    </section>
    <section class="p-5 rounded-0 mb-0">
        <div class="container py-5">
          <div class="row d-flex align-items-center justify-content-center ">
            
            <div class="col-12 col-md-6">
                <div class="card  border-0 mb-5 mb-md-0">
                    <div class="card-body p-5">
                        <p class="h3"> <strong>BookFundi Law</strong>  is a very comprehensive database of reports from Kenya, Uganda and Tanzania. It currently holds over 30,000 decisions. </p>
                    </div>
                    
                </div>
              
            
            </div>
            <div class="col-12 col-md-6">
                <p class="lead">The decisions are from the highest courts in East Africa among them the Supreme Court of Uganda, The Court of Appeal of Uganda, the Court of Appeal of Tanzania and the Commercial Court in Tanzania, The Court of Appeal in Kenya and the Commercial Court in Kenya. Various decisions from the other high court levels are included. The database is updated on a weekly basis.</p>              
                             
            </div>
          </div>
            
        </div>
    </section>
    <section class="rounded-0 mb-0">
        <div class="container py-5">
          <div class="row d-flex ">
            
            <div class="col-md-12 mb-5">
                <h3 class="text-primary">Case Law</h3>
            </div>
            
            <div class="col-12 col-md-6 mb-4">
                <h4 class="font-weight-bold mb-3">BookFundi Case Law</h4>
                <p>BookFundi Law is a very comprehensive database of reports from Kenya, Uganda and Tanzania. It currently holds over 30,000 decisions. The decisions are from the highest courts in East Africa among them the Supreme Court of Uganda, The Court of Appeal of Uganda, the Court of Appeal of Tanzania and the Commercial Court in Tanzania, The Court of Appeal in Kenya and the Commercial Court in Kenya. Various decisions from the other high court levels are included. The database is updated on a weekly basis. </p>
              
            
            </div>
            <div class="col-12 col-md-6  mb-4">
                <h4 class="font-weight-bold mb-3">Uganda Case Law</h4>
                <p>Uganda Case Law (UCL) was published by BookFundi in conjunction with the government of Uganda acting through the Law Development Centre. They contain Ugandan decisions decided in the Supreme Court, Court of Appeal, High Court, and they include Criminal Cases, Civil Cases and Commercial Cases. These are cases from 1952 to 1974 and 2007, 2008.</p>
              
            
            </div>
            <div class="col-12 col-md-6  mb-4">
                <h4 class="font-weight-bold mb-3">Tanzania Case Law</h4>
                <p>Tanzania Case Law (TCL) are the official Case Law of the United Republic of Tanzania published by BookFundi in conjunction with the Republic of Tanzania. The Reports contain authoritative and wide-ranging cases decided in the Court of Appeal in Tanzania and the High Courts of Tanzania and Zanzibar from 1980 to 2006. In addition, they are a list of reported cases; a full digest of cases reported; and East African cases, foreign cases, legislation, words and phrases, judicially considered. Cases are listed alphabetically and by the area of law covered: civil, commercial, constitutional, contract, criminal, customary, and family law, and more. Judges of the Court of Appeal and the High Court of Tanzania and the High Court of Zanzibar, are listed in each volume.</p>              
            
            </div>
            <div class="col-12 col-md-6  mb-4">
                <h4 class="font-weight-bold mb-3">East Africa Case Law</h4>
                <p>The East Africa Case Law (EACL) contain full text of the latest and most important decisions from Kenya, Uganda and Tanzania and landmark decisions from the COMESA Court of Justice (Lusaka, Zambia). The reports cover the period between 1957-2012. They cover a wide array of subject areas among them; Banking, Intellectual property, Taxation, Family law, Customary law, Shipping law, Criminal law, Constitutional law, Property law, Administrative law, Judicial Review, Election law, Practice and Procedure. Two volumes are produced annually and the current set has 48 volumes plus index.</p>            
            
            </div>
            <div class="col-12 col-md-6  mb-4">
                <h4 class="font-weight-bold mb-3">East Africa Court of Appeal Report</h4>
                <p>This series holds decisions from Kenya, Uganda and Tanzania that run from 1934 – 1956. The reports comprise 23 volumes of cases compiled by Puisne Judges and Magistrates, a Registrar of the High Court and a Registrar of the Court of Appeal for Eastern Africa. These are now available from BookFundi in a 10 Volume set.</p>           
            
            </div>
            <div class="col-12 col-md-6  mb-4">
                <h4 class="font-weight-bold mb-3">East Africa General Reports (Elections)</h4>
                <p>The East Africa General Reports (Elections) contains cases that are mostly election petitions. They are cases filed by a registered voter or candidate challenging the election of a President or Member of Parliament. In this respect the edition of East Africa General Reports is the most comprehensive publication to date in terms of the number of election petitions it covers. These run from 1993-2009. The Editor is a former Chairman of the Kenyan Electoral Commission.</p>        
            
            </div>
            <div class="col-12 col-md-6  mb-4">
                <h4 class="font-weight-bold mb-3">East Africa Protectorate Case Law</h4>
                <p>East Africa Protectorate Case Law (EAPCL) is a series of Case Law covering the protectorates of Kenya, Uganda and Tanzania from the year 1909 to 1933. They consist of cases determined by the High Court of Mombasa, the Appeal Court at Zanzibar, and by the Judicial Committee of the Privy Council, on appeal from that Court. They also contain appendices containing notes on native customs, Appeal Court rules, legal practitioners rules, High Court rules and circulars.</p>     
            
            </div>
            <div class="col-12 col-md-6  mb-4">
                <h4 class="font-weight-bold mb-3">Uganda Law Society Reports</h4>
                <p>Uganda Law Society Reports 2005 V1 and V2 contains a digest of case rulings dealing with Criminal, Civil and Commercial Law from the High Court, Court of Appeal, Supreme Courts, Chief Magistrate Courts, Appeallate Courts and Constitutional Courts of Uganda.</p>     
            
            </div>
            
          </div>
            
        </div>
    </section>
    <section class="p-5 rounded-0 mb-0">
        <div class="container py-5">
          <div class="row d-flex align-items-center justify-content-center text-center ">
            
            <div class="col-12 col-md-6">
               <h2 class="h1 mb-4 font-weight-bold">Sign Up Today</h2>
               <p class="h2 mb-5 text-muted">Access thousands of Africa Case Law</p>
               <a class="btn btn-secondary btn-lg" href="#">Get Started Now</a>
                        
            
            </div>
            
          </div>
            
        </div>
    </section>

@endsection