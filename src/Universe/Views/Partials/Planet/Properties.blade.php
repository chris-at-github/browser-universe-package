<fieldset class="container">
	<legend>{{$planet->name}}</legend>

	<dl class="dl-inline">
		<dt>{{Lang::get('universe::application.x')}}:</dt>
		<dd>{{$planet->x}}</dd>

		<dt>{{Lang::get('universe::application.y')}}:</dt>
		<dd>{{$planet->y}}</dd>
	</dl>
</fieldset>