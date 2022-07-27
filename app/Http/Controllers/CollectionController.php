<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        $data = [
            [
                'name' => 'Muhammed',
                'score' => 50,
                'exam' => [
                    'math' => 10,
                    'english' => 20
                ]
            ],
            [
                'name' => 'Ali',
                'score' => 30,
                'exam' => [
                    'math' => 12,
                    'english' => 25
                ]
            ]
        ];
        $collection = collect($data);

        $exam = array_column($data , 'exam');

        dd($exam);

        return max($exam);
    }
}
