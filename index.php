<!doctype html>
<html lang="en">

<head>
  <?php include dirname($_SERVER['DOCUMENT_ROOT']) . "/simpel.cc/php/head.php"; ?>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
  <script type='text/javascript' src='js/jquery-3.3.1.min.js'></script>
  <script type='text/javascript' src='js/tinycolor.js'></script>
  <script type='text/javascript' src='js/copy.js'></script>
  <script type='text/javascript'>
    function colorChange(color) {
      var tiny = tinycolor(color);

      $("#name-output").text(tiny.toName());
      $("#hex-output").text(tiny.toHexString());
      $("#hex8-output").text(tiny.toHex8String());
      $("#rgb-output").text(tiny.toRgbString());
      $("#swift-output").text(tiny.toSwiftString());
      $("#objective-c-output").text(tiny.toObjectivecString());
      $("#xamarin-output").text(tiny.toXamarinString());
      $("#float-output").text(tiny.toFloatString());
      $("#hsl-output").text(tiny.toHslString());
      $("#hsv-output").text(tiny.toHsvString());

      $("#color-input").css("background-color",
        tiny.toHexString()
      );
      $("#color-input").css("border-color",
        tiny.toHexString()
      );
    }

    $(function() {
      $("#color").bind("keyup change", function() {
        colorChange($(this).val());
      });
      colorChange({
        r: 85,
        g: 85,
        b: 85,
        a: 1.00
      });
    });
  </script>

</head>

<body>
  <header>
    <?php include dirname($_SERVER['DOCUMENT_ROOT']) . "/simpel.cc/php/header.php"; ?>
  </header>

  <main>
    <div class="datagrid">
      <table>
        <tbody>
          <tr>
            <td colspan="3" class="data-value data-input">
              <div>
                <input type="text" placeholder="Write your color code here" autofocus id='color' />
              </div>
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <div>
                <input id='color-input' type="text" readonly tabindex="-1"/>
              </div>
            </td>
          </tr>
          <tr>
            <td>Name</td>
            <td>
              <button id='name-output' type="button" onclick="copyname()" title="push to copy the color name"></button>
            </td>
          </tr>
          <tr>
            <td>Hex</td>
            <td>
              <button id='hex-output' type="button" onclick="copyhex()" title="push to copy the color in hex value"></button>
            </td>
          </tr>
          <tr>
            <td>Hex8</td>
            <td>
              <button id='hex8-output' type="button" onclick="copyhex8()" title="push to copy the color in hex 8 value"></button>
            </td>
          </tr>
          <tr>
            <td>RGB</td>
            <td>
              <button id='rgb-output' type="button" onclick="copyrgb()" title="push to copy the color in rgb value"></button>
            </td>
          </tr>
          <tr>
            <td>Swift</td>
            <td>
              <button id='swift-output' type="button" onclick="copyswift()" title="push to copy the color in swift code"></button>
            </td>
          </tr>
          <tr>
            <td>Objective-C</td>
            <td>
              <button id='objective-c-output' type="button" onclick="copyobjectivec()" title="push to copy the color in objective-c code"></button>
            </td>
          </tr>
          <tr>
            <td>Xamarin&nbsp;(C#)</td>
            <td>
              <button id='xamarin-output' type="button" onclick="copyxamarin()" title="push to copy the color in c-sharp code"></button>
            </td>
          </tr>
          <tr>
            <td>Float</td>
            <td>
              <button id='float-output' type="button" onclick="copyfloat()" title="push to copy the color in float value"></button>
            </td>
          </tr>
          <tr>
            <td>HSL</td>
            <td>
              <button id='hsl-output' type="button" onclick="copyhsl()" title="push to copy the color in hsl value"></button>
            </td>
          </tr>
          <tr>
            <td>HSV</td>
            <td>
              <button id='hsv-output' type="button" onclick="copyhsv()" title="push to copy the color in hsv value"></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>

</html>
