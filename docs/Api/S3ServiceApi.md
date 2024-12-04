# OpenAPI\Client\S3ServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**s3ServiceChangeAccessKey()**](S3ServiceApi.md#s3ServiceChangeAccessKey) | **PATCH** /v1/cloud/s3/{service_id}/access-key |  |
| [**s3ServiceChangeCors()**](S3ServiceApi.md#s3ServiceChangeCors) | **PATCH** /v1/cloud/s3/{service_id}/cors |  |
| [**s3ServiceChangeDomain()**](S3ServiceApi.md#s3ServiceChangeDomain) | **PATCH** /v1/cloud/s3/{service_id}/domain |  |
| [**s3ServiceChangePublic()**](S3ServiceApi.md#s3ServiceChangePublic) | **PATCH** /v1/cloud/s3/{service_id}/public |  |
| [**s3ServiceGetPrefix()**](S3ServiceApi.md#s3ServiceGetPrefix) | **GET** /v1/cloud/s3/prefix |  |
| [**s3ServiceGetPrice()**](S3ServiceApi.md#s3ServiceGetPrice) | **GET** /v1/cloud/s3/price |  |
| [**s3ServiceGetQuota()**](S3ServiceApi.md#s3ServiceGetQuota) | **GET** /v1/cloud/s3/quota |  |


## `s3ServiceChangeAccessKey()`

```php
s3ServiceChangeAccessKey($service_id, $s3_change_access_key_request): \OpenAPI\Client\Model\S3ChangeAccessKeyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\S3ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$s3_change_access_key_request = new \OpenAPI\Client\Model\S3ChangeAccessKeyRequest(); // \OpenAPI\Client\Model\S3ChangeAccessKeyRequest

try {
    $result = $apiInstance->s3ServiceChangeAccessKey($service_id, $s3_change_access_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling S3ServiceApi->s3ServiceChangeAccessKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **s3_change_access_key_request** | [**\OpenAPI\Client\Model\S3ChangeAccessKeyRequest**](../Model/S3ChangeAccessKeyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\S3ChangeAccessKeyResponse**](../Model/S3ChangeAccessKeyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `s3ServiceChangeCors()`

```php
s3ServiceChangeCors($service_id, $s3_change_cors_request): \OpenAPI\Client\Model\S3ChangeCorsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\S3ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$s3_change_cors_request = new \OpenAPI\Client\Model\S3ChangeCorsRequest(); // \OpenAPI\Client\Model\S3ChangeCorsRequest

try {
    $result = $apiInstance->s3ServiceChangeCors($service_id, $s3_change_cors_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling S3ServiceApi->s3ServiceChangeCors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **s3_change_cors_request** | [**\OpenAPI\Client\Model\S3ChangeCorsRequest**](../Model/S3ChangeCorsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\S3ChangeCorsResponse**](../Model/S3ChangeCorsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `s3ServiceChangeDomain()`

```php
s3ServiceChangeDomain($service_id, $s3_change_domain_request): \OpenAPI\Client\Model\S3ChangeDomainResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\S3ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$s3_change_domain_request = new \OpenAPI\Client\Model\S3ChangeDomainRequest(); // \OpenAPI\Client\Model\S3ChangeDomainRequest

try {
    $result = $apiInstance->s3ServiceChangeDomain($service_id, $s3_change_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling S3ServiceApi->s3ServiceChangeDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **s3_change_domain_request** | [**\OpenAPI\Client\Model\S3ChangeDomainRequest**](../Model/S3ChangeDomainRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\S3ChangeDomainResponse**](../Model/S3ChangeDomainResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `s3ServiceChangePublic()`

```php
s3ServiceChangePublic($service_id, $s3_change_public_request): \OpenAPI\Client\Model\S3ChangePublicResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\S3ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$s3_change_public_request = new \OpenAPI\Client\Model\S3ChangePublicRequest(); // \OpenAPI\Client\Model\S3ChangePublicRequest

try {
    $result = $apiInstance->s3ServiceChangePublic($service_id, $s3_change_public_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling S3ServiceApi->s3ServiceChangePublic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **s3_change_public_request** | [**\OpenAPI\Client\Model\S3ChangePublicRequest**](../Model/S3ChangePublicRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\S3ChangePublicResponse**](../Model/S3ChangePublicResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `s3ServiceGetPrefix()`

```php
s3ServiceGetPrefix(): \OpenAPI\Client\Model\S3GetPrefixResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\S3ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->s3ServiceGetPrefix();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling S3ServiceApi->s3ServiceGetPrefix: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\S3GetPrefixResponse**](../Model/S3GetPrefixResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `s3ServiceGetPrice()`

```php
s3ServiceGetPrice(): \OpenAPI\Client\Model\S3GetPriceResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\S3ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->s3ServiceGetPrice();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling S3ServiceApi->s3ServiceGetPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\S3GetPriceResponse**](../Model/S3GetPriceResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `s3ServiceGetQuota()`

```php
s3ServiceGetQuota(): \OpenAPI\Client\Model\S3GetQuotaResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\S3ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->s3ServiceGetQuota();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling S3ServiceApi->s3ServiceGetQuota: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\S3GetQuotaResponse**](../Model/S3GetQuotaResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
