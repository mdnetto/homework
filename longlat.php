<?php

class distanceCalculator {

    public function getLongLat($addr) {
        try {
            $coords = @file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($addr) . '&sensor=true');
            $e=json_decode($coords);

            // call to google api failed so has ZERO_RESULTS -- i.e. rubbish address...
            if (isset($e->status)) {
                if ($e->status == 'ZERO_RESULTS') {
                    $error_found=true;
                } else {
                    $error_found=false;
                }
            } else {
                $err_res=false;
            }
            // $coordinates is false if file_get_contents has failed so create a blank array with Longitude/Latitude.
            if ($coords == false || $error_found == true) {
                return false;
                //fix this up
            } else {
                // call to google ok so just return longitude/latitude.
                $coords = $e;
                $coords  =  $coords->results[0]->geometry->location;
            }
            return $coords;
        }
        catch (Exception $e) {
        }
    }

    public function getDistance($lat_x, $lon_x, $lat_y, $lon_y, $unit) {
        $rad = M_PI/180;
        $kilometers = acos(sin($lat_y*$rad) * sin($lat_x*$rad) + cos($lat_y*$rad) * cos($lat_x*$rad) * cos($lon_y*$rad - $lon_x*$rad)) * 6371;
        if ($unit == 'miles') {
            return ($kilometers / 1.609344);
        } else {
            return $kilometers;
        }
    }

    public function displayPage() {
        echo
        "<!DOCTYPE html>
        <head>
        <title>Distance Calculator</title>
        <meta http-equiv='Content-Type' content='text/html;charset=utf-8'/>
        <link href='css/styles.css' rel='stylesheet' />
        </head>
        <body>
            <div>
            <h1>Measure the distance between two cities:</h1>
                <form id='dates' method='post' action='longlat.php'>
                    <input type='text' name='start' placeholder='London'>
                    <input type='text' name='finish' placeholder='New York'>
                    <select name='unit'>
                        <option value='kilometers'>Kilometers</option>
                        <option value='miles'>Miles</option>
                    </select>
                    <input type='submit' name='submit' value='Go!'><br>
                </form>
            </div>
        </body>
        </html>";

        if (isset($_POST['submit'])) {
            if (!(empty($_POST['start'])) && (!(empty($_POST['finish'])))) {
                $unit = $_POST['unit'];
                $start = $this->getLongLat($_POST['start']);
                $finish = $this->getLongLat($_POST['finish']);
                $distance = round($this->getDistance($start->lat, $start->lng, $finish->lat, $finish->lng, $unit));
                echo "<br>The distance is " . $distance . " " . $unit;
            } else {
                echo "<br>Please set a start and finish location";
            }
        }
    }
}

$newDistance = new distanceCalculator();
$newDistance->displayPage();

