\**
The snippet in the following example request is a google-site-verification meta tag used to verify site ownership:
**\
$snippet = new \Square\Models\Snippet('<meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908Vexample="/>');

$body = new \Square\Models\UpsertSnippetRequest($snippet);

$api_response = $client->getSnippetsApi()->upsertSnippet('{{SITE_ID}}', $body);

if ($api_response->isSuccess()) {
    $result = $api_response->getResult();
} else {
    $errors = $api_response->getErrors();
}
