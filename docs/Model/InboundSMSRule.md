# InboundSMSRule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dedicated_number** | **string** | Dedicated Number. Can be &#x27;*&#x27; to apply to all numbers. | 
**rule_name** | **string** | Rule Name. | 
**message_search_type** | **float** | Message Search Type: 0&#x3D;Any message, 1&#x3D;starts with, 2&#x3D;contains, 3&#x3D;does not contain. | 
**message_search_term** | **string** | Message search term. | 
**action** | **string** | Action to be taken (AUTO_REPLY, EMAIL_USER, EMAIL_FIXED, URL, SMS, POLL, GROUP_SMS, MOVE_CONTACT, CREATE_CONTACT, CREATE_CONTACT_PLUS_EMAIL, CREATE_CONTACT_PLUS_NAME_EMAIL CREATE_CONTACT_PLUS_NAME, SMPP, NONE). | 
**action_address** | **string** | Action address. | 
**enabled** | **float** | Enabled: Disabled&#x3D;0 or Enabled&#x3D;1. | 
**webhook_type** | **string** | post, get, or json. post by default | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

