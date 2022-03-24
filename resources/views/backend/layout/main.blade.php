<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') ?? 'BFL Backend' }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/63b4fcb6d3.js" crossorigin="anonymous"></script>

    <!-- jQuery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

    <link rel="stylesheet" href="{{ asset('css/app.css'); }}">
    <script nonce="7d1b7430-0c3e-432f-9da5-bd216d87895c">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link">Case Laws</a>
    </li>
</ul>

<ul class="navbar-nav ml-auto">
    <li class="nav-item">
       <form action="{{ url('logout') }}" method="POST">
        @csrf
           <button type="submit" class="btn btn-primary" title="Logout">
            <i class="fas fa-right-from-bracket"></i>
        </button>
       </form> 
    </li>
    <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
    <i class="fas fa-expand-arrows-alt"></i>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
    <i class="fas fa-th-large"></i>
    </a>
    </li>
</ul>
</nav>

@include('backend.layout.sidebar')

<div class="content-wrapper">

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            @if(session('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <div>
                {{ session('success') }}
              </div>
             </div>
            @endif
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Entries</li>
                </ol>
            </div>
        </div>
    </div>
</div>


@yield('content')

</div>


<aside class="control-sidebar control-sidebar-dark">

<div class="p-3">
<h5>Title</h5>
<p>Sidebar content</p>
</div>
</aside>


<footer class="main-footer">

<div class="float-right d-none d-sm-inline">
Built with &#128151
</div>

<strong>Copyright &copy; <?= date('Y'); ?> <a href="http://bookfundi.com">Bookfundi</a>.</strong> All rights reserved.
</footer>
</div>



<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
