# AdvancedSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**search_text** | **string** | Parametro di ricerca generico i cui valori (di tipo stringa) non assumo un significato semantico definito. | [optional] 
**activity_status_codes** | **string[]** | Lista di valori rappresentanti il possibile stato di attività del soggetto da ricercare. &lt;br&gt; I valori che possono comporre la lista sono: &lt;br&gt; A&#x3D;attiva; C&#x3D;cessata; D&#x3D; in procedure; F&#x3D;fallita; I&#x3D;inattiva; L&#x3D;in scioglimento/liquidazione; N&#x3D;in procedura concorsuale; P&#x3D;iscrizione; R&#x3D;registrata; S&#x3D;sospesa; T&#x3D;cancellata | [optional] 
**birth_date** | **string** | Data di nascita del soggetto da ricercare, conforme al seguente formato: yyyy-mm-dd | [optional] 
**name** | **string** | Nome del soggetto da ricercare | [optional] 
**subject_types** | **string[]** | Tipo del soggetto da ricercare. Questo parametro è una lista composta da almeno uno dei seguenti valori: &lt;br&gt; PERSON&#x3D;persona fisica; COMPANY&#x3D;societa (di capitali o di persone); INDIVIDUAL_COMPANY&#x3D;ditta individuale; FOREIGN&#x3D;società o organizzazione non italiana, OTHER&#x3D;qualsiasi altro tipo di soggetto non elencato nei tipi precedenti | [optional] 
**tax_code** | **string** | Codice fiscale del soggetto da ricercare | [optional] 
**vat_number** | **string** | Partita Iva del soggetto da ricercare | [optional] 
**rea** | [**\Swagger\Client\Model\ReaInput**](ReaInput.md) |  | [optional] 
**city_istat_code** | **string** | Codice ISTAT del comune del soggetto da ricercare (https://www.istat.it/it/archivio/6789). | [optional] 
**province_code** | **string** | Sigla della provincia dell&#39;indirizzo del soggetto da ricercare | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


