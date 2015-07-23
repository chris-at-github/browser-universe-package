@include('Universe::Header')

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

<fieldset class="container">
	<legend>{{Lang::get('universe::application.planets')}}</legend>
	{{dd($game->map->planets)}}
</fieldset>

@include('Universe::Footer')