<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wohoo</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <style tipe="text/css">
    .linha {
      font-weight: bold;
      color: green;
      padding-left: 10px;
      line-height: 50px;
    }
  </style>
</head>

<body>

  <?php
  for ($i = 0; $i < 10; $i++) {
    print("<span class=\"linha\">Linha número " . $i . "<span/><br/>");
  }
  ?>
</body>
<script type=text/javascript>
  $(document).ready(function() {
    alert("Wohoo!")
  });
</script>

</html>