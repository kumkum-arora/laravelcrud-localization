<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class Icontroller extends Controller
{
    public function display_form()
    {
        return view("display_form");
    }
    public function form_submit(Request $request)
    {
        $add = new student;
        if ($request->isMethod('post')) {
            $add->first_name = $request->get('firstname');
            $add->last_name = $request->get('lastname');
            $add->marks1 = $request->get('marks1');
            $add->marks2 = $request->get('marks2');
            $add->save();
        }
        return redirect("/display_form");
    }
    public function displaydata()
    {
        $data = student::paginate(4);
        return view('display_form  ', compact('data'));
    }
    public function deletedata($id)
    {
        $ob = student::find($id);
        $ob->delete();
        return redirect("display_form");
    }
    public function editdisp($id)
    {
        $findrec = student::where('id', $id)->get();
        return view('edit1', compact('findrec'));
    }
    public function editdata(Request $request, $id = '')
    {
        $add = student::find($id);
        if ($request->isMethod('post')) {
            $add->first_name = $request->get('firstname');
            $add->last_name = $request->get('lastname');
            $add->marks1 = $request->get('marks1');
            $add->marks2 = $request->get('marks2');
            $add->save();
        }
        return redirect("display_form ");
    }
    public function search(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->get('name');
            $data = student::where('first_name', 'LIKE', '%' . $name . '%')->paginate(5);
        }
        return view('display_form', compact('data'));
    }
    public function profile()
    {
        return view("profile");
    }
}
