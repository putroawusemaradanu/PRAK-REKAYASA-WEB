<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tokohp;
use Laravel\Lumen\Routing\Controller;

class TokohpController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function showAll()
    {
        return response()->json(Tokohp::all());
    }
    public function showOne($id)
    {
        return response()->json(Tokohp::find($id));
    }
    public function create(request $request)
    {
        $Tokohp = Tokohp::create($request->all());
    }
    public function update($id, Request $request)
    {
        $Tokohp = Tokohp::findOrFail($id);
        $Tokohp->update($request->all());
        return response()->json($Tokohp, 200);
    }
        public function delete($id)
    {
        Tokohp::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}