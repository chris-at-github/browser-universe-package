<div id="map" style="width: {{$map->getCalculatedWidth()}}px; height: {{$map->getCalculatedHeight()}}px;">
	<div id="map-scale">
		<div id="map-scale-x">
			@for($x = 0; $x <= $map->width; $x++)
				<div class="map-scale-step">{{$x}}</div>
			@endfor
		</div>
	</div>
</div>