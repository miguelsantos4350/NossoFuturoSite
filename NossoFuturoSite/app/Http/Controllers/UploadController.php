<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

use File;

class UploadController extends Controller
{
    public $imagesPath = '';
    public $thumbnailPath = '';

    /**
     * Upload form
     */
    public function getUploadForm()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }
    /**
     * @function CreateDirectory
     * create required directory if not exist and set permissions
     */
    public function createDirecrotory()
    {
        $paths = [
            'image_path' => public_path('../../../views/images/'),
            'thumbnail_path' => public_path('../../../views/images/thumbs/')
        ];
        foreach ($paths as $key => $path) {
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
        }
        $this->imagesPath = $paths['image_path'];
        $this->thumbnailPath = $paths['thumbnail_path'];
    }
    /**
     * Post upload form
     */
    public function postUploadForm(Request $request)
    {
        $request->validate([
            'upload.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if($request->hasFile('upload')) {
            $this->createDirecrotory();
          //  foreach ($request->upload as $file) {
          $file=$request->upload;
                $image = \Intervention\Image\Facades\Image::make($file);
                // you can also use the original name
                $imageName = time().'-'.$file->getClientOriginalName();
                // save original image
                $image->save($this->imagesPath.$imageName);
                // resize and save thumbnail
                $image->resize(150,150);
                $image->save($this->thumbnailPath.$imageName);

//store
                  $image = new Image;

                    $imageTitle = $file->getClientOriginalName();

                    $path = $imageName; //$request->file('upload')->storeAs('uploads', $imageTitle, 'public');
                  }

                  $image->title = $imageTitle;
                  $image->path = $path;
                  $image->save();

                  return back()->with('success', 'Image uploaded successfully');



        }
}
