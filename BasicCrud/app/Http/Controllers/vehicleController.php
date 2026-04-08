<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle;

use function Ramsey\Uuid\v1;

class vehicleController extends Controller
{
    public function index()
    {
        $posts = vehicle::all();
        return view('vehicle.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Merk' => 'required',
            'Name_of_the_vehicle' => 'required',
            'Year_of_manufacture' => 'required',
        ]);
        Vehicle::create([
            'Merk' => $request->Merk,
            'Name_of_the_vehicle' => $request->Name_of_the_vehicle,
            'Year_of_manufacture' => $request->Year_of_manufacture,
        ]);
    
        return redirect()->route('vehicle.index')
            ->with('success', 'Vehicle created successfully.');
    }

    public function show(string $id)
    {
        $post = vehicle::find($id);
        return view('vehicle.show', compact('post'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'Merk' => 'required',
            'Name_of_the_vehicle' => 'required',
            'Year_of_manufacture' => 'required',
        ]);
        $post = vehicle::find($id);
        $post->update($request->all());
        return redirect()->route('vehicle.index')
            ->with('success', 'vehicle updated successfully');
    }
    public function destroy(string $id)
    {
        $post = vehicle::find($id);
        $post->delete();
        return redirect()->route('vehicle.index')
            ->with('success', 'vehicle deleted successfully');
    }

    public function create()
    {
        return view('vehicle.create');
    }

    public function edit(string $id)
    {
        $post = vehicle::find($id);
        return view('vehicle.edit', compact('post'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $post = vehicle::where('Merk', 'like', '%' . $search . '%')->paginate(5);
        return view('vehicle.index', compact('post'));
    }
}
