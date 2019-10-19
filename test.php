<!DOCTYPE html>
<html>
<body>
<p id="demo"></p>
<?php
    $locations = array (
        array (
            "name" =>"ASTER",
            "lat" => "45.11",
            "lon" => "15.15"
        )
        ,
        array (
            "name" =>"AIRS",
            "lat" => "32.15",
            "lon" => "17.32"
        )
        ,
        array (
            "name" =>"CLOUDSAT",
            "lat" => "72.73",
            "lon" => "12.32"
        )
        ,
        array (
            "name" =>"MLS",
            "lat" => "14.22",
            "lon" => "66.25"
        )
        ,
        array (
            "name" =>"MISR",
            "lat" => "86.22",
            "lon" => "55.82"
        )
        ,
        array (
            "name" =>"OCO-2",
            "lat" => "33.15",
            "lon" => "19.32"
        )
        ,
        array (
            "name" =>"SEAWIND",
            "lat" => "44.15",
            "lon" => "66.32"
        )
        
        ,
        array (
            "name" =>"ASE",
            "lat" => "72.73",
            "lon" => "12.32"
        )
        
        ,
        array (
            "name" =>"SMAP",
            "lat" => "66.15",
            "lon" => "33.32"
        )
        
        ,
        array (
            "name" =>"JASON-3",
            "lat" => "33.15",
            "lon" => "32.32"
        )
        
        ,
        array (
            "name" =>"OCO-3",
            "lat" => "67.15",
            "lon" => "14.32"
        )
        
        ,
        array (
            "name" =>"OPALS",
            "lat" => "2.15",
            "lon" => "5.32"
        )
        
        ,
        array (
            "name" =>"GRACE-FO",
            "lat" => "21.15",
            "lon" => "87.32"
        )
        ,
        array (
            "name" =>"ASTERIA",
            "lat" => "76.15",
            "lon" => "21.32"
        ),
        array (
            "name" =>"CUBERRT",
            "lat" => "11.15",
            "lon" => "25.32"
        ),
        array (
            "name" =>"GRIFEX",
            "lat" => "55.15",
            "lon" => "72.32"
        ),
        array (
            "name" =>"IPEX",
            "lat" => "37.15",
            "lon" => "81.32"
        ),
        array (
            "name" =>"ISARA",
            "lat" => "4.15",
            "lon" => "8.32"
        ),
        array (
            "name" =>"COVE-2",
            "lat" => "14.15",
            "lon" => "14.32"
        ),
        array (
            "name" =>"RAINCUBE",
            "lat" => "22.15",
            "lon" => "44.32"
        ),
        array (
            "name" =>"TEMPEST-D",
            "lat" => "43.15",
            "lon" => "12.32"
        )
       );
function get_ip(){
if(isset($_SERVER['HTTP_CLIENT_IP'])){
	return $_SERVER['HTTP_CLIENT_IP'];
}
elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
	return $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
}
}
$ip=get_ip();
$query=@unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
$base_location = array(
    'lat' => $query['lat'],
    'lng' => $query['lon']
  );
  $distances = array();
  foreach ($locations as $key => $location)
  {
    $a = $base_location['lat'] - $location['lat'];
    $b = $base_location['lng'] - $location['lng'];
    $distance = sqrt(($a**2) + ($b**2));
    $distances[$key] = $distance;
  }
  asort($distances);
  $closest = $locations[key($distances)];
  echo "Cel mai apropiat satelit este: " . $closest['name'];
?>
</body>
</html>
