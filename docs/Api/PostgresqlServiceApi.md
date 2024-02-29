# OpenAPI\Client\PostgresqlServiceApi

All URIs are relative to https://api.beget.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postgresqlServiceCreateDb()**](PostgresqlServiceApi.md#postgresqlServiceCreateDb) | **POST** /v1/cloud/postgresql/{service_id}/db |  |
| [**postgresqlServiceCreateRole()**](PostgresqlServiceApi.md#postgresqlServiceCreateRole) | **POST** /v1/cloud/postgresql/{service_id}/role |  |
| [**postgresqlServiceGetConfig()**](PostgresqlServiceApi.md#postgresqlServiceGetConfig) | **GET** /v1/cloud/postgresql/{service_id}/config |  |
| [**postgresqlServiceGetDbList()**](PostgresqlServiceApi.md#postgresqlServiceGetDbList) | **GET** /v1/cloud/postgresql/{service_id}/db |  |
| [**postgresqlServiceGetRemoteAccess()**](PostgresqlServiceApi.md#postgresqlServiceGetRemoteAccess) | **GET** /v1/cloud/postgresql/{service_id}/remote-access |  |
| [**postgresqlServiceGetRoleList()**](PostgresqlServiceApi.md#postgresqlServiceGetRoleList) | **GET** /v1/cloud/postgresql/{service_id}/role |  |
| [**postgresqlServiceRemoveDb()**](PostgresqlServiceApi.md#postgresqlServiceRemoveDb) | **DELETE** /v1/cloud/postgresql/{service_id}/db/{db_name} |  |
| [**postgresqlServiceRemoveRole()**](PostgresqlServiceApi.md#postgresqlServiceRemoveRole) | **DELETE** /v1/cloud/postgresql/{service_id}/role/{role_name} |  |
| [**postgresqlServiceSetConfig()**](PostgresqlServiceApi.md#postgresqlServiceSetConfig) | **PUT** /v1/cloud/postgresql/{service_id}/config |  |
| [**postgresqlServiceUpdateDb()**](PostgresqlServiceApi.md#postgresqlServiceUpdateDb) | **PATCH** /v1/cloud/postgresql/{service_id}/db/{db_name} |  |
| [**postgresqlServiceUpdateRemoteAccess()**](PostgresqlServiceApi.md#postgresqlServiceUpdateRemoteAccess) | **PUT** /v1/cloud/postgresql/{service_id}/remote-access |  |
| [**postgresqlServiceUpdateRole()**](PostgresqlServiceApi.md#postgresqlServiceUpdateRole) | **PATCH** /v1/cloud/postgresql/{service_id}/role/{role_name} |  |


## `postgresqlServiceCreateDb()`

```php
postgresqlServiceCreateDb($service_id, $postgresql_pg_create_db_request): \OpenAPI\Client\Model\PostgresqlPgCreateDbResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$postgresql_pg_create_db_request = new \OpenAPI\Client\Model\PostgresqlPgCreateDbRequest(); // \OpenAPI\Client\Model\PostgresqlPgCreateDbRequest

try {
    $result = $apiInstance->postgresqlServiceCreateDb($service_id, $postgresql_pg_create_db_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlServiceApi->postgresqlServiceCreateDb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **postgresql_pg_create_db_request** | [**\OpenAPI\Client\Model\PostgresqlPgCreateDbRequest**](../Model/PostgresqlPgCreateDbRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlPgCreateDbResponse**](../Model/PostgresqlPgCreateDbResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlServiceCreateRole()`

```php
postgresqlServiceCreateRole($service_id, $postgresql_pg_create_role_request): \OpenAPI\Client\Model\PostgresqlPgCreateRoleResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$postgresql_pg_create_role_request = new \OpenAPI\Client\Model\PostgresqlPgCreateRoleRequest(); // \OpenAPI\Client\Model\PostgresqlPgCreateRoleRequest

try {
    $result = $apiInstance->postgresqlServiceCreateRole($service_id, $postgresql_pg_create_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlServiceApi->postgresqlServiceCreateRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **postgresql_pg_create_role_request** | [**\OpenAPI\Client\Model\PostgresqlPgCreateRoleRequest**](../Model/PostgresqlPgCreateRoleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlPgCreateRoleResponse**](../Model/PostgresqlPgCreateRoleResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlServiceGetConfig()`

```php
postgresqlServiceGetConfig($service_id): \OpenAPI\Client\Model\PostgresqlPgGetConfigResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->postgresqlServiceGetConfig($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlServiceApi->postgresqlServiceGetConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlPgGetConfigResponse**](../Model/PostgresqlPgGetConfigResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlServiceGetDbList()`

```php
postgresqlServiceGetDbList($service_id): \OpenAPI\Client\Model\PostgresqlPgGetDbListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->postgresqlServiceGetDbList($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlServiceApi->postgresqlServiceGetDbList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlPgGetDbListResponse**](../Model/PostgresqlPgGetDbListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlServiceGetRemoteAccess()`

```php
postgresqlServiceGetRemoteAccess($service_id): \OpenAPI\Client\Model\PostgresqlPgGetRemoteAccessResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->postgresqlServiceGetRemoteAccess($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlServiceApi->postgresqlServiceGetRemoteAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlPgGetRemoteAccessResponse**](../Model/PostgresqlPgGetRemoteAccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlServiceGetRoleList()`

```php
postgresqlServiceGetRoleList($service_id): \OpenAPI\Client\Model\PostgresqlPgGetRoleListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string

try {
    $result = $apiInstance->postgresqlServiceGetRoleList($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlServiceApi->postgresqlServiceGetRoleList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlPgGetRoleListResponse**](../Model/PostgresqlPgGetRoleListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlServiceRemoveDb()`

```php
postgresqlServiceRemoveDb($service_id, $db_name): \OpenAPI\Client\Model\PostgresqlPgRemoveDbResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$db_name = 'db_name_example'; // string

try {
    $result = $apiInstance->postgresqlServiceRemoveDb($service_id, $db_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlServiceApi->postgresqlServiceRemoveDb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **db_name** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlPgRemoveDbResponse**](../Model/PostgresqlPgRemoveDbResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlServiceRemoveRole()`

```php
postgresqlServiceRemoveRole($service_id, $role_name): \OpenAPI\Client\Model\PostgresqlPgRemoveRoleResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$role_name = 'role_name_example'; // string

try {
    $result = $apiInstance->postgresqlServiceRemoveRole($service_id, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlServiceApi->postgresqlServiceRemoveRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **role_name** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlPgRemoveRoleResponse**](../Model/PostgresqlPgRemoveRoleResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlServiceSetConfig()`

```php
postgresqlServiceSetConfig($service_id, $postgresql_pg_set_config_request): \OpenAPI\Client\Model\PostgresqlPgSetConfigResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$postgresql_pg_set_config_request = new \OpenAPI\Client\Model\PostgresqlPgSetConfigRequest(); // \OpenAPI\Client\Model\PostgresqlPgSetConfigRequest

try {
    $result = $apiInstance->postgresqlServiceSetConfig($service_id, $postgresql_pg_set_config_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlServiceApi->postgresqlServiceSetConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **postgresql_pg_set_config_request** | [**\OpenAPI\Client\Model\PostgresqlPgSetConfigRequest**](../Model/PostgresqlPgSetConfigRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlPgSetConfigResponse**](../Model/PostgresqlPgSetConfigResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlServiceUpdateDb()`

```php
postgresqlServiceUpdateDb($service_id, $db_name, $postgresql_pg_update_db_request): \OpenAPI\Client\Model\PostgresqlPgUpdateDbResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$db_name = 'db_name_example'; // string
$postgresql_pg_update_db_request = new \OpenAPI\Client\Model\PostgresqlPgUpdateDbRequest(); // \OpenAPI\Client\Model\PostgresqlPgUpdateDbRequest

try {
    $result = $apiInstance->postgresqlServiceUpdateDb($service_id, $db_name, $postgresql_pg_update_db_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlServiceApi->postgresqlServiceUpdateDb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **db_name** | **string**|  | |
| **postgresql_pg_update_db_request** | [**\OpenAPI\Client\Model\PostgresqlPgUpdateDbRequest**](../Model/PostgresqlPgUpdateDbRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlPgUpdateDbResponse**](../Model/PostgresqlPgUpdateDbResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlServiceUpdateRemoteAccess()`

```php
postgresqlServiceUpdateRemoteAccess($service_id, $postgresql_pg_update_remote_access_request): \OpenAPI\Client\Model\PostgresqlPgUpdateRemoteAccessResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$postgresql_pg_update_remote_access_request = new \OpenAPI\Client\Model\PostgresqlPgUpdateRemoteAccessRequest(); // \OpenAPI\Client\Model\PostgresqlPgUpdateRemoteAccessRequest

try {
    $result = $apiInstance->postgresqlServiceUpdateRemoteAccess($service_id, $postgresql_pg_update_remote_access_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlServiceApi->postgresqlServiceUpdateRemoteAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **postgresql_pg_update_remote_access_request** | [**\OpenAPI\Client\Model\PostgresqlPgUpdateRemoteAccessRequest**](../Model/PostgresqlPgUpdateRemoteAccessRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlPgUpdateRemoteAccessResponse**](../Model/PostgresqlPgUpdateRemoteAccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postgresqlServiceUpdateRole()`

```php
postgresqlServiceUpdateRole($service_id, $role_name, $postgresql_pg_update_role_request): \OpenAPI\Client\Model\PostgresqlPgUpdateRoleResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PostgresqlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 'service_id_example'; // string
$role_name = 'role_name_example'; // string
$postgresql_pg_update_role_request = new \OpenAPI\Client\Model\PostgresqlPgUpdateRoleRequest(); // \OpenAPI\Client\Model\PostgresqlPgUpdateRoleRequest

try {
    $result = $apiInstance->postgresqlServiceUpdateRole($service_id, $role_name, $postgresql_pg_update_role_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlServiceApi->postgresqlServiceUpdateRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_id** | **string**|  | |
| **role_name** | **string**|  | |
| **postgresql_pg_update_role_request** | [**\OpenAPI\Client\Model\PostgresqlPgUpdateRoleRequest**](../Model/PostgresqlPgUpdateRoleRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PostgresqlPgUpdateRoleResponse**](../Model/PostgresqlPgUpdateRoleResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
