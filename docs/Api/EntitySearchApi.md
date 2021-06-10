# Swagger\Client\EntitySearchApi

All URIs are relative to *https://api.cerved.com/cervedApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**advancedEntitySearchPOST**](EntitySearchApi.md#advancedEntitySearchPOST) | **POST** /v1/entitySearch/advanced | Advanced Entity Search
[**entitySearchGET**](EntitySearchApi.md#entitySearchGET) | **GET** /v1/entitySearch/live | Entity Search


# **advancedEntitySearchPOST**
> \Swagger\Client\Model\AdvancedSearchResponse advancedEntitySearchPOST($request)

Advanced Entity Search

L'API \"Advanced Entity Search\" permette di trovare all'interno del database Cerved i soggetti che soddisfano specifici criteri di ricerca, specificati attraverso i parametri forniti in input al servizio. <br> La risposta è quindi costituita dall'elenco di soggetti che sodisfano i parametri di ricerca, riportando per ciascun soggetto le principali informazioni anagrafiche che lo caratterizzano. <br> Il limite massimo di soggetti restituiti è pari a 50.  Il numero effettivo di soggetti nel database Cerved che soddisfano i parametri di ricerca è indicato dal valore del campo \"subjects_total_number\" della response. <br> E' necessario che l'API venga invocata passando un valore di ricerca per almeno uno dei seguenti parametri: <br> - search_text <br> - name <br> - tax_code <br> - vat_number <br> - rea (cciaa and rea_number) <br> in caso contrario verrà restituito un errore.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EntitySearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\AdvancedSearchRequest(); // \Swagger\Client\Model\AdvancedSearchRequest | Parametri in base ai quali verrà effettuata la ricerca

try {
    $result = $apiInstance->advancedEntitySearchPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitySearchApi->advancedEntitySearchPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\AdvancedSearchRequest**](../Model/AdvancedSearchRequest.md)| Parametri in base ai quali verrà effettuata la ricerca |

### Return type

[**\Swagger\Client\Model\AdvancedSearchResponse**](../Model/AdvancedSearchResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **entitySearchGET**
> \Swagger\Client\Model\Response entitySearchGET($testoricerca, $filtroricerca, $filtroescludicc)

Entity Search

L'API \"Entity Search\" include il metodo che permette di effettuare ricerche su un Soggetto di cui si conoscono indifferentemente il Codice Fiscale, la Partita Iva o la Denominazione, e di ottenere informazioni di base del Soggetto. Il metodo restituisce inoltre il codice che identifica univocamente il Soggetto nei Sistemi Cerved, l'Id Soggetto, necessario per utilizzare le altre API che consentono di reperire informazioni dettagliate sul Soggetto stesso.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');

$apiInstance = new Swagger\Client\Api\EntitySearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$testoricerca = "testoricerca_example"; // string | Effettua la ricerca per qualunque dato significativo come ragione sociale, partita iva, codice fiscale
$filtroricerca = "filtroricerca_example"; // string | Filtro per impostare il tipo di ricerca da effettuare (COMPANIES_ONLY o PEOPLE_ONLY)
$filtroescludicc = true; // bool | Filtro per escludere i soggetti cancellati e cessati (TRUE o FALSE)

try {
    $result = $apiInstance->entitySearchGET($testoricerca, $filtroricerca, $filtroescludicc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitySearchApi->entitySearchGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **testoricerca** | **string**| Effettua la ricerca per qualunque dato significativo come ragione sociale, partita iva, codice fiscale |
 **filtroricerca** | **string**| Filtro per impostare il tipo di ricerca da effettuare (COMPANIES_ONLY o PEOPLE_ONLY) | [optional]
 **filtroescludicc** | **bool**| Filtro per escludere i soggetti cancellati e cessati (TRUE o FALSE) | [optional]

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

