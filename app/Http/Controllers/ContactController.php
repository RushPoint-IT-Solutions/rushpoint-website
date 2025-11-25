<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use App\Employee;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = $request->only('name', 'email', 'subject', 'message');

        // Send email
        Mail::to('info@rushpoint.com.ph')->send(new ContactFormMail($data));

        return back()->with('success', 'Your message has been sent. Thank you!');
    }
    public function view(Request $request,$id)
    {
       $employee = Employee::where('employee_code',$id)->first();
       return view('employee.view',array(
        'employee' => $employee
       ));
    }
}
