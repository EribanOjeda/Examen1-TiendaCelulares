
<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        return Marca::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        return Marca::create($request->all());
    }

    public function show($id)
    {
        return Marca::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $marca = Marca::findOrFail($id);
        $marca->update($request->all());

        return $marca;
    }

    public function destroy($id)
    {
        return Marca::destroy($id);
    }
}
