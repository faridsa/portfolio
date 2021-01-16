<?php
                                        
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormsController extends Controller
{
    
    public function index()
    {
        if (! Gate::allows('contact_form_access')) {
            //return abort(401);
        }

        $contact_forms = ContactForm::latest()->get();

        return view('admin.contactForms.index', compact('contact_forms'));
    }


    public function show($id)
    {
        if (! Gate::allows('contact_form_show')) {
            //return abort(401);
        }
        $contact_form = ContactForm::findOrFail($id);
        $contact_form->update(['viewed' => 1]);
        return view('admin.contactForms.show', compact('contact_form'));
    }


    public function destroy($id)
    {
        if (! Gate::allows('contact_delete')) {
            //return abort(401);
        }
        $contact = ContactForm::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contactForms.index');
    }


    public function massDestroy(Request $request)
    {
        if (! Gate::allows('contact_delete')) {
            //return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ContactForm::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
