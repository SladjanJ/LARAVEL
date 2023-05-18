<?php
 
namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Contacts;
use Illuminate\Http\Request;
 
class ContactsController extends Controller
{
  
    public function index()
    {
        $contacts = Contacts::all();
      return view ('contacts.indexcontact')->with('contacts', $contacts);
    }
 
    
    public function create()
    {
        return view('contacts.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Contacts::create($input);
        return redirect('contact')->with('flash_message', 'Contact Addedd!');  

        
    }
 
    
    public function show($id)
    {
        $contact = Contacts::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }
 
    
    public function edit($id)
    {
        $contact = Contacts::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }
 
  
    public function update(Request $request, $id)
    {
        $contact = Contacts::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'Contact Updated!');  
    }
 
  
    public function destroy($id)
    {
        Contacts::destroy($id);
        return redirect('contact')->with('flash_message', 'Contact deleted!');  
    }
}
