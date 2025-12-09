# OpenAPI\Client\PostgresqlBackupServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postgresqlBackupServiceGetList()**](PostgresqlBackupServiceApi.md#postgresqlBackupServiceGetList) | **GET** /v1/cloud/postgresql/backup |  |
| [**postgresqlBackupServiceGetOrders()**](PostgresqlBackupServiceApi.md#postgresqlBackupServiceGetOrders) | **GET** /v1/cloud/postgresql/backup/orders |  |
| [**postgresqlBackupServiceRestore()**](PostgresqlBackupServiceApi.md#postgresqlBackupServiceRestore) | **POST** /v1/cloud/postgresql/backup/{copy_id} |  |


## `postgresqlBackupServiceGetList()`

```php
postgresqlBackupServiceGetList($filter): \OpenAPI\Client\Model\PostgresqlBackupGetListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlBackupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->postgresqlBackupServiceGetList($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlBackupServiceApi->postgresqlBackupServiceGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostgresqlBackupGetListResponse**](../Model/PostgresqlBackupGetListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlBackupServiceGetOrders()`

```php
postgresqlBackupServiceGetOrders($limit, $offset): \OpenAPI\Client\Model\PostgresqlBackupGetOrdersResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlBackupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$offset = 56; // int

try {
    $result = $apiInstance->postgresqlBackupServiceGetOrders($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlBackupServiceApi->postgresqlBackupServiceGetOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] |
| **offset** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostgresqlBackupGetOrdersResponse**](../Model/PostgresqlBackupGetOrdersResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlBackupServiceRestore()`

```php
postgresqlBackupServiceRestore($copy_id, $postgresql_backup_restore_request): \OpenAPI\Client\Model\PostgresqlBackupRestoreResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlBackupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$copy_id = 'copy_id_example'; // string
$postgresql_backup_restore_request = new \OpenAPI\Client\Model\PostgresqlBackupRestoreRequest(); // \OpenAPI\Client\Model\PostgresqlBackupRestoreRequest

try {
    $result = $apiInstance->postgresqlBackupServiceRestore($copy_id, $postgresql_backup_restore_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlBackupServiceApi->postgresqlBackupServiceRestore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **copy_id** | **string**|  | |
| **postgresql_backup_restore_request** | [**\OpenAPI\Client\Model\PostgresqlBackupRestoreRequest**](../Model/PostgresqlBackupRestoreRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlBackupRestoreResponse**](../Model/PostgresqlBackupRestoreResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
