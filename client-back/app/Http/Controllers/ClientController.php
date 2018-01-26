<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return response()->json($client);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();

        $result = $client->validate($request);
        if($result === true){

            try{
                $client->name = $request->name;
                $client->birthday = $request->birthday;
                $client->phone = $request->phone;
                $client->zipcode = $request->zipcode;
                $client->street = $request->street;
                $client->street = $request->street;
                $client->number = $request->number;
                $client->neighborhood = $request->neighborhood;
                $client->city = $request->city;
                $client->save();
                return response()->json(['success' => true, 'message' => 'Cliente cadastrado com sucesso!']);

            }catch (\Exception $exception){
                return response()->json(['success' => false, 'message' => $exception->getMessage()]);
            }
        }else{
            return response()->json(['success' => false, 'message' => $result]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return response()->json($client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return response()->json($client);
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
        $client = Client::find($id);

        $result = $client->validate($request);
        if($result === true){

            try{
                $client->name = $request->name;
                $client->birthday = $request->birthday;
                $client->phone = $request->phone;
                $client->zipcode = $request->zipcode;
                $client->street = $request->street;
                $client->street = $request->street;
                $client->number = $request->number;
                $client->neighborhood = $request->neighborhood;
                $client->city = $request->city;
                $client->update();

                return response()->json(['success' => true, 'message' => 'Cliente atualizado com sucesso!']);

            }catch (\Exception $exception){
                return response()->json(['success' => false, 'message' => $exception->getMessage()]);
            }
        }else{
            return response()->json(['success' => false, 'message' => $result]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $client = Client::destroy($id);

            return response()->json(['success' => true, 'message' => 'Cliente removido com sucesso!']);

        }catch (\Exception $exception){
            return response()->json(['success' => false, 'message' => $exception->getMessage()]);
        }
    }
}
