@extends('layout.app')

@section('header')
        <h1 class="d-none">Sino Ventures Group</h1>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCMB5L6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!--::menu part start::-->
        <header class="main_menu home_menu opacity">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark" style="z-index: 999!important">
                      <a class="navbar-brand" href="index.html"></a>
                        <button id="navTog" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="mdi mdi-format-list-bulleted"></i>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="https://sinovgpl.com">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://sinovgpl.com/#user">user</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        </header>
@endsection



@section('content')
    <section class="banner_part">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="banner_text d-block d-sm-flex justify-content-center">
                        <div class="banner_text_iner align-items-center">
                            <img height="140" src="https://sinovgpl.com/assets/images/SVGPL_logo_Alt.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="banner_text d-flex">
                        <div class="banner_text_iner align-items-center pl-1 pl-sm-0 pt-0 pt-sm-1">
                            <h3>Your</h3>
                            <h2 id="element"></h2>

                        </div>
                    </div>
                </div>
                <div class="col-12 arrowContainer">
                    <div class="row justify-content-center">
                        <div class="arrow">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div style="margin-top:100px" class="row justify-content-center">
                        <span class="scroll-for-more">
                            Scroll Down For More
                        </span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--::banner part end::-->

@endsection



@section('table')

 <section class="about_part section-padding" id="user">
        <div class="container">
	
	<h1 style="text-align: center; padding: 10px; margin-bottom: auto; background-color: #b1b1b1;">User List</h1>
	

		<table class="table table-dark">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">First Name</th>
		      <th scope="col">Last Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Address</th>
		      <th scope="col">IP Address</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($data as $item)
		    <tr>
		      <th scope="row">{{$item->id}}</th>
		      <td>{{$item->first_name}}</td>
		      <td>{{$item->last_name}}</td>
		      <td>{{$item->email}}</td>
		      <td>{{$item->gender}}</td>
		      <td>{{$item->ip_address}}</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>

 </section>
@endsection


@section('footer')
    <footer class="footer_part bg-light" style="margin: 45px">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4>Office</h4>
                    <br>
                    62 Ubi Road 1, #10-06 Oxley Bizhub 2
                    <br>
                    Singapore 408734
                    <div class="mt-3 mb-3">
                        <small>© 2015 - 2020 Sino Ventures Group. All Rights Reserved.
                            <br>
                            <a href="https://sinovgpl.com/terms-privacy">Privacy Policy</a> 
                        </small>
                    </div> 
                </div>
            </div>
        </div>
    </footer>
@endsection
