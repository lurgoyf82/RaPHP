<?php

	use Illuminate\Support\Facades\Cache;
	use App\Models\Alert;

	$routePath = request()->path();
	Alert::getAllAggregatedAlertsSummary();
	$alerts = Cache::remember('alerts', 60, function () {
		return Alert::getAllAggregatedAlertsSummary();
	});


	$class_alerts = array('0' => 'badge-secondary', '1' => 'badge-primary', '2' => 'badge-success', '3' => 'badge-warning', '4' => 'badge-danger', '5' => 'badge-danger', '6' => 'badge-dark');

	$count_alerts = $alerts[0];
	$color_alerts = $alerts[1];

?>
        <!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
     data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="{{ route('dashboard') }}">
            <img alt="Logo" src="{{ asset('assets/media/logos/logo-furgoni-2.svg') }}"
                 class="h-25px app-sidebar-logo-default"/>
            <img alt="Logo" src="{{ asset('assets/media/logos/logo-furgoni-2.svg') }}"
                 class="h-20px app-sidebar-logo-minimize"/>
        </a>
        <!--end::Logo image-->
			<?php
				//include_once('sidebar-toggle.php')
			?>
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
                    @include('sidebar.dashboard.title')
                    @include('sidebar.dashboard.menu')


                    <!--            ALERTS            -->
                    @include('sidebar.alert.title')
                    @include('sidebar.alert.menu')


                    <!--            VEICOLO            -->
                    @include('sidebar.veicolo.title')
                    @include('sidebar.veicolo.menu')

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
                    {{-- @include('sidebar.assicurazione.title') --}}
                    @include('sidebar.assicurazione.menu')

                    <!--            ATP            -->
                    {{-- @include('sidebar.atp.title') --}}
                    @include('sidebar.atp.menu')

                    <!--            BOLLO            -->
                    {{-- @include('sidebar.bollo.title') --}}
                    @include('sidebar.bollo.menu')

                    <!--            BOMBOLE            -->
                    {{-- @include('sidebar.bombole.title') --}}
                    @include('sidebar.bombole.menu')

                    <!--            DECORAZIONE            -->
                    @if(Route::has('list_decorazione'))
											@include('sidebar.decorazione.menu')
                    @endif

										<!--            MULTE            -->
                    @can('edit roles')
											@include('sidebar.multa.menu')
                    @endcan

                    <!--            REVISIONE            -->
                    {{-- @include('sidebar.revisione.title') --}}
                    @include('sidebar.revisione.menu')

                    <!--            TACHIGRAFO            -->
                    {{-- @include('sidebar.tachigrafo.title') --}}
                    @include('sidebar.tachigrafo.menu')

                    <!--            TAGLIANDO            -->
                    {{-- @include('sidebar.tagliando.title') --}}
                    @include('sidebar.tagliando.menu')

                    <!--            STAZIONAMENTO PROLUNGATO            -->
                    @include('sidebar.stazionamento.title')
                    @include('sidebar.stazionamento.menu')
                    @can('edit roles')
                        {{-- @include('sidebar.stazionamento.menu') --}}
                    @endcan


                    <!--begin:Menu item-->
                    <div class="menu-item pt-5">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-heading fw-bold text-uppercase fs-7">Config</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->

                    @include('sidebar.ruoli.menu')
                    @can('edit roles')
                        <!--            GESTIONE RUOLI            -->
                        {{-- Check if the user has the 'edit roles' permission --}}
                        <!-- HTML content that should only be visible to users with the 'edit roles' permission -->
                    @endcan



                    @include('sidebar.import.menu')
                    @if(request()->is('import_*'))

                    @endif

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
	const currentRoute = "/{{ explode('/', request()->path())[0] }}";

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





