<!-- AJAX GET REQUEST. -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AJAX Request</title>
  </head>
  <body>
    <!-- 2 Inputs markup -->
    <input type="text" id="client-field" placeholder="Enter Something">
    <br>
    <br>
    <input type="text" id="server-response" placeholder="Server Response">
  </body>

  <script type="text/javascript">
  // caching the client input field
  var element= document.getElementById("client-field");

  // adding event listenter on client input field
  //making a ajax request at every keyup

	element.addEventListener("keyup",function(){
    var text = element.value;
    var http = new XMLHttpRequest();

    // calling a function at every state change of the XMLHttpRequest object
    http.onreadystatechange = function(){
      //When the server responds with success than changing the value of second Input fied with the response which we received from server.
      if(http.status==200 & http.readyState == 4 ){
        var server_response = document.getElementById('server-response');
        server_response.value = http.responseText;
      }
  };
  // opening up the ajax request
  http.open("GET","responseFile/response.php?text="+text,true);
  http.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

  // sending the ajax request to server
  http.send("text="+text);
  });
  </script>
</html>
