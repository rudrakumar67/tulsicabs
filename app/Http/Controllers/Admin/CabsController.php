<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cabs;

class CabsController extends Controller
{
    public function index(){
        $cabs = Cabs::all();
        return view('Admin.Cabs.Index', compact('cabs'));
    }
    public function addCab() {
        return view('Admin.Cabs.Add');
    }

    public function storeCab(Request $request) {
        try {
            // dd($request->all());
            $request->validate([
                'name' => 'required',
                'type' => 'required',
                'seating_capacity' => 'required|numeric',
                'price' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('Uploads/Cabs'), $imageName);
        
            $cab = new Cabs;
            $cab->name = $request->name;
            $cab->type = $request->type;
            $cab->seating_capacity = $request->seating_capacity;
            $cab->price = floatval($request->price);
            $cab->image = $imageName;
            $cab->save();

            return redirect()->route('admin.cabs.index')->with('success', 'Cab added successfully');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Failed to add cab. Please try again.');
        }
    }
    public function editCab($id) {
        $cab = Cabs::find($id);
        return view('Admin.Cabs.Edit', compact('cab'));
    }
    public function updateCab(Request $request, $id) {
        try {
            $request->validate([
                'name' => 'required',
                'type' => 'required',
                'seating_capacity' => 'required|numeric',
                'price' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif',
            ]);
            $cab = Cabs::find($id);
            $cab->name = $request->name;
            $cab->type = $request->type;
            $cab->seating_capacity = $request->seating_capacity;
            $cab->price = floatval($request->price);
            if  ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('Uploads/Cabs'), $imageName);
                $cab->image = $imageName;
            }
            $cab->save();
            return redirect()->route('admin.cabs.index')->with('success', 'Cab updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update cab. Please try again.');
        }
    }
    public function deleteCab($id) {
        $cab = Cabs::find($id);
        $cab->delete();
        return redirect()->route('admin.cabs.index')->with('success', 'Cab deleted successfully');
    }
    public function statusCab($id) {
        $cab = Cabs::find($id);
        $cab->status = $cab->status == 1 ? 0 : 1;
        $cab->save();
        return redirect()->route('admin.cabs.index')->with('success', 'Cab status updated successfully');
    }
}
