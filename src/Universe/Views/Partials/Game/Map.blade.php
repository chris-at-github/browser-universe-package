<div id="map" class="scale">
	<div id="map-tag" style="width: {{$map->getCalculatedWidth()}}px; height: {{$map->getCalculatedHeight()}}px;">
		<div id="map-scale">
			<div id="map-scale-x">
				@for($x = 0; $x <= $map->width; $x++)
					<div class="map-scale-step">{{$x}}</div>
				@endfor
			</div>

			<div id="map-scale-y">
				@for($y = 0; $y <= $map->height; $y++)
					<div class="map-scale-step">{{$y}}</div>
				@endfor
			</div>
		</div>
	</div>
</div>