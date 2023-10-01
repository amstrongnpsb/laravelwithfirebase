<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase;

class FirebaseController extends Controller
{
    public function index()
    {
        $firebase = (new Factory)
            ->withServiceAccount(__DIR__.'/laravelxfirebase-5910c-firebase-adminsdk-pahxg-c832b47813.json')
            ->withDatabaseUri('https://laravelxfirebase-5910c-default-rtdb.asia-southeast1.firebasedatabase.app');
 
        $databaseTicket = $firebase->createDatabase()->getReference('ticket');
        $data = $databaseTicket->getvalue();
        @dd($data);
    }
}
