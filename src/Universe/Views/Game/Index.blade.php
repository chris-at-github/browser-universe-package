@include('Universe::Header')

<div class="row">
	<div class="col-xs-12 col-sm-6">
		<fieldset class="container">
			<legend>{{Lang::get('universe::game.create.header')}}</legend>

			{!! Form::open(array('route' => 'game.create')) !!}
				<button type="submit" class="button">{{Lang::get('universe::application.action.create')}}</button>
			{!! Form::close() !!}
		</fieldset>
	</div>
	<div class="col-xs-12 col-sm-6">

		@if(isset($games) === true)
			<fieldset class="container">
				<legend>{{Lang::get('universe::game.load.header')}}</legend>

				@include('Universe::Partials.Game.Listing', ['games' => $games])
			</fieldset>
		@endif
	</div>
</div>

@include('Universe::Footer')