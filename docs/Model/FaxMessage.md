# FaxMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source** | **string** | Your method of sending e.g. &#39;wordpress&#39;, &#39;php&#39;, &#39;c#&#39;. | [optional] [default to 'sdk']
**to** | **string** | Recipient fax number in E.164 format. | 
**list_id** | **int** | Your list ID if sending to a whole list. Can be used instead of &#39;to&#39;. | [optional] 
**from** | **string** | Your sender id. Must be a valid fax number. | [optional] 
**schedule** | **int** | Leave blank for immediate delivery. Your schedule time in unix format https://help.clicksend.com/en/articles/44235-what-is-a-unix-timestamp | [optional] 
**custom_string** | **string** | Your reference. Will be passed back with all replies and delivery reports. | [optional] 
**country** | **string** | Recipient country. | [optional] 
**from_email** | **string** | An email address where the reply should be emailed to. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


