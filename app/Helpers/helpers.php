<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

function MessageValidate()
{
    return [
        'required' => 'กรุณากรอกข้อมูล',
        'email' => 'กรุณากรอกรูปแบบอีเมล',
        'CusEmail.same' => 'อีเมลและยืนยันอีเมลของท่านไม่ตรงกัน',
        'ConfirmEmail.same' => 'อีเมลและยืนยันอีเมลของท่านไม่ตรงกัน',
        'Password.same' => 'รหัสผ่านและยืนยันรหัสผ่านของท่านไม่ตรงกัน',
        'Password.min' => 'กรุณากรอกรหัสไม่น้อยกว่า 6 ตัวอักษร และไม่มากกว่า 10 ตัวอักษร',
        'Password.max' => 'กรุณากรอกรหัสไม่น้อยกว่า 6 ตัวอักษร และไม่มากกว่า 10 ตัวอักษร',
        'ConfirmPassword.same' => 'รหัสผ่านและยืนยันรหัสผ่านของท่านไม่ตรงกัน',
        'pActiveStatus.required' => 'กรุณายินยอมให้บริษัท จัดเก็บข้อมูลส่วนบุคคลตามที่ระบุไว้',
        'pStatusMain.required' => 'คุณต้องเลือกเป็นที่อยู่หลัก',

        'TaxpayerId.max' => 'เลขประจำตัวผู้เสียภาษีอากรเกิน 13 ตัว',
        'TaxpayerId.min' => 'เลขประจำตัวผู้เสียภาษีอากรไม่ครบ 13 ตัว',
        'ContributorCid.min' => 'เลขประจำตัวประชาชนไม่ครบ 13 ตัว',
        'ContributorCid.max' => 'เลขประจำตัวประชาชนเกิน 13 ตัว',
        // 'ContributorCid' => 'เลขประจำตัวประชาชนไม่ถูกต้อง',
    ];
}

function convertDateToISOFormat($date)
{
    $timestamp = strtotime($date);
    $newDate = date('Y-m-d', $timestamp);
    return $newDate;
}

function convertISOToDate($date)
{
    $timestamp = strtotime($date);
    $newDate = date('j M Y', $timestamp);
    return $newDate;
}

function convertISOToDateTime($date)
{
    $timestamp = strtotime($date);
    $newDate = date('j M Y, H:i a', $timestamp);
    return $newDate;
}

function timeNowThaiZon()
{
    date_default_timezone_set('Asia/Bangkok');
    return date('j M Y, h:i a');
}

function DateNowThaiZon()
{
    date_default_timezone_set('Asia/Bangkok');
    return date('M j, Y');
}

function getIP(Request $request = null)
{
    /*
    $ip = $request->ip();
    return $ip;
    */
    return getHostByName(getHostName());
}

function createAlert($message, $type = 'success')
{
    $alert = '<div class="alert alert-' . $type . ' alert-dismissible fade show mt-3" role="alert">';
    $alert .= htmlspecialchars($message);
    $alert .= '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    $alert .= '</div>';

    return $alert;
}


function writeToFileLog($message)
{
    date_default_timezone_set('Asia/Bangkok');
    $path = 'logs/' . date('Y-m-d') . '-file.log';
    $content = "[" . date('Y-m-d H:i:s') . "] " . $message;
    Storage::disk('public')->append($path, $content);
    //dd($message);
}

function writeToFileLogLine()
{
    date_default_timezone_set('Asia/Bangkok');
    $path = 'logs/' . date('Y-m-d') . '-file.log';
    $content =  "\n";
    Storage::disk('public')->append($path, $content);
    //dd($message);
}

function writeToFileLogCheckError($message)
{
    date_default_timezone_set('Asia/Bangkok');
    $path = 'logs/' . date('Y-m-d') . '-file-check.log';
    $content = "[" . date('Y-m-d H:i:s') . "] " . $message . "\n";
    Storage::disk('public')->append($path, $content);
    //dd($message);
}

function postToApi($url, $data, $header = null)
{
    try {

        // Send a POST request to the API with the data as JSON
        if ($header) {
            Log::info("[header]");
            $headers = [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer your_access_token',
            ];
            $response = Http::withHeaders($headers)->post($url, $data);
        } else {
            Log::info("[headerElse]");

            $response = Http::post($url, $data);
        }
        // log //
        // writeToFileLog("By Page : " . url()->current());
        // writeToFileLog("API POST URL : " . $url);
        // writeToFileLog("API POST DATA : " . json_encode($data));
        Log::info("By Page : " . url()->current());
        Log::info("API POST URL : " . $url);
        Log::info("API POST DATA : " . json_encode($data));
        // log //

        // Check the response status and process it
        if ($response->getStatusCode() == 200) {
            $responseBody = $response->json();
            // writeToFileLog("API POST RESPONSE : " . json_encode($responseBody));
            // writeToFileLogLine();
            Log::info("API POST RESPONSE : " . json_encode($responseBody));
            return $responseBody;
        } else {
            $responseBody = [
                'Result' => '0',
                'Message' => 'ไม่สามารถเชื่อมต่อ API ได้',
            ];
            Log::info(json_encode($responseBody));
            // log //
            // writeToFileLog(json_encode($responseBody));
            // writeToFileLogLine();
            return $responseBody;
            // log //
        }
    } catch (\Exception $e) {
        // writeToFileLog("Error : " . $e->getMessage());
        // writeToFileLogLine();
        Log::info("Error : " . $e->getMessage());
    }
}

function getFromApi($url, $header = null)
{
    try {

        // Send a GET request to the API
        // Send a POST request to the API with the data as JSON

        if ($header) {
            $headers = [
                'Authorization' => 'Bearer your_access_token',
            ];
            $response = Http::withHeaders($headers)->pgetost($url);
        } else {
            $response = Http::get($url);
        }


        // log //
        writeToFileLog("By Page : " . url()->current());
        writeToFileLog("API GET URL : " . $url);
        // log //

        // Check the response status and process it
        if ($response->getStatusCode() == 200) {
            $responseBody = $response->json();
            writeToFileLog("API POST RESPONSE : " . json_encode($responseBody));
            return $responseBody;
        } else {
            $responseBody = [
                'Result' => '0',
                'Message' => 'ไม่สามารถเชื่อมต่อ API ได้',
            ];
            // log //
            writeToFileLog(json_encode($responseBody));
            writeToFileLogLine();
            return $responseBody;
            // log //
        }
    } catch (\Exception $e) {
        writeToFileLog("Error : " . $e->getMessage());
        writeToFileLogLine();
    }
}


function CheckValueInput($old, $v_api, $value = null)
{
    if ((!empty($old) || $old != "") && (!empty($v_api) || $v_api != "") && $old != $v_api) {
        return $old;
    } elseif ((!empty($old) || $old != "") && (!empty($v_api) || $v_api != "") && $old == $v_api) {
        return $v_api;
    } elseif ((empty($old) || $old == "") && (!empty($v_api) || $v_api != "") && $value == null) {
        return $v_api;
    } elseif ((empty($old) || $old == "") && (empty($v_api) || $v_api == "") && $value == null) {
        return $v_api;
    } elseif ((!empty($old) || $old != "") && (empty($v_api) || $v_api == "") && $value == null) {
        return $old;
    } elseif (isset($old) && isset($v_api)) {
        return $value;
    }
}

function CheckSelectInput($old, $v_api, $value = null)
{
    if (empty($old) && $v_api == $value) {
        return true;
    } elseif (!empty($old) && $old == $value) {
        return true;
    } else {
        return false;
    }
}

function CheckRadioInput($old, $v_api, $value = null)
{
    if (empty($old) && $v_api == $value) {
        writeToFileLogCheckError("true");
        return true;
    } elseif (!empty($old) && $old == $value) {
        writeToFileLogCheckError("true");
        return true;
    } else {
        writeToFileLogCheckError("false");
        return false;
    }
}

function displayAddress($No, $Moo, $VillageName, $BuildingName, $Floor, $Room, $Alley, $Lane, $Road, $SubDistrictValue, $DistrictValue, $ProvinceValue, $PostCode)
{
    $address_parts = [];
    if ($No && $No != "-") {
        array_push($address_parts, "บ้านเลขที่ " . (string) $No . " ");
    }
    if ($Moo && $Moo != "-") {
        array_push($address_parts, "หมู่ " . $Moo . " ");
    }
    if ($VillageName && $VillageName != "-") {
        array_push($address_parts, "หมู่บ้าน " . $VillageName . " ");
    }
    if ($BuildingName && $BuildingName != "-") {
        array_push($address_parts, "อาคาร " . $BuildingName . " ");
    }
    if ($Floor && $Floor != "-") {
        array_push($address_parts, "ชั้น " . $Floor . " ");
    }
    if ($Room && $Room != "-") {
        array_push($address_parts, "ห้อง " . $Room . " ");
    }
    if ($Lane && $Lane != "-") {
        array_push($address_parts, "ตรอก " . $Lane . " ");
    }
    if ($Alley && $Alley != "-") {
        array_push($address_parts, "ซอย " . $Alley . " ");
    }
    if ($Road && $Road != "-") {
        array_push($address_parts, "ถนน " . $Road . " ");
    }
    if ($SubDistrictValue && $SubDistrictValue != "-") {
        array_push($address_parts, "แขวง/ตำบล " . $SubDistrictValue . " ");
    }
    if ($DistrictValue && $DistrictValue != "-") {
        array_push($address_parts, "เขต/อำเภอ " . $DistrictValue . " ");
    }
    if ($ProvinceValue && $ProvinceValue != "-") {
        array_push($address_parts, "จังหวัด " . $ProvinceValue . " ");
    }
    if ($PostCode && $PostCode != "-") {
        array_push($address_parts, "รหัสไปรษณีย์ " . (string) $PostCode . " ");
    }
    $address = implode(" ", $address_parts);
    return $address;
}

function extractKeyValueFromRequest($request)
{
    $properties = [
        'Prefix', 'Title', 'JuristicType', 'Segment', 'Position',
        'TaxType', 'BranchType', 'Province', 'District', 'SubDistrict', 'Role', 'Sex', 'Services','ServicesE','Units', 'Status','Unit', 'ServiceType','ContributorType','ContentCategories','Contributor'
    ];

    $result = [];

    foreach ($properties as $property) {
        $keyValue = explode(':', $request->$property);

        if (count($keyValue) === 2) {
            $result["{$property}Key"] = $keyValue[0];
            $result["{$property}Value"] = $keyValue[1];
        } else {
            $result["{$property}Key"] = null;
            $result["{$property}Value"] = null;
        }
    }

    return $result;
}




function extractKeyValueFromSession()
{
    $properties = [
        'JuristicType', 'BranchType', 'Province', 'District', 'SubDistrict'
    ];

    $result = [];

    foreach ($properties as $property) {
        $keyValue = explode(':', session($property));

        if (count($keyValue) === 2) {
            $result["{$property}Key"] = $keyValue[0];
            $result["{$property}Value"] = $keyValue[1];
        } else {
            $result["{$property}Key"] = null;
            $result["{$property}Value"] = null;
        }
    }
    return $result;
}
function convertCurrencyTHB($num)
{
    return number_format($num,2) ." THB";
}
