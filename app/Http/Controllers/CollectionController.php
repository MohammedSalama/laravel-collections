<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        $data = collect([
            [
                'name' => 'Ahmed',
                'age' => 25,
                'exam' => [
                    'result' => 10
                ]
            ],
            [
                'name' => 'Ali',
                'age' => 21,
                'exam' => [
                    'result' => 20
                ]
            ]
        ]);

        return dd($data->contains(function ($val)
        {
            return $val['age'] < 30;
        }));
    }
}
