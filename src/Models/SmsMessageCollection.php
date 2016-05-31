<?php 
/*
 * ClickSend
 *
 * This file was automatically generated for ClickSend by APIMATIC v2.0 ( https://apimatic.io ) on 05/31/2016
 */

namespace ClickSend\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class SmsMessageCollection implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var array $messages public property
     */
    public $messages;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   array             $messages   Initialization value for the property $this->messages
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->messages = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['messages'] = $this->messages;

        return $json;
    }
}