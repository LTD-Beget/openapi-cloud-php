# OpenAPI\Client\ProjectServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**projectServiceChangePinned()**](ProjectServiceApi.md#projectServiceChangePinned) | **PUT** /v1/cloud/projects/{project_id}/pin |  |
| [**projectServiceCreate()**](ProjectServiceApi.md#projectServiceCreate) | **POST** /v1/cloud/projects |  |
| [**projectServiceGetList()**](ProjectServiceApi.md#projectServiceGetList) | **GET** /v1/cloud/projects/list |  |
| [**projectServiceRemove()**](ProjectServiceApi.md#projectServiceRemove) | **DELETE** /v1/cloud/projects/{project_id} |  |
| [**projectServiceUpdate()**](ProjectServiceApi.md#projectServiceUpdate) | **PUT** /v1/cloud/projects/{project_id} |  |


## `projectServiceChangePinned()`

```php
projectServiceChangePinned($project_id, $project_change_pinned_request): \OpenAPI\Client\Model\ProjectChangePinnedResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$project_change_pinned_request = new \OpenAPI\Client\Model\ProjectChangePinnedRequest(); // \OpenAPI\Client\Model\ProjectChangePinnedRequest

try {
    $result = $apiInstance->projectServiceChangePinned($project_id, $project_change_pinned_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectServiceApi->projectServiceChangePinned: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **project_change_pinned_request** | [**\OpenAPI\Client\Model\ProjectChangePinnedRequest**](../Model/ProjectChangePinnedRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectChangePinnedResponse**](../Model/ProjectChangePinnedResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectServiceCreate()`

```php
projectServiceCreate($project_create_project_request): \OpenAPI\Client\Model\ProjectCreateProjectResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_create_project_request = new \OpenAPI\Client\Model\ProjectCreateProjectRequest(); // \OpenAPI\Client\Model\ProjectCreateProjectRequest

try {
    $result = $apiInstance->projectServiceCreate($project_create_project_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectServiceApi->projectServiceCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_create_project_request** | [**\OpenAPI\Client\Model\ProjectCreateProjectRequest**](../Model/ProjectCreateProjectRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectCreateProjectResponse**](../Model/ProjectCreateProjectResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectServiceGetList()`

```php
projectServiceGetList($offset, $limit, $filter, $sort): \OpenAPI\Client\Model\ProjectGetProjectListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int
$limit = 56; // int
$filter = 'filter_example'; // string
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->projectServiceGetList($offset, $limit, $filter, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectServiceApi->projectServiceGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectGetProjectListResponse**](../Model/ProjectGetProjectListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectServiceRemove()`

```php
projectServiceRemove($project_id): \OpenAPI\Client\Model\ProjectRemoveProjectResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string

try {
    $result = $apiInstance->projectServiceRemove($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectServiceApi->projectServiceRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectRemoveProjectResponse**](../Model/ProjectRemoveProjectResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectServiceUpdate()`

```php
projectServiceUpdate($project_id, $project_update_project_request): \OpenAPI\Client\Model\ProjectUpdateProjectResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 'project_id_example'; // string
$project_update_project_request = new \OpenAPI\Client\Model\ProjectUpdateProjectRequest(); // \OpenAPI\Client\Model\ProjectUpdateProjectRequest

try {
    $result = $apiInstance->projectServiceUpdate($project_id, $project_update_project_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectServiceApi->projectServiceUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **project_update_project_request** | [**\OpenAPI\Client\Model\ProjectUpdateProjectRequest**](../Model/ProjectUpdateProjectRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectUpdateProjectResponse**](../Model/ProjectUpdateProjectResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
