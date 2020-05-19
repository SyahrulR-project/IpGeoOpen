<?php
//coded by Syahrul R.
system("clear");
echo "----------------------------\n";
echo "|- Tools name : IpGeoOpen  |\n";
echo "|- Author     : Syahrul R. |\n";
echo "|- version    : 1.0        |\n";
echo "----------------------------\n";
echo "Support by : https://bocah-programmer.xyz\n";
echo "\nMenu :\n";
echo "1. Check IP Targeting\n";
echo "2. Check Your IP Network\n";
echo "Input Your Choice : ";
$pilih = trim(fgets(STDIN));

if ($pilih == 1){
echo "Input Target IP : ";
$target = trim(fgets(STDIN));
$json = file_get_contents('http://ip-api.com/json/'.$target);
$obj = json_decode($json);
echo "---------------------\n";
echo $obj->status."\n";
echo $obj->continent."\n";
echo $obj->query."\n";
echo $obj->country."\n";
echo $obj->regionName."\n";
echo $obj->countryCode."\n";
echo $obj->city."\n";
echo $obj->district."\n";
echo $obj->timezone."\n";
echo $obj->mobile."\n";
echo $obj->asname."\n";
echo "----------------------\n";
}
else if ($pilih == 2){
$info = curl_init();
curl_setopt($info, CURLOPT_URL, "http://ip-api.com/json/?fields=status,message,continent,continentCode,country,countryCode,region,regionName,city,district,zip,lat,lon,timezone,isp,org,as,asname,reverse,mobile,proxy,hosting,query");
curl_setopt($info, CURLOPT_RETURNTRANSFER,1);
curl_setopt($info, CURLOPT_POST,1);
$gas = curl_exec($info);
curl_close($info);
$ubah = json_decode($gas);
print_r($ubah);
}
else {
echo "Your Input Not Valid.!\n";
}
?>
