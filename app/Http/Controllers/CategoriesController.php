<?php

namespace App\Http\Controllers;



class CategoriesController extends Controller
{
    protected $items = [
        1 => 'Category 1',
        'Category 2',
        'Category 3',
        'Category 4',
        'Category 5',
    ];

    public function index()
    {
        return $this->items;
    }
    public function show($id = 0, $title)
    {
        return $title . ":" . ($this->items[$id]) ?? 'Not Found';
    }
}
