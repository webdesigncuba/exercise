<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'contact' => 'required|max:255',
            'email' => ['required', 'max:255', 'unique:contacts'],
          ]);
        Contact::create($request->all());
          //session()->flash('success','Contact created successfully.');
          return redirect()->route('contacts.index')
            ->with('success','Contact created successfully.');
    }

    /**
     * Show the form for creating a new post.
     *
     * @return IlluminateHttpResponse
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'contact' => 'required|max:255',
            'email' => 'required|max:255',
          ]);
          $post = Contact::find($id);
          $post->update($request->all());
          return redirect()->route('contacts.index')
            ->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Contact::find($id);
        $post->delete();
        return redirect()->route('contacts.index')
          ->with('success', 'Contact deleted successfully');
    }
}