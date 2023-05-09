<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use App\Http\Controllers\Controller;
use App\Http\Requests\ColorFormRequest;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('pages.admin.colors.index', compact('colors'));
    }

    public function create()
    {
        return view('pages.admin.colors.create');
    }

    public function store(ColorFormRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['status'] = $request->status == true ? '1' : '0';
        Color::create($validatedData);
        return redirect(route('colors.index'))->with('message', 'Color Added Successfully');
    }

    public function edit(Color $color)
    {
        return view('pages.admin.colors.edit', compact('color'));
    }

    public function update(ColorFormRequest $request, $color_id)
    {
        $validatedData = $request->validated();
        $validatedData['status'] = $request->status == true ? '1' : '0';
        Color::findOrFail($color_id)->update($validatedData);
        return redirect(route('colors.index'))->with('message', 'Color Updated Successfully');
    }

    public function delete(int $color_id)
    {
        $color = Color::findOrFail($color_id);
        $color->delete();
        return redirect()->back()->with('message', 'Color deleted successfully');
    }
}
