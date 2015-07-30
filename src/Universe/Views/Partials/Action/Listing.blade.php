@if($actions->isEmpty() === false)
	<ul class="list-actions">
		@foreach($actions as $action)
			<li>
				<a href="{{$action->route}}" class="button">{{$action->name}}</a>
			</li>
		@endforeach
	</ul>
@endif