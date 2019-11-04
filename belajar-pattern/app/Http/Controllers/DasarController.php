<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dasar;
use App\Repositories\DasarRepository;

class DasarController extends Controller
{
    public function __construct(DasarRepository $DasarCategory)
    {
        $this->DasarRepository = $DasarCategory;
    }

    public function index()
    {
        // $dasar = Dasar::all();
        $dasar = $this->DasarRepository->getAll();
        return view('Dasar.index', ['dasar' => $dasar]);   
    }
}
