<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('contact.index', compact('contacts'));
    }
    public function create()
    {
        return view('contact.create');
    }


    public function update(Request $request)
    {

        $data = request()->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'digits:10',],
            'zip_code' => ['required', 'string', 'digits:5'],
            'comments' => ['required', 'string', 'max:2000'],
        ]);

        $contact = Contact::where('email', $data['email'])->first();
        $id = $contact->id ?? 0;
        $contact->update($data);

        return  response()->json([
            'id' => $id,
        ]);
    }
    public function store(Request $request)
    {
        request()->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'digits:10',],
            'zip_code' => ['required', 'string', 'digits:5'],
            'comments' => ['required', 'string', 'max:2000'],
        ]);
        $contact = Contact::where('email', $request->input('email'))->update($request->except('_token'));
        if ($contact != 1) {
            Contact::create($request->all());
            return redirect('contact/create')->withInput()->with(['success' =>  true]);
        }
        return redirect()->back()->withInput()->with(['edit' =>  true]);
    }
    public function delete(Contact $contact)
    {
        $id = $contact->id;
        $contact->delete();
        return  response()->json([
            'id' =>  $id,
        ]);
    }
    public function deleteAll()
    {
        Contact::query()->delete();
        return  response()->json();
    }
}
