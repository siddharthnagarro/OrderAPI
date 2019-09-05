<?php
return [
    'status' => [
        'unassigned' => 'UNASSIGNED',
        'taken' => 'TAKEN',
        'success' => 'SUCCESS'
    ],

    'get_messages' => [
        'page.required' => 'PAGE_IS_REQUIRED',
        'limit.required' => 'LIMIT_IS_REQUIRED',
        'page.numeric' => 'PAGE_SHOULD_BE_NUMERIC',
        'limit.numeric' => 'LIMIT_SHOULD_BE_NUMERIC',
        'page.gt' => 'PAGE_SHOULD_BE_POSITIVE_AND_GREATER_THAN_ZERO',
        'limit.gt' => 'LIMIT_SHOULD_BE_POSITIVE_AND_GREATER_THAN_ZERO',
        'limit_reached' => 'NO_ORDERS_ARE_PRESENT',
    ],

    'store_messages' => [
        'origin.required' => 'ORIGIN_IS_REQUIRED',
        'destination.required' => 'DESTINATION_IS_REQUIRED',
        'origin.array' => 'ORIGIN_SHOULD_BE_AN_ARRAY',
        'destination.array' => 'DESTINATION_SHOULD_BE_AN_ARRAY',
        'origin.min' => 'ORIGIN_SHOULD_HAVE_MINIMUM_TWO_VALUES',
        'destination.min' => 'DESTINATION_SHOULD_HAVE_MINIMUM_TWO_VALUES',
        'origin.max' => 'ORIGIN_SHOULD_HAVE_MAXIMUM_TWO_VALUES',
        'destination.max' => 'DESTINATION_SHOULD_HAVE_MAXIMUM_TWO_VALUES',
        'origin.validatelatlong' => 'ORIGIN_COORDINATE_SHOULD_BE_CORRECT',
        'destination.validatelatlong' => 'DESTINATION_COORDINATE_SHOULD_BE_CORRECT',
        'ordererror' => 'ORDER_NOT_CREATED_TRY_AGAIN',
    ],

    'update_messages' => [
        'status.required' => 'STATUS_IS_REQUIRED',
        'taken' => 'ORDER_ALREADY_TAKEN',
        'incorrect' => 'STATUS_OR_ORDER_ID_IS_INCORRECT',
        'incorrectorderid' => 'ORDER_ID_IS_INCORRECT',
        'incorrectparameters' => 'INCORRECT_PARAMETERS_PASSED',
    ],
];