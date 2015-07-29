<fieldset class="container">
	<legend>{{$ship->name}}</legend>

	<dl class="dl-inline">
		<dt>{{Lang::get('universe::application.x')}}:</dt>
		<dd>{{$ship->x}}</dd>

		<dt>{{Lang::get('universe::application.y')}}:</dt>
		<dd>{{$ship->y}}</dd>
	</dl>
</fieldset>