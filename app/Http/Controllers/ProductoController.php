
<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        return Producto::with('marca')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'marca_id' => 'required|exists:marcas,id'
        ]);

        return Producto::create($request->all());
    }

    public function show($id)
    {
        return Producto::with('marca')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return $producto;
    }

    public function destroy($id)
    {
        return Producto::destroy($id);
    }
}
