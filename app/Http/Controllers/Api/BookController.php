<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Attribute\WithHttpStatus;

class BookController extends Controller
{
    public function index()
    {
        return response()->json([
            [
                'id' => 1,
                'name' => 'Neuromancer',
                'author' => 'Willian Gibson',
            ],
            [
                'id' => 2,
                'name' => 'Mihail',
                'author' => 'Eduardo Baka',
            ],
            [
                'id' => 3,
                'name' => 'Count Zero',
                'author' => 'Willian Gibson',
            ],
        ], 200);
    }
}
