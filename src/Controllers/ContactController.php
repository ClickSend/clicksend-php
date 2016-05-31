<?php
/*
 * ClickSend
 *
 * This file was automatically generated for ClickSend by APIMATIC v2.0 ( https://apimatic.io ) on 05/31/2016
 */

namespace ClickSend\Controllers;

use ClickSend\APIException;
use ClickSend\APIHelper;
use ClickSend\Configuration;
use ClickSend\Models;
use Unirest\Request;
use \apimatic\jsonmapper\JsonMapper;

/**
 * @todo Add a general description for this controller.
 */
class ContactController {

    /**
     * @var ContactController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return ContactController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get all contacts in a list
     * @param  int     $listId      Required parameter: Example: 
     * @return string response from the API call*/
    public function getContacts (
                $listId) 
    { 
        //check that all required arguments are provided
        if(!isset($listId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists/{list_id}/contacts';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'list_id' => $listId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Create new contact
     * @param  int             $listId                  Required parameter: Your list_id
     * @param  string|null     $phoneNumber             Optional parameter: Your phone number in E.164 format. Must be provided if no fax number or email.
     * @param  string|null     $email                   Optional parameter: Your email. Must be provided if no phone number or fax number.
     * @param  string|null     $faxNumber               Optional parameter: You fax number. Must be provided if no phone number or email.
     * @param  string|null     $firstName               Optional parameter: Your firstname.
     * @param  string|null     $lastName                Optional parameter: Your lastname.
     * @param  string|null     $addressLine1            Optional parameter: Example: 
     * @param  string|null     $addressLine2            Optional parameter: Example: 
     * @param  string|null     $addressCity             Optional parameter: Example: 
     * @param  string|null     $addressState            Optional parameter: Example: 
     * @param  string|null     $addressPostalCode       Optional parameter: Example: 
     * @param  string|null     $addressCountry          Optional parameter: Example: 
     * @param  string|null     $organizationName        Optional parameter: Example: 
     * @param  string|null     $custom1                 Optional parameter: Example: 
     * @param  string|null     $custom2                 Optional parameter: Example: 
     * @param  string|null     $custom3                 Optional parameter: Example: 
     * @param  string|null     $custom4                 Optional parameter: Example: 
     * @return string response from the API call*/
    public function createContact (
                $listId,
                $phoneNumber = NULL,
                $email = NULL,
                $faxNumber = NULL,
                $firstName = NULL,
                $lastName = NULL,
                $addressLine1 = NULL,
                $addressLine2 = NULL,
                $addressCity = NULL,
                $addressState = NULL,
                $addressPostalCode = NULL,
                $addressCountry = NULL,
                $organizationName = NULL,
                $custom1 = NULL,
                $custom2 = NULL,
                $custom3 = NULL,
                $custom4 = NULL) 
    { 
        //check that all required arguments are provided
        if(!isset($listId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists/{list_id}/contacts';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'list_id'             => $listId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'phone_number'        => $phoneNumber,
            'email'               => $email,
            'fax_number'          => $faxNumber,
            'first_name'          => $firstName,
            'last_name'           => $lastName,
            'address_line_1'      => $addressLine1,
            'address_line_2'      => $addressLine2,
            'address_city'        => $addressCity,
            'address_state'       => $addressState,
            'address_postal_code' => $addressPostalCode,
            'address_country'     => $addressCountry,
            'organization_name'   => $organizationName,
            'custom_1'            => $custom1,
            'custom_2'            => $custom2,
            'custom_3'            => $custom3,
            'custom_4'            => $custom4,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'        => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Get a specific contact
     * @param  int     $listId         Required parameter: Your contact list id you want to access.
     * @param  int     $contactId      Required parameter: Your contact id you want to access.
     * @return string response from the API call*/
    public function getContact (
                $listId,
                $contactId) 
    { 
        //check that all required arguments are provided
        if(!isset($listId, $contactId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists/{list_id}/contacts/{contact_id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'list_id'    => $listId,
            'contact_id' => $contactId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Update contact
     * @param  int             $listId                  Required parameter: Your list id
     * @param  int             $contactId               Required parameter: Your contact id
     * @param  string|null     $phoneNumber             Optional parameter: Your phone number in E.164 format.
     * @param  string|null     $email                   Optional parameter: Your email. Must be provided if no phone number or fax number.
     * @param  string|null     $faxNumber               Optional parameter: You fax number. Must be provided if no phone number or email.
     * @param  string|null     $firstName               Optional parameter: Your firstname
     * @param  string|null     $lastName                Optional parameter: Your lastname
     * @param  string|null     $addressLine1            Optional parameter: Example: 
     * @param  string|null     $addressLine2            Optional parameter: Example: 
     * @param  string|null     $addressCity             Optional parameter: Example: 
     * @param  string|null     $addressState            Optional parameter: Example: 
     * @param  string|null     $addressPostalCode       Optional parameter: Example: 
     * @param  string|null     $addressCountry          Optional parameter: Example: 
     * @param  string|null     $organizationName        Optional parameter: Example: 
     * @param  string|null     $custom1                 Optional parameter: Example: 
     * @param  string|null     $custom2                 Optional parameter: Example: 
     * @param  string|null     $custom3                 Optional parameter: Example: 
     * @param  string|null     $custom4                 Optional parameter: Example: 
     * @return string response from the API call*/
    public function updateContact (
                $listId,
                $contactId,
                $phoneNumber = NULL,
                $email = NULL,
                $faxNumber = NULL,
                $firstName = NULL,
                $lastName = NULL,
                $addressLine1 = NULL,
                $addressLine2 = NULL,
                $addressCity = NULL,
                $addressState = NULL,
                $addressPostalCode = NULL,
                $addressCountry = NULL,
                $organizationName = NULL,
                $custom1 = NULL,
                $custom2 = NULL,
                $custom3 = NULL,
                $custom4 = NULL) 
    { 
        //check that all required arguments are provided
        if(!isset($listId, $contactId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists/{list_id}/contacts/{contact_id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'list_id'             => $listId,
            'contact_id'          => $contactId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'phone_number'        => $phoneNumber,
            'email'               => $email,
            'fax_number'          => $faxNumber,
            'first_name'          => $firstName,
            'last_name'           => $lastName,
            'address_line_1'      => $addressLine1,
            'address_line_2'      => $addressLine2,
            'address_city'        => $addressCity,
            'address_state'       => $addressState,
            'address_postal_code' => $addressPostalCode,
            'address_country'     => $addressCountry,
            'organization_name'   => $organizationName,
            'custom_1'            => $custom1,
            'custom_2'            => $custom2,
            'custom_3'            => $custom3,
            'custom_4'            => $custom4,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'        => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Delete a contact
     * @param  int        $listId         Required parameter: Example: 
     * @param  string     $contactId      Required parameter: Example: 
     * @return string response from the API call*/
    public function deleteContact (
                $listId,
                $contactId) 
    { 
        //check that all required arguments are provided
        if(!isset($listId, $contactId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists/{list_id}/contacts/{contact_id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'list_id'    => $listId,
            'contact_id' => $contactId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        
    /**
     * Remove all opted out contacts
     * @param  int     $listId              Required parameter: Your list id
     * @param  int     $optOutListId        Required parameter: Your opt out list id
     * @return string response from the API call*/
    public function removeOptedOutContacts (
                $listId,
                $optOutListId) 
    { 
        //check that all required arguments are provided
        if(!isset($listId, $optOutListId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists/{list_id}/remove-opted-out-contacts/{opt_out_list_id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'list_id'         => $listId,
            'opt_out_list_id' => $optOutListId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ClickSendSDK'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers);

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new APIException('BAD_REQUEST', 400, $response->body);
        }

        else if ($response->code == 401) {
            throw new APIException('UNAUTHORIZED', 401, $response->body);
        }

        else if ($response->code == 403) {
            throw new APIException('FORBIDDEN', 403, $response->body);
        }

        else if ($response->code == 404) {
            throw new APIException('NOT_FOUND', 404, $response->body);
        }

        else if ($response->code == 405) {
            throw new APIException('METHOD_NOT_FOUND', 405, $response->body);
        }

        else if ($response->code == 429) {
            throw new APIException('TOO_MANY_REQUESTS', 429, $response->body);
        }

        else if ($response->code == 500) {
            throw new APIException('INTERNAL_SERVER_ERROR', 500, $response->body);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code, $response->body);
        }

        return $response->body;
    }
        

    /**
     * Get a new JsonMapper instance for mapping objects
     * @return \apimatic\jsonmapper\JsonMapper JsonMapper instance
     */
    protected function getJsonMapper()
    {
        $mapper = new JsonMapper();
        return $mapper;
    }
}