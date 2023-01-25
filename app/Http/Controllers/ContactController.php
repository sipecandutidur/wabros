<?php

namespace App\Http\Controllers;

use App\Models\CategoryContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use PDO;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return auth()->user()->id;
        // eturn Contact::where('user_id', auth()->user()->id)->get();
        // return CategoryContact::where('user_id', auth()->user()->id)->get();
        return view('dashboard.contact.index', [
            'title' => 'Contact | Whatsapp Bross',
            'contacts' => Contact::where('user_id', auth()->user()->id)->paginate(10),
            'categories' => CategoryContact::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        CategoryContact::where('user_id', auth()->user()->id)->get();
        return view('dashboard.contact.create', [
            'title' => 'Add New Contact',
            'categories' => CategoryContact::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validateData = $request->validate([
            'slug' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'category_contact_id' => 'required'
        ]);

        $validateData['user_id'] = auth()->user()->id;

         Contact::create($validateData);

         return redirect('/dashboard/contact')->with('success', 'Add Contact Successful.!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        // return $contact;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('dashboard.contact.edit', [
            'title' => 'Edit Dashboard',
            'contact' => $contact,
            'categories' => CategoryContact::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $rules = [
            'slug' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'category_contact_id' => 'required'
        ];

        if($request->slug != $contact->slug){
            $rules['slug'] = 'required|uniqe:contact';
        }

        $validateData = $request->validate($rules);
        $validateData['user_id'] = auth()->user()->id;

        Contact::where('id', $contact->id)->update($validateData);

        return redirect('/dashboard/contact')->with('success', 'Edit Contact Successful.!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        // return $contact;//
        Contact::destroy($contact->id);
        return redirect('/dashboard/contact')->with('success', 'Contact has been deleted!');
    }


    public function checkSlug(Request $request){

        $slug = SlugService::createSlug(Contact::class, 'slug', $request->name);
        return response()->json(['slug'=> $slug]);
    }
}
