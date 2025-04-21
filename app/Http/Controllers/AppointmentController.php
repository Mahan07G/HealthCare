<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'appointment_date' => 'required|date',
            'message' => 'nullable|string',
        ]);

        Appointment::create($validated);

        return redirect()->back()->with('success', 'Appointment submitted successfully!');
    }
}
