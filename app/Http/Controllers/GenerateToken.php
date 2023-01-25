<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Laravel\Sail\Console\PublishCommand;

class GenerateToken extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Response $token
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Http::post('https://waserver.teknologio.id/api/NERDWHATS_AMERICA/THISISMYSECURETOKEN/generate-token');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function contact(){
        $response = Http::POST('https://waserver.teknologio.id/api/NERDWHATS_AMERICA/THISISMYSECURETOKEN/generate-token');
        $token = 'Bearer '.$response['token'];
        return Http::withHeaders([
            'Authorization' => $token,
        ])->get('https://waserver.teknologio.id/api/NERDWHATS_AMERICA/all-contacts');

        // return view('dashboard.contact.test', [
        //     'auth' => $token,
        //     'contacts' => $contact
        // ]);
    }

public function startsession(){

        return Http::get('https://waserver.teknologio.id/api/085256890005/THISISMYSECURETOKEN/generate-token');
        // $token = 'Bearer '.$response['token'];
        // $qr =  Http::withHeaders([
        //     'Authorization' => $token,
        // ])->post('https://waserver.teknologio.id/api/NERDWHATS_AMERICA/start-session');

        // return view('qr', [
        //     'data' => $qr

        // ]);

    }


public function statussession(){
    $response = Http::POST('https://waserver.teknologio.id/api/NERDWHATS_AMERICA/THISISMYSECURETOKEN/generate-token');
    $token = 'Bearer '.$response['token'];
    return Http::withHeaders([
        'Authorization' => $token,
    ])->get('https://waserver.teknologio.id/api/NERDWHATS_AMERICA/status-session');
}


}
