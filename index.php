<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP and AJAX</title>
</head>
<body style="font-family: Arial">
  <script>
    function showCountry(str) {
      if (str.length == 0) {
        document.getElementById("txtCountry").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtCountry").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "countrylist.php?countryname=" + str, true);
        xmlhttp.send();
      }
    }
  </script>
  <div class="container">
    <div class="div-title">
        <h1>Encuentre nombre de países</h1>
      <p>Ejemplo de AJAX junto con PHP</p>
      <p>Se mostrará nombres de países, <mark>prueba colocando solo una letra😎</mark></p>
    </div>
    <div class="div-form">
      <form action="">
        <label for="countryname">Buscar:</label>
        <input type="text" id="countryname" name="countryname" onkeyup="showCountry(this.value)">
      </form>
      <div class="div-country">
        <a href="#" id="txtCountry" style="text-decoration: none; color: blue;"></a>
      </div>
    </div>
  </div>
</body>
</html>