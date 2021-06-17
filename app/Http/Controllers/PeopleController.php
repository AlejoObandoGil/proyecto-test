<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
	public function store(Request $request)
	{
		// $people = new People();
		// $people->full_name = $request->full_name;
		// $people->phone = $request->phone;
		// $people->save();

		// People::create([
		// 	'full_name' => $request->full_name,
		// 	'phone' => $request->phone,
		// ]);

		$people = new People($request->all());
		$people->save();
		return back();
	}

	public function edit($id)
	{
		$person = People::find($id);
		return view('edit_people', compact('person'));
	}

	public function update(Request $request, $id)
	{
		$people = People::find($id);
		$people->full_name = $request->full_name;
		$people->phone = $request->phone;
		$people->address = $request->address;
		$people->email = $request->email;		
		$people->update();

		return back();
	}

	public function delete($id)
	{
		$person = People::find($id);
		$person->delete();
		return back();
	}


}
