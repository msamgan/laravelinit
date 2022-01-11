<?php

if (!function_exists('successResponse')) {
    /**
     * @param $message
     * @param null $payload
     * @param null $extraData
     * @return array
     */
    function successResponse($message, $payload = null, $extraData = null): array
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
