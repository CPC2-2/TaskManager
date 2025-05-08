<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Tasques;

class TeareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasques = Tasques::all();
        return view('tasques.index', compact('tasques'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create($proyectoId)
    {   
        $proyecto = Proyecto::findOrFail($proyectoId); 
        return view('createtask', compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $proyectoId)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'descripcio' => 'nullable|string',
            'estat' => 'required|in:pendent,finalizada,en process',
            'expiracio' => 'nullable|date',
        ]);

        $proyecto = Proyecto::findOrFail($proyectoId);

        Tasques::create([
            'proyecto_id' => $proyecto->id,
            'nom' => $validated['nom'],
            'descripcio' => $validated['descripcio'],
            'estat' => $validated['estat'],
            'data_expiracio' => $validated['expiracio'],
        ]);

        return redirect()->route('manageproyect', ['id' => $proyecto->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{

    $proyecto = Proyecto::findOrFail($id);
    $tasques = Tasques::where('proyecto_id', $id)->get();

    return view('manageproyect', compact('proyecto', 'tasques'));
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
