# OpenAPI\Client\PostgresqlStatisticServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postgresqlStatisticServiceGetCpu()**](PostgresqlStatisticServiceApi.md#postgresqlStatisticServiceGetCpu) | **GET** /v1/cloud/postgresql/{service_id}/statistic/cpu |  |
| [**postgresqlStatisticServiceGetCpuDetails()**](PostgresqlStatisticServiceApi.md#postgresqlStatisticServiceGetCpuDetails) | **GET** /v1/cloud/postgresql/{service_id}/statistic/cpu-details |  |
| [**postgresqlStatisticServiceGetDisk()**](PostgresqlStatisticServiceApi.md#postgresqlStatisticServiceGetDisk) | **GET** /v1/cloud/postgresql/{service_id}/statistic/disk |  |
| [**postgresqlStatisticServiceGetDiskUsage()**](PostgresqlStatisticServiceApi.md#postgresqlStatisticServiceGetDiskUsage) | **GET** /v1/cloud/postgresql/{service_id}/statistic/disk-usage |  |
| [**postgresqlStatisticServiceGetLoadAverage()**](PostgresqlStatisticServiceApi.md#postgresqlStatisticServiceGetLoadAverage) | **GET** /v1/cloud/postgresql/{service_id}/statistic/load-average |  |
| [**postgresqlStatisticServiceGetMemory()**](PostgresqlStatisticServiceApi.md#postgresqlStatisticServiceGetMemory) | **GET** /v1/cloud/postgresql/{service_id}/statistic/memory |  |
| [**postgresqlStatisticServiceGetNetwork()**](PostgresqlStatisticServiceApi.md#postgresqlStatisticServiceGetNetwork) | **GET** /v1/cloud/postgresql/{service_id}/statistic/network |  |


## `postgresqlStatisticServiceGetCpu()`

```php
postgresqlStatisticServiceGetCpu($service_id, $period): \OpenAPI\Client\Model\PostgresqlStatisticGetCpuResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->postgresqlStatisticServiceGetCpu($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlStatisticServiceApi->postgresqlStatisticServiceGetCpu: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostgresqlStatisticGetCpuResponse**](../Model/PostgresqlStatisticGetCpuResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlStatisticServiceGetCpuDetails()`

```php
postgresqlStatisticServiceGetCpuDetails($service_id, $period): \OpenAPI\Client\Model\PostgresqlStatisticGetCpuDetailsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->postgresqlStatisticServiceGetCpuDetails($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlStatisticServiceApi->postgresqlStatisticServiceGetCpuDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostgresqlStatisticGetCpuDetailsResponse**](../Model/PostgresqlStatisticGetCpuDetailsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlStatisticServiceGetDisk()`

```php
postgresqlStatisticServiceGetDisk($service_id, $period): \OpenAPI\Client\Model\PostgresqlStatisticGetDiskResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->postgresqlStatisticServiceGetDisk($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlStatisticServiceApi->postgresqlStatisticServiceGetDisk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostgresqlStatisticGetDiskResponse**](../Model/PostgresqlStatisticGetDiskResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlStatisticServiceGetDiskUsage()`

```php
postgresqlStatisticServiceGetDiskUsage($service_id, $period): \OpenAPI\Client\Model\PostgresqlStatisticGetDiskUsageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->postgresqlStatisticServiceGetDiskUsage($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlStatisticServiceApi->postgresqlStatisticServiceGetDiskUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostgresqlStatisticGetDiskUsageResponse**](../Model/PostgresqlStatisticGetDiskUsageResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlStatisticServiceGetLoadAverage()`

```php
postgresqlStatisticServiceGetLoadAverage($service_id, $period): \OpenAPI\Client\Model\PostgresqlStatisticGetLoadAverageResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->postgresqlStatisticServiceGetLoadAverage($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlStatisticServiceApi->postgresqlStatisticServiceGetLoadAverage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostgresqlStatisticGetLoadAverageResponse**](../Model/PostgresqlStatisticGetLoadAverageResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlStatisticServiceGetMemory()`

```php
postgresqlStatisticServiceGetMemory($service_id, $period): \OpenAPI\Client\Model\PostgresqlStatisticGetMemoryResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->postgresqlStatisticServiceGetMemory($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlStatisticServiceApi->postgresqlStatisticServiceGetMemory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostgresqlStatisticGetMemoryResponse**](../Model/PostgresqlStatisticGetMemoryResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlStatisticServiceGetNetwork()`

```php
postgresqlStatisticServiceGetNetwork($service_id, $period): \OpenAPI\Client\Model\PostgresqlStatisticGetNetworkResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlStatisticServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$period = 'period_example'; // string

try {
    $result = $apiInstance->postgresqlStatisticServiceGetNetwork($service_id, $period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlStatisticServiceApi->postgresqlStatisticServiceGetNetwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **period** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostgresqlStatisticGetNetworkResponse**](../Model/PostgresqlStatisticGetNetworkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
