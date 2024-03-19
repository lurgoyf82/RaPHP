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
										class="badge badge-square badge-outline {{ $class_alerts[$color_alerts['revisione']] }} badge-lg">{{ $count_alerts['revisione'] }}</span>&nbsp;
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
										class="badge badge-square badge-outline {{ $class_alerts[$color_alerts['bombole']] }} badge-lg">{{ $count_alerts['bombole'] }}</span>&nbsp;
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
										class="badge badge-square badge-outline {{ $class_alerts[$color_alerts['atp']] }} badge-lg">{{ $count_alerts['atp'] }}</span>&nbsp;
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
										class="badge badge-square badge-outline {{ $class_alerts[$color_alerts['multa']] }} badge-lg">{{ $count_alerts['multa'] }}</span>&nbsp;
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
										class="badge badge-square badge-outline {{ $class_alerts[$color_alerts['tachigrafo']] }} badge-lg">{{ $count_alerts['tachigrafo'] }}</span>&nbsp;
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
										class="badge badge-square badge-outline {{ $class_alerts[$color_alerts['tagliando']] }} badge-lg">{{ $count_alerts['tagliando'] }}</span>&nbsp;
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
					class="badge badge-square badge-outline {{ $class_alerts[$color_alerts['noleggio']] }} badge-lg">{{ $count_alerts['noleggio'] }}</span>&nbsp;
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
					class="badge badge-square badge-outline {{ $class_alerts[$color_alerts['assicurazione']] }} badge-lg">{{ $count_alerts['assicurazione'] }}</span>&nbsp;
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
					class="badge badge-square badge-outline {{ $class_alerts[$color_alerts['bollo']] }} badge-lg">{{ $count_alerts['bollo'] }}</span>&nbsp;
				<span class="menu-title">Scadenza Bollo</span>
			</a>
			<!--end:Menu link-->
		</div>
		<!--end:Menu item-->
	</div>
	<!--end:Menu sub-->
</div>
<!--end:Menu item-->
