<ul class="list-objects">
	@foreach($games as $game)
		<li>
			<header>{{$game->name}}</header>

			<dl class="dl-inline">
				<dt>{{Lang::get('universe::game.turn')}}:</dt>
				<dd>{{$game->turn}}</dd>

				@if(isset($game->map) === true)
					<dt>{{Lang::get('universe::application.map')}}:</dt>
					<dd>{{$game->map->name}}</dd>
				@endif
			</dl>

			<ul class="list-actions">
				<li><a href="{{route('game.play', ['game' => $game->id])}}">{{Lang::get('universe::application.action.load')}}</a></li>
			</ul>
		</li>
	@endforeach
</ul>