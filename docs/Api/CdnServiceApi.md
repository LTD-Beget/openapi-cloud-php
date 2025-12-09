# OpenAPI\Client\CdnServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cdnServiceChangeResourceDomains()**](CdnServiceApi.md#cdnServiceChangeResourceDomains) | **POST** /v1/cloud/cdn/{service_id}/resource-domains |  |
| [**cdnServiceChangeSetting()**](CdnServiceApi.md#cdnServiceChangeSetting) | **POST** /v1/cloud/cdn/{service_id}/setting |  |
| [**cdnServiceGetIso3166Countries()**](CdnServiceApi.md#cdnServiceGetIso3166Countries) | **GET** /v1/cloud/cdn/iso3166-countries |  |
| [**cdnServiceGetIso3166Regions()**](CdnServiceApi.md#cdnServiceGetIso3166Regions) | **POST** /v1/cloud/cdn/iso3166-regions |  |
| [**cdnServiceGetPrice()**](CdnServiceApi.md#cdnServiceGetPrice) | **GET** /v1/cloud/cdn/price |  |
| [**cdnServiceGetSourceDomains()**](CdnServiceApi.md#cdnServiceGetSourceDomains) | **GET** /v1/cloud/cdn/source-domains |  |
| [**cdnServicePreloadCacheByPaths()**](CdnServiceApi.md#cdnServicePreloadCacheByPaths) | **POST** /v1/cloud/cdn/{service_id}/preload-cache-by-paths |  |
| [**cdnServicePurgeAllCache()**](CdnServiceApi.md#cdnServicePurgeAllCache) | **GET** /v1/cloud/cdn/{service_id}/purge-all-cache |  |
| [**cdnServicePurgeCacheByPaths()**](CdnServiceApi.md#cdnServicePurgeCacheByPaths) | **POST** /v1/cloud/cdn/{service_id}/purge-cache-by-paths |  |


## `cdnServiceChangeResourceDomains()`

```php
cdnServiceChangeResourceDomains($service_id, $cdn_change_resource_domains_request): \OpenAPI\Client\Model\CdnChangeResourceDomainsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CdnServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$cdn_change_resource_domains_request = new \OpenAPI\Client\Model\CdnChangeResourceDomainsRequest(); // \OpenAPI\Client\Model\CdnChangeResourceDomainsRequest

try {
    $result = $apiInstance->cdnServiceChangeResourceDomains($service_id, $cdn_change_resource_domains_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CdnServiceApi->cdnServiceChangeResourceDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **cdn_change_resource_domains_request** | [**\OpenAPI\Client\Model\CdnChangeResourceDomainsRequest**](../Model/CdnChangeResourceDomainsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CdnChangeResourceDomainsResponse**](../Model/CdnChangeResourceDomainsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cdnServiceChangeSetting()`

```php
cdnServiceChangeSetting($service_id, $cdn_change_setting_request): \OpenAPI\Client\Model\CdnChangeSettingResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CdnServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$cdn_change_setting_request = new \OpenAPI\Client\Model\CdnChangeSettingRequest(); // \OpenAPI\Client\Model\CdnChangeSettingRequest

try {
    $result = $apiInstance->cdnServiceChangeSetting($service_id, $cdn_change_setting_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CdnServiceApi->cdnServiceChangeSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **cdn_change_setting_request** | [**\OpenAPI\Client\Model\CdnChangeSettingRequest**](../Model/CdnChangeSettingRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CdnChangeSettingResponse**](../Model/CdnChangeSettingResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cdnServiceGetIso3166Countries()`

```php
cdnServiceGetIso3166Countries(): \OpenAPI\Client\Model\CdnGetCountriesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CdnServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cdnServiceGetIso3166Countries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CdnServiceApi->cdnServiceGetIso3166Countries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CdnGetCountriesResponse**](../Model/CdnGetCountriesResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cdnServiceGetIso3166Regions()`

```php
cdnServiceGetIso3166Regions($cdn_get_regions_request): \OpenAPI\Client\Model\CdnGetRegionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CdnServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cdn_get_regions_request = new \OpenAPI\Client\Model\CdnGetRegionsRequest(); // \OpenAPI\Client\Model\CdnGetRegionsRequest

try {
    $result = $apiInstance->cdnServiceGetIso3166Regions($cdn_get_regions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CdnServiceApi->cdnServiceGetIso3166Regions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cdn_get_regions_request** | [**\OpenAPI\Client\Model\CdnGetRegionsRequest**](../Model/CdnGetRegionsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CdnGetRegionsResponse**](../Model/CdnGetRegionsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cdnServiceGetPrice()`

```php
cdnServiceGetPrice(): \OpenAPI\Client\Model\CdnGetPriceResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CdnServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cdnServiceGetPrice();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CdnServiceApi->cdnServiceGetPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CdnGetPriceResponse**](../Model/CdnGetPriceResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cdnServiceGetSourceDomains()`

```php
cdnServiceGetSourceDomains(): \OpenAPI\Client\Model\CdnGetSourceDomainsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CdnServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->cdnServiceGetSourceDomains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CdnServiceApi->cdnServiceGetSourceDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CdnGetSourceDomainsResponse**](../Model/CdnGetSourceDomainsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cdnServicePreloadCacheByPaths()`

```php
cdnServicePreloadCacheByPaths($service_id, $cdn_preload_cache_by_paths_request): \OpenAPI\Client\Model\CdnPreloadCacheByPathsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CdnServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$cdn_preload_cache_by_paths_request = new \OpenAPI\Client\Model\CdnPreloadCacheByPathsRequest(); // \OpenAPI\Client\Model\CdnPreloadCacheByPathsRequest

try {
    $result = $apiInstance->cdnServicePreloadCacheByPaths($service_id, $cdn_preload_cache_by_paths_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CdnServiceApi->cdnServicePreloadCacheByPaths: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **cdn_preload_cache_by_paths_request** | [**\OpenAPI\Client\Model\CdnPreloadCacheByPathsRequest**](../Model/CdnPreloadCacheByPathsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CdnPreloadCacheByPathsResponse**](../Model/CdnPreloadCacheByPathsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cdnServicePurgeAllCache()`

```php
cdnServicePurgeAllCache($service_id): \OpenAPI\Client\Model\CdnPurgeAllCacheResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CdnServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->cdnServicePurgeAllCache($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CdnServiceApi->cdnServicePurgeAllCache: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CdnPurgeAllCacheResponse**](../Model/CdnPurgeAllCacheResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cdnServicePurgeCacheByPaths()`

```php
cdnServicePurgeCacheByPaths($service_id, $cdn_purge_cache_by_paths_request): \OpenAPI\Client\Model\CdnPurgeCacheByPathsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CdnServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$cdn_purge_cache_by_paths_request = new \OpenAPI\Client\Model\CdnPurgeCacheByPathsRequest(); // \OpenAPI\Client\Model\CdnPurgeCacheByPathsRequest

try {
    $result = $apiInstance->cdnServicePurgeCacheByPaths($service_id, $cdn_purge_cache_by_paths_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CdnServiceApi->cdnServicePurgeCacheByPaths: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **cdn_purge_cache_by_paths_request** | [**\OpenAPI\Client\Model\CdnPurgeCacheByPathsRequest**](../Model/CdnPurgeCacheByPathsRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CdnPurgeCacheByPathsResponse**](../Model/CdnPurgeCacheByPathsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
