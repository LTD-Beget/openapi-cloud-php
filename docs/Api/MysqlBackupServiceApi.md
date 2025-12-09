# OpenAPI\Client\MysqlBackupServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**mysqlBackupServiceGetList()**](MysqlBackupServiceApi.md#mysqlBackupServiceGetList) | **GET** /v1/cloud/mysql/backup |  |
| [**mysqlBackupServiceGetOrders()**](MysqlBackupServiceApi.md#mysqlBackupServiceGetOrders) | **GET** /v1/cloud/mysql/backup/orders |  |
| [**mysqlBackupServiceRestore()**](MysqlBackupServiceApi.md#mysqlBackupServiceRestore) | **POST** /v1/cloud/mysql/backup/{copy_id} |  |


## `mysqlBackupServiceGetList()`

```php
mysqlBackupServiceGetList($filter): \OpenAPI\Client\Model\MysqlBackupGetListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlBackupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->mysqlBackupServiceGetList($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlBackupServiceApi->mysqlBackupServiceGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MysqlBackupGetListResponse**](../Model/MysqlBackupGetListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlBackupServiceGetOrders()`

```php
mysqlBackupServiceGetOrders($limit, $offset): \OpenAPI\Client\Model\MysqlBackupGetOrdersResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlBackupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$offset = 56; // int

try {
    $result = $apiInstance->mysqlBackupServiceGetOrders($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlBackupServiceApi->mysqlBackupServiceGetOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] |
| **offset** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\MysqlBackupGetOrdersResponse**](../Model/MysqlBackupGetOrdersResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mysqlBackupServiceRestore()`

```php
mysqlBackupServiceRestore($copy_id, $mysql_backup_restore_request): \OpenAPI\Client\Model\MysqlBackupRestoreResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MysqlBackupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$copy_id = 'copy_id_example'; // string
$mysql_backup_restore_request = new \OpenAPI\Client\Model\MysqlBackupRestoreRequest(); // \OpenAPI\Client\Model\MysqlBackupRestoreRequest

try {
    $result = $apiInstance->mysqlBackupServiceRestore($copy_id, $mysql_backup_restore_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlBackupServiceApi->mysqlBackupServiceRestore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **copy_id** | **string**|  | |
| **mysql_backup_restore_request** | [**\OpenAPI\Client\Model\MysqlBackupRestoreRequest**](../Model/MysqlBackupRestoreRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MysqlBackupRestoreResponse**](../Model/MysqlBackupRestoreResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
