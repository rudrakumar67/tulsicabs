<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::all();
        return view('Admin.Gallery.Index', compact('galleries'));
    }

    public function storeGallery(Request $request){
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('Uploads/Gallery'), $imageName);
            
            $gallery = new Gallery;
            $gallery->image = $imageName;
            $gallery->save();
            return redirect()->route('admin.gallery.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('errors', $e->getMessage());
        }
    }

    public function deleteGallery($id){
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->route('admin.gallery.index');
    }

    public function statusGallery($id){
        $gallery = Gallery::find($id);
        $gallery->status = $gallery->status == 1 ? 0 : 1;
        $gallery->save();
        return redirect()->route('admin.gallery.index');
    }
}
