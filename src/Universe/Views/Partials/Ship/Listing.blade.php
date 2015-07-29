<ul class="list-object list-object-selectable" id="ship-listing">
	@foreach($ships as $ship)
		<li>
			<label class="list-object-selectable-checkbox">
				<input type="checkbox" id="planet-{{$ship->id}}" name="ship[]" value="{{$ship->id}}" @if($ship->active === true) checked="checked" @endif>
			</label>

			<header>{{$ship->name}}</header>

			<dl class="dl-inline">
				<dt>{{Lang::get('universe::application.x')}}:</dt>
				<dd>{{$ship->x}}</dd>

				<dt>{{Lang::get('universe::application.y')}}:</dt>
				<dd>{{$ship->y}}</dd>
			</dl>

			{{--<ul class="list-actions">--}}
				{{--<li>--}}
					{{--<a href="{{route('game.play', ['game' => $game->id])}}">{{Lang::get('universe::application.action.load')}}</a>--}}
				{{--</li>--}}
			{{--</ul>--}}
		</li>
	@endforeach
</ul>