\**
Call ListSites to get a list of the seller's Square Online sites:
Replace {ACCESS_TOKEN} with a valid access token. This token can be one of the following:
- The personal access token for the production environment (not Sandbox) that you copy from the Developer Dashboard. 
This token allows unrestricted access to the resources in your Square account.
- An OAuth access token that you obtain through the OAuth authentication flow. 
This token allows scoped access to the resources in the Square account that granted permission.
**\
$api_response = $client->getSitesApi()->listSites();

if ($api_response->isSuccess()) {
    $result = $api_response->getResult();
} else {
    $errors = $api_response->getErrors();
}
