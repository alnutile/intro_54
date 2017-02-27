<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

class ExampleApiController extends Controller
{

    public function handle(Request $request, $foo) {

        try {

            $items = $request->get('items');

            foreach ($items as $item) {
                //do something that might cause an issue
            }

            return Response::json(['data' => ['key' => $foo, 'items' => $items], 'message' => "Success with request"], 200);
        } catch (\Exception $e) {
            Log::debug(sprintf("Error %s", $e->getMessage()));

            return Response::json(['data' => '', 'message' => "Error with request"], 400);
        }

    }

}
