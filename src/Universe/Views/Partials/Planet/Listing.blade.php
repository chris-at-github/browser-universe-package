<ul class="list-object list-object-selectable">
	@foreach($planets as $planet)
		<li>
			<label class="list-object-selectable-checkbox">
				<input type="checkbox" id="planet-{{$planet->id}}" name="planet[]" value="planet-{{$planet->id}}">
			</label>

			<header>{{$planet->name}}</header>

			<dl class="dl-inline">
				<dt>{{Lang::get('universe::application.x')}}:</dt>
				<dd>{{$planet->x}}</dd>

				<dt>{{Lang::get('universe::application.y')}}:</dt>
				<dd>{{$planet->y}}</dd>
			</dl>

			<ul class="list-actions">
				<li>
					<a href="{{route('game.play', ['game' => $game->id])}}">{{Lang::get('universe::application.action.load')}}</a>
				</li>
			</ul>
		</li>
	@endforeach
</ul>