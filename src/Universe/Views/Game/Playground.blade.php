@include('Universe::Header')

<div class="row">
	<div class="col-xs-12 col-sm-8">
		<fieldset class="container">
			<legend>{{$game->name}}</legend>

			<div class="container">
				<header>{{Lang::get('universe::application.map')}}</header>

				<dl class="dl-inline">
					<dt>{{Lang::get('universe::map.width')}}:</dt>
					<dd>{{$game->map->width}}</dd>

					<dt>{{Lang::get('universe::map.height')}}:</dt>
					<dd>{{$game->map->height}}</dd>
				</dl>

				<ul class="list-actions">
					<li>
						<a href="#game.map.reset">{{Lang::get('universe::application.action.reset')}}</a>
					</li>
				</ul>
			</div>
		</fieldset>

		@if(isset($game->planets) === true)
			<fieldset class="container">
				<legend>{{Lang::get('universe::application.planets')}}</legend>

				@include('Universe::Partials.Planet.Listing', ['planets' => $game->planets])
			</fieldset>
		@endif

		@if(isset($game->ships) === true)
			<fieldset class="container">
				<legend>{{Lang::get('universe::application.ships')}}</legend>

				@include('Universe::Partials.Ship.Listing', ['ships' => $game->ships])
			</fieldset>
		@endif

		<div class="container">
			@include('Universe::Partials.Game.Map', ['map' => $game->map])
		</div>
	</div>

	<div class="col-xs-12 col-sm-4">
		@if(isset($planets) === true)
			<div class="container">
				@if($planets->count() === 1)
					@include('Universe::Partials.Planet.Properties', ['planet' => $planets->first()])
				@endif
			</div>
		@endif

		@if(isset($ships) === true)
			<div class="container">
				@if($ships->count() === 1)
					@include('Universe::Partials.Ship.Properties', ['ship' => $ships->first()])
				@endif
			</div>
		@endif
	</div>
</div>


@include('Universe::Footer')