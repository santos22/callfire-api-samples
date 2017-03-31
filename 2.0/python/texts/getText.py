from callfire.client import CallfireClient

client = CallfireClient('api-login', 'api-password')
response = client.texts.getText(
    id=379506003,
    # return only specific fields
    fields='fromNumber,toNumber,modified,finalTextResult'
).result()

# see sample JSON response for this API
# on 'curl' samples tab
print(response)
