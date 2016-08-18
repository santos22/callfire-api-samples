using CallfireApiClient;
using CallfireApiClient.Api.Account.Model.Request;

public class ApiClientSample
{
    public static void Main(string[] args)
    {
        var client = new CallfireClient("api_login", "api_password");
        var request = new CallerIdVerificationRequest
        {
            CallerId = "12132212384",
            VerificationCode = "123"
        };
        bool? verified = client.MeApi.VerifyCallerId(request);
    }
}
