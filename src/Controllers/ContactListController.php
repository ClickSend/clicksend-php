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
class ContactListController {

    /**
     * @var ContactListController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return ContactListController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get all contact lists
     * @return string response from the API call*/
    public function getContactLists () 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists';

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
     * Create new contact list
     * @param  string     $listName      Required parameter: Your contact list name
     * @return string response from the API call*/
    public function createContactList (
                $listName) 
    { 
        //check that all required arguments are provided
        if(!isset($listName))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'list_name' => $listName,
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
     * Get specific contact list
     * @param  int     $listId      Required parameter: Example: 
     * @return string response from the API call*/
    public function getContactList (
                $listId) 
    { 
        //check that all required arguments are provided
        if(!isset($listId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists/{list_id}';

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
     * Update specific contact list
     * @param  int        $listId        Required parameter: Your list id
     * @param  string     $listName      Required parameter: Your new list name
     * @return string response from the API call*/
    public function updateContactList (
                $listId,
                $listName) 
    { 
        //check that all required arguments are provided
        if(!isset($listId, $listName))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists/{list_id}';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'list_id'   => $listId,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'list_name' => $listName,
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
     * Delete a specific contact list
     * @param  int     $listId      Required parameter: Example: 
     * @return string response from the API call*/
    public function deleteContactList (
                $listId) 
    { 
        //check that all required arguments are provided
        if(!isset($listId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists/{list_id}';

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
     * Remove duplicate contacts
     * @param  int     $listId      Required parameter: Your list id
     * @return string response from the API call*/
    public function removeDuplicateContacts (
                $listId) 
    { 
        //check that all required arguments are provided
        if(!isset($listId))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists/{list_id}/remove-duplicates';

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
     * Import contacts to list
     * @param  int        $listId      Required parameter: Your contact list id you want to access.
     * @param  string     $file        Required parameter: Example: 
     * @return string response from the API call*/
    public function importContactsToList (
                $listId,
                $file) 
    { 
        //check that all required arguments are provided
        if(!isset($listId, $file))
            throw new \InvalidArgumentException("One or more required arguments were NULL.");


        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/lists/{list_id}/import';

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

        //prepare parameters
        $_parameters = array (
            "file"  => Request\Body::file($file)
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$username, Configuration::$key);

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, APIHelper::httpBuildQueryDevelop($_parameters));

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