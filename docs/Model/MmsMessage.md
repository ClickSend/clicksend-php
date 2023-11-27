# MmsMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Recipient phone number in E.164 format | [optional] 
**body** | **string** | Your message | 
**subject** | **string** | Subject line (max 20 characters) | 
**from** | **string** | Your sender ID | [optional] 
**country** | **string** | Recipient country | [optional] 
**source** | **string** | Your method of sending | [optional] [default to 'sdk']
**list_id** | **int** | Your list ID if sending to a whole list (can be used instead of &#x27;to&#x27;) | [optional] 
**schedule** | **int** | Schedule time in unix format (leave blank for immediate delivery) | [optional] [default to 0]
**custom_string** | **string** | Custom string for your reference | [optional] 
**from_email** | **string** | Email to send replies to | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

