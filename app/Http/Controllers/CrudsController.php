<?php

namespace App\Http\Controllers;
use App\Crud;

use Illuminate\Http\Request;
class CrudsController extends Controller
{
   
   public function _construct()
    {
      $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
       $data = crud::query();
        if (request('term')) {
            $data->where('VehiclesBrand', 'Like', '%' . request('term') . '%');
        }

        //return $data->orderBy('id', 'DESC')->paginate(10);

        $data=Crud::latest()->paginate(5);
        return view ('admin.cars.index',compact('data'))
           ->with('i',(request()->input('page', 1) - 1) *5);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
        'VehiclesTitle'         =>'required',
        'VehiclesBrand'         =>'required',
        'PricePerDay'           =>'required',
        'FuelType'              =>'required',
        'ModelYear'             =>'required',
        'SeatingCapacity'       =>'required',
        'image'                 =>'required|image|max:2048'
       ]); 
       $image = $request->file('image');
       $new_name=rand() .'.' . $image->
       getClientOriginalExtension();
       $image->move(public_path('images'), $new_name);
       $form_data =array(
        'VehiclesTitle'         =>  $request->VehiclesTitle,
        'VehiclesBrand'         =>  $request->VehiclesBrand,
        'PricePerDay'           =>  $request->PricePerDay,
        'FuelType'              =>  $request->FuelType,
        'ModelYear'             =>  $request->ModelYear,
        'SeatingCapacity'       =>  $request->SeatingCapacity,
        'image'                 =>  $new_name

       );
       Crud::create($form_data);
       return redirect('Crud')->with('success','Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= Crud::findorFail($id);
        return view('admin.cars.view',compact('data'));

    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data= Crud::findorFail($id);
        return view('admin.cars.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
        'VehiclesTitle'         =>'required',
        'VehiclesBrand'         =>'required',
        'PricePerDay'           =>'required',
        'FuelType'              =>'required',
        'ModelYear'             =>'required',
        'SeatingCapacity'       =>'required',
        'image'                 =>'required|image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->
            getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
        'VehiclesTitle'         =>'required',
        'VehiclesBrand'         =>'required',
        'PricePerDay'           =>'required',
        'FuelType'              =>'required',
        'ModelYear'             =>'required',
        'SeatingCapacity'       =>'required'
            ]);
        }

        $form_data = array(
        'VehiclesTitle'         =>  $request->VehiclesTitle,
        'VehiclesBrand'         =>  $request->VehiclesBrand,
        'PricePerDay'           =>  $request->PricePerDay,
        'FuelType'              =>  $request->FuelType,
        'ModelYear'             =>  $request->ModelYear,
        'SeatingCapacity'       =>  $request->SeatingCapacity,
        'image'                 =>  $image_name
        );
  
        Crud::whereId($id)->update($form_data);

        return redirect('Crud')->with('success', 'Data is successfully updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();

        return redirect('Crud')->with('success', 'Data is successfully deleted');
    }
}
