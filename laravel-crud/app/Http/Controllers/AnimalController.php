<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Repositories\AnimalRepository;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    protected $animalRepository;
    public function __construct(AnimalRepository $animalRepository){
        $this->animalRepository = $animalRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'origin'=>'required'
        ]);
        $createdAnimal = $this->animalRepository->createAnimal($request);
        return response()->json(['message' => 'animal created successfully', 'data' => $createdAnimal], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return $this->animalRepository->getAllAnimal();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required',
            'origin'=> 'required'
        ]);
        $updatedAnimal = $this->animalRepository->updateAnimal($request, $id);
        return response()->json(["message"=>"animal updated successfully", "data"=>$updatedAnimal], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
