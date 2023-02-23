<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::latest()->get();
        return view('admin.carousel.index', compact('carousels'));
    }
    public function create()
    {
        return view('admin.carousel.create');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'image' => 'required',
            'special_tag' => 'required|string',
            'line_one' => 'required|string',
            'line_two' => 'required|string',
            'line_three' => 'nullable|string',
            'details' => 'nullable|string',
        ]);

        // Create a new carousel instance with the validated data
        $carousel = new Carousel();
        $carousel->image = $this->saveFile($request, 'image');
        $carousel->special_tag = $validatedData['special_tag'];
        $carousel->line_one = $validatedData['line_one'];
        $carousel->line_two = $validatedData['line_two'];
        $carousel->line_three = $validatedData['line_three'];
        $carousel->details = $validatedData['details'];

        // Save the new carousel instance to the database
        $carousel->save();

        // Redirect back with a success message
        return redirect()->route('admin.carousel.index')->with('success', 'Carousel item created successfully.');
    }
    public function edit($id = null)
    {
        $carousel = Carousel::findOrFail($id);
        return view('admin.carousel.edit', compact('carousel'));
    }
    public function update(Request $request, $id = null)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'special_tag' => 'required|string',
            'line_one' => 'required|string',
            'line_two' => 'required|string',
            'line_three' => 'nullable|string',
            'details' => 'nullable|string',
        ]);

        // Find the carousel instance to update
        $carousel = Carousel::findOrFail($id);

        // Update the carousel instance with the validated data
        if ($request->image) {
            $carousel->image = $this->saveFile($request, 'image');
        }
        $carousel->special_tag = $validatedData['special_tag'];
        $carousel->line_one = $validatedData['line_one'];
        $carousel->line_two = $validatedData['line_two'];
        $carousel->line_three = $validatedData['line_three'];
        $carousel->details = $validatedData['details'];

        // Save the updated carousel instance to the database
        $carousel->save();

        // Redirect back with a success message
        return redirect()->route('admin.carousel.index')->with('success', 'Carousel item updated successfully.');
    }
    public function delete($id = null)
    {
        if (file_exists(Carousel::findOrFail($id)->image)) {
            unlink(Carousel::findOrFail($id)->image);
        }
        Carousel::findOrFail($id)->delete();
        return redirect()->route('admin.carousel.index');
    }
    public function saveFile($request, $fieldName)
    {
        $file = $request->file($fieldName);
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $dir = 'storage/';
        $imgUrl = $dir . $fileName;
        $file->move($dir, $fileName);
        return $imgUrl;
    }
}
