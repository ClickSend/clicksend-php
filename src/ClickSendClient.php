<?php
/*
 * ClickSend
 *
 * This file was automatically generated for ClickSend by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ClickSendLib;

use ClickSendLib\Controllers;

/**
 * ClickSend client class
 */
class ClickSendClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $username = null,
        $key = null,
        $baseUri = null
    ) {
        Configuration::$username = $username ? $username : Configuration::$username;
        Configuration::$key = $key ? $key : Configuration::$key;
        Configuration::$BASEURI = $baseUri ? $baseUri : Configuration::$BASEURI;
    }
 
    /**
     * Singleton access to Fax controller
     * @return Controllers\FaxController The *Singleton* instance
     */
    public function getFax()
    {
        return Controllers\FaxController::getInstance();
    }
 
    /**
     * Singleton access to Countries controller
     * @return Controllers\CountriesController The *Singleton* instance
     */
    public function getCountries()
    {
        return Controllers\CountriesController::getInstance();
    }
 
    /**
     * Singleton access to SMS controller
     * @return Controllers\SMSController The *Singleton* instance
     */
    public function getSMS()
    {
        return Controllers\SMSController::getInstance();
    }
 
    /**
     * Singleton access to Voice controller
     * @return Controllers\VoiceController The *Singleton* instance
     */
    public function getVoice()
    {
        return Controllers\VoiceController::getInstance();
    }
 
    /**
     * Singleton access to Account controller
     * @return Controllers\AccountController The *Singleton* instance
     */
    public function getAccount()
    {
        return Controllers\AccountController::getInstance();
    }
 
    /**
     * Singleton access to Subaccount controller
     * @return Controllers\SubaccountController The *Singleton* instance
     */
    public function getSubaccount()
    {
        return Controllers\SubaccountController::getInstance();
    }
 
    /**
     * Singleton access to Contact controller
     * @return Controllers\ContactController The *Singleton* instance
     */
    public function getContact()
    {
        return Controllers\ContactController::getInstance();
    }
 
    /**
     * Singleton access to ContactList controller
     * @return Controllers\ContactListController The *Singleton* instance
     */
    public function getContactList()
    {
        return Controllers\ContactListController::getInstance();
    }
 
    /**
     * Singleton access to ResellerAccount controller
     * @return Controllers\ResellerAccountController The *Singleton* instance
     */
    public function getResellerAccount()
    {
        return Controllers\ResellerAccountController::getInstance();
    }
 
    /**
     * Singleton access to Number controller
     * @return Controllers\NumberController The *Singleton* instance
     */
    public function getNumber()
    {
        return Controllers\NumberController::getInstance();
    }
 
    /**
     * Singleton access to Statistics controller
     * @return Controllers\StatisticsController The *Singleton* instance
     */
    public function getStatistics()
    {
        return Controllers\StatisticsController::getInstance();
    }
 
    /**
     * Singleton access to EmailToSms controller
     * @return Controllers\EmailToSmsController The *Singleton* instance
     */
    public function getEmailToSms()
    {
        return Controllers\EmailToSmsController::getInstance();
    }
 
    /**
     * Singleton access to Search controller
     * @return Controllers\SearchController The *Singleton* instance
     */
    public function getSearch()
    {
        return Controllers\SearchController::getInstance();
    }
 
    /**
     * Singleton access to ReferralAccount controller
     * @return Controllers\ReferralAccountController The *Singleton* instance
     */
    public function getReferralAccount()
    {
        return Controllers\ReferralAccountController::getInstance();
    }
 
    /**
     * Singleton access to TransferCredit controller
     * @return Controllers\TransferCreditController The *Singleton* instance
     */
    public function getTransferCredit()
    {
        return Controllers\TransferCreditController::getInstance();
    }
 
    /**
     * Singleton access to PostReturnAddress controller
     * @return Controllers\PostReturnAddressController The *Singleton* instance
     */
    public function getPostReturnAddress()
    {
        return Controllers\PostReturnAddressController::getInstance();
    }
 
    /**
     * Singleton access to AccountRecharge controller
     * @return Controllers\AccountRechargeController The *Singleton* instance
     */
    public function getAccountRecharge()
    {
        return Controllers\AccountRechargeController::getInstance();
    }
 
    /**
     * Singleton access to SmsCampaign controller
     * @return Controllers\SmsCampaignController The *Singleton* instance
     */
    public function getSmsCampaign()
    {
        return Controllers\SmsCampaignController::getInstance();
    }
 
    /**
     * Singleton access to PostLetter controller
     * @return Controllers\PostLetterController The *Singleton* instance
     */
    public function getPostLetter()
    {
        return Controllers\PostLetterController::getInstance();
    }
 
    /**
     * Singleton access to MMS controller
     * @return Controllers\MMSController The *Singleton* instance
     */
    public function getMMS()
    {
        return Controllers\MMSController::getInstance();
    }
 
    /**
     * Singleton access to Upload controller
     * @return Controllers\UploadController The *Singleton* instance
     */
    public function getUpload()
    {
        return Controllers\UploadController::getInstance();
    }
}
