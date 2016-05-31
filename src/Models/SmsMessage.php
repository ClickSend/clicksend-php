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
class SmsMessage implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var string $source public property
     */
    public $source;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $from public property
     */
    public $from;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $body public property
     */
    public $body;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $to public property
     */
    public $to;

    /**
     * @todo Write general description for this property
     * @var int|null $schedule public property
     */
    public $schedule;

    /**
     * @todo Write general description for this property
     * @maps custom_string
     * @var string|null $customString public property
     */
    public $customString;

    /**
     * @todo Write general description for this property
     * @maps list_id
     * @var int|null $listId public property
     */
    public $listId;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   string            $source          Initialization value for the property $this->source       
	 * @param   string            $from            Initialization value for the property $this->from         
	 * @param   string            $body            Initialization value for the property $this->body         
	 * @param   string            $to              Initialization value for the property $this->to           
	 * @param   int|null          $schedule        Initialization value for the property $this->schedule     
	 * @param   string|null       $customString    Initialization value for the property $this->customString 
	 * @param   int|null          $listId          Initialization value for the property $this->listId       
     */
    public function __construct()
    {
        if(7 == func_num_args())
        {
            $this->source        = func_get_arg(0);
            $this->from          = func_get_arg(1);
            $this->body          = func_get_arg(2);
            $this->to            = func_get_arg(3);
            $this->schedule      = func_get_arg(4);
            $this->customString  = func_get_arg(5);
            $this->listId        = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['source']        = $this->source;
        $json['from']          = $this->from;
        $json['body']          = $this->body;
        $json['to']            = $this->to;
        $json['schedule']      = $this->schedule;
        $json['custom_string'] = $this->customString;
        $json['list_id']       = $this->listId;

        return $json;
    }
}