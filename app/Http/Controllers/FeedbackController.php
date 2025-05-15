<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedback=Feedback::latest()->paginate(10);
        return view('admin.feedback.index', compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function feedback_user(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);
        $feedback = new Feedback($validated);

        if ($feedback->save()) {
            session()->flash('swal', [
                'title' => 'Berhasil!',
                'text' => 'Terima kasih atas feedback Anda.',
                'icon' => 'success'
            ]);
        } else {
            session()->flash('swal', [
                'title' => 'Gagal!',
                'text' => 'Gagal memberikan feedback.',
                'icon' => 'error'
            ]);
        }
    
        return back();
    }

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
