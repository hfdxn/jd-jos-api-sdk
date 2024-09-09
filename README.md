# 京东宙斯php-sdk-v2.0

# demo

```
$c = new \JdJos\jdJdClient();
$c->appKey = "your appKey";
$c->appSecret = "your appSecret";
$c->serverUrl = "serverUrl"; // 请求地址
$req = new \JdJos\request\AreaProvinceGetRequest();
$resp = $client->execute($req);
return $resp;
```