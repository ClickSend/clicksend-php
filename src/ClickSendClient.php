<?php
/*
 * ClickSend
 *
 * This file was automatically generated for ClickSend by APIMATIC v2.0 ( https://apimatic.io ) on 05/31/2016
 */

namespace ClickSend;

use ClickSend\Controllers;

/**
 * ClickSend client class
 */
class ClickSendClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct($username = NULL, $key = NULL)
    {
        Configuration::$username = $username ? $username : Configuration::$username;
        Configuration::$key = $key ? $key : Configuration::$key;
    }
 
	/**
	 * Singleton access to Countries controller
	 * @return CountriesController The *Singleton* instance
	 */
	public function getCountries()
	{
		return Controllers\CountriesController::getInstance();
	}
 
	/**
	 * Singleton access to SMS controller
	 * @return SMSController The *Singleton* instance
	 */
	public function getSMS()
	{
		return Controllers\SMSController::getInstance();
	}
 
	/**
	 * Singleton access to Voice controller
	 * @return VoiceController The *Singleton* instance
	 */
	public function getVoice()
	{
		return Controllers\VoiceController::getInstance();
	}
 
	/**
	 * Singleton access to Account controller
	 * @return AccountController The *Singleton* instance
	 */
	public function getAccount()
	{
		return Controllers\AccountController::getInstance();
	}
 
	/**
	 * Singleton access to Subaccount controller
	 * @return SubaccountController The *Singleton* instance
	 */
	public function getSubaccount()
	{
		return Controllers\SubaccountController::getInstance();
	}
 
	/**
	 * Singleton access to ContactList controller
	 * @return ContactListController The *Singleton* instance
	 */
	public function getContactList()
	{
		return Controllers\ContactListController::getInstance();
	}
 
	/**
	 * Singleton access to Contact controller
	 * @return ContactController The *Singleton* instance
	 */
	public function getContact()
	{
		return Controllers\ContactController::getInstance();
	}
 
	/**
	 * Singleton access to Number controller
	 * @return NumberController The *Singleton* instance
	 */
	public function getNumber()
	{
		return Controllers\NumberController::getInstance();
	}
 
	/**
	 * Singleton access to Statistics controller
	 * @return StatisticsController The *Singleton* instance
	 */
	public function getStatistics()
	{
		return Controllers\StatisticsController::getInstance();
	}
 
	/**
	 * Singleton access to EmailToSms controller
	 * @return EmailToSmsController The *Singleton* instance
	 */
	public function getEmailToSms()
	{
		return Controllers\EmailToSmsController::getInstance();
	}
 
	/**
	 * Singleton access to Search controller
	 * @return SearchController The *Singleton* instance
	 */
	public function getSearch()
	{
		return Controllers\SearchController::getInstance();
	}
 
	/**
	 * Singleton access to ReferralAccount controller
	 * @return ReferralAccountController The *Singleton* instance
	 */
	public function getReferralAccount()
	{
		return Controllers\ReferralAccountController::getInstance();
	}
 
	/**
	 * Singleton access to ResellerAccount controller
	 * @return ResellerAccountController The *Singleton* instance
	 */
	public function getResellerAccount()
	{
		return Controllers\ResellerAccountController::getInstance();
	}
 
	/**
	 * Singleton access to TransferCredit controller
	 * @return TransferCreditController The *Singleton* instance
	 */
	public function getTransferCredit()
	{
		return Controllers\TransferCreditController::getInstance();
	}
 
	/**
	 * Singleton access to AccountRecharge controller
	 * @return AccountRechargeController The *Singleton* instance
	 */
	public function getAccountRecharge()
	{
		return Controllers\AccountRechargeController::getInstance();
	}
 
	/**
	 * Singleton access to SmsCampaign controller
	 * @return SmsCampaignController The *Singleton* instance
	 */
	public function getSmsCampaign()
	{
		return Controllers\SmsCampaignController::getInstance();
	}
 
	/**
	 * Singleton access to PostLetter controller
	 * @return PostLetterController The *Singleton* instance
	 */
	public function getPostLetter()
	{
		return Controllers\PostLetterController::getInstance();
	}
 
	/**
	 * Singleton access to PostReturnAddress controller
	 * @return PostReturnAddressController The *Singleton* instance
	 */
	public function getPostReturnAddress()
	{
		return Controllers\PostReturnAddressController::getInstance();
	}
 
	/**
	 * Singleton access to Upload controller
	 * @return UploadController The *Singleton* instance
	 */
	public function getUpload()
	{
		return Controllers\UploadController::getInstance();
	}
}