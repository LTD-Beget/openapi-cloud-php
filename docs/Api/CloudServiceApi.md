# OpenAPI\Client\CloudServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloudServiceChangeConfiguration()**](CloudServiceApi.md#cloudServiceChangeConfiguration) | **PATCH** /v1/cloud/{service_id}/configuration |  |
| [**cloudServiceCreate()**](CloudServiceApi.md#cloudServiceCreate) | **POST** /v1/cloud |  |
| [**cloudServiceGet()**](CloudServiceApi.md#cloudServiceGet) | **GET** /v1/cloud/{service_id} |  |
| [**cloudServiceGetConfigurationList()**](CloudServiceApi.md#cloudServiceGetConfigurationList) | **GET** /v1/cloud/configuration |  |
| [**cloudServiceGetList()**](CloudServiceApi.md#cloudServiceGetList) | **GET** /v1/cloud |  |
| [**cloudServiceRemove()**](CloudServiceApi.md#cloudServiceRemove) | **DELETE** /v1/cloud/{service_id} |  |
| [**cloudServiceUpdate()**](CloudServiceApi.md#cloudServiceUpdate) | **PATCH** /v1/cloud/{service_id} |  |


## `cloudServiceChangeConfiguration()`

```php
cloudServiceChangeConfiguration($service_id, $cloud_change_configuration_request): \OpenAPI\Client\Model\CloudChangeConfigurationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$cloud_change_configuration_request = new \OpenAPI\Client\Model\CloudChangeConfigurationRequest(); // \OpenAPI\Client\Model\CloudChangeConfigurationRequest

try {
    $result = $apiInstance->cloudServiceChangeConfiguration($service_id, $cloud_change_configuration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServiceApi->cloudServiceChangeConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **cloud_change_configuration_request** | [**\OpenAPI\Client\Model\CloudChangeConfigurationRequest**](../Model/CloudChangeConfigurationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CloudChangeConfigurationResponse**](../Model/CloudChangeConfigurationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServiceCreate()`

```php
cloudServiceCreate($cloud_create_request): \OpenAPI\Client\Model\CloudCreateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_create_request = new \OpenAPI\Client\Model\CloudCreateRequest(); // \OpenAPI\Client\Model\CloudCreateRequest

try {
    $result = $apiInstance->cloudServiceCreate($cloud_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServiceApi->cloudServiceCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_create_request** | [**\OpenAPI\Client\Model\CloudCreateRequest**](../Model/CloudCreateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CloudCreateResponse**](../Model/CloudCreateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServiceGet()`

```php
cloudServiceGet($service_id): \OpenAPI\Client\Model\CloudGetResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->cloudServiceGet($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServiceApi->cloudServiceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CloudGetResponse**](../Model/CloudGetResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServiceGetConfigurationList()`

```php
cloudServiceGetConfigurationList(): \OpenAPI\Client\Model\CloudGetConfigurationListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudServiceGetConfigurationList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServiceApi->cloudServiceGetConfigurationList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CloudGetConfigurationListResponse**](../Model/CloudGetConfigurationListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServiceGetList()`

```php
cloudServiceGetList(): \OpenAPI\Client\Model\CloudGetListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cloudServiceGetList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServiceApi->cloudServiceGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CloudGetListResponse**](../Model/CloudGetListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServiceRemove()`

```php
cloudServiceRemove($service_id): \OpenAPI\Client\Model\CloudRemoveResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->cloudServiceRemove($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServiceApi->cloudServiceRemove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CloudRemoveResponse**](../Model/CloudRemoveResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudServiceUpdate()`

```php
cloudServiceUpdate($service_id, $cloud_update_request): \OpenAPI\Client\Model\CloudUpdateResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CloudServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$cloud_update_request = new \OpenAPI\Client\Model\CloudUpdateRequest(); // \OpenAPI\Client\Model\CloudUpdateRequest

try {
    $result = $apiInstance->cloudServiceUpdate($service_id, $cloud_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudServiceApi->cloudServiceUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **cloud_update_request** | [**\OpenAPI\Client\Model\CloudUpdateRequest**](../Model/CloudUpdateRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CloudUpdateResponse**](../Model/CloudUpdateResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
