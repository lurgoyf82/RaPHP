<?php
	use App\Models\Alert;
	//use App\Models\Revisione;
	//Revisione::getAlerts();
	$expiring=$results;
	$alert_revisione_meccanica='alert_polizza_assicurativa';
?>
	<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<form action="{{ url($alert_revisione_meccanica) }}" method="get">
			<!--begin::Content-->
			<div id="kt_app_content" class="app-content flex-column-fluid" style="width: 1200px;">
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
											<input type="text" name="search" value="{{ request('search') }}" class="form-control form-control-solid w-850px ps-12" placeholder="Ricerca Targa" />

											<!--begin::Submit-->
											<button type="submit" class="btn btn-primary">Ricerca</button>
											<!--end::Submit-->

										</div>
										<!--begin::Pages-->
										@php
											renderPagination($expiring, request('search'), request('order'),11);
										@endphp
											<!--end::Pages-->
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
									<th class="min-w-150px"><a href="{{ generate_order_url($alert_revisione_meccanica, 'livello') }}">Livello</a></th>
									<th class="min-w-150px"><a href="{{ generate_order_url($alert_revisione_meccanica, 'targa') }}">Targa</a></th>
									<th class="min-w-150px"><a href="{{ generate_order_url($alert_revisione_meccanica, 'marca') }}">Marca</a></th>
									<th class="min-w-150px"><a href="{{ generate_order_url($alert_revisione_meccanica, 'modello') }}">Modello</a></th>
									<th class="min-w-150px">Inizio Validit&agrave;</th>
									<th class="min-w-150px">Fine Validit&agrave;</th>
									<th class="text-end w-100px">Azioni</th>
								</tr>
								</thead>
								<tbody class="fw-semibold text-gray-600">

								@foreach($expiring as $row)
										<?php
										if($row->livello >= Alert::$thirdThreshold) {
											continue;
										}
										?>
									<tr
										@if($row->livello<=Alert::$firstThreshold)
											class="bg-light-danger bg-hover-danger"
										@elseif($row->livello<=Alert::$secondThreshold)
											class="bg-light-warning bg-hover-warning"
										@elseif($row->livello<=Alert::$thirdThreshold)
											class="bg-light-primary bg-hover-primary"
										@endif
									>
										<td class="min-w-150px align-center">
											@if(!isset($row->livello))
												Mai Revisionato
											@elseif($row->livello<0)
												Scaduto da {{ -$row->livello }} giorni
											@else
												Scade tra {{ $row->livello }} giorni
											@endif
										</td>
										<td class="min-w-150px">
											<!-- <a href="update_veicolo/{{ $row->id_veicolo }}" class="text-gray-800 text-hover-white mb-1"> -->
											{{ $row->targa ?? 'N/A' }}
											<!-- </a> -->
										</td>
										<td class="min-w-150px">
											<!-- <a href="update_marca/{{ $row->id_marca }}" class="text-gray-800 text-hover-white mb-1"> -->
											{{ $row->marca ?? 'N/A' }}
											<!-- </a> -->
										</td>
										<td class="min-w-150px">
											<!-- <a href="update_modello/{{ $row->id_modello }}" class="text-gray-800 text-hover-white mb-1"> -->
											{{ $row->modello ?? 'N/A' }}
											<!-- </a> -->
										</td>
										<td class="min-w-150px">
											<!-- <a href="update_revisione/{{ $row->id_veicolo }}" class="text-gray-800 text-hover-white mb-1"> -->
											{{ $row->inizio_validita ?? 'N/A' }}
											<!-- </a> -->
										</td>
										<td class="min-w-150px">
											<!-- <a href="update_revisione/{{ $row->id_veicolo }}" class="text-gray-800 text-hover-white mb-1"> -->
											{{ $row->fine_validita ?? 'N/A' }}
											<!-- </a> -->
										</td>
										<td class="text-end w-100px">
											<a href="#" class="btn btn-sm btn-light-primary btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Azioni
												<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-success fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
												<!--begin::Menu item-->
												<a href="create_assicurazione/{{$row->id_veicolo}}" class="btn btn-success">
													<span class="indicator-label">Assicura Mezzo</span>
												</a>
												<!--end::Menu item-->
												@if($row->id)
													<!--begin::Menu item-->
													<a href="update_assicurazione/{{$row->id}}" class="btn btn-danger">
														<span class="indicator-label">Modifica Assicurazione Corrente</span>
													</a>
													<!--end::Menu item-->
												@endif
													<?php
													/*
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
												</div>
												<!--end::Menu item-->
													 */
													?>
											</div>
											<!--end::Menu-->
										</td>
									</tr>
								@endforeach

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
