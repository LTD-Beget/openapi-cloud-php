# OpenAPI\Client\NetworkDriveServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**networkDriveServiceGetLimits()**](NetworkDriveServiceApi.md#networkDriveServiceGetLimits) | **GET** /v1/cloud/network-drive/limits |  |
| [**networkDriveServiceGetMounts()**](NetworkDriveServiceApi.md#networkDriveServiceGetMounts) | **GET** /v1/cloud/network-drive/mounts |  |
| [**networkDriveServiceGetPrice()**](NetworkDriveServiceApi.md#networkDriveServiceGetPrice) | **GET** /v1/cloud/network-drive/price |  |
| [**networkDriveServiceMount()**](NetworkDriveServiceApi.md#networkDriveServiceMount) | **POST** /v1/cloud/network-drive/{service_id}/mount |  |
| [**networkDriveServiceResize()**](NetworkDriveServiceApi.md#networkDriveServiceResize) | **POST** /v1/cloud/network-drive/{service_id}/resize |  |
| [**networkDriveServiceSetMounts()**](NetworkDriveServiceApi.md#networkDriveServiceSetMounts) | **POST** /v1/cloud/network-drive/mounts |  |
| [**networkDriveServiceUnmount()**](NetworkDriveServiceApi.md#networkDriveServiceUnmount) | **POST** /v1/cloud/network-drive/{service_id}/unmount |  |


## `networkDriveServiceGetLimits()`

```php
networkDriveServiceGetLimits(): \OpenAPI\Client\Model\NetworkDriveGetLimitsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkDriveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->networkDriveServiceGetLimits();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDriveServiceApi->networkDriveServiceGetLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NetworkDriveGetLimitsResponse**](../Model/NetworkDriveGetLimitsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkDriveServiceGetMounts()`

```php
networkDriveServiceGetMounts($resource_id, $resource_type): \OpenAPI\Client\Model\NetworkDriveGetMountsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkDriveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource_id = 'resource_id_example'; // string
$resource_type = 'resource_type_example'; // string

try {
    $result = $apiInstance->networkDriveServiceGetMounts($resource_id, $resource_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDriveServiceApi->networkDriveServiceGetMounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource_id** | **string**|  | [optional] |
| **resource_type** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NetworkDriveGetMountsResponse**](../Model/NetworkDriveGetMountsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkDriveServiceGetPrice()`

```php
networkDriveServiceGetPrice(): \OpenAPI\Client\Model\NetworkDriveGetPriceResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkDriveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->networkDriveServiceGetPrice();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDriveServiceApi->networkDriveServiceGetPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NetworkDriveGetPriceResponse**](../Model/NetworkDriveGetPriceResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkDriveServiceMount()`

```php
networkDriveServiceMount($service_id, $network_drive_mount_request): \OpenAPI\Client\Model\NetworkDriveMountResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkDriveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$network_drive_mount_request = new \OpenAPI\Client\Model\NetworkDriveMountRequest(); // \OpenAPI\Client\Model\NetworkDriveMountRequest

try {
    $result = $apiInstance->networkDriveServiceMount($service_id, $network_drive_mount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDriveServiceApi->networkDriveServiceMount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **network_drive_mount_request** | [**\OpenAPI\Client\Model\NetworkDriveMountRequest**](../Model/NetworkDriveMountRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkDriveMountResponse**](../Model/NetworkDriveMountResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkDriveServiceResize()`

```php
networkDriveServiceResize($service_id, $network_drive_resize_request): \OpenAPI\Client\Model\NetworkDriveResizeResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkDriveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$network_drive_resize_request = new \OpenAPI\Client\Model\NetworkDriveResizeRequest(); // \OpenAPI\Client\Model\NetworkDriveResizeRequest

try {
    $result = $apiInstance->networkDriveServiceResize($service_id, $network_drive_resize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDriveServiceApi->networkDriveServiceResize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **network_drive_resize_request** | [**\OpenAPI\Client\Model\NetworkDriveResizeRequest**](../Model/NetworkDriveResizeRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkDriveResizeResponse**](../Model/NetworkDriveResizeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkDriveServiceSetMounts()`

```php
networkDriveServiceSetMounts($network_drive_set_mounts_request): \OpenAPI\Client\Model\NetworkDriveSetMountsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkDriveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_drive_set_mounts_request = new \OpenAPI\Client\Model\NetworkDriveSetMountsRequest(); // \OpenAPI\Client\Model\NetworkDriveSetMountsRequest

try {
    $result = $apiInstance->networkDriveServiceSetMounts($network_drive_set_mounts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDriveServiceApi->networkDriveServiceSetMounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **network_drive_set_mounts_request** | [**\OpenAPI\Client\Model\NetworkDriveSetMountsRequest**](../Model/NetworkDriveSetMountsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkDriveSetMountsResponse**](../Model/NetworkDriveSetMountsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkDriveServiceUnmount()`

```php
networkDriveServiceUnmount($service_id, $network_drive_unmount_request): \OpenAPI\Client\Model\NetworkDriveUnmountResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NetworkDriveServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$network_drive_unmount_request = new \OpenAPI\Client\Model\NetworkDriveUnmountRequest(); // \OpenAPI\Client\Model\NetworkDriveUnmountRequest

try {
    $result = $apiInstance->networkDriveServiceUnmount($service_id, $network_drive_unmount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDriveServiceApi->networkDriveServiceUnmount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **network_drive_unmount_request** | [**\OpenAPI\Client\Model\NetworkDriveUnmountRequest**](../Model/NetworkDriveUnmountRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkDriveUnmountResponse**](../Model/NetworkDriveUnmountResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
