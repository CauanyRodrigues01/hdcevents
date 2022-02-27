<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Event;

class EventController extends Controller
{
    public function index() {
        $events = Event::all(); //pega todos os registros do BD
        return view('welcome', ['events' => $events]);
    }

    public function create() {


        return view('events.create');
    }

    public function contact() {
        return view('contact');
    }

    public function produtos() {
        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }

    public function produto($id) {
        return view('product', ['id' => $id]);
    }

}
