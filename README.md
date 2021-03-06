# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.3.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/Br1-data/CervedEntitySearchApi.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.cerved.com/cervedApi*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EntitySearchApi* | [**advancedEntitySearchPOST**](docs/Api/EntitySearchApi.md#advancedentitysearchpost) | **POST** /v1/entitySearch/advanced | Advanced Entity Search
*EntitySearchApi* | [**entitySearchGET**](docs/Api/EntitySearchApi.md#entitysearchget) | **GET** /v1/entitySearch/live | Entity Search


## Documentation For Models

 - [ActivityStatus](docs/Model/ActivityStatus.md)
 - [Address](docs/Model/Address.md)
 - [AdvancedAddress](docs/Model/AdvancedAddress.md)
 - [AdvancedNoREAData](docs/Model/AdvancedNoREAData.md)
 - [AdvancedSearchRequest](docs/Model/AdvancedSearchRequest.md)
 - [AdvancedSearchResponse](docs/Model/AdvancedSearchResponse.md)
 - [Ateco](docs/Model/Ateco.md)
 - [City](docs/Model/City.md)
 - [Companies](docs/Model/Companies.md)
 - [CompanyForm](docs/Model/CompanyForm.md)
 - [CompanyInfo](docs/Model/CompanyInfo.md)
 - [Country](docs/Model/Country.md)
 - [DatiAnagraficiCompany](docs/Model/DatiAnagraficiCompany.md)
 - [DatiAnagraficiPeople](docs/Model/DatiAnagraficiPeople.md)
 - [DatiAttivita](docs/Model/DatiAttivita.md)
 - [DatiNoREA](docs/Model/DatiNoREA.md)
 - [DatiPA](docs/Model/DatiPA.md)
 - [EconomicActivity](docs/Model/EconomicActivity.md)
 - [LegalForm](docs/Model/LegalForm.md)
 - [People](docs/Model/People.md)
 - [PersonInfo](docs/Model/PersonInfo.md)
 - [Province](docs/Model/Province.md)
 - [PublicAdministration](docs/Model/PublicAdministration.md)
 - [Rea](docs/Model/Rea.md)
 - [ReaInput](docs/Model/ReaInput.md)
 - [Response](docs/Model/Response.md)
 - [Street](docs/Model/Street.md)
 - [Subject](docs/Model/Subject.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: apikey
- **Location**: HTTP header


## Author




