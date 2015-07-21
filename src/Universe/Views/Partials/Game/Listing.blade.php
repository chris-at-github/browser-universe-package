<ul class="list-objects">
	@foreach($games as $game)
		<li>
			<header>{{$game->name}}</header>

			<dl class="dl-inline">
				<dt>{{Lang::get('universe::game.turn')}}:</dt>
				<dd>{{$game->turn}}</dd>
			</dl>

			<ul class="list-actions">
				<li><a href="{{route('game.load', ['game' => $game->id])}}">{{Lang::get('universe::application.action.load')}}</a></li>
			</ul>
		</li>
	@endforeach
</ul>