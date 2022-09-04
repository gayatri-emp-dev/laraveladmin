<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class VehicleController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data['vehicles'] = Vehicle::orderBy('id', 'asc')->get();
        return view('vehicles.index',$data);
    }
    public function create()
    {
        return view('vehicles.add');
    }
    public function store(Request $request){

        $request->validate([
            'vehicle_registration_number' => 'required|string|max:190',
            'vehicle_model' => 'required',
            'vehicle_owner_name' => 'required',
            'vehicle_number' => 'required',
            'chassis_number' => 'required',
            'loan_account_number' => 'required|string|max:190|unique:vehicles',
            'loan_number' => 'required|string|max:190|unique:vehicles',
            'engine_number' => 'required',
            /*'advisor_name' => 'required',
            'advisor_number' => 'required',
            'reporting_manager_name' => 'required',
            'ACM_name' => 'required',
            'executive_name' => 'required',
            'team_lead_name' => 'required',
            'mobile_number' => 'required',
            'remarks' => 'required',
            'space' => 'required',*/
        ]);
        
        $vehicle = Vehicle::create([
            'vehicle_registration_number' => $request->vehicle_registration_number,
            'vehicle_model' => $request->vehicle_model,
            'vehicle_owner_name' => $request->vehicle_owner_name,
            'vehicle_number' => $request->vehicle_number,
            'chassis_number' => $request->chassis_number,
            'loan_account_number' => $request->loan_account_number,
            'loan_number' => $request->loan_number,
            'engine_number' => $request->engine_number,
            'advisor_name' => $request->advisor_name,
            'advisor_number' => $request->advisor_name,
            'reporting_manager_name' => $request->reporting_manager_name,
            'ACM_name' => $request->ACM_name,
            'executive_name' => $request->executive_name,
            'team_lead_name' => $request->team_lead_name,
            'mobile_number' => $request->mobile_number,
            'remarks' => $request->remarks,
            'space' => $request->space,
        ]);
        return back()->withStatus(__('Created Successfully.'));
        
    }
    public function edit($id){
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.edit', compact('vehicle')); 
    }
    public function update(Request $request){
        $request->validate([
            'vehicle_registration_number' => 'required|string|max:190',
            'vehicle_model' => 'required',
            'vehicle_owner_name' => 'required',
            'vehicle_number' => 'required',
            'chassis_number' => 'required',
            'loan_account_number' => 'required|string|max:190',
            'loan_number' => 'required|string|max:190',
            'engine_number' => 'required',
            /*'advisor_name' => 'required',
            'advisor_number' => 'required',
            'reporting_manager_name' => 'required',
            'ACM_name' => 'required',
            'executive_name' => 'required',
            'team_lead_name' => 'required',
            'mobile_number' => 'required',
            'remarks' => 'required',
            'space' => 'required',*/
        ]);
        $vehicle = Vehicle::find($request->id);
        $vehicle->update([
            'vehicle_registration_number' => $request->vehicle_registration_number,
            'vehicle_model' => $request->vehicle_model,
            'vehicle_owner_name' => $request->vehicle_owner_name,
            'vehicle_number' => $request->vehicle_number,
            'chassis_number' => $request->chassis_number,
            'loan_account_number' => $request->loan_account_number,
            'loan_number' => $request->loan_number,
            'engine_number' => $request->engine_number,
            'advisor_name' => $request->advisor_name,
            'advisor_number' => $request->advisor_name,
            'reporting_manager_name' => $request->reporting_manager_name,
            'ACM_name' => $request->ACM_name,
            'executive_name' => $request->executive_name,
            'team_lead_name' => $request->team_lead_name,
            'mobile_number' => $request->mobile_number,
            'remarks' => $request->remarks,
            'space' => $request->space,
        ]);
        return back()->withStatus(__('Updated Successfully.'));
    }
    public function view($id){
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.view', compact('vehicle')); 
    }
    public function delete($id){
        $user = Vehicle::findOrFail($id);
        $user->delete();
        return back()->withStatus(__('Data has been deleted.')); 
    }
    public function fileImportExport()
    {
       return view('vehicles.file-import');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request) 
    {
        Excel::import(new VehiclesImport, $request->file('file')->store('temp'));
        return back();
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new VehiclesExport, 'users-collection.xlsx');
    }    
}
