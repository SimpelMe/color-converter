function copyname() {
  var text = document.getElementById("name-output").innerHTML;
  navigator.clipboard.writeText(text);
}

function copyhex() {
  var text = document.getElementById("hex-output").innerHTML;
  navigator.clipboard.writeText(text);
}

function copyhex8() {
  var text = document.getElementById("hex8-output").innerHTML;
  navigator.clipboard.writeText(text);
}

function copyrgb() {
  var text = document.getElementById("rgb-output").innerHTML;
  navigator.clipboard.writeText(text);
}

function copyswift() {
  var text = document.getElementById("swift-output").innerHTML;
  navigator.clipboard.writeText(text);
}

function copyobjectivec() {
  var text = document.getElementById("objective-c-output").innerHTML;
  navigator.clipboard.writeText(text);
}

function copyxamarin() {
  var text = document.getElementById("xamarin-output").innerHTML;
  navigator.clipboard.writeText(text);
}

function copyfloat() {
  var text = document.getElementById("float-output").innerHTML;
  navigator.clipboard.writeText(text);
}

function copyhsl() {
  var text = document.getElementById("hsl-output").innerHTML;
  navigator.clipboard.writeText(text);
}

function copyhsv() {
  var text = document.getElementById("hsv-output").innerHTML;
  navigator.clipboard.writeText(text);
}
