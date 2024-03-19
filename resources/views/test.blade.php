<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.9
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href=""/>
	<title>ToRental - The World's #1 Car Management System</title>
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="http://torental.bentraining.it/assets/media/logos/favicon.ico" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="http://torental.bentraining.it/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="http://torental.bentraining.it/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="http://torental.bentraining.it/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="http://torental.bentraining.it/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

	<!-- Include jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Bootstrap Datepicker CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css"/>

	<!-- Bootstrap Datepicker JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>



	<!--end::Global Stylesheets Bundle-->
	<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
			data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
			data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
			data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light";
	var themeMode;
	if (document.documentElement) {
		if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if (localStorage.getItem("data-bs-theme") !== null) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}
		}
		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}
		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}</script>
<!--end::Theme mode setup on page load-->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
	<!--begin::Page-->
	<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
		<!--begin::Header-->
		<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
			<!--begin::Header container-->
			<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
				<!--begin::Mobile logo-->
				<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
					<a href="../../demo1/dist/index.html" class="d-lg-none">
						<img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
					</a>
				</div>
				<!--end::Mobile logo-->
				<!--begin::Header wrapper-->
				<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
					<!--begin::Menu wrapper-->
					<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
						<!--begin::Menu-->
						<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
						</div>
						<!--end::Menu-->
					</div>
					<!--end::Menu wrapper-->
				</div>
				<!--end::Header wrapper-->
			</div>
			<!--end::Header container-->
		</div>
		<!--end::Header-->
		<!--begin::Wrapper-->
		<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
			<!--begin::Sidebar-->
			<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
					 data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
					 data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
				<!--begin::Logo-->
				<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
					<!--begin::Logo image-->
					<a href="http://torental.bentraining.it/dashboard">
						<img alt="Logo" src="http://torental.bentraining.it/assets/media/logos/logo-furgoni-2.svg"
								 class="h-25px app-sidebar-logo-default"/>
						<img alt="Logo" src="http://torental.bentraining.it/assets/media/logos/logo-furgoni-2.svg"
								 class="h-20px app-sidebar-logo-minimize"/>
					</a>
					<!--end::Logo image-->
				</div>
				<!--end::Logo-->
				<!--begin::sidebar menu-->
				<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
					<!--begin::Menu wrapper-->
					<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
						<!--begin::Scroll wrapper-->
						<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
								 data-kt-scroll-activate="true" data-kt-scroll-height="auto"
								 data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
								 data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
								 data-kt-scroll-save-state="true">
							<!--begin::Menu-->
							<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu"
									 data-kt-menu="true" data-kt-menu-expand="false">
								<!--            DASHBOARD            -->
								<!--            DASHBOARD TITLE            -->
								<!--begin:Menu item-->
								<div class="menu-item pt-5">
									<!--begin:Menu content-->
									<div class="menu-content">
										<span class="menu-heading fw-bold text-uppercase fs-7">Dashboard</span>
									</div>
									<!--end:Menu content-->
								</div>
								<!--end:Menu item-->
								<!--            DASHBOARD MENU            -->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-home fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</span>
							<span class="menu-title">Dashboard</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/dashboard">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Home</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->


								<!--            ALERTS            -->
								<!--            ALERTS TITLE            -->
								<!--begin:Menu item-->
								<div class="menu-item pt-5">
									<!--begin:Menu content-->
									<div class="menu-content">
										<span class="menu-heading fw-bold text-uppercase fs-7">Alerts</span>
									</div>
									<!--end:Menu content-->
								</div>
								<!--end:Menu item-->
								<!--            ALERTS MENU            -->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-star fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</span>
							<span class="menu-title">Alert</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item Scadenza revisione meccanica-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/alert_revisione_meccanica">
									<span
										class="badge badge-square badge-outline badge-danger badge-lg">1007</span>&nbsp;
												<span class="menu-title">Revisione Meccanica</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->

										<!--begin:Menu item Scadenza revisione bombole-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/alert_revisione_bombole">
									<span
										class="badge badge-square badge-outline badge-danger badge-lg">1452</span>&nbsp;
												<span class="menu-title">Revisione Bombole</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->

										<!--begin:Menu item Scadenza revisione ATP-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/alert_revisione_atp">
									<span
										class="badge badge-square badge-outline badge-danger badge-lg">1453</span>&nbsp;
												<span class="menu-title">Revisione ATP</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->







										<!--begin:Menu item Scadenza multe-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/alert_revisione_multa">
									<span
										class="badge badge-square badge-outline badge-danger badge-lg">1463</span>&nbsp;
												<span class="menu-title">Revisione Multa</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->








										<!--begin:Menu item Scadenza revisione tachigrafo-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/alert_revisione_tachigrafo">
									<span
										class="badge badge-square badge-outline badge-danger badge-lg">1414</span>&nbsp;
												<span class="menu-title">Revisione Tachigrafo</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->



















										<!--begin:Menu item Scadenza revisione tagliando-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/alert_revisione_tagliando">
									<span
										class="badge badge-square badge-outline badge-danger badge-lg">1461</span>&nbsp;
												<span class="menu-title">Revisione Tagliando</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->

















										<!--begin:Menu item Scadenza contratto di noleggio-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/alert_contratto_noleggio">
				<span
					class="badge badge-square badge-outline badge-danger badge-lg">1047</span>&nbsp;
												<span class="menu-title">Contratto Noleggio</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->

										<!--begin:Menu item Scadenza polizza assicurativa-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/alert_polizza_assicurativa">
				<span
					class="badge badge-square badge-outline badge-danger badge-lg">1175</span>&nbsp;
												<span class="menu-title">Polizza Assicurativa</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->

										<!--begin:Menu item Scadenza bollo-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/alert_scadenza_bollo">
				<span
					class="badge badge-square badge-outline badge-danger badge-lg">1463</span>&nbsp;
												<span class="menu-title">Scadenza Bollo</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->


								<!--            VEICOLO            -->
								<!--            VEICOLO TITLE            -->
								<!--begin:Menu item-->
								<div class="menu-item pt-5">
									<!--begin:Menu content-->
									<div class="menu-content">
										<span class="menu-heading fw-bold text-uppercase fs-7">Veicolo</span>
									</div>
									<!--end:Menu content-->
								</div>
								<!--end:Menu item-->
								<!--            VEICOLO MENU            -->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
							<span class="menu-icon">
								<i class="ki-duotone ki-element-11 fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</span>
							<span class="menu-title">Veicolo</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/create_veicolo">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
												<span class="menu-title">Inserisci</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/list_veicolo">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
												<span class="menu-title">Lista</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->

									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->

								<!--            SCADENZE TITLE            -->
								<!--begin:Menu item-->
								<div class="menu-item pt-5">
									<!--begin:Menu content-->
									<div class="menu-content">
										<span class="menu-heading fw-bold text-uppercase fs-7">Scadenze</span>
									</div>
									<!--end:Menu content-->
								</div>
								<!--end:Menu item-->


								<!--            ASSICURAZIONE            -->

								<!--            ASSICURAZIONE MENU            -->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
							<span class="menu-icon">
									<i class="ki-duotone ki-element-11 fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
									</i>
							</span>
							<span class="menu-title">Assicurazione</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/create_assicurazione">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Inserisci</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/list_assicurazione">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Lista</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->

								<!--            ATP            -->

								<!--            ATP MENU            -->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
							<span class="menu-icon">
									<i class="ki-duotone ki-element-11 fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
									</i>
							</span>
							<span class="menu-title">Atp</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/create_atp">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Inserisci</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/list_atp">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Lista</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->

								<!--            BOLLO            -->

								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-element-11 fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
									</i>
							</span>
							<span class="menu-title">Bollo</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/create_bollo">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Inserisci</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/list_bollo">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Lista</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->

								<!--            BOMBOLE            -->

								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-element-11 fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
									</i>
							</span>
							<span class="menu-title">Bombole</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/create_bombole">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Inserisci</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/list_bombole">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Lista</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->

								<!--            DECORAZIONE            -->
								<!--            DECORAZIONE MENU            -->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
							<span class="menu-icon">
									<i class="ki-duotone ki-element-11 fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
									</i>
							</span>
							<span class="menu-title">Decorazione</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/create_decorazione">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Inserisci</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/list_decorazione">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Lista</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->

								<!--            MULTE            -->
								<!--            MULTA MENU            -->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
							<span class="menu-icon">
									<i class="ki-duotone ki-element-11 fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
									</i>
							</span>
							<span class="menu-title">Multe</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/create_multa">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Inserisci</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/list_multa">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Lista</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->

								<!--            REVISIONE            -->

								<!--            REVISIONE MENU            -->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
							<span class="menu-icon">
									<i class="ki-duotone ki-element-11 fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
									</i>
							</span>
							<span class="menu-title">Revisione</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/create_revisione">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Inserisci</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/list_revisione">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Lista</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->

								<!--            TACHIGRAFO            -->

								<!--            TACHIGRAFO MENU            -->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
							<span class="menu-icon">
									<i class="ki-duotone ki-element-11 fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
									</i>
							</span>
							<span class="menu-title">Tachigrafo</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/create_tachigrafo">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Inserisci</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/list_tachigrafo">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Lista</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->

								<!--            TAGLIANDO            -->

								<!--            TAGLIANDO MENU            -->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
							<span class="menu-icon">
									<i class="ki-duotone ki-element-11 fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
									</i>
							</span>
							<span class="menu-title">Tagliando</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/create_tagliando">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Inserisci</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/list_tagliando">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Lista</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->

								<!--            STAZIONAMENTO PROLUNGATO            -->
								<!--            STAZIONAMENTO PROLUNGATO TITLE            -->
								<!--begin:Menu item-->
								<div class="menu-item pt-5">
									<!--begin:Menu content-->
									<div class="menu-content">
										<span class="menu-heading fw-bold text-uppercase fs-7">Stazionamento Prolungato</span>
									</div>
									<!--end:Menu content-->
								</div>
								<!--end:Menu item-->
								<!--            STAZIONAMENTO PROLUNGATO MENU            -->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
							<span class="menu-icon">
									<i class="ki-duotone ki-element-11 fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
									</i>
							</span>
							<span class="menu-title">Stazionamento</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/create_stazionamento">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Inserisci</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/list_stazionamento">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Lista</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->


								<!--begin:Menu item-->
								<div class="menu-item pt-5">
									<!--begin:Menu content-->
									<div class="menu-content">
										<span class="menu-heading fw-bold text-uppercase fs-7">Config</span>
									</div>
									<!--end:Menu content-->
								</div>
								<!--end:Menu item-->

								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
								<span class="menu-icon">
									<i class="ki-duotone ki-gear fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
										<span class="path4"></span>
									</i>
								</span>
								<span class="menu-title">Ruoli</span>
								<span class="menu-arrow"></span>
							</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/assign_role">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
												<span class="menu-title">Modifica</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->



								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
							<span class="menu-icon">
									<i class="ki-duotone ki-update-file fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
									</i>
							</span>
							<span class="menu-title">Excel</span>
							<span class="menu-arrow"></span>
						</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/import_veicolo">
									<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
									</span>
												<span class="menu-title">Inserisci Excel Veicoli</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->

								<a href="/logout">
									<div class="menu-item here menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
							<span class="menu-icon">
									<i class="ki-duotone ki-disconnect fs-2">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
									</i>
							</span>
								<span class="menu-title" style="color:red">LOGOUT</span>
						</span>
										<!--end:Menu link-->
									</div>
								</a>
								<!--end:Menu item-->

							</div>
							<!--end::Menu-->
						</div>
						<!--end::Scroll wrapper-->
					</div>
					<!--end::Menu wrapper-->
				</div>
				<!--end::sidebar menu-->
			</div>
			<!--end::Sidebar-->

			<script>
				const currentRoute = "/alert_revisione_meccanica";

				document.addEventListener('DOMContentLoaded', function () {
					var menuLinks = document.querySelectorAll('.menu-sub .menu-link[href]'); // Select only .menu-link with href inside .menu-sub

					menuLinks.forEach(function (link) {
						if (link.getAttribute('href') === currentRoute) {
							link.classList.add('active'); // Add 'active' to the matching link

							// Traverse to the grandparent to assign 'show'
							var grandParentMenuItem = link.parentElement.parentElement.parentElement;
							if (grandParentMenuItem) {
								grandParentMenuItem.classList.add('show');
							}

							// Locate the correct element for 'active' class in the grandparent
							var spanMenuLink = grandParentMenuItem.querySelector('.menu-link:not([href])');
							if (spanMenuLink) {
								spanMenuLink.classList.add('active');
							}
						}
					});
				});
			</script>





			<!--begin::Main-->
			<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
				<!--begin::Content wrapper-->
				<div class="d-flex flex-column flex-column-fluid">
					<form action="http://torental.bentraining.it/alert_revisione_meccanica" method="get">
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card header-->
									<div class="card-header border-0 pt-6">
										<!--begin::Card title-->
										<div class="card-title">
											<!--begin::Search-->
											<div class="d-flex align-items-center justify-content-center position-relative my-1">
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<!--begin::Toolbar-->
													<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
														<input type="text" name="search" value="" class="form-control form-control-solid w-850px ps-12" placeholder="Ricerca Targa" />

														<!--begin::Submit-->
														<button type="submit" class="btn btn-primary">Ricerca</button>
														<!--end::Submit-->

													</div>
													<!--begin::Pages-->
													<ul class="pagination align-middle"><li class="page-item previous disabled"><a href="#" class="page-link"><i class="previous"></i></a></li><li class="page-item active"><a href="http://torental.bentraining.it/alert_revisione_meccanica?page=1&" class="page-link">1</a></li><li class="page-item "><a href="http://torental.bentraining.it/alert_revisione_meccanica?page=2&" class="page-link">2</a></li><li class="page-item "><a href="http://torental.bentraining.it/alert_revisione_meccanica?page=3&" class="page-link">3</a></li><li class="page-item "><a href="http://torental.bentraining.it/alert_revisione_meccanica?page=4&" class="page-link">4</a></li><li class="page-item "><a href="http://torental.bentraining.it/alert_revisione_meccanica?page=5&" class="page-link">5</a></li><li class="page-item "><a href="http://torental.bentraining.it/alert_revisione_meccanica?page=6&" class="page-link">6</a></li><li class="page-item "><a href="http://torental.bentraining.it/alert_revisione_meccanica?page=7&" class="page-link">7</a></li><li class="page-item "><a href="http://torental.bentraining.it/alert_revisione_meccanica?page=8&" class="page-link">8</a></li><li class="page-item "><a href="http://torental.bentraining.it/alert_revisione_meccanica?page=9&" class="page-link">9</a></li><li class="page-item "><a href="http://torental.bentraining.it/alert_revisione_meccanica?page=10&" class="page-link">10</a></li><li class="page-item "><a href="http://torental.bentraining.it/alert_revisione_meccanica?page=11&" class="page-link">11</a></li><li class="page-item next "><a href="http://torental.bentraining.it/alert_revisione_meccanica?page=2&" class="page-link"><i class="next"></i></a></li><div class="d-flex flex-stack flex-wrap pt-10"><div class="fs-6 fw-semibold text-gray-700">Showing 1 to 25 of 1007 entries</div></div></ul>										<!--end::Pages-->
													<!--end::Toolbar-->
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end::Search-->
										</div>
										<!--begin::Card title-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Table-->
										<table class="table text-center align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
											<thead>
											<tr class="text-gray-400 fw-bold fs-7 text-uppercase gs-0">
												<th class="min-w-150px"><a href="http://torental.bentraining.it/alert_revisione_meccanica?order=livello_asc">Livello</a></th>
												<th class="min-w-150px"><a href="http://torental.bentraining.it/alert_revisione_meccanica?order=targa_asc">Targa</a></th>
												<th class="min-w-150px"><a href="http://torental.bentraining.it/alert_revisione_meccanica?order=marca_asc">Marca</a></th>
												<th class="min-w-150px"><a href="http://torental.bentraining.it/alert_revisione_meccanica?order=modello_asc">Modello</a></th>
												<th class="min-w-150px">Inizio Validit&agrave;</th>
												<th class="min-w-150px">Fine Validit&agrave;</th>
												<th class="text-end w-100px">Azioni</th>
											</tr>
											</thead>
											<tbody class="fw-semibold text-gray-600">

											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/32" class="text-gray-800 text-hover-white mb-1"> -->
													DE527MN
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/32" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/32" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/32" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/37" class="text-gray-800 text-hover-white mb-1"> -->
													DF473CW
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/37" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/37" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/37" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/38" class="text-gray-800 text-hover-white mb-1"> -->
													DF564DH
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/10" class="text-gray-800 text-hover-white mb-1"> -->
													MAN
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/21" class="text-gray-800 text-hover-white mb-1"> -->
													AG 18 FT
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/38" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/38" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/38" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/39" class="text-gray-800 text-hover-white mb-1"> -->
													DG266PC
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/39" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/39" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/39" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/42" class="text-gray-800 text-hover-white mb-1"> -->
													DG550CR
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/42" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/42" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/42" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/54" class="text-gray-800 text-hover-white mb-1"> -->
													DJ207FJ
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/54" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/54" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/54" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/62" class="text-gray-800 text-hover-white mb-1"> -->
													DJ603FJ
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/23" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35C12
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/62" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/62" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/62" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/69" class="text-gray-800 text-hover-white mb-1"> -->
													DJ998YP
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/69" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/69" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/69" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/77" class="text-gray-800 text-hover-white mb-1"> -->
													DL386CV
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/77" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/77" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/77" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/112" class="text-gray-800 text-hover-white mb-1"> -->
													DT027SL
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/112" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/112" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/112" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/113" class="text-gray-800 text-hover-white mb-1"> -->
													DT028SL
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/113" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/113" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/113" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/114" class="text-gray-800 text-hover-white mb-1"> -->
													DT029SL
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/114" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/114" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/114" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/115" class="text-gray-800 text-hover-white mb-1"> -->
													DT031SL
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/115" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/115" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/115" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/116" class="text-gray-800 text-hover-white mb-1"> -->
													DT161KV
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/12" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35J12
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/116" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/116" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/116" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/117" class="text-gray-800 text-hover-white mb-1"> -->
													DT368ZH
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/23" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35C12
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/117" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/117" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/117" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/119" class="text-gray-800 text-hover-white mb-1"> -->
													DV343ES
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/119" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/119" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/119" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/120" class="text-gray-800 text-hover-white mb-1"> -->
													DV344ES
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/120" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/120" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/120" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/139" class="text-gray-800 text-hover-white mb-1"> -->
													DY187FM
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/3" class="text-gray-800 text-hover-white mb-1"> -->
													FORD
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/42" class="text-gray-800 text-hover-white mb-1"> -->
													TRANSIT 300 M VAN 2.2
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/139" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/139" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/139" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/143" class="text-gray-800 text-hover-white mb-1"> -->
													EA059BY
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/16" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35C15
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/143" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/143" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/143" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/151" class="text-gray-800 text-hover-white mb-1"> -->
													EA869HE
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/23" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35C12
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/151" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/151" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/151" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/157" class="text-gray-800 text-hover-white mb-1"> -->
													EB683SJ
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/7" class="text-gray-800 text-hover-white mb-1"> -->
													MERCEDES BENZ
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/19" class="text-gray-800 text-hover-white mb-1"> -->
													SPRINTER 415 DT 43/35
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/157" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/157" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/157" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/164" class="text-gray-800 text-hover-white mb-1"> -->
													EC274ZT
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/6" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35/E4
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/164" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/164" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/164" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/165" class="text-gray-800 text-hover-white mb-1"> -->
													EC282XZ
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/14" class="text-gray-800 text-hover-white mb-1"> -->
													PEUGEOT
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/45" class="text-gray-800 text-hover-white mb-1"> -->
													BOXER
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/165" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/165" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/165" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/168" class="text-gray-800 text-hover-white mb-1"> -->
													EC564WM
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/7" class="text-gray-800 text-hover-white mb-1"> -->
													MERCEDES BENZ
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/40" class="text-gray-800 text-hover-white mb-1"> -->
													AG906
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/168" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/168" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/168" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>
											<tr
												class="bg-light-danger bg-hover-danger"
											>
												<td class="min-w-150px align-center">
													Mai Revisionato
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_veicolo/172" class="text-gray-800 text-hover-white mb-1"> -->
													EC995PP
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_marca/4" class="text-gray-800 text-hover-white mb-1"> -->
													IVECO
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_modello/16" class="text-gray-800 text-hover-white mb-1"> -->
													DAILY 35C15
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/172" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="min-w-150px">
													<!-- <a href="update_revisione/172" class="text-gray-800 text-hover-white mb-1"> -->
													N/A
													<!-- </a> -->
												</td>
												<td class="text-end w-100px">
													<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
														<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
														<!--begin::Menu item-->
														<a href="create_revisione/172" class="btn btn-success">
															<span class="indicator-label">Revisiona Mezzo</span>
														</a>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
											</tr>

											</tbody>
										</table>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->
					</form>
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
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!--end::App-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->

<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
	<div class="card shadow-none border-0 rounded-0">
		<!--begin::Header-->
		<div class="card-header" id="kt_activities_header">
			<h3 class="card-title fw-bold text-dark">Activity Logs</h3>
			<div class="card-toolbar">
				<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</button>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body position-relative" id="kt_activities_body">
			<!--begin::Content-->
			<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
				<!--begin::Timeline items-->
				<div class="timeline">
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
							<div class="symbol-label bg-light">
								<i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
								</i>
							</div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
										<img src="assets/media/avatars/300-14.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
							<!--begin::Timeline details-->
							<div class="overflow-auto pb-5">
								<!--begin::Record-->
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
									<!--begin::Title-->
									<a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
									<!--end::Title-->
									<!--begin::Label-->
									<div class="min-w-175px pe-2">
										<span class="badge badge-light text-muted">Application Design</span>
									</div>
									<!--end::Label-->
									<!--begin::Users-->
									<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<img src="assets/media/avatars/300-2.jpg" alt="img" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<img src="assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Progress-->
									<div class="min-w-125px pe-2">
										<span class="badge badge-light-primary">In Progress</span>
									</div>
									<!--end::Progress-->
									<!--begin::Action-->
									<a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
									<!--end::Action-->
								</div>
								<!--end::Record-->
								<!--begin::Record-->
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
									<!--begin::Title-->
									<a href="../../demo1/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
									<!--end::Title-->
									<!--begin::Label-->
									<div class="min-w-175px">
										<span class="badge badge-light text-muted">CRM System Development</span>
									</div>
									<!--end::Label-->
									<!--begin::Users-->
									<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<img src="assets/media/avatars/300-20.jpg" alt="img" />
										</div>
										<!--end::User-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px">
											<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Progress-->
									<div class="min-w-125px">
										<span class="badge badge-light-success">Completed</span>
									</div>
									<!--end::Progress-->
									<!--begin::Action-->
									<a href="../../demo1/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
									<!--end::Action-->
								</div>
								<!--end::Record-->
							</div>
							<!--end::Timeline details-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light">
								<i class="ki-duotone ki-flag fs-2 text-gray-500">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n2">
							<!--begin::Timeline heading-->
							<div class="overflow-auto pe-3">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
										<img src="assets/media/avatars/300-1.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light">
								<i class="ki-duotone ki-disconnect fs-2 text-gray-500">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
								</i>
							</div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="mb-5 pe-3">
								<!--begin::Title-->
								<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
										<img src="assets/media/avatars/300-23.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
							<!--begin::Timeline details-->
							<div class="overflow-auto pb-5">
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
									<!--begin::Item-->
									<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
										<!--begin::Icon-->
										<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="ms-1 fw-semibold">
											<!--begin::Desc-->
											<a href="../../demo1/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
											<!--end::Desc-->
											<!--begin::Number-->
											<div class="text-gray-400">1.9mb</div>
											<!--end::Number-->
										</div>
										<!--begin::Info-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
										<!--begin::Icon-->
										<img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="ms-1 fw-semibold">
											<!--begin::Desc-->
											<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
											<!--end::Desc-->
											<!--begin::Number-->
											<div class="text-gray-400">18kb</div>
											<!--end::Number-->
										</div>
										<!--end::Info-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-aligns-center">
										<!--begin::Icon-->
										<img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
										<!--end::Icon-->
										<!--begin::Info-->
										<div class="ms-1 fw-semibold">
											<!--begin::Desc-->
											<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
											<!--end::Desc-->
											<!--begin::Number-->
											<div class="text-gray-400">20mb</div>
											<!--end::Number-->
										</div>
										<!--end::Icon-->
									</div>
									<!--end::Item-->
								</div>
							</div>
							<!--end::Timeline details-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light">
								<i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">Task
									<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
									<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
										<img src="assets/media/avatars/300-14.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light">
								<i class="ki-duotone ki-pencil fs-2 text-gray-500">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
										<img src="assets/media/avatars/300-2.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
							<!--begin::Timeline details-->
							<div class="overflow-auto pb-5">
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
									<!--begin::Item-->
									<div class="overlay me-10">
										<!--begin::Image-->
										<div class="overlay-wrapper">
											<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
										</div>
										<!--end::Image-->
										<!--begin::Link-->
										<div class="overlay-layer bg-dark bg-opacity-10 rounded">
											<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="overlay me-10">
										<!--begin::Image-->
										<div class="overlay-wrapper">
											<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
										</div>
										<!--end::Image-->
										<!--begin::Link-->
										<div class="overlay-layer bg-dark bg-opacity-10 rounded">
											<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="overlay">
										<!--begin::Image-->
										<div class="overlay-wrapper">
											<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
										</div>
										<!--end::Image-->
										<!--begin::Link-->
										<div class="overlay-layer bg-dark bg-opacity-10 rounded">
											<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
										</div>
										<!--end::Link-->
									</div>
									<!--end::Item-->
								</div>
							</div>
							<!--end::Timeline details-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light">
								<i class="ki-duotone ki-sms fs-2 text-gray-500">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">New case
									<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="overflow-auto pb-5">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
										<!--end::User-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light">
								<i class="ki-duotone ki-pencil fs-2 text-gray-500">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mb-10 mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
										<img src="assets/media/avatars/300-4.jpg" alt="img" />
									</div>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
							<!--begin::Timeline details-->
							<div class="overflow-auto pb-5">
								<!--begin::Notice-->
								<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
									<!--begin::Icon-->
									<i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
										<span class="path1"></span>
										<span class="path2"></span>
										<span class="path3"></span>
									</i>
									<!--end::Icon-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
										<!--begin::Content-->
										<div class="mb-3 mb-md-0 fw-semibold">
											<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
											<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
										</div>
										<!--end::Content-->
										<!--begin::Action-->
										<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
										<!--end::Action-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Notice-->
							</div>
							<!--end::Timeline details-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
					<!--begin::Timeline item-->
					<div class="timeline-item">
						<!--begin::Timeline line-->
						<div class="timeline-line w-40px"></div>
						<!--end::Timeline line-->
						<!--begin::Timeline icon-->
						<div class="timeline-icon symbol symbol-circle symbol-40px">
							<div class="symbol-label bg-light">
								<i class="ki-duotone ki-basket fs-2 text-gray-500">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</div>
						</div>
						<!--end::Timeline icon-->
						<!--begin::Timeline content-->
						<div class="timeline-content mt-n1">
							<!--begin::Timeline heading-->
							<div class="pe-3 mb-5">
								<!--begin::Title-->
								<div class="fs-5 fw-semibold mb-2">New order
									<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="d-flex align-items-center mt-1 fs-6">
									<!--begin::Info-->
									<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
									<!--end::Info-->
									<!--begin::User-->
									<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
									<!--end::User-->
								</div>
								<!--end::Description-->
							</div>
							<!--end::Timeline heading-->
						</div>
						<!--end::Timeline content-->
					</div>
					<!--end::Timeline item-->
				</div>
				<!--end::Timeline items-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Body-->
		<!--begin::Footer-->
		<div class="card-footer py-5 text-center" id="kt_activities_footer">
			<a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
				<i class="ki-duotone ki-arrow-right fs-3 text-primary">
					<span class="path1"></span>
					<span class="path2"></span>
				</i></a>
		</div>
		<!--end::Footer-->
	</div>
</div>
<!--end::Activities drawer-->
<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
	<!--begin::Messenger-->
	<div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
		<!--begin::Card header-->
		<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
			<!--begin::Title-->
			<div class="card-title">
				<!--begin::User-->
				<div class="d-flex justify-content-center flex-column me-3">
					<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
					<!--begin::Info-->
					<div class="mb-0 lh-1">
						<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
						<span class="fs-7 fw-semibold text-muted">Active</span>
					</div>
					<!--end::Info-->
				</div>
				<!--end::User-->
			</div>
			<!--end::Title-->
			<!--begin::Card toolbar-->
			<div class="card-toolbar">
				<!--begin::Menu-->
				<div class="me-0">
					<button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
						<i class="ki-duotone ki-dots-square fs-2">
							<span class="path1"></span>
							<span class="path2"></span>
							<span class="path3"></span>
							<span class="path4"></span>
						</i>
					</button>
					<!--begin::Menu 3-->
					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
						<!--begin::Heading-->
						<div class="menu-item px-3">
							<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
						</div>
						<!--end::Heading-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
								<span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
										<i class="ki-duotone ki-information fs-7">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span></a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
							<a href="#" class="menu-link px-3">
								<span class="menu-title">Groups</span>
								<span class="menu-arrow"></span>
							</a>
							<!--begin::Menu sub-->
							<div class="menu-sub menu-sub-dropdown w-175px py-4">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu sub-->
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3 my-1">
							<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu 3-->
				</div>
				<!--end::Menu-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
					<i class="ki-duotone ki-cross-square fs-2">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Card toolbar-->
		</div>
		<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body" id="kt_drawer_chat_messenger_body">
			<!--begin::Messages-->
			<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">2 mins</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(out)-->
				<div class="d-flex justify-content-end mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">5 mins</span>
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(out)-->
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">1 Hour</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(out)-->
				<div class="d-flex justify-content-end mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">2 Hours</span>
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(out)-->
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">3 Hours</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
							<a href="https://keenthemes.com">Keenthemes.com</a></div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(out)-->
				<div class="d-flex justify-content-end mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">4 Hours</span>
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(out)-->
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">5 Hours</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(template for out)-->
				<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">Just now</span>
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(template for out)-->
				<!--begin::Message(template for in)-->
				<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">Just now</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(template for in)-->
			</div>
			<!--end::Messages-->
		</div>
		<!--end::Card body-->
		<!--begin::Card footer-->
		<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
			<!--begin::Input-->
			<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
			<!--end::Input-->
			<!--begin:Toolbar-->
			<div class="d-flex flex-stack">
				<!--begin::Actions-->
				<div class="d-flex align-items-center me-2">
					<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
						<i class="ki-duotone ki-paper-clip fs-3"></i>
					</button>
					<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
						<i class="ki-duotone ki-cloud-add fs-3">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
					</button>
				</div>
				<!--end::Actions-->
				<!--begin::Send-->
				<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
				<!--end::Send-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Card footer-->
	</div>
	<!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--begin::Chat drawer-->
<div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">
	<!--begin::Messenger-->
	<div class="card card-flush w-100 rounded-0">
		<!--begin::Card header-->
		<div class="card-header">
			<!--begin::Title-->
			<h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
			<!--end::Title-->
			<!--begin::Card toolbar-->
			<div class="card-toolbar">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
					<i class="ki-duotone ki-cross fs-2">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Card toolbar-->
		</div>
		<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body hover-scroll-overlay-y h-400px pt-5">
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
						<span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 350</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">5</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-1.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
						<span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 650</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">4</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-3.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
						<span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 150</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">3</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-8.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
						<span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 1450</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-26.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
						<span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 650</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">7</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-21.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
						<span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 720</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">6</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-34.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
			<!--begin::Separator-->
			<div class="separator separator-dashed my-6"></div>
			<!--end::Separator-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column me-3">
					<!--begin::Section-->
					<div class="mb-3">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
						<span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
					</div>
					<!--end::Section-->
					<!--begin::Section-->
					<div class="d-flex align-items-center">
						<span class="fw-bold text-gray-800 fs-5">$ 430</span>
						<span class="text-muted mx-2">for</span>
						<span class="fw-bold text-gray-800 fs-5 me-3">8</span>
						<a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
							<i class="ki-duotone ki-minus fs-4"></i>
						</a>
						<a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
							<i class="ki-duotone ki-plus fs-4"></i>
						</a>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Pic-->
				<div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
					<img src="assets/media/stock/600x400/img-27.jpg" alt="" />
				</div>
				<!--end::Pic-->
			</div>
			<!--end::Item-->
		</div>
		<!--end::Card body-->
		<!--begin::Card footer-->
		<div class="card-footer">
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<span class="fw-bold text-gray-600">Total</span>
				<span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="d-flex flex-stack">
				<span class="fw-bold text-gray-600">Sub total</span>
				<span class="text-primary fw-bolder fs-5">$ 246.35</span>
			</div>
			<!--end::Item-->
			<!--end::Action-->
			<div class="d-flex justify-content-end mt-9">
				<a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
			</div>
			<!--end::Action-->
		</div>
		<!--end::Card footer-->
	</div>
	<!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-duotone ki-arrow-up">
		<span class="path1"></span>
		<span class="path2"></span>
	</i>
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-xl">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header justify-content-end border-0 pb-0">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
				<!--begin::Heading-->
				<div class="mb-13 text-center">
					<h1 class="mb-3">Upgrade a Plan</h1>
					<div class="text-muted fw-semibold fs-5">If you need more info, please check
						<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.</div>
				</div>
				<!--end::Heading-->
				<!--begin::Plans-->
				<div class="d-flex flex-column">
					<!--begin::Nav group-->
					<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
						<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
						<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
					</div>
					<!--end::Nav group-->
					<!--begin::Row-->
					<div class="row mt-10">
						<!--begin::Col-->
						<div class="col-lg-6 mb-10 mb-lg-0">
							<!--begin::Tabs-->
							<div class="nav flex-column">
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
											<div class="fw-semibold opacity-75">Best for startups</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
										<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" value="advanced" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
											<div class="fw-semibold opacity-75">Best for 100+ team size</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
										<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" value="enterprise" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
												<span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span></div>
											<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
										<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
											<input class="form-check-input" type="radio" name="plan" value="custom" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
											<div class="fw-semibold opacity-75">Requet a custom license</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<a href="#" class="btn btn-sm btn-success">Contact Us</a>
									</div>
									<!--end::Price-->
								</label>
								<!--end::Tab link-->
							</div>
							<!--end::Tabs-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-6">
							<!--begin::Tab content-->
							<div class="tab-content rounded h-100 bg-light p-10">
								<!--begin::Tab Pane-->
								<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
											<i class="ki-duotone ki-cross-circle fs-1">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_custom">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-semibold">Optimal for corporations</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
											<i class="ki-duotone ki-check-circle fs-1 text-success">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
							</div>
							<!--end::Tab content-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Plans-->
				<!--begin::Actions-->
				<div class="d-flex flex-center flex-row-fluid pt-12">
					<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
						<!--begin::Indicator label-->
						<span class="indicator-label">Upgrade Plan</span>
						<!--end::Indicator label-->
						<!--begin::Indicator progress-->
						<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						<!--end::Indicator progress-->
					</button>
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan-->
<!--begin::Modal - Create App-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-900px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Modal title-->
				<h2>Create App</h2>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body py-lg-10 px-lg-10">
				<!--begin::Stepper-->
				<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
					<!--begin::Aside-->
					<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
						<!--begin::Nav-->
						<div class="stepper-nav ps-lg-10">
							<!--begin::Step 1-->
							<div class="stepper-item current" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">1</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Details</h3>
										<div class="stepper-desc">Name your App</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">2</span>
									</div>
									<!--begin::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Frameworks</h3>
										<div class="stepper-desc">Define your app framework</div>
									</div>
									<!--begin::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">3</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Database</h3>
										<div class="stepper-desc">Select the app database type</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">4</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Billing</h3>
										<div class="stepper-desc">Provide payment details</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Line-->
								<div class="stepper-line h-40px"></div>
								<!--end::Line-->
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div class="stepper-item mark-completed" data-kt-stepper-element="nav">
								<!--begin::Wrapper-->
								<div class="stepper-wrapper">
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="ki-duotone ki-check stepper-check fs-2"></i>
										<span class="stepper-number">5</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Completed</h3>
										<div class="stepper-desc">Review and Submit</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Step 5-->
						</div>
						<!--end::Nav-->
					</div>
					<!--begin::Aside-->
					<!--begin::Content-->
					<div class="flex-row-fluid py-lg-5 px-lg-15">
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
							<!--begin::Step 1-->
							<div class="current" data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
											<span class="required">App Name</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
										</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
											<span class="required">Category</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Select your app category">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
										</label>
										<!--end::Label-->
										<!--begin:Options-->
										<div class="fv-row">
											<!--begin:Option-->
											<label class="d-flex flex-stack mb-5 cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-primary">
																	<i class="ki-duotone ki-compass fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
															</span>
													<!--end:Icon-->
													<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Quick Online Courses</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
															</span>
													<!--end:Info-->
														</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="1" />
														</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack mb-5 cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-danger">
																	<i class="ki-duotone ki-element-11 fs-1 text-danger">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																		<span class="path4"></span>
																	</i>
																</span>
															</span>
													<!--end:Icon-->
													<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Face to Face Discussions</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
															</span>
													<!--end:Info-->
														</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="2" />
														</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-success">
																	<i class="ki-duotone ki-timer fs-1 text-success">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</span>
													<!--end:Icon-->
													<!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bold fs-6">Full Intro Training</span>
																<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
															</span>
													<!--end:Info-->
														</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="3" />
														</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
										</div>
										<!--end:Options-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
											<span class="required">Select Framework</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
										</label>
										<!--end::Label-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="ki-duotone ki-html fs-2x text-warning">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
												<!--end:Icon-->
												<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">HTML5</span>
															<span class="fs-7 text-muted">Base Web Projec</span>
														</span>
												<!--end:Info-->
													</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
													</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="ki-duotone ki-react fs-2x text-success">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
												<!--end:Icon-->
												<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">ReactJS</span>
															<span class="fs-7 text-muted">Robust and flexible app framework</span>
														</span>
												<!--end:Info-->
													</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="2" />
													</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="ki-duotone ki-angular fs-2x text-danger">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</span>
												<!--end:Icon-->
												<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Angular</span>
															<span class="fs-7 text-muted">Powerful data mangement</span>
														</span>
												<!--end:Info-->
													</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="3" />
													</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-primary">
																<i class="ki-duotone ki-vue fs-2x text-primary">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
												<!--end:Icon-->
												<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Vue</span>
															<span class="fs-7 text-muted">Lightweight and responsive framework</span>
														</span>
												<!--end:Info-->
													</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="4" />
													</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="required fs-5 fw-semibold mb-2">Database Name</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
											<span class="required">Select Database Engine</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Select your app database engine">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
										</label>
										<!--end::Label-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin::Label-->
											<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="ki-duotone ki-note text-success fs-2x">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
												<!--end::Icon-->
												<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">MySQL</span>
															<span class="fs-7 text-muted">Basic MySQL database</span>
														</span>
												<!--end::Info-->
													</span>
											<!--end::Label-->
											<!--begin::Input-->
											<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
													</span>
											<!--end::Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin::Label-->
											<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="ki-duotone ki-google text-danger fs-2x">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>
															</span>
														</span>
												<!--end::Icon-->
												<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Firebase</span>
															<span class="fs-7 text-muted">Google based app data management</span>
														</span>
												<!--end::Info-->
													</span>
											<!--end::Label-->
											<!--begin::Input-->
											<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="2" />
													</span>
											<!--end::Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer">
											<!--begin::Label-->
											<span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="ki-duotone ki-microsoft text-warning fs-2x">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>
															</span>
														</span>
												<!--end::Icon-->
												<!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">DynamoDB</span>
															<span class="fs-7 text-muted">Microsoft Fast NoSQL Database</span>
														</span>
												<!--end::Info-->
													</span>
											<!--end::Label-->
											<!--begin::Input-->
											<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="3" />
													</span>
											<!--end::Input-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-7 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
											<span class="required">Name On Card</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
														<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</span>
										</label>
										<!--end::Label-->
										<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-7 fv-row">
										<!--begin::Label-->
										<label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
										<!--end::Label-->
										<!--begin::Input wrapper-->
										<div class="position-relative">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
											<!--end::Input-->
											<!--begin::Card logos-->
											<div class="position-absolute translate-middle-y top-50 end-0 me-5">
												<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
												<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
												<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
											</div>
											<!--end::Card logos-->
										</div>
										<!--end::Input wrapper-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Col-->
										<div class="col-md-8 fv-row">
											<!--begin::Label-->
											<label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row fv-row">
												<!--begin::Col-->
												<div class="col-6">
													<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
														<option></option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
														<option></option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
														<option value="2025">2025</option>
														<option value="2026">2026</option>
														<option value="2027">2027</option>
														<option value="2028">2028</option>
														<option value="2029">2029</option>
														<option value="2030">2030</option>
														<option value="2031">2031</option>
														<option value="2032">2032</option>
														<option value="2033">2033</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-4 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
												<span class="required">CVV</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
															<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span>
											</label>
											<!--end::Label-->
											<!--begin::Input wrapper-->
											<div class="position-relative">
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
												<!--end::Input-->
												<!--begin::CVV icon-->
												<div class="position-absolute translate-middle-y top-50 end-0 me-3">
													<i class="ki-duotone ki-credit-cart fs-2hx">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</div>
												<!--end::CVV icon-->
											</div>
											<!--end::Input wrapper-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-stack">
										<!--begin::Label-->
										<div class="me-5">
											<label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
											<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
										</div>
										<!--end::Label-->
										<!--begin::Switch-->
										<label class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" checked="checked" />
											<span class="form-check-label fw-semibold text-muted">Save Card</span>
										</label>
										<!--end::Switch-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div data-kt-stepper-element="content">
								<div class="w-100 text-center">
									<!--begin::Heading-->
									<h1 class="fw-bold text-dark mb-3">Release!</h1>
									<!--end::Heading-->
									<!--begin::Description-->
									<div class="text-muted fw-semibold fs-3">Submit your app to kickstart your project.</div>
									<!--end::Description-->
									<!--begin::Illustration-->
									<div class="text-center px-4 py-15">
										<img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
									</div>
									<!--end::Illustration-->
								</div>
							</div>
							<!--end::Step 5-->
							<!--begin::Actions-->
							<div class="d-flex flex-stack pt-10">
								<!--begin::Wrapper-->
								<div class="me-2">
									<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<i class="ki-duotone ki-arrow-left fs-3 me-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>Back</button>
								</div>
								<!--end::Wrapper-->
								<!--begin::Wrapper-->
								<div>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">Submit
												<i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
													<span class="path1"></span>
													<span class="path2"></span>
												</i></span>
										<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
										<i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0">
											<span class="path1"></span>
											<span class="path2"></span>
										</i></button>
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Stepper-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Create App-->
<!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
				<!--begin:Form-->
				<form id="kt_modal_new_target_form" class="form" action="#">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Set First Target</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-semibold fs-5">If you need more info, please check
							<a href="#" class="fw-bold link-primary">Project Guidelines</a>.</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
							<span class="required">Target Title</span>
							<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
						</label>
						<!--end::Label-->
						<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Assign</label>
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
								<option value="">Select user...</option>
								<option value="1">Karina Clark</option>
								<option value="2">Robert Doe</option>
								<option value="3">Niel Owen</option>
								<option value="4">Olivia Wild</option>
								<option value="5">Sean Bean</option>
							</select>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-semibold mb-2">Due Date</label>
							<!--begin::Input-->
							<div class="position-relative d-flex align-items-center">
								<!--begin::Icon-->
								<i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
									<span class="path6"></span>
								</i>
								<!--end::Icon-->
								<!--begin::Datepicker-->
								<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
								<!--end::Datepicker-->
							</div>
							<!--end::Input-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8">
						<label class="fs-6 fw-semibold mb-2">Target Details</label>
						<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
							<span class="required">Tags</span>
							<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target priorty">
										<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
										</i>
									</span>
						</label>
						<!--end::Label-->
						<input class="form-control form-control-solid" value="Important, Urgent" name="tags" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="d-flex flex-stack mb-8">
						<!--begin::Label-->
						<div class="me-5">
							<label class="fs-6 fw-semibold">Adding Users by Team Members</label>
							<div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
							<span class="form-check-label fw-semibold text-muted">Allowed</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="mb-15 fv-row">
						<!--begin::Wrapper-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="fw-semibold me-5">
								<label class="fs-6">Notifications</label>
								<div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
							</div>
							<!--end::Label-->
							<!--begin::Checkboxes-->
							<div class="d-flex align-items-center">
								<!--begin::Checkbox-->
								<label class="form-check form-check-custom form-check-solid me-10">
									<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
									<span class="form-check-label fw-semibold">Email</span>
								</label>
								<!--end::Checkbox-->
								<!--begin::Checkbox-->
								<label class="form-check form-check-custom form-check-solid">
									<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
									<span class="form-check-label fw-semibold">Phone</span>
								</label>
								<!--end::Checkbox-->
							</div>
							<!--end::Checkboxes-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Input group-->
					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end:Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
<!--begin::Modal - View Users-->
<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Heading-->
				<div class="text-center mb-13">
					<!--begin::Title-->
					<h1 class="mb-3">Browse Users</h1>
					<!--end::Title-->
					<!--begin::Description-->
					<div class="text-muted fw-semibold fs-5">If you need more info, please check out our
						<a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
					<!--end::Description-->
				</div>
				<!--end::Heading-->
				<!--begin::Users-->
				<div class="mb-15">
					<!--begin::List-->
					<div class="mh-375px scroll-y me-n7 pe-7">
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Smith
										<span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">smith@kpmg.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$23,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Melody Macy
										<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">melody@altbox.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$50,500</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Max Smith
										<span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">max@kt.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$75,900</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Sean Bean
										<span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">sean@dellito.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$10,500</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Brian Cox
										<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">brian@exchange.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$20,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Mikaela Collins
										<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">mik@pex.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$9,300</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Francis Mitcham
										<span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$15,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Olivia Wild
										<span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">olivia@corpmail.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$23,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Neil Owen
										<span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$45,800</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Dan Wilson
										<span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">dam@consilting.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$90,500</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Bold
										<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">emma@intenso.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$5,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Ana Crown
										<span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$70,000</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-5">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-6">
									<!--begin::Name-->
									<a href="#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Robert Doe
										<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
									<!--end::Name-->
									<!--begin::Email-->
									<div class="fw-semibold text-muted">robert@benko.com</div>
									<!--end::Email-->
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Stats-->
							<div class="d-flex">
								<!--begin::Sales-->
								<div class="text-end">
									<div class="fs-5 fw-bold text-dark">$45,500</div>
									<div class="fs-7 text-muted">Sales</div>
								</div>
								<!--end::Sales-->
							</div>
							<!--end::Stats-->
						</div>
						<!--end::User-->
					</div>
					<!--end::List-->
				</div>
				<!--end::Users-->
				<!--begin::Notice-->
				<div class="d-flex justify-content-between">
					<!--begin::Label-->
					<div class="fw-semibold">
						<label class="fs-6">Adding Users by Team Members</label>
						<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
					</div>
					<!--end::Label-->
					<!--begin::Switch-->
					<label class="form-check form-switch form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="" checked="checked" />
						<span class="form-check-label fw-semibold text-muted">Allowed</span>
					</label>
					<!--end::Switch-->
				</div>
				<!--end::Notice-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - View Users-->
<!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Content-->
				<div class="text-center mb-13">
					<h1 class="mb-3">Search Users</h1>
					<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
				</div>
				<!--end::Content-->
				<!--begin::Search-->
				<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
					<!--begin::Form-->
					<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
						<!--begin::Hidden input(Added to disable form autocomplete)-->
						<input type="hidden" />
						<!--end::Hidden input-->
						<!--begin::Icon-->
						<i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
							<span class="path1"></span>
							<span class="path2"></span>
						</i>
						<!--end::Icon-->
						<!--begin::Input-->
						<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
						<!--end::Input-->
						<!--begin::Spinner-->
						<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
						<!--end::Spinner-->
						<!--begin::Reset-->
						<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
						<!--end::Reset-->
					</form>
					<!--end::Form-->
					<!--begin::Wrapper-->
					<div class="py-5">
						<!--begin::Suggestions-->
						<div data-kt-search-element="suggestions">
							<!--begin::Heading-->
							<h3 class="fw-semibold mb-5">Recently searched:</h3>
							<!--end::Heading-->
							<!--begin::Users-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
										<span class="badge badge-light">Art Director</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
										<span class="badge badge-light">Marketing Analytic</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Max Smith</span>
										<span class="badge badge-light">Software Enginer</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
										<span class="badge badge-light">Web Developer</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
								<!--begin::User-->
								<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle me-5">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Info-->
									<div class="fw-semibold">
										<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
										<span class="badge badge-light">UI/UX Designer</span>
									</div>
									<!--end::Info-->
								</a>
								<!--end::User-->
							</div>
							<!--end::Users-->
						</div>
						<!--end::Suggestions-->
						<!--begin::Results(add d-none to below element to hide the users list by default)-->
						<div data-kt-search-element="results" class="d-none">
							<!--begin::Users-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
											<div class="fw-semibold text-muted">sean@dellito.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
											<div class="fw-semibold text-muted">brian@exchange.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
											<div class="fw-semibold text-muted">mik@pex.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
											<div class="fw-semibold text-muted">dam@consilting.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
											<div class="fw-semibold text-muted">emma@intenso.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
											<div class="fw-semibold text-muted">miller@mapple.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::Separator-->
								<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
								<!--end::Separator-->
								<!--begin::User-->
								<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Checkbox-->
										<label class="form-check form-check-custom form-check-solid me-5">
											<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
										</label>
										<!--end::Checkbox-->
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
							</div>
							<!--end::Users-->
							<!--begin::Actions-->
							<div class="d-flex flex-center mt-15">
								<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
								<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Results-->
						<!--begin::Empty-->
						<div data-kt-search-element="empty" class="text-center d-none">
							<!--begin::Message-->
							<div class="fw-semibold py-10">
								<div class="text-gray-600 fs-3 mb-2">No users found</div>
								<div class="text-muted fs-6">Try to search by username, full name or email...</div>
							</div>
							<!--end::Message-->
							<!--begin::Illustration-->
							<div class="text-center px-5">
								<img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
							</div>
							<!--end::Illustration-->
						</div>
						<!--end::Empty-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Search-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<i class="ki-duotone ki-cross fs-1">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Heading-->
				<div class="text-center mb-13">
					<!--begin::Title-->
					<h1 class="mb-3">Invite a Friend</h1>
					<!--end::Title-->
					<!--begin::Description-->
					<div class="text-muted fw-semibold fs-5">If you need more info, please check out
						<a href="#" class="link-primary fw-bold">FAQ Page</a>.</div>
					<!--end::Description-->
				</div>
				<!--end::Heading-->
				<!--begin::Google Contacts Invite-->
				<div class="btn btn-light-primary fw-bold w-100 mb-8">
					<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
				<!--end::Google Contacts Invite-->
				<!--begin::Separator-->
				<div class="separator d-flex flex-center mb-8">
					<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
				</div>
				<!--end::Separator-->
				<!--begin::Textarea-->
				<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
				<!--end::Textarea-->
				<!--begin::Users-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
					<!--end::Heading-->
					<!--begin::List-->
					<div class="mh-300px scroll-y me-n7 pe-7">
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
									<div class="fw-semibold text-muted">smith@kpmg.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
									<div class="fw-semibold text-muted">melody@altbox.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
									<div class="fw-semibold text-muted">max@kt.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
									<div class="fw-semibold text-muted">sean@dellito.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
									<div class="fw-semibold text-muted">brian@exchange.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
									<div class="fw-semibold text-muted">mik@pex.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
									<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
									<div class="fw-semibold text-muted">olivia@corpmail.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
									<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
									<div class="fw-semibold text-muted">dam@consilting.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
									<div class="fw-semibold text-muted">emma@intenso.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
									<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
									<div class="fw-semibold text-muted">robert@benko.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
									<div class="fw-semibold text-muted">miller@mapple.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
									<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
									<div class="fw-semibold text-muted">ethan@loop.com.au</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
									<div class="fw-semibold text-muted">emma@intenso.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
					</div>
					<!--end::List-->
				</div>
				<!--end::Users-->
				<!--begin::Notice-->
				<div class="d-flex flex-stack">
					<!--begin::Label-->
					<div class="me-5 fw-semibold">
						<label class="fs-6">Adding Users by Team Members</label>
						<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
					</div>
					<!--end::Label-->
					<!--begin::Switch-->
					<label class="form-check form-switch form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="1" checked="checked" />
						<span class="form-check-label fw-semibold text-muted">Allowed</span>
					</label>
					<!--end::Switch-->
				</div>
				<!--end::Notice-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="http://torental.bentraining.it/assets/plugins/global/plugins.bundle.js"></script>
<script src="http://torental.bentraining.it/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="http://torental.bentraining.it/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="http://torental.bentraining.it/assets/js/widgets.bundle.js"></script>
<script src="http://torental.bentraining.it/assets/js/custom/widgets.js"></script>
<script src="http://torental.bentraining.it/assets/js/custom/apps/chat/chat.js"></script>
<script src="http://torental.bentraining.it/assets/js/custom/authentication/sign-in/general.js"></script>
<script src="http://torental.bentraining.it/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="http://torental.bentraining.it/assets/js/custom/utilities/modals/create-app.js"></script>
<script src="http://torental.bentraining.it/assets/js/custom/utilities/modals/new-target.js"></script>
<script src="http://torental.bentraining.it/assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->

</body>
<!--end::Body-->
</html>
