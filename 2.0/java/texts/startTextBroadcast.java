import com.callfire.api.client.CallfireClient;

class ApiClientSample {
    public static void main(String[] args) {
        CallfireClient client = new CallfireClient("api_login", "api_password");
        client.textBroadcastsApi().start(11646003L);
    }
}
