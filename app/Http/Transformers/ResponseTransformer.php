<?php
namespace App\Http\Transformers;

use stdClass;

class ResponseTransformer{
    public function json($status, $message, $data = null){
        $response = new stdClass;
        $response->status = $status;
        $response->message = $message;
        $response->data = $data;
        return response()->json($response, $status);
    }
}
