<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class CarController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('id')->get();
        return view('cars.index', compact('cars'));
    }
    public function create()
    {
        return view('cars.create');
    }
    public function edit($id)
    {

        $car = Car::find($id); // Fetch the single car$ car by its ID

        return view('cars.edit', compact('car'));
    }
    public function update(Request $request, $id)
    {
        //dd($request->all());

        $data = $request->validate([
            'car_no' => 'required|integer',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photopath' => 'required|image',
            'price' => 'required|numeric',
            'availability' => 'required|numeric'
        ]);
        $car = Car::find($id);
        $data['photopath'] = $car->photopath;
        if ($request->hasFile('photopath')) {
            $photoname = time() . '.' . $request->photopath->extension();
            $request->photopath->move(public_path('images/cars'), $photoname);

            unlink(public_path('image/cars/' . $car->photopath));
            $data['photopath'] = $photoname;
        }
        $car->update($data);
        return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
    }



    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'car_no' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'availabilty' => 'required|numeric',
            'photopath' => 'required|image',
        ]);
    
        // Handle file upload
        if ($request->hasFile('photopath')) {
            // Get the uploaded file
            $file = $request->file('photopath');
    
            // Define the path where the file should be stored
            $filePath = 'uploads/cars';
            
            // Store the file and get the file name
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path($filePath), $fileName);
    
            // Save the car details with the photo path
            $car = new Car();
            $car->car_no = $request->input('car_no');
            $car->name = $request->input('name');
            $car->description = $request->input('description');
            $car->price = $request->input('price');
            $car->availabilty = $request->input('availabilty');
            $car->photopath = $filePath . '/' . $fileName; // Save the relative path to the file
            $car->save();
    
            return redirect()->route('cars.index')->with('success', 'Car created successfully!');
        }
    
        return back()->withErrors('File upload failed.');
    }


    public function delete($id)
    {
        $car = Car::find($id);
        File::delete(public_path('images/cars/' . $car->photopath));
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
    }
}
