from callfire.client import CallfireClient

client = CallfireClient('api-login', 'api-password')
client.campaigns.deleteCampaignSound(id=11646003).result()
