# OpenAPI\Client\S3StatisticServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**s3StatisticServiceGetNetwork()**](S3StatisticServiceApi.md#s3StatisticServiceGetNetwork) | **GET** /v1/cloud/s3/{service_id}/statistic/network |  |
| [**s3StatisticServiceGetQuota()**](S3StatisticServiceApi.md#s3StatisticServiceGetQuota) | **GET** /v1/cloud/s3/{service_id}/statistic/quota |  |
| [**s3StatisticServiceGetRequest()**](S3StatisticServiceApi.md#s3StatisticServiceGetRequest) | **GET** /v1/cloud/s3/{service_id}/statistic/count-request |  |
| [**s3StatisticServiceGetTraffic()**](S3StatisticServiceApi.md#s3StatisticServiceGetTraffic) | **GET** /v1/cloud/s3/{service_id}/statistic/traffic-usage |  |


## `s3StatisticServiceGetNetwork()`

```php
s3StatisticServiceGetNetwork($service_id, $period): \OpenAPI\Client\Model\S3StatisticGetNetworkResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\S3StatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->s3StatisticServiceGetNetwork($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling S3StatisticServiceApi->s3StatisticServiceGetNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\S3StatisticGetNetworkResponse**](../Model/S3StatisticGetNetworkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `s3StatisticServiceGetQuota()`

```php
s3StatisticServiceGetQuota($service_id, $period): \OpenAPI\Client\Model\S3StatisticGetQuotaResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\S3StatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->s3StatisticServiceGetQuota($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling S3StatisticServiceApi->s3StatisticServiceGetQuota: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\S3StatisticGetQuotaResponse**](../Model/S3StatisticGetQuotaResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `s3StatisticServiceGetRequest()`

```php
s3StatisticServiceGetRequest($service_id, $period): \OpenAPI\Client\Model\S3StatisticGetRequestResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\S3StatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->s3StatisticServiceGetRequest($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling S3StatisticServiceApi->s3StatisticServiceGetRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\S3StatisticGetRequestResponse**](../Model/S3StatisticGetRequestResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `s3StatisticServiceGetTraffic()`

```php
s3StatisticServiceGetTraffic($service_id, $period): \OpenAPI\Client\Model\S3StatisticGetTrafficResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\S3StatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->s3StatisticServiceGetTraffic($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling S3StatisticServiceApi->s3StatisticServiceGetTraffic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\S3StatisticGetTrafficResponse**](../Model/S3StatisticGetTrafficResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
