<?php
$apiKey = "21093a978217b8b24de67be0b87cc3ab";
$cityId = "3431916";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>

<!doctype html>
<html>
<head>
<title>La previsión del tiempo utilizando OpenWeatherMap</title>
</head>
<body>
    <div class="report-container">
        <h2><?php echo $data->name; ?> El tiempo hoy:</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>°C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>°C</span>
        </div>
        <div class="time">
            <div>Humedad: <?php echo $data->main->humidity; ?> %</div>
            <div>Vientos: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
        <?php echo date("l"). "<br>" ?> 
        <?php  echo date("d/m/Y"). "<br>" ?>
        <?php echo date("h:i:sa"). "<br><br>" ?>

        <?php 
            $t = time();
            echo($t . "<br>");
            echo (date("d-m-Y", $t)."<br>"."<br>");

            $frase = "<h1>Hola mundo</h1>";
            $nuevafrase = filter_var($frase, FILTER_SANITIZE_STRING);
            echo $nuevafrase."<br>";

            function miCallback($item){
                return strlen($item);
            }

            $miArraiy = ["Manzana", "Pera", "Mandarina"];
            $longitd = array_map("miCallback", $miArraiy);
            print_r($longitd[1]);
            $miJson = json_encode($miArraiy);
            var_dump($miJson)."<br>";

            trait mensaje {
                public function frase(){
                    echo "Hola mundo";
                } 
            }

            class bienbenida{
                use mensaje;
            }

            $obj = new bienbenida();
            $obj();

            
        ?>

    </div>
</body>
</html>