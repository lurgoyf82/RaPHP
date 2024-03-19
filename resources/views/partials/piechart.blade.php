<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Multipurpose</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="dashboard" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Dashboards</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->

				{{--<!--begin::Actions-->--}}
				{{--<div class="d-flex align-items-center gap-2 gap-lg-3">--}}
				{{--	<!--begin::Secondary button-->--}}
				{{--	<a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>--}}
				{{--	<!--end::Secondary button-->--}}
				{{--	<!--begin::Primary button-->--}}
				{{--	<a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>--}}
				{{--	<!--end::Primary button-->--}}
				{{--</div>--}}
				{{--<!--end::Actions-->--}}

			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<!--begin::Row-->
			<div class="row g-5 g-xl-10 mb-xl-10">
				<div class="card card-flush h-lg-50 col-md-3 col-lg-3 col-xl-3">
					<!--begin::Header-->
					<div class="card-header pt-5">
						<!--begin::Title-->
						<h3 class="card-title text-gray-800 fw-bold">Assicurazioni</h3>
						<!--end::Title-->
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-5">
						<!--begin::Item-->
						<a href="{{ route('alert_polizza_assicurativa_danger') }}" class="d-flex align-items-center text-primary fw-semibold fs-6 me-2 left bg-hover-light-danger">
							<div class="d-flex flex-stack">
								<!--begin::Section-->
									<i class="ki-outline ki-car-2 text-danger fs-3x"></i> 1250
								<!--end::Section-->
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<a href="asdasd" class="d-flex align-items-center text-primary fw-semibold fs-6 me-2 left bg-hover-light-warning">
							<div class="d-flex flex-stack">
								<!--begin::Section-->
									<i class="ki-outline ki-car-2 text-warning fs-3x"></i> 1250
								<!--end::Section-->
							</div>
						</a>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<a href="dsfg" class="d-flex align-items-center text-primary fw-semibold fs-6 me-2 left bg-hover-light-primary">
							<div class="d-flex flex-stack">
								<!--begin::Section-->
									<i class="ki-outline ki-car-2 text-primary fs-3x"></i> 1250
								<!--end::Section-->
							</div>
						</a>
						<!--end::Item-->
					</div>
					<!--end::Body-->
				</div>
				<div class="card card-flush h-lg-50 col-md-3 col-lg-3 col-xl-3">
					<!--begin::Header-->
					<div class="card-header pt-5">
						<!--begin::Title-->
						<h3 class="card-title text-gray-800 fw-bold">Assicurazioni</h3>
						<!--end::Title-->
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-5">
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<a href="#" class="d-flex align-items-center text-primary fw-semibold fs-6 me-2 left">
								<i class="ki-outline ki-car-2 text-danger fs-3x"></i> 1250
							</a>
							<!--end::Section-->
						</div>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<a href="#" class="d-flex align-items-center text-primary fw-semibold fs-6 me-2 left">
								<i class="ki-outline ki-car-2 text-warning fs-3x"></i> 1250
							</a>
							<!--end::Section-->
						</div>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<a href="#" class="d-flex align-items-center text-primary fw-semibold fs-6 me-2 left">
								<i class="ki-outline ki-car-2 text-primary fs-3x"></i> 1250
							</a>
							<!--end::Section-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Body-->
				</div>
				<div class="card card-flush h-lg-50 col-md-3 col-lg-3 col-xl-3">
					<!--begin::Header-->
					<div class="card-header pt-5">
						<!--begin::Title-->
						<h3 class="card-title text-gray-800 fw-bold">Assicurazioni</h3>
						<!--end::Title-->
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-5">
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<a href="#" class="d-flex align-items-center text-primary fw-semibold fs-6 me-2 left">
								<i class="ki-outline ki-car-2 text-danger fs-3x"></i> 1250
							</a>
							<!--end::Section-->
						</div>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<a href="#" class="d-flex align-items-center text-primary fw-semibold fs-6 me-2 left">
								<i class="ki-outline ki-car-2 text-warning fs-3x"></i> 1250
							</a>
							<!--end::Section-->
						</div>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<a href="#" class="d-flex align-items-center text-primary fw-semibold fs-6 me-2 left">
								<i class="ki-outline ki-car-2 text-primary fs-3x"></i> 1250
							</a>
							<!--end::Section-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Body-->
				</div>
				<div class="card card-flush h-lg-50 col-md-3 col-lg-3 col-xl-3">
					<!--begin::Header-->
					<div class="card-header pt-5">
						<!--begin::Title-->
						<h3 class="card-title text-gray-800 fw-bold">Assicurazioni</h3>
						<!--end::Title-->
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-5">
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<a href="#" class="d-flex align-items-center text-primary fw-semibold fs-6 me-2 left">
								<i class="ki-outline ki-car-2 text-danger fs-3x"></i> 1250
							</a>
							<!--end::Section-->
						</div>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<a href="#" class="d-flex align-items-center text-primary fw-semibold fs-6 me-2 left">
								<i class="ki-outline ki-car-2 text-warning fs-3x"></i> 1250
							</a>
							<!--end::Section-->
						</div>
						<!--end::Item-->
						<!--begin::Separator-->
						<div class="separator separator-dashed my-3"></div>
						<!--end::Separator-->
						<!--begin::Item-->
						<div class="d-flex flex-stack">
							<!--begin::Section-->
							<a href="#" class="d-flex align-items-center text-primary fw-semibold fs-6 me-2 left">
								<i class="ki-outline ki-car-2 text-primary fs-3x"></i> 1250
							</a>
							<!--end::Section-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Body-->
				</div>
			</div>
			<!--end::Row-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!--end::Content-->
</div>
<!--end::Content wrapper-->
<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer">
	<!--begin::Footer container-->
	<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
		<!--begin::Copyright-->
		<div class="text-dark order-2 order-md-1">
			<span class="text-muted fw-semibold me-1">2023&copy;</span>
			<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
		</div>
		<!--end::Copyright-->
		<!--begin::Menu-->
		<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
			<li class="menu-item">
				<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
			</li>
			<li class="menu-item">
				<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
			</li>
			<li class="menu-item">
				<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
			</li>
		</ul>
		<!--end::Menu-->
	</div>
	<!--end::Footer container-->
</div>
<!--end::Footer-->
</div>
<!--end:::Main-->

