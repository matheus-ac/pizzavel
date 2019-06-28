<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{

    public function index()
    {
        return Client::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        return Client::create($data);
    }

    public function show($client)
    {
       return Client::where('telephone', $client)->firstOrFail();

    }

    public function update(Request $request, $client)
    {
        $data = $request->all();
        Client::where('telephone', $client)->update($data);

        $client = Client::where('telephone', $client)->firstOrFail();
        return $client;

    }

    public function destroy($client)
    {
        $data = Client::where('telephone', $client)->firstOrFail();
                  Client::where('telephone', $client)->delete();
            //DB::table('users')->where('telephone', $client)->delete();
        return $data;
    }
}
