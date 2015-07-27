<?php namespace Universe\Controllers;

class PlanetController extends UniverseController {
	public function activate(\Illuminate\Http\Request $request, $id) {
		$store	= $request->session()->get('active.planets', []);
		$worker = \Illuminate\Support\Collection::make($store);

		if($worker->contains($id) === false) {
			$worker->push($id);
		}

		$request->session()->put('active.planets', $worker->toArray());

		return \Redirect::route('game.playground', ['id' => $id]);
	}

	public function deactivate(\Illuminate\Http\Request $request, $id) {
		$store = $request->session()->get('active.planets', []);
		$worker = \Illuminate\Support\Collection::make($store);

		if(($key = $worker->search($id)) !== false) {
			$worker->forget($key);
		}

		$request->session()->put('active.planets', $worker->toArray());

		return \Redirect::route('game.playground', ['id' => $id]);
	}
}