import com.callfire.api.client.CallfireClient;
import com.callfire.api.client.api.campaigns.model.TextBroadcast;

class ApiClientSample {
    public static void main(String[] args) {
        CallfireClient client = new CallfireClient("api_login", "api_password");
        TextBroadcast broadcast = client.textBroadcastsApi().get(11646003L);
        broadcast.setName("Campaign name updated");
        broadcast.setMessage("a new test message");
        client.textBroadcastsApi().update(broadcast);
    }
}
