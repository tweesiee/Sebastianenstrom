<body>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
var no = 50;
var speed = 1;
var ns4up = (document.layers) ? 1 : 0;
var ie4up = (document.all) ? 1 : 0;
var s, x, y, sn, cs;
var a, r, cx, cy;
var i, doc_width = 800, doc_height = 600;
if (ns4up) {
doc_width = self.innerWidth;
doc_height = self.innerHeight;
}
else
if (ie4up) {
doc_width = document.body.clientWidth;
doc_height = document.body.clientHeight;
}
x = new Array();
y = new Array();
r = new Array();
cx = new Array();
cy = new Array();
s = 8;
for (i = 0; i < no; ++ i) {
initRain();
if (ns4up) {
if (i == 0) {
document.write("<layer name=\"dot"+ i +"\" left=\"1\" ");
document.write("top=\"1\" visibility=\"show\"><font color=\"blue\">");
document.write(",</font></layer>");
}
else {
document.write("<layer name=\"dot"+ i +"\" left=\"1\" ");
document.write("top=\"1\" visibility=\"show\"><font color=\"blue\">");
document.write(",</font></layer>");
   }
}
else
if (ie4up) {
if (i == 0) {
document.write("<div id=\"dot"+ i +"\" style=\"POSITION: ");
document.write("absolute; Z-INDEX: "+ i +"; VISIBILITY: ");
document.write("visible; TOP: 15px; LEFT: 15px;\"><font color=\"blue\">");
document.write(",</font></div>");
}
else {
document.write("<div id=\"dot"+ i +"\" style=\"POSITION: ");
document.write("absolute; Z-INDEX: "+ i +"; VISIBILITY: ");
document.write("visible; TOP: 15px; LEFT: 15px;\"><font color=\"blue\">");
document.write(",</font></div>");
      }
   }
}
function initRain() {
a = 6;
r[i] = 1;
sn = Math.sin(a);
cs = Math.cos(a);
cx[i] = Math.random() * doc_width + 1;
cy[i] = Math.random() * doc_height + 1;
x[i] = r[i] * sn + cx[i];
y[i] = cy[i];
}
function makeRain() {
r[i] = 1;
cx[i] = Math.random() * doc_width + 1;
cy[i] = 1;
x[i] = r[i] * sn + cx[i];
y[i] = r[i] * cs + cy[i];
}
function updateRain() {
r[i] += s;
x[i] = r[i] * sn + cx[i];
y[i] = r[i] * cs + cy[i];
}
function raindropNS() {
for (i = 0; i < no; ++ i) {
updateRain();
if ((x[i] <= 1) || (x[i] >= (doc_width - 20)) || (y[i] >= (doc_height - 20))) {
makeRain();
doc_width = self.innerWidth;
doc_height = self.innerHeight;
}
document.layers["dot"+i].top = y[i];
document.layers["dot"+i].left = x[i];
}
setTimeout("raindropNS()", speed);
}
function raindropIE() {
for (i = 0; i < no; ++ i) {
updateRain();
if ((x[i] <= 1) || (x[i] >= (doc_width - 20)) || (y[i] >= (doc_height - 20))) {
makeRain();
doc_width = document.body.clientWidth;
doc_height = document.body.clientHeight;
}
document.all["dot"+i].style.pixelTop = y[i];
document.all["dot"+i].style.pixelLeft = x[i];
}
setTimeout("raindropIE()", speed);
}
if (ns4up) {
raindropNS();
}
else
if (ie4up) {
raindropIE();
}
//  End -->
</script>
</body>