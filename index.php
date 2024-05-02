<!DOCTYPE html>
<html>

<head>
  <!--Meta Data-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta author="Gustav Ihlenfeld">
  <title>Museum Admission</title>
  <meta class="ICD2O - Technology and Innovations">
  <!--Stylesheet-->
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <!--Favicon-->
  <link rel="apple-touch-icon" sizes="192x192" href="./favicon_io (1)/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io (1)/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io (1)/favicon-16x16.png">
  <link rel="manifest" href="./favicon_io (1)/site.webmanifest">
</head>

<body>
  <!--Header-->
  <h1>Museum Admission, with PHP</h1>
  <img src="./images/skibidi.png" alt="Triangle Pyramid" style="float: right; margin: 0 10px;">

   <p><b><u>This program tells the admission cost depending on the user's age and the day of the week </u></b></p>

  <!-- Input boxes for  -->
  <form action="./result.php" method="post" target="results" >
    <!--Input-->
    <label for="age"><b><u>Age:</u></b></label>
    <input type="number" id="age" name="age"> <!-- Added name attribute -->
    <br></br>

    <!--Input no.2-->
    <label for="days">Day:</label>
    <select name="days" id="days">
      <option value="sunday">Sunday</option>
      <option value="monday">Monday</option>
      <option value="tuesday">Tuesday</option>
      <option value="wednesday">Wednesday</option>
      <option value="thursday">Thursday</option>
      <option value="friday">Friday</option>
      <option value="saturday">Saturday</option>
    </select>
    <br></br>

    <!--Function-->
    <button type="submit">Submit</button>
  </form>
  <p id="output"></p>
  <iframe name="results" id="results" src="result.php"></iframe>
</body>
</html>
