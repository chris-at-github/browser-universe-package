@include('Universe::Header')

<div class="row">
	<div class="col-xs-12 col-sm-6">
		<div class="container">
			<header>{{Lang::get('universe::game.create.header')}}</header>

			{{Form::open(array('route' => 'game.create'))}}

			{{Form::close()}}
		</div>
	</div>
</div>

@include('Universe::Footer')