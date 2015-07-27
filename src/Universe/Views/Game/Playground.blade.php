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

		@if(isset($game->map->planets) === true)
			<fieldset class="container">
				<legend>{{Lang::get('universe::application.planets')}}</legend>

				@include('Universe::Partials.Planet.Listing', ['planets' => $game->map->planets])
			</fieldset>
		@endif
	</div>
	<div class="col-xs-12 col-sm-4">
		{{dd($planets)}}
	</div>
</div>


@include('Universe::Footer')