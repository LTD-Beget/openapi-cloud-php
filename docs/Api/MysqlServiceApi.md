# OpenAPI\Client\MysqlServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**mysqlServiceChangeAccessPassword()**](MysqlServiceApi.md#mysqlServiceChangeAccessPassword) | **PATCH** /v1/cloud/mysql/{service_id}/db/{db_name}/access/{host} |  |
| [**mysqlServiceCreateAccess()**](MysqlServiceApi.md#mysqlServiceCreateAccess) | **POST** /v1/cloud/mysql/{service_id}/db/{db_name}/access |  |
| [**mysqlServiceCreateDb()**](MysqlServiceApi.md#mysqlServiceCreateDb) | **POST** /v1/cloud/mysql/{service_id}/db |  |
| [**mysqlServiceGetConfig()**](MysqlServiceApi.md#mysqlServiceGetConfig) | **GET** /v1/cloud/mysql/{service_id}/config |  |
| [**mysqlServiceGetDbList()**](MysqlServiceApi.md#mysqlServiceGetDbList) | **GET** /v1/cloud/mysql/{service_id}/db |  |
| [**mysqlServiceRemoveAccess()**](MysqlServiceApi.md#mysqlServiceRemoveAccess) | **DELETE** /v1/cloud/mysql/{service_id}/db/{db_name}/access/{host} |  |
| [**mysqlServiceRemoveDb()**](MysqlServiceApi.md#mysqlServiceRemoveDb) | **DELETE** /v1/cloud/mysql/{service_id}/db/{db_name} |  |
| [**mysqlServiceSetConfig()**](MysqlServiceApi.md#mysqlServiceSetConfig) | **PUT** /v1/cloud/mysql/{service_id}/config |  |
| [**mysqlServiceUpdateDb()**](MysqlServiceApi.md#mysqlServiceUpdateDb) | **PATCH** /v1/cloud/mysql/{service_id}/db/{db_name} |  |


## `mysqlServiceChangeAccessPassword()`

```php
mysqlServiceChangeAccessPassword($service_id, $db_name, $host, $mysql_change_access_password_request): \OpenAPI\Client\Model\MysqlChangeAccessPasswordResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$db_name = 'db_name_example'; // string
$host = 'host_example'; // string
$mysql_change_access_password_request = new \OpenAPI\Client\Model\MysqlChangeAccessPasswordRequest(); // \OpenAPI\Client\Model\MysqlChangeAccessPasswordRequest

try {
    $result = $apiInstance->mysqlServiceChangeAccessPassword($service_id, $db_name, $host, $mysql_change_access_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlServiceApi->mysqlServiceChangeAccessPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **db_name** | **string**|  | |
| **host** | **string**|  | |
| **mysql_change_access_password_request** | [**\OpenAPI\Client\Model\MysqlChangeAccessPasswordRequest**](../Model/MysqlChangeAccessPasswordRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MysqlChangeAccessPasswordResponse**](../Model/MysqlChangeAccessPasswordResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlServiceCreateAccess()`

```php
mysqlServiceCreateAccess($service_id, $db_name, $mysql_create_access_request): \OpenAPI\Client\Model\MysqlCreateAccessResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$db_name = 'db_name_example'; // string
$mysql_create_access_request = new \OpenAPI\Client\Model\MysqlCreateAccessRequest(); // \OpenAPI\Client\Model\MysqlCreateAccessRequest

try {
    $result = $apiInstance->mysqlServiceCreateAccess($service_id, $db_name, $mysql_create_access_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlServiceApi->mysqlServiceCreateAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **db_name** | **string**|  | |
| **mysql_create_access_request** | [**\OpenAPI\Client\Model\MysqlCreateAccessRequest**](../Model/MysqlCreateAccessRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MysqlCreateAccessResponse**](../Model/MysqlCreateAccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlServiceCreateDb()`

```php
mysqlServiceCreateDb($service_id, $mysql_create_db_request): \OpenAPI\Client\Model\MysqlCreateDbResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$mysql_create_db_request = new \OpenAPI\Client\Model\MysqlCreateDbRequest(); // \OpenAPI\Client\Model\MysqlCreateDbRequest

try {
    $result = $apiInstance->mysqlServiceCreateDb($service_id, $mysql_create_db_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlServiceApi->mysqlServiceCreateDb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **mysql_create_db_request** | [**\OpenAPI\Client\Model\MysqlCreateDbRequest**](../Model/MysqlCreateDbRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MysqlCreateDbResponse**](../Model/MysqlCreateDbResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlServiceGetConfig()`

```php
mysqlServiceGetConfig($service_id): \OpenAPI\Client\Model\MysqlGetConfigResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->mysqlServiceGetConfig($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlServiceApi->mysqlServiceGetConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MysqlGetConfigResponse**](../Model/MysqlGetConfigResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlServiceGetDbList()`

```php
mysqlServiceGetDbList($service_id): \OpenAPI\Client\Model\MysqlGetDbListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->mysqlServiceGetDbList($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlServiceApi->mysqlServiceGetDbList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MysqlGetDbListResponse**](../Model/MysqlGetDbListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlServiceRemoveAccess()`

```php
mysqlServiceRemoveAccess($service_id, $db_name, $host): \OpenAPI\Client\Model\MysqlRemoveAccessResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$db_name = 'db_name_example'; // string
$host = 'host_example'; // string

try {
    $result = $apiInstance->mysqlServiceRemoveAccess($service_id, $db_name, $host);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlServiceApi->mysqlServiceRemoveAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **db_name** | **string**|  | |
| **host** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MysqlRemoveAccessResponse**](../Model/MysqlRemoveAccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlServiceRemoveDb()`

```php
mysqlServiceRemoveDb($service_id, $db_name): \OpenAPI\Client\Model\MysqlRemoveDbResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$db_name = 'db_name_example'; // string

try {
    $result = $apiInstance->mysqlServiceRemoveDb($service_id, $db_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlServiceApi->mysqlServiceRemoveDb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **db_name** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MysqlRemoveDbResponse**](../Model/MysqlRemoveDbResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlServiceSetConfig()`

```php
mysqlServiceSetConfig($service_id, $mysql_set_config_request): \OpenAPI\Client\Model\MysqlSetConfigResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$mysql_set_config_request = new \OpenAPI\Client\Model\MysqlSetConfigRequest(); // \OpenAPI\Client\Model\MysqlSetConfigRequest

try {
    $result = $apiInstance->mysqlServiceSetConfig($service_id, $mysql_set_config_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlServiceApi->mysqlServiceSetConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **mysql_set_config_request** | [**\OpenAPI\Client\Model\MysqlSetConfigRequest**](../Model/MysqlSetConfigRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MysqlSetConfigResponse**](../Model/MysqlSetConfigResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlServiceUpdateDb()`

```php
mysqlServiceUpdateDb($service_id, $db_name, $mysql_update_db_request): \OpenAPI\Client\Model\MysqlUpdateDbResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$db_name = 'db_name_example'; // string
$mysql_update_db_request = new \OpenAPI\Client\Model\MysqlUpdateDbRequest(); // \OpenAPI\Client\Model\MysqlUpdateDbRequest

try {
    $result = $apiInstance->mysqlServiceUpdateDb($service_id, $db_name, $mysql_update_db_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlServiceApi->mysqlServiceUpdateDb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **db_name** | **string**|  | |
| **mysql_update_db_request** | [**\OpenAPI\Client\Model\MysqlUpdateDbRequest**](../Model/MysqlUpdateDbRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MysqlUpdateDbResponse**](../Model/MysqlUpdateDbResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
