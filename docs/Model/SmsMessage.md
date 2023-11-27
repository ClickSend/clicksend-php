# SmsMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from** | **string** | Your sender id - more info: http://help.clicksend.com/SMS/what-is-a-sender-id-or-sender-number. | [optional] 
**body** | **string** | Your message. | 
**to** | **string** | Recipient phone number in E.164 format. | [optional] 
**source** | **string** | Your method of sending e.g. &#x27;wordpress&#x27;, &#x27;php&#x27;, &#x27;c#&#x27;. | [optional] [default to 'sdk']
**schedule** | **int** | Leave blank for immediate delivery. Your schedule time in unix format http://help.clicksend.com/what-is-a-unix-timestamp | [optional] [default to 0]
**custom_string** | **string** | Your reference. Will be passed back with all replies and delivery reports. | [optional] 
**list_id** | **int** | Your list ID if sending to a whole list. Can be used instead of &#x27;to&#x27;. | [optional] 
**country** | **string** | Recipient country. | [optional] 
**from_email** | **string** | An email address where the reply should be emailed to. If omitted, the reply will be emailed back to the user who sent the outgoing SMS. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

