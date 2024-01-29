<?php

namespace App\Http\Controllers;

use App\Models\Animale;
use Illuminate\Http\Request;

/**
 * Class AnimaleController
 * @package App\Http\Controllers
 */
class AnimaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animales = Animale::paginate();

        return view('animale.index', compact('animales'))
            ->with('i', (request()->input('page', 1) - 1) * $animales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $animale = new Animale();
        return view('animale.create', compact('animale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Animale::$rules);

        $animale = Animale::create($request->all());

        return redirect()->route('animales.index')
            ->with('success', 'Animale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animale = Animale::find($id);

        return view('animale.show', compact('animale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animale = Animale::find($id);

        return view('animale.edit', compact('animale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Animale $animale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animale $animale)
    {
        request()->validate(Animale::$rules);

        $animale->update($request->all());

        return redirect()->route('animales.index')
            ->with('success', 'Animale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $animale = Animale::find($id)->delete();

        return redirect()->route('animales.index')
            ->with('success', 'Animale deleted successfully');
    }
}
