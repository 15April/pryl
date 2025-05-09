<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return Doctor::with('admin', 'patientCharts')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'procedure' => 'required|string',
            'history' => 'required|string',
            'diganosis' => 'required|string',
            'admin_id' => 'required|exists:admin,id',
        ]);

        return Doctor::create($data);
    }

    public function show($id)
    {
        return Doctor::with('admin', 'patientCharts')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->update($request->only(['procedure', 'history', 'diganosis', 'admin_id']));
        return $doctor;
    }

    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}

