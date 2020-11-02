<div class="row">
	<div class="col-md-2 side-col">
		<div class="side-bar">
			<ul class="nav flex-column">
				<li class="nav-item">
					<a class="nav-link" href="/home"><span class="icons"><img src="{{asset('images/iconfinder.png')}}" class="most"></span>DASHBOARD</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#myModal"><span class="icons"><img src="{{asset('images/keywordfind.png')}}" class="keytrack"></span>KEYWORD TRACKING</a></li>

				<li class="nav-item">
					<a class="nav-link"  href="{{route('seo_audit')}}"><span class="icons"><img src="{{asset('images/audit.png')}}" class="audit"></span>SITE AUDIT</a>
					<div class="audit-item" style="display:none;">
						<a class="dropdown-item" href="#overview"><span class="icons"><img src="{{asset('images/overview.png')}}"></span>OVERVIEW</a>
						<a class="dropdown-item" href="#errors"><span class="icons"><img src="{{asset('images/error.png')}}"></span>ERRORS</a>
						<a class="dropdown-item" href="#warnings"><span class="icons"><img src="{{asset('images/warning.png')}}"></span>WARNINGS</a>
						<a class="dropdown-item" href="#notices"><span class="icons"><img src="{{asset('images/notice.png')}}"></span>NOTICES</a>
					</div>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="{{ route('analysis') }}"><span class="icons"><img src="{{asset('images/bar-chart.png')}}" class="analytics"></span>SEO ANALYSIS</a>
					<div class="analysis_section" style="display:none;">
						<div class="">
							<a class="dropdown-item" href="#header"><span class="icons"><img src="{{asset('images/document-header.png')}}"></span>HEADER</a>
							<a class="dropdown-item" href="#technical"><span class="icons"><img src="{{asset('images/customer-support.png')}}"></span>TECHNICAL</a>
							<a class="dropdown-item" href="#Content"><span class="icons"><img src="{{asset('images/content.png')}}"></span>CONTENT</a>
							<a class="dropdown-item" href="#performance"><span class="icons"><img src="{{asset('images/performance.png')}}"></span>PERFORMANCE</a>
							<a class="dropdown-item" href="#links"><span class="icons"><img src="{{asset('images/link.png')}}"></span>LINKS</a>
							<a class="dropdown-item" href="#security"><span class="icons"> <img src="{{asset('images/verified.png')}}"></i></span>SECURITY</a>
							<a class="dropdown-item" href="#social"><span class="icons"> <img src="{{asset('images/share.png')}}"></span>SOCIAL</a>
							<a class="dropdown-item" href="#other"><span class="icons"><img src="{{asset('images/menu.png')}}"></span>OTHER</a>
						</div>
					</div>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#"><span class="icons"><img src="{{asset('images/office.png')}}" class="base"></i></span>KNOWLEDGE BASE</a></li>

				<li class="nav-item">
					<a class="nav-link" href="#"><span class="icons"><img src="{{asset('images/support.png')}}" class="case"></span>SUPPORT</a></li>
			</ul>
		</div>
		<!--The Model-->
		<div class="modal" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body" style="padding:20px;">
						<h2>Upgrade to access this feature</h2>
						<h6>The full site audit tool is for paying customers.Please signup to access SEO site audit reports.</h6>
						<ul style="padding-left: 20px;">
						<li>Lorem ipsum Lorem ipsum</li>
						<li>Lorem ipsum Lorem ipsum</li>
						<li>Lorem ipsum Lorem ipsum</li>
						<li>Lorem ipsum Lorem ipsum</li>
						</ul>
					</div>

					<!-- Modal footer -->
					<div class="modal-footer" style="margin:auto;">
						<button type="button" class="btn btn-warning" href="#">View Plans</button>
					</div>

				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="loginModalLabel"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<hr>
				<div class="modal-body">
					<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

					<div class="google-btn" style="margin-right: 157px; margin-top: -20px;">
						<div class="google-icon-wrapper">
							<img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
						</div>
						<a class="btn-text " href="javascript:0;" id="login_btn" style="text-decoration:none"><b>Sign in with google</b></a>
					</div>
				</div>
				<hr>
				<!-- <button class="btn-text" href="" id="login_btn"  style="text-decoration : none"><b>google</b></button> -->
				<div class="modal-footer">

				</div>
				</div>
			</div>
		</div>
	</div>
