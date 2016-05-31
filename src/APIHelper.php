<?php
/*
 * ClickSend
 *
 * This file was automatically generated for ClickSend by APIMATIC v2.0 ( https://apimatic.io ) on 05/31/2016
 */

namespace ClickSend;

use InvalidArgumentException;

/**
 * API utility class
 */
class APIHelper {
    /**
    * Replaces template parameters in the given url
    * @param	string	$queryBuilder    The query string builder to replace the template parameters
    * @param	array	$parameters	The parameters to replace in the url
    * @return	void */
    public static function appendUrlWithTemplateParameters(&$queryBuilder, $parameters)
    {
        //perform parameter validation
        if (is_null($queryBuilder) || !is_string($queryBuilder)) {
            throw new InvalidArgumentException('Given value for parameter "queryBuilder" is invalid.');
        }
        if (is_null($parameters)) {
            return;
        }
        //iterate and append parameters
        foreach ($parameters as $key => $value) {
            $replaceValue = '';

            //load parameter value
            if (is_null($value)) {
                $replaceValue = '';
            } elseif (is_array($value)) {
                $replaceValue = implode("/", array_map("urlencode", $value));
            } else {
                $replaceValue = urlencode(strval($value));
            }

            //find the template parameter and replace it with its value
            $queryBuilder = str_replace('{' . strval($key) . '}', $replaceValue, $queryBuilder);
        }
    }

    /**
    * Appends the given set of parameters to the given query string
    * @param	string	$queryBuilder	The query url string to append the parameters
    * @param	array	$parameters	The parameters to append
    * @return	void */
    public static function appendUrlWithQueryParameters(&$queryBuilder, $parameters)
    {
        //perform parameter validation
        if (is_null($queryBuilder) || !is_string($queryBuilder)) {
            throw new InvalidArgumentException('Given value for parameter "queryBuilder" is invalid.');
        }
        if (is_null($parameters)) {
            return;
        }
        //does the query string already has parameters
        $hasParams = (strrpos($queryBuilder, '?') > 0);

        //if already has parameters, use the &amp; to append new parameters
        $queryBuilder = $queryBuilder . (($hasParams) ? '&' : '?');

        //append parameters
        $queryBuilder = $queryBuilder . http_build_query($parameters);
    }

    /**
    * Validates and processes the given Url
    * @param    string	$url The given Url to process
    * @return   string	Pre-processed Url as string */
    public static function cleanUrl($url)
    {
        //perform parameter validation
        if(is_null($url) || !is_string($url)) {
            throw new InvalidArgumentException('Invalid Url.');
        }
        //ensure that the urls are absolute
        $matchCount = preg_match("#^(https?://[^/]+)#", $url, $matches);
        if ($matchCount == 0) {
            throw new InvalidArgumentException('Invalid Url format.');
        }
        //get the http protocol match
        $protocol = $matches[1];

        //remove redundant forward slashes
        $query = substr($url, strlen($protocol));
        $query = preg_replace("#//+#", "/", $query);

        //return process url
        return $protocol.$query;
    }

	/**
     * Encode multidimentional arrays for sending as post field in CURL
     *
     * Will handle files as well as models if found in the $data.
     *
     * @source https://bugs.php.net/patch-display.php?bug_id=67477&patch=add-http_build_query_develop-function&revision=latest
     * 
     * @param  array $data Input data to be encoded
     * @return array       Encoded data
     */
    public static function httpBuildQueryDevelop($data) {
        // if not array, $data is okay
        if(!is_array($data)) {
            return $data;
        }
        foreach($data as $key => $val) {
            if(is_array($val)) {
                foreach($val as $k => $v) {
                    if(is_array($v)) {
                        // flatten array and merge
                        $data = array_merge($data, statis::httpBuildQueryDevelop(array( "{$key}[{$k}]" => $v)));
                    } else if(is_object($v)) {
                        // flatten object to array and merge
                        $data = array_merge($data, static::httpBuildQueryDevelop(array( "{$key}[{$k}]" => $v->jsonSerialize())));
                    } else {
                        // does not need flattening; primitive
                        $data["{$key}[{$k}]"] = $v;
                    }
                }
                unset($data[$key]);
            }
        }
        return $data;
    }
}