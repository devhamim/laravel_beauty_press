<?php

namespace App\Helpers;

use Log;

class ApiHelper
{

  public static function jsonResponse($status, $message, $data)
  {
    $response = [
      'status'   => $status,
      'message'  => $message,
      'data'     => $data
    ];
    return response()->json($response);
  }
}
