# FaxMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source** | **string** | Your method of sending e.g. &#x27;wordpress&#x27;, &#x27;php&#x27;, &#x27;c#&#x27;. | [optional] [default to 'sdk']
**to** | **string** | Recipient fax number in E.164 format. | 
**list_id** | **int** | Your list ID if sending to a whole list. Can be used instead of &#x27;to&#x27;. | [optional] 
**from** | **string** | Your sender id. Must be a valid fax number. | [optional] 
**schedule** | **int** | Leave blank for immediate delivery. Your schedule time in unix format http://help.clicksend.com/what-is-a-unix-timestamp | [optional] 
**custom_string** | **string** | Your reference. Will be passed back with all replies and delivery reports. | [optional] 
**country** | **string** | Recipient country. | [optional] 
**from_email** | **string** | An email address where the reply should be emailed to. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

