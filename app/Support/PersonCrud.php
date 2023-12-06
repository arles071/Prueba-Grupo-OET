<?php
namespace App\Support;

use App\Models\Person;

trait PersonCrud {


    /**
     * Función para crear una nueva persona
     * @param Array
     * @return Person|null
     */
    public function createNewPerson(Array $arrayPerson){

        //Valida si la person ya esta registrada
        $person = $this->findDocumentPerson($arrayPerson);

        if($person === null){
            $person = new Person();
            $person->identification_number = $arrayPerson['identification_number'];
            $person->first_name = $arrayPerson['first_name'];
            $person->middle_name = $arrayPerson['middle_name'];
            $person->last_name = $arrayPerson['last_name'];
            $person->address = $arrayPerson['address'];
            $person->phone = $arrayPerson['phone'];
            $person->city = $arrayPerson['city'];
            
            if($person->save()){
                return $person;
            }
            
        } else {
            return $this->updatePerson($arrayPerson);
        }
        return null;
    }

    /**
     * Función para actualizar una persona
     * 
     */
    public function updatePerson(Array $arrayPerson){

        $person = $this->findDocumentPerson($arrayPerson['identification_number']);

        if($person !== null){
            $person->identification_number = $arrayPerson['identification_number'];
            $person->first_name = $arrayPerson['first_name'];
            $person->middle_name = $arrayPerson['middle_name'];
            $person->last_name = $arrayPerson['last_name'];
            $person->address = $arrayPerson['address'];
            $person->phone = $arrayPerson['phone'];
            $person->city = $arrayPerson['city'];
            if($person->update()){
                return $person;
            }
            
        }
        return null;
    }

    /**
     * Realiza consulta por documento de la persona en base de datos
     * @param Number $identificationNumber
     * @return Person|null $person
     */
    public function findDocumentPerson($identificationNumber){
        $person = Person::where('identification_number', $identificationNumber)->first();
        return $person;
    }
}