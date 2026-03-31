<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ServiceController extends Controller
{
    public function index() {
        $services = Services::all();
        return view('Admin.Services.Index', compact('services'));
    }

    public function addService() {
        return view('Admin.Services.Add');
    }

    public function storeService(Request $request) {
        try {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('Uploads/Services'), $imageName);
            
            $service = new Services;
            $service->name = $request->name;
            $service->description = $request->description;
            $service->price = $request->price;
            $service->image = $imageName;
            $service->save();
            return redirect()->route('admin.service.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('errors', $e->getMessage());
        }
    }
    public function editService($id) {
        $service = Services::find($id);
        return view('Admin.Services.Edit', compact('service'));
    }
    public function updateService(Request $request, $id) {
        try {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
            ]);
            $service = Services::find($id);
            $service->name = $request->name;
            $service->description = $request->description;
            $service->price = $request->price;
            if($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('Uploads/Services'), $imageName);
                $service->image = $imageName;
            }
            $service->save();
            return redirect()->route('admin.service.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('errors', $e->getMessage());
        }
    }
    public function deleteService($id) {
        $service = Services::find($id);
        $service->delete();
        return redirect()->route('admin.service.index');
    }
    public function statusService($id) {
        $service = Services::find($id);
        $service->status = $service->status == 1 ? 0 : 1;
        $service->save();
        return redirect()->route('admin.service.index');
    }
}
