<?php namespace Universe\Controllers;

class ShipController extends UniverseController {
	public function activate(\Illuminate\Http\Request $request, $id) {
		$store	= $request->session()->get('active.ships', []);
		$worker = \Illuminate\Support\Collection::make($store);

		if($worker->contains($id) === false) {
			$worker->push($id);
		}

		$request->session()->put('active.ships', $worker->toArray());

		return \Redirect::route('game.playground', ['id' => $request->session()->get('game.id')]);
	}

	public function deactivate(\Illuminate\Http\Request $request, $id) {
		$store = $request->session()->get('active.ships', []);
		$worker = \Illuminate\Support\Collection::make($store);

		if(($key = $worker->search($id)) !== false) {
			$worker->forget($key);
		}

		$request->session()->put('active.ships', $worker->toArray());

		return \Redirect::route('game.playground', ['id' => $request->session()->get('game.id')]);
	}
}