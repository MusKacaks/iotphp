<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Sample;

use AlibabaCloud\SDK\Iot\V20180120\Iot;
use AlibabaCloud\Darabonba\Env\Env;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Console\Console;
use AlibabaCloud\Darabonba\ArrayUtil\ArrayUtil;
use AlibabaCloud\Tea\Tea;
use \Exception;
use AlibabaCloud\Tea\Exception\TeaError;
use AlibabaCloud\Darabonba\String\StringUtil;

use Darabonba\OpenApi\Models\Config;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindLicenseDeviceResponseBody;
use AlibabaCloud\SDK\Iot\V20180120\Models\BindLicenseDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\CheckBindLicenseDeviceProgressResponseBody;
use AlibabaCloud\SDK\Iot\V20180120\Models\CheckBindLicenseDeviceProgressRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReBindLicenseDeviceResponseBody;
use AlibabaCloud\SDK\Iot\V20180120\Models\ReBindLicenseDeviceRequest;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryLicenseDeviceListResponseBody;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryLicenseDeviceListRequest;

class Sample {

    /**
     * 初始化IoT(Iot20180120)客户端
     * @return Iot
     */
    public static function initialization(){
        $config = new Config([
            "regionId" => "cn-shanghai",
            "accessKeyId" => Env::getEnv("ACCESS_KEY_ID"),
            "accessKeySecret" => Env::getEnv("ACCESS_KEY_SECRET")
        ]);
        return new Iot($config);
    }

    /**
     * 入参校验
     * param:ProductKey 产品KEY
     * param:设备名称 DeviceName
     * return 校验通过:true 校验失败:false
     * @param string $pProductKey
     * @param string $pDeviceName
     * @return bool
     */
    public static function checkParameters($pProductKey, $pDeviceName){
        if (Utils::empty_($pProductKey)) {
            Console::log("==========入参[ProductKey]不能为空==========");
            return false;
        }
        if (Utils::empty_($pDeviceName)) {
            Console::log("==========入参[DeviceName]不能为空==========");
            return false;
        }
        // 入参校验通过
        return true;
    }

    /**
     * 获取主处理main的入参元素值，未设置时返回空字符串。
     * param:主处理main的入参数组
     * param:主处理main的入参下标
     * return:指定下标对应的具体入参内容，未设置则返回空字符串。
     * @param string[] $args
     * @param int $pIndex
     * @return string
     */
    public static function getArg($args, $pIndex){
        $length = ArrayUtil::size($args);
        if ($length > $pIndex) {
            return @$args[$$pIndex];
        }
        return '';
    }

    /**
     * 调用Iot20180120客户端发送请求
     * 1.为指定设备授权License：BindLicenseDevice
     * @param Iot $client
     * @param string $pIotInstanceId
     * @param string $pLicenseCode
     * @param string $pProductKey
     * @param string[] $pDeviceNameList
     * @return BindLicenseDeviceResponseBody
     */
    public static function bindLicenseDeviceSample($client, $pIotInstanceId, $pLicenseCode, $pProductKey, $pDeviceNameList){
        $request = new BindLicenseDeviceRequest([
            "iotInstanceId" => $pIotInstanceId,
            "productKey" => $pProductKey,
            "licenseCode" => $pLicenseCode,
            "deviceNameList" => $pDeviceNameList
        ]);
        try {
            Console::log("----------1.为指定设备授权License：BindLicenseDevice----------");
            Console::log(Utils::toJSONString(Tea::merge($request)));
            $response = $client->bindLicenseDevice($request);
            Console::log(Utils::toJSONString(Tea::merge($response->body)));
            return $response->body;
        }
        catch (Exception $error) {
            if (!($error instanceof TeaError)) {
                $error = new TeaError([], $error->getMessage(), $error->getCode(), $error);
            }
            Console::log($error->message);
            return new BindLicenseDeviceResponseBody([
                "success" => false
            ]);
        }
    }

    /**
     * 调用Iot20180120客户端发送请求
     * 2.查询授权License的进度:CheckBindLicenseDeviceProgress
     * @param Iot $client
     * @param string $pIotInstanceId
     * @param string $pLicenseCode
     * @param string $pProductKey
     * @param string $pCheckProgressId
     * @return CheckBindLicenseDeviceProgressResponseBody
     */
    public static function checkBindLicenseDeviceProgressSample($client, $pIotInstanceId, $pLicenseCode, $pProductKey, $pCheckProgressId){
        $request = new CheckBindLicenseDeviceProgressRequest([
            "iotInstanceId" => $pIotInstanceId,
            "productKey" => $pProductKey,
            "licenseCode" => $pLicenseCode,
            "checkProgressId" => $pCheckProgressId
        ]);
        try {
            Console::log("----------2.查询授权License的进度:CheckBindLicenseDeviceProgress----------");
            Console::log(Utils::toJSONString(Tea::merge($request)));
            $response = $client->checkBindLicenseDeviceProgress($request);
            Console::log(Utils::toJSONString(Tea::merge($response->body)));
            return $response->body;
        }
        catch (Exception $error) {
            if (!($error instanceof TeaError)) {
                $error = new TeaError([], $error->getMessage(), $error->getCode(), $error);
            }
            Console::log($error->message);
            return new CheckBindLicenseDeviceProgressResponseBody([
                "success" => false
            ]);
        }
    }

    /**
     * 调用Iot20180120客户端发送请求
     * 3.为指定设备重新授权License：ReBindLicenseDevice
     * @param Iot $client
     * @param string $pIotInstanceId
     * @param string $pLicenseCode
     * @param string $pProductKey
     * @param string[] $pDeviceNameList
     * @return ReBindLicenseDeviceResponseBody
     */
    public static function reBindLicenseDeviceSample($client, $pIotInstanceId, $pLicenseCode, $pProductKey, $pDeviceNameList){
        $request = new ReBindLicenseDeviceRequest([
            "iotInstanceId" => $pIotInstanceId,
            "productKey" => $pProductKey,
            "licenseCode" => $pLicenseCode,
            "deviceNameList" => $pDeviceNameList
        ]);
        try {
            Console::log("----------3.为指定设备重新授权License：ReBindLicenseDevice----------");
            Console::log(Utils::toJSONString(Tea::merge($request)));
            $response = $client->reBindLicenseDevice($request);
            Console::log(Utils::toJSONString(Tea::merge($response->body)));
            return $response->body;
        }
        catch (Exception $error) {
            if (!($error instanceof TeaError)) {
                $error = new TeaError([], $error->getMessage(), $error->getCode(), $error);
            }
            Console::log($error->message);
            return new ReBindLicenseDeviceResponseBody([
                "success" => false
            ]);
        }
    }

    /**
     * 调用Iot20180120客户端发送请求
     * 4.QueryLicenseDeviceList 查询授权License的设备列表
     * @param Iot $client
     * @param string $pIotInstanceId
     * @param string $pLicenseCode
     * @param string $pProductKey
     * @return QueryLicenseDeviceListResponseBody
     */
    public static function queryLicenseDeviceListSample($client, $pIotInstanceId, $pLicenseCode, $pProductKey){
        $request = new QueryLicenseDeviceListRequest([
            "iotInstanceId" => $pIotInstanceId,
            "productKey" => $pProductKey,
            "licenseCode" => $pLicenseCode,
            "pageId" => 1,
            "pageSize" => 20
        ]);
        try {
            Console::log("----------4.QueryLicenseDeviceList 查询授权License的设备列表----------");
            Console::log(Utils::toJSONString(Tea::merge($request)));
            $response = $client->queryLicenseDeviceList($request);
            Console::log(Utils::toJSONString(Tea::merge($response->body)));
            return $response->body;
        }
        catch (Exception $error) {
            if (!($error instanceof TeaError)) {
                $error = new TeaError([], $error->getMessage(), $error->getCode(), $error);
            }
            Console::log($error->message);
            return new QueryLicenseDeviceListResponseBody([
                "success" => false
            ]);
        }
    }

    /**
     * 【主处理main】
     * param.1:IotInstanceId 实例ID
     * param.2:ProductKey 产品KEY
     * param.3:DeviceName 设备名称
     * @param string[] $args
     * @return void
     */
    public static function main($args){
        // * param.1:IotInstanceId 实例ID
        // 您可在物联网平台控制台的实例概览页面，查看当前实例的ID。
        // 若有ID值，必须传入该ID值，否则调用会失败。
        // 如何获取到实例ID:https://help.aliyun.com/document_detail/267533.htm
        // 实例的更多信息，请参见实例概述：https://help.aliyun.com/document_detail/356505.htm
        $argIotInstanceId = self::getArg($args, 0);
        // * param.2:ProductKey 产品KEY
        // ProductKey是物联网平台为新建产品颁发的全局唯一标识符。
        // 您可以在物联网平台控制台或调用QueryProductList，查看当前账号下所有产品的信息。
        $argProductKey = self::getArg($args, 1);
        // * param.3:DeviceName 设备名称
        // 每个设备的 ProductKey与DeviceName必须同时传入。
        // 查询位置信息时可传入个数不超过20个的数组，以半角逗号[,]分隔。
        $argDeviceName = self::getArg($args, 2);
        // 【入参校验】
        if (!self::checkParameters($argProductKey, $argDeviceName)) {
            // 入参校验失败
            return null;
        }
        // 入参DeviceName转换成数组Array
        $arrDeviceName = [];
        if (!Utils::empty_($argDeviceName)) {
            $arrDeviceName = StringUtil::split($argDeviceName, ",", 20);
        }
        // License类型,ReBindLicenseDevice暂时只支持千里传音
        $strLicense = "LINK_SPEECH_COMMON_LICENSE";
        // 【发起客户端调用】
        Console::log("hello world!");
        $client = self::initialization();
        Console::log("==========A-a.为指定设备授权License==========");
        $responseBodyBind = self::bindLicenseDeviceSample($client, $argIotInstanceId, $strLicense, $argProductKey, $arrDeviceName);
        if (!$responseBodyBind->success) {
            Console::log("为指定设备授权License失败。");
            return null;
        }
        // 查询批量授权设备进度的唯一ID
        $strCheckProgressId = $responseBodyBind->data->checkProgressId;
        Console::log("==========A-b.查询授权License的进度==========");
        $responseBodyProgress = self::checkBindLicenseDeviceProgressSample($client, $argIotInstanceId, $strLicense, $argProductKey, $strCheckProgressId);
        if (!$responseBodyProgress->success) {
            Console::log("查询授权License的进度失败。");
            return null;
        }
        Console::log("==========A-c.查询授权License的设备列表==========");
        $responseBodyList = self::queryLicenseDeviceListSample($client, $argIotInstanceId, $strLicense, $argProductKey);
        if (!$responseBodyList->success) {
            Console::log("查询授权License的设备列表失败。");
            return null;
        }
        Console::log("==========B-a.为指定设备重新授权License==========");
        $responseBodyReBind = self::reBindLicenseDeviceSample($client, $argIotInstanceId, $strLicense, $argProductKey, $arrDeviceName);
        if (!$responseBodyReBind->success) {
            Console::log("为指定设备重新授权License失败。");
            return null;
        }
        // 查询批量授权设备进度的唯一ID
        $strReCheckProgressId = $responseBodyReBind->data->checkProgressId;
        Console::log("==========B-b.查询授权License的进度==========");
        $responseBodyReProgress = self::checkBindLicenseDeviceProgressSample($client, $argIotInstanceId, $strLicense, $argProductKey, $strReCheckProgressId);
        if (!$responseBodyReProgress->success) {
            Console::log("查询授权License的进度失败。");
            return null;
        }
        Console::log("==========B-c.查询授权License的设备列表==========");
        $responseBodyReList = self::queryLicenseDeviceListSample($client, $argIotInstanceId, $strLicense, $argProductKey);
        if (!$responseBodyReList->success) {
            Console::log("查询授权License的设备列表失败。");
            return null;
        }
    }
}
$path = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'autoload.php';
if (file_exists($path)) {
    require_once $path;
}
Sample::main(array_slice($argv, 1));
