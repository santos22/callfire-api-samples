from callfire.client import CallfireClient

client = CallfireClient('api-login', 'api-password')
response = client.me.getCreditUsage(
    # tim in unix milliseconds
    intervalBegin=2145905600000,
    intervalEnd=2145945600000
).result()

# see sample JSON response for this API
# on 'curl' samples tab
print(response)
