<ul class="list-object list-object-selectable" id="planet-listing">
	@foreach($planets as $planet)
		<li>
			<label class="list-object-selectable-checkbox">
				<input type="checkbox" id="planet-{{$planet->id}}" name="planet[]" value="{{$planet->id}}" @if($planet->active === true) checked="checked" @endif>
			</label>

			<header>{{$planet->name}}</header>

			<dl class="dl-inline">
				<dt>{{Lang::get('universe::application.x')}}:</dt>
				<dd>{{$planet->x}}</dd>

				<dt>{{Lang::get('universe::application.y')}}:</dt>
				<dd>{{$planet->y}}</dd>
			</dl>

			@include('Universe::Partials.Action.Listing', ['actions' => $planet->actions])
		</li>
	@endforeach
</ul>