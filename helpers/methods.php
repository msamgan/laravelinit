<?php

if (!function_exists('successResponse')) {
    /**
     * @param string $message
     * @param null $payload
     * @param null $extraData
     * @return array
     */
    function successResponse(string $message, $payload = null, $extraData = null): array
    {

        $response = [
            'status' => true,
            'message' => $message,
        ];

        if ($payload) {
            $response['payload'] = $payload;
        }

        if ($extraData) {
            $response['extraData'] = $extraData;
        }

        return $response;
    }
}

if (!function_exists('errorResponse')) {
    /**
     * @param string $message
     * @param null $errors
     * @return array
     */
    function errorResponse(string $message, $errors = null): array
    {
        $response = [
            'status' => false,
            'message' => $message,
        ];

        if ($errors) {
            $response['errors'] = $errors;
        }

        return $response;
    }
}

if (!function_exists('emptyRequest')) {
    /**
     * emptyRequest, remove all the params in request (body and query string)
     */
    function emptyRequest()
    {
        foreach (request()->all() as $key => $param) {
            request()->offsetUnset($key);
        }
    }
}

if (!function_exists('dateFormatter')) {
    /**
     * @param $date
     * @return false|string
     */
    function dateFormatter($date): string
    {
        return date('Y-m-d', strtotime($date));
    }
}

if (!function_exists('generatePin')) {
    /**
     * generatePin, generates the pin number for a specific provided digit count.
     * Default is 4 digit
     *
     * @param integer $digits
     * @return integer
     */
    function generatePin(int $digits = 4): int
    {
        $i = 0;
        $pin = null;
        while ($i < $digits) {
            $pin .= mt_rand(1, 9);
            $i++;
        }

        return $pin;
    }
}
