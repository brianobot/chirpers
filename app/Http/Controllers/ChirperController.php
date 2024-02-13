<?php

namespace App\Http\Controllers;

use App\Models\Chirper;
use App\Repositories\ChirperRepository;
use Doctrine\DBAL\Driver\Mysqli\Initializer\Charset;
use Illuminate\Http\Request;

class ChirperController extends Controller
{
    private ChirperRepository $chirperRepository;

    public function __construct(ChirperRepository $chirperRepository)
    {
        $this->chirperRepository = $chirperRepository;   
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chirpers = $this->chirperRepository->getAll();
        info($chirpers);
        return response("list all the chirps here");
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirper $chirper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirper $chirper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirper $chirper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirper $chirper)
    {
        //
    }
}
