<?php

namespace App\Repositories;

use App\Models\Animal;

class AnimalRepository
{
    public function createAnimal($details){
        return Animal::create($details->all());
    }

    public function getAllAnimal(){
        return Animal::all();
    }

    public function updateAnimal($details, $id){
        $animal = Animal::findOrFail($id);
        return $animal->update($details->all());
    }

}
