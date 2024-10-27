<header style="position: sticky; top: 0; background-color: white; z-index: 10;">
	<div class="navbar hide-md" style="background-color: white; border-bottom: 1px solid lightgrey; margin-bottom: 10px;">
		<section class="navbar-section m-2">
			<a href="{{ url('dashboard') }}" class="btn btn-link mr-2">Dashboard</a>
			<a href="{{ url('offers') }}" class="btn btn-link">Ofertas</a>
			<a href="{{ url('companies') }}" class="btn btn-link">Companies</a>
			<a href="{{ url('platforms') }}" class="btn btn-link">Platforms</a>
			<a href="..." class="btn btn-link">Calendario</a>
			<a href="..." class="btn btn-link">Alertas</a>
			<a href="..." class="btn btn-link">Contactos</a>
			<div class="dropdown dropdown-left">
				<a class="btn dropdown-toggle" tabindex="0">New +</a>
				<ul class="menu p-2">
					<li class="menu-item"><a href="{{ url('offers/create') }}">Offer</a></li>
					<li class="menu-item"><a href="{{ url('interviews/create') }}">Interview</a></li>
					<li class="menu-item"><a href="{{ url('alerts/create') }}">Alert</a></li>
					<li class="menu-item"><a href="{{ url('companies/create') }}">Company</a></li>
					<li class="menu-item"><a href="{{ url('platforms/create') }}">Platform</a></li>
					<li class="menu-item"><a href="{{ url('technologies/create') }}">Technology</a></li>
				</ul>
			</div>
		</section>
		<section class="navbar-section">
			search...
		</section>
		<section class="navbar-section p-2">
			@include('menu.profile')
		</section>
		<div class="divider"></div>
	</div>

	<div class="show-md" style="padding-top: 10px; padding-bottom: 10px">
		<a class="mx-2" onclick="toggleNavSide()"><i class="icon icon-menu"></i></a>
		<div id="navside" class="p-absolute inactiveMobileNav">
			<ul class="nav">
				<li class="nav-item"><a href="{{ url('dashboard') }}" class="btn btn-link mr-2">Dashboard</a></li>
				<li class="nav-item"><a href="{{ url('offers') }}" class="btn btn-link">Ofertas</a></li>
				<li class="nav-item"><a href="{{ url('companies') }}" class="btn btn-link">Companies</a></li>
				<li class="nav-item"><a href="{{ url('platforms') }}" class="btn btn-link">Platforms</a></li>
				<li class="nav-item"><a href="..." class="btn btn-link">Calendario</a></li>
				<li class="nav-item"><a href="..." class="btn btn-link">Alertas</a></li>
				<li class="nav-item"><a href="..." class="btn btn-link">Contactos</a></li>
				<li class="nav-item">
					<div class="accordion">
						<input type="checkbox" name="accordion-checkbox" id="accordion-1" hidden>
						<label class="accordion-header c-hand" for="accordion-1">New +</label>
						<div class="accordion-body">
							<ul class="nav">
								<li class="nav-item"><a href="{{ url('offers/create') }}">Offer</a></li>
								<li class="nav-item"><a href="{{ url('interviews/create') }}">Interview</a></li>
								<li class="nav-item"><a href="{{ url('alerts/create') }}">Alert</a></li>
								<li class="nav-item"><a href="{{ url('companies/create') }}">Company</a></li>
								<li class="nav-item"><a href="{{ url('platforms/create') }}">Platform</a></li>
								<li class="nav-item"><a href="{{ url('technologies/create') }}">Technology</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<div class="accordion">
						<input type="checkbox" name="accordion-checkbox" id="accordion-2" hidden>
						<label class="accordion-header c-hand" for="accordion-2">{{ Auth::user()->name }}</label>
						<div class="accordion-body">
							<ul class="nav">
								<li class="nav-item"><a href="#dropdowns">Profile</a></li>
								<li class="nav-item"><a href="#dropdowns">Settings</a></li>
								<li class="nav-item"><a href="{{ url('/logout') }}">Logout</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
			<div class="divider"></div>
		</div>
	</div>
	<style>
		.activeMobileNav {
			left: 0px;
			background-color: white;
			width: 100vw;
			height: 100vh;
			z-index: 100
		}

		.inactiveMobileNav {
			left: -1000px;
		}
	</style>
	<script>
		function toggleNavSide() {
			const navSide = document.getElementById('navside');
			if (navSide.classList.contains('activeMobileNav')) {
				navSide.classList.remove('activeMobileNav');
				navSide.classList.add('inactiveMobileNav');
			} else {
				navSide.classList.remove('inactiveMobileNav');
				navSide.classList.add('activeMobileNav');
			}
		}
	</script>
</header>