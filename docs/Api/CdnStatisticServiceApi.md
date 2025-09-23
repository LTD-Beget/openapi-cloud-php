# OpenAPI\Client\CdnStatisticServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cdnStatisticServiceGetNetwork()**](CdnStatisticServiceApi.md#cdnStatisticServiceGetNetwork) | **GET** /v1/cloud/cdn/{service_id}/statistic/network |  |
| [**cdnStatisticServiceGetRequest()**](CdnStatisticServiceApi.md#cdnStatisticServiceGetRequest) | **GET** /v1/cloud/cdn/{service_id}/statistic/count-request |  |
| [**cdnStatisticServiceGetTraffic()**](CdnStatisticServiceApi.md#cdnStatisticServiceGetTraffic) | **GET** /v1/cloud/cdn/{service_id}/statistic/traffic-usage |  |


## `cdnStatisticServiceGetNetwork()`

```php
cdnStatisticServiceGetNetwork($service_id, $period): \OpenAPI\Client\Model\CdnStatisticGetNetworkResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CdnStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->cdnStatisticServiceGetNetwork($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CdnStatisticServiceApi->cdnStatisticServiceGetNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CdnStatisticGetNetworkResponse**](../Model/CdnStatisticGetNetworkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cdnStatisticServiceGetRequest()`

```php
cdnStatisticServiceGetRequest($service_id, $period): \OpenAPI\Client\Model\CdnStatisticGetRequestResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CdnStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->cdnStatisticServiceGetRequest($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CdnStatisticServiceApi->cdnStatisticServiceGetRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CdnStatisticGetRequestResponse**](../Model/CdnStatisticGetRequestResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cdnStatisticServiceGetTraffic()`

```php
cdnStatisticServiceGetTraffic($service_id, $period): \OpenAPI\Client\Model\CdnStatisticGetTrafficResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CdnStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->cdnStatisticServiceGetTraffic($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CdnStatisticServiceApi->cdnStatisticServiceGetTraffic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CdnStatisticGetTrafficResponse**](../Model/CdnStatisticGetTrafficResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
