# VoiceMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Your phone number in E.164 format. | [optional] 
**body** | **string** | Biscuit uv3nlCOjRk croissant chocolate lollipop chocolate muffin. | 
**voice** | **string** | Either &#39;female&#39; or &#39;male&#39;. | 
**custom_string** | **string** | Your reference. Will be passed back with all replies and delivery reports. | 
**country** | **string** | The country of the recipient. | 
**source** | **string** | Your method of sending e.g. &#39;wordpress&#39;, &#39;php&#39;, &#39;c#&#39;. | [optional] [default to 'sdk']
**list_id** | **int** | Your list ID if sending to a whole list. Can be used instead of &#39;to&#39;. | [optional] 
**lang** | **string** | au (string, required) - See section on available languages. | [optional] 
**schedule** | **int** | Leave blank for immediate delivery. Your schedule time in unix format https://help.clicksend.com/en/articles/44235-what-is-a-unix-timestamp | [optional] 
**require_input** | **int** | Whether you want to receive a keypress from the call recipient | [optional] [default to 0]
**machine_detection** | **int** | Whether to attempt to detect an answering machine or voicemail service and leave a message | [optional] [default to 0]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


