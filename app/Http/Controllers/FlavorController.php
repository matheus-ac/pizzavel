<?php

namespace App\Http\Controllers;

use App\Models\Flavor;
use Illuminate\Http\Request;

class FlavorController extends Controller
{

    public function index()
    {
        return Flavor::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        return Flavor::create($data);
    }

    public function show(Flavor $flavor)
    {
        return $flavor;
    }

    public function update(Request $request, Flavor $flavor)
    {
        $data = $request->all();
        $flavor->update($data);
        return $flavor;
    }

    public function destroy(Flavor $flavor)
    {
        $flavor->delete();
        return $flavor;
    }
}
