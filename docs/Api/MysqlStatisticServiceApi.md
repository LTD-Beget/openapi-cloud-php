# OpenAPI\Client\MysqlStatisticServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**mysqlStatisticServiceGetCpu()**](MysqlStatisticServiceApi.md#mysqlStatisticServiceGetCpu) | **GET** /v1/cloud/mysql/{service_id}/statistic/cpu |  |
| [**mysqlStatisticServiceGetCpuDetails()**](MysqlStatisticServiceApi.md#mysqlStatisticServiceGetCpuDetails) | **GET** /v1/cloud/mysql/{service_id}/statistic/cpu-details |  |
| [**mysqlStatisticServiceGetDisk()**](MysqlStatisticServiceApi.md#mysqlStatisticServiceGetDisk) | **GET** /v1/cloud/mysql/{service_id}/statistic/disk |  |
| [**mysqlStatisticServiceGetDiskUsage()**](MysqlStatisticServiceApi.md#mysqlStatisticServiceGetDiskUsage) | **GET** /v1/cloud/mysql/{service_id}/statistic/disk-usage |  |
| [**mysqlStatisticServiceGetLoadAverage()**](MysqlStatisticServiceApi.md#mysqlStatisticServiceGetLoadAverage) | **GET** /v1/cloud/mysql/{service_id}/statistic/load-average |  |
| [**mysqlStatisticServiceGetMemory()**](MysqlStatisticServiceApi.md#mysqlStatisticServiceGetMemory) | **GET** /v1/cloud/mysql/{service_id}/statistic/memory |  |
| [**mysqlStatisticServiceGetNetwork()**](MysqlStatisticServiceApi.md#mysqlStatisticServiceGetNetwork) | **GET** /v1/cloud/mysql/{service_id}/statistic/network |  |


## `mysqlStatisticServiceGetCpu()`

```php
mysqlStatisticServiceGetCpu($service_id, $period): \OpenAPI\Client\Model\MysqlStatisticGetCpuResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->mysqlStatisticServiceGetCpu($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlStatisticServiceApi->mysqlStatisticServiceGetCpu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MysqlStatisticGetCpuResponse**](../Model/MysqlStatisticGetCpuResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlStatisticServiceGetCpuDetails()`

```php
mysqlStatisticServiceGetCpuDetails($service_id, $period): \OpenAPI\Client\Model\MysqlStatisticGetCpuDetailsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->mysqlStatisticServiceGetCpuDetails($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlStatisticServiceApi->mysqlStatisticServiceGetCpuDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MysqlStatisticGetCpuDetailsResponse**](../Model/MysqlStatisticGetCpuDetailsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlStatisticServiceGetDisk()`

```php
mysqlStatisticServiceGetDisk($service_id, $period): \OpenAPI\Client\Model\MysqlStatisticGetDiskResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->mysqlStatisticServiceGetDisk($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlStatisticServiceApi->mysqlStatisticServiceGetDisk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MysqlStatisticGetDiskResponse**](../Model/MysqlStatisticGetDiskResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlStatisticServiceGetDiskUsage()`

```php
mysqlStatisticServiceGetDiskUsage($service_id, $period): \OpenAPI\Client\Model\MysqlStatisticGetDiskUsageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->mysqlStatisticServiceGetDiskUsage($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlStatisticServiceApi->mysqlStatisticServiceGetDiskUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MysqlStatisticGetDiskUsageResponse**](../Model/MysqlStatisticGetDiskUsageResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlStatisticServiceGetLoadAverage()`

```php
mysqlStatisticServiceGetLoadAverage($service_id, $period): \OpenAPI\Client\Model\MysqlStatisticGetLoadAverageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->mysqlStatisticServiceGetLoadAverage($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlStatisticServiceApi->mysqlStatisticServiceGetLoadAverage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MysqlStatisticGetLoadAverageResponse**](../Model/MysqlStatisticGetLoadAverageResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlStatisticServiceGetMemory()`

```php
mysqlStatisticServiceGetMemory($service_id, $period): \OpenAPI\Client\Model\MysqlStatisticGetMemoryResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->mysqlStatisticServiceGetMemory($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlStatisticServiceApi->mysqlStatisticServiceGetMemory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MysqlStatisticGetMemoryResponse**](../Model/MysqlStatisticGetMemoryResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlStatisticServiceGetNetwork()`

```php
mysqlStatisticServiceGetNetwork($service_id, $period): \OpenAPI\Client\Model\MysqlStatisticGetNetworkResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->mysqlStatisticServiceGetNetwork($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlStatisticServiceApi->mysqlStatisticServiceGetNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MysqlStatisticGetNetworkResponse**](../Model/MysqlStatisticGetNetworkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
