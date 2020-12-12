<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function ShowList()
    {
        return response()->view("index");
    }

    public function create()
    {
        echo "day la create func";
    }

    public function store()
    {
        echo "day la store";

    }

    public function ShowId($id)
    {
        echo "day la show id thu $id";

    }


    public function editId($id)
    {
        echo "day la show id thu $id";

    }


    public function updateId($id)
    {
        echo "day la show id thu $id";

    }

    public function deleteId($id)
    {
        echo "day la show id thu $id";

    }




}
