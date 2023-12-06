<?php

namespace App\Http\Controllers\API;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonController extends BaseController
{

    /**
     * Función para listar todas las personas
     * @return Json
     */
    public function index()
    {
        $numberDocument = isset($_GET['number_document']) ? $_GET['number_document'] : "";
        $people = Person::select();

        if($numberDocument != "")
            $people->where('identification_number', 'like', '%'.$numberDocument.'%');

        $people = $people->orderBy('id', 'desc')->paginate(5);
        return $this->sendResponse($people, 'people successfully listed');
    }


    /**
     * Función para crear una persona
     * @param Request $request
     * @return Json
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'identification_number' => 'required|unique:people',
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $person = Person::create($request->all());

        return $this->sendResponse($person, 'Successfully created person');
    }

    /**
     * Función para mostrar una persona
     * @param Number $id
     * @return Json
     */
    public function show($id)
    {
        $person = Person::findOrFail($id);
        return $this->sendResponse($person, 'Successfully listed person');
    }

    /**
     * Función para obtener Persona por documento
     * @param String $identificationNumber
     * @return Object
     */
    public function getFindDocument($identificationNumber){
        $person = Person::where('identification_number', $identificationNumber)->first();
        return $this->sendResponse($person, 'Vehicle listed correctly');
    }

    /**
     * Función para actualizar una persona
     * @param Request $request
     * @param Number $id
     * @return Json
     */
    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(), [
            'identification_number' => 'required|unique:people,identification_number,' . $id,
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $person = Person::findOrFail($id);
        $person->update($request->all());

        return $this->sendResponse($person, 'Successfully updated person');
    }

    /**
     * Función para eliminar una persona
     * @param Number $id
     * @return Json
     */
    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();

        return $this->sendResponse($person, 'Successfully removed person');
    }
}
