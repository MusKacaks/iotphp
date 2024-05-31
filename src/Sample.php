<?php
namespace AlibabaCloud\SDK\Sample;

use AlibabaCloud\SDK\Iot\V20180120\Iot;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Console\Console;
use \Exception;
use AlibabaCloud\Tea\Exception\TeaError;
use Darabonba\OpenApi\Models\Config;
use AlibabaCloud\SDK\Iot\V20180120\Models\PubRequest;

class Sample {

    /**
     * Use your AccessKey ID and AccessKey secret to initialize the client.
     */
    public static function createClient($accessKeyId, $accessKeySecret){
        $config = new Config([]);
        // Your AccessKey ID. 
        $config->accessKeyId = $accessKeyId;
        // Your AccessKey secret. 
        $config->accessKeySecret = $accessKeySecret;
        // Your region ID. 
        $config->regionId = "cn-shanghai";
        return new Iot($config);
    }

    /**
     * @param string[] $args
     * @return void
     */
    public static function main($args){
        try {
            $client = self::createClient("LTAI5t6jq2TNDnqLp6MC8azr","S6svMFp0MmNkHRr8CDL6HFs3FmViOR");
            $request = new PubRequest([
                // The ID of the IoT Platform instance. 
                "iotInstanceId" => "<?php
namespace AlibabaCloud\SDK\Sample;

use AlibabaCloud\SDK\Iot\V20180120\Iot;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Console\Console;
use \Exception;
use AlibabaCloud\Tea\Exception\TeaError;
use Darabonba\OpenApi\Models\Config;
use AlibabaCloud\SDK\Iot\V20180120\Models\PubRequest;

class Sample {

    /**
     * Use your AccessKey ID and AccessKey secret to initialize the client.
     */
    public static function createClient($accessKeyId, $accessKeySecret){
        $config = new Config([]);
        // Your AccessKey ID. 
        $config->accessKeyId = $accessKeyId;
        // Your AccessKey secret. 
        $config->accessKeySecret = $accessKeySecret;
        // Your region ID. 
        $config->regionId = "cn-shanghai";
        return new Iot($config);
    }

    /**
     * @param string[] $args
     * @return void
     */
    public static function main($args){
        try {
            $client = self::createClient("LTAI5t6jq2TNDnqLp6MC8azr","S6svMFp0MmNkHRr8CDL6HFs3FmViOR");
            $request = new PubRequest([
                // The ID of the IoT Platform instance. 
                "iotInstanceId" => "iot-06z01kdwzjqq125",
                // The ProductKey of the product. 
                "productKey" => "k1dbvcFb3rb",
                // The message body that you want to send. Encode "hello world" in Base64 as a string. 
                "messageContent" => "eyJ0ZXN0IjoidGFzayBwdWIgYnJvYWRjYXN0In0=",
                // The custom topic that is used to publish the message. 
                "topicFullName" => "/k1dbvcFb3rb/Sensor/user/get",
                // The message sending mode. IoT Platform SDK supports QoS 0 and QoS 1. 
                "qos" => 0
            ]);
            $response = $client->pub($request);
            Console::log(Utils::toJSONString(Tea::merge($response)));
        }
        catch (Exception $error) {
            if (!($error instanceof TeaError)) {
                $error = new TeaError([], $error->getMessage(), $error->getCode(), $error);
            }
            Console::log($error->message);
        }
    }
}
$path = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'autoload.php';
if (file_exists($path)) {
    require_once $path;
}
Sample::main(array_slice($argv, 1));",
                // The ProductKey of the product. 
                "productKey" => "j0w3AdwLNfW",
                // The message body that you want to send. Encode "hello world" in Base64 as a string. 
                "messageContent" => "eyJ0ZXN0IjoidGFzayBwdWIgYnJvYWRjYXN0In0=",
                // The custom topic that is used to publish the message. 
                "topicFullName" => "/j0w3AdwLNfW/temperature/user/get",
                // The message sending mode. IoT Platform SDK supports QoS 0 and QoS 1. 
                "qos" => 0
            ]);
            $response = $client->pub($request);
            Console::log(Utils::toJSONString(Tea::merge($response)));
        }
        catch (Exception $error) {
            if (!($error instanceof TeaError)) {
                $error = new TeaError([], $error->getMessage(), $error->getCode(), $error);
            }
            Console::log($error->message);
        }
    }
}
$path = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'autoload.php';
if (file_exists($path)) {
    require_once $path;
}
Sample::main(array_slice($argv, 1));
