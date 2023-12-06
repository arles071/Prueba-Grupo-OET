<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Support\PersonCrud;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VehicleController extends BaseController
{
    use PersonCrud;

    /**
     * Función para mostrar todos los vehiculos
     * @return Json
     */
    public function index()
    {
        $plate = isset($_GET['plate']) ? $_GET['plate'] : "";
        $vehicleType = isset($_GET['vehicle_type']) ? $_GET['vehicle_type'] : "";
        $ownerNames = isset($_GET['owner_names']) ? $_GET['owner_names'] : "";
        $driverNames = isset($_GET['driver_names']) ? $_GET['driver_names'] : "";

        $vehicles = Vehicle::with('driver', 'owner');

        if($plate != "")
            $vehicles->where('plate', 'like', '%'.$plate.'%');
        if($vehicleType != "")
            $vehicles->where('vehicle_type', $vehicleType);
        if($ownerNames != "")
            $vehicles->whereHas('owner', function($q) use($ownerNames){
                $q->where(function ($query) use ($ownerNames) {
                    $query->whereRaw("CONCAT(first_name, ' ', middle_name, ' ', last_name) LIKE ?", ['%' . $ownerNames . '%']);
                })->orWhere(function ($query) use ($ownerNames) {
                    $query->whereRaw("CONCAT(first_name,' ', last_name) LIKE ?", ['%' . $ownerNames . '%']);
                });
            });
        if($driverNames != "")
            $vehicles->whereHas('driver', function($q) use($driverNames){
                $q->where(function ($query) use ($driverNames) {
                    $query->whereRaw("CONCAT(first_name, ' ', middle_name, ' ', last_name) LIKE ?", ['%' . $driverNames . '%']);
                })->orWhere(function ($query) use ($driverNames) {
                    $query->whereRaw("CONCAT(first_name,' ', last_name) LIKE ?", ['%' . $driverNames . '%']);
                });
            });
        
        $vehicles = $vehicles->orderBy('id', 'desc')->paginate(5);
        return $this->sendResponse($vehicles, 'Vehicles listed with exitl');
    }


    /**
     * Función para crear
     * @param Request $request
     * @return Json
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'plate' => 'required|max:6|unique:vehicles',
            'color' => 'required|max:20',
            'brand' => 'required|max:50',
            'vehicle_type' => 'required|in:particular,publico',
            
            //Datos de conductor
            'driver.identification_number' => 'required|string|max:12',
            'driver.first_name' => 'required|string|max:50',
            'driver.middle_name' => 'nullable|string|max:50',
            'driver.last_name' => 'required|string|max:50',
            'driver.address' => 'required|string|max:100',
            'driver.phone' => 'required|string|max:12',
            'driver.city' => 'required|string|max:30',

            //Datos del propietario
            'owner.identification_number' => 'required|string|max:12',
            'owner.first_name' => 'required|string|max:50',
            'owner.middle_name' => 'nullable|string|max:50',
            'owner.last_name' => 'required|string|max:50',
            'owner.address' => 'required|string|max:100',
            'owner.phone' => 'required|string|max:12',
            'owner.city' => 'required|string|max:30',

        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        //Inicia la transación
        DB::beginTransaction();

        try {
            $dataRequest = $request->all();
            $dataPersonDriver = $dataRequest['driver'];
            $dataPersonOwner = $dataRequest['owner'];
            
            $personDriver = $this->createNewPerson($dataPersonDriver);
            $personOwner = $this->createNewPerson($dataPersonOwner);

            $vehicle = new Vehicle();
            $vehicle->plate = $dataRequest['plate'];
            $vehicle->color = $dataRequest['color'];
            $vehicle->brand = $dataRequest['brand'];
            $vehicle->vehicle_type = $dataRequest['vehicle_type'];
            $vehicle->driver_id = $personDriver->id;
            $vehicle->owner_id = $personOwner->id;
            
            $vehicle->save();

            //Finaliza la transacción
            DB::commit();

            return $this->sendResponse($vehicle, 'Successfully created vehicle');
        } catch (Exception $e){
            DB::rollback();
            $success = [
                'errorLine' => $e->getLine(),
                'errorMessage' => $e->getMessage(),
                'status' => false
            ];
        
            return $this->sendResponse($success, 'Error when trying to register the vehicle.');
        }

        
    }

    /**
     * Función para mostrar
     * @param Number $id
     * @return Json
     */
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return $this->sendResponse($vehicle, 'Vehicle listed correctly');
    }

    /**
     * Función para obtener Vehiculo por placa
     * @param String $plate
     * @return Object
     */
    public function getFindPlate($plate){
        $vehicle = Vehicle::where('plate', $plate)->first();
        return $this->sendResponse($vehicle, 'Vehicle listed correctly');
    }


    /**
     * Función para actualizar
     * @param Request $request
     * @param Number $id
     * @return Json
     */
    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(), [
            'plate' => 'required|max:6|unique:vehicles,plate,' . $id,
            'color' => 'required|max:20',
            'brand' => 'required|max:50',
            'vehicle_type' => 'required|in:particular,publico',
            
            //Datos de conductor
            'driver.identification_number' => 'required|string|max:12',
            'driver.first_name' => 'required|string|max:50',
            'driver.middle_name' => 'nullable|string|max:50',
            'driver.last_name' => 'required|string|max:50',
            'driver.address' => 'required|string|max:100',
            'driver.phone' => 'required|string|max:12',
            'driver.city' => 'required|string|max:30',

            //Datos del propietario
            'owner.identification_number' => 'required|string|max:12',
            'owner.first_name' => 'required|string|max:50',
            'owner.middle_name' => 'nullable|string|max:50',
            'owner.last_name' => 'required|string|max:50',
            'owner.address' => 'required|string|max:100',
            'owner.phone' => 'required|string|max:12',
            'owner.city' => 'required|string|max:30',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        //Inicia la transación
        DB::beginTransaction();
        try {

            $vehicle = Vehicle::findOrFail($id);
            //$vehicle->update($request->all());


            $dataRequest = $request->all();
            $dataPersonDriver = $dataRequest['driver'];
            $dataPersonOwner = $dataRequest['owner'];
            
            $personDriver = $this->createNewPerson($dataPersonDriver);
            $personOwner = $this->createNewPerson($dataPersonOwner);

            $vehicle->plate = $dataRequest['plate'];
            $vehicle->color = $dataRequest['color'];
            $vehicle->brand = $dataRequest['brand'];
            $vehicle->vehicle_type = $dataRequest['vehicle_type'];
            $vehicle->driver_id = $personDriver->id;
            $vehicle->owner_id = $personOwner->id;
            
            $vehicle->update();

            //Finaliza la transacción
            DB::commit();

        } catch (Exception $e){
            DB::rollback();
            $success = [
                'errorLine' => $e->getLine(),
                'errorMessage' => $e->getMessage(),
                'status' => false
            ];
          
            return $this->sendResponse($success, 'Error when trying to register the vehicle.');
        }
        

        return $this->sendResponse($vehicle, 'Successfully updated vehicle');
    }

    /**
     * Función para eliminar un vehículo
     * @param Number $id
     * @return Json
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return $this->sendResponse($vehicle, 'Vehicle removed correctly');
    }
}
