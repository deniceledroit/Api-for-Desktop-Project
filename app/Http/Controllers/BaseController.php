<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Log;

class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendResponse($result)
    {
        $res = [
            'success'    => $result,
        ];
        Log::debug($response=response()->json($res,200));
        return $response;
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        /*$response = [
            'success' => false,
            'message' => $error,
        ];



        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }*/
        Log::debug($response=response()->json($errorMessages, $code));
        return $response;
    }
}
