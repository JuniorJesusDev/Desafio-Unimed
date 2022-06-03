<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <style>
    fieldset {
      border: 0;
      margin-left: 300px;
    }

    label {
      display: block;
      margin: 20px 0 0 0;
    }

    #circle {
      float: left;
      background: yellow;
      border-radius: 50%;
      width: 150px;
      height: 150px;
    }
  </style>
  <script>
    $(function() {
      $("#accordion").accordion();
    });
    $(function() {
      var circle = $("#circle");

      $("#radius").selectmenu({
        change: function(event, data) {
          circle.css({
            width: data.item.value,
            height: data.item.value
          });
        }
      });

      $("#color").selectmenu({
        change: function(event, data) {
          circle.css("background", data.item.value);
        }
      });
    });
  </script>
</head>

<body>

  <div id="accordion">
    <h3>Serviço 1</h3>
    <div>
      <p>
        Definição do titulo acima;
      </p>
    </div>
    <h3>Serviço 2</h3>
    <div>
      <p>
        Definição do titulo acima;
      </p>
    </div>
    <h3>Serviço 3</h3>
    <div>
      <p>
        Definição do titulo acima;
      </p>
      <ul>
        <li>Exeplo 1</li>
        <li>Exemplo 2</li>
        <li>Exemplo 3</li>
      </ul>
    </div>
    <h3>Serviço 4</h3>
    <div>
      <p>
        Definição do titulo acima;
      </p>
      <p>
        Definição do titulo acima 2;
      </p>
    </div>
  </div>
  </br>
  </br>
  <div class="demo">

    <form action="#">

      <div id="circle"></div>

      <fieldset>
        <label for="radius">Tamanho do circulo</label>
        <select name="radius" id="radius">
          <option value="50">50px</option>
          <option value="100">100px</option>
          <option value="150" selected="selected">150px</option>
          <option value="200">200px</option>
          <option value="250">250px</option>
        </select>

        <label for="color">Cor do circulo</label>
        <select name="color" id="color">
          <option value="black">Preto</option>
          <option value="red">Vermelho</option>
          <option value="yellow" selected="selected">Amarelo</option>
          <option value="blue">Azul</option>
          <option value="green">Verde</option>
        </select>
      </fieldset>

    </form>

  </div>

</body>

</html>