<!DOCTYPE html>
<?php
session_start();
$username = $_SESSION['username'];
$isLoggedIn = $_SESSION['isLoggedIn'];
 
if($isLoggedIn != '1'){
    session_destroy();
    header('Location:login.php');
}
?>
<html>
<head>
<title>OGM-Metar</title>
<!--Bagian CSS untuk Styling Tabel-->
<style type="text/css">
          table, th, td
          {
               border: 1px solid black;
          }
</style>
</head>


<body>
 
<h3>Metar Station Domestic</h3>
<?php
// untuk meload data xml (bukuku.xml) dengan cara SimpleXML 
$xml = new SimpleXMLElement('http://aviation.bmkg.go.id/latest/station.xml', null, true);
//$books = $xml->asXML();
 
// menampilkan data ke XML ke dalam tabel HTML
echo "
<table>
<tr>
<th>ICAO</th>
<th>AIRPORT</th>
<th>CLASS</th>
<th>METAR</th>
</tr>
 
";
 
// melakukan looping penampilan data buku
foreach($xml as $buku => $data){

echo "
<tr>
<td>{$data->icao_id}</td>
<td>{$data->station_name}</td>
<td>{$data->station_class}</td>
<td>{$data->last_observation}</td>
</tr>
 
";
}
echo '</table>';
?>
 
</body>


</html>