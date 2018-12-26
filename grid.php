
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdn.jsdelivr.net/npm/interactjs@1.3.4/dist/interact.min.js"></script>
  <!-- or -->
  <script src="https://unpkg.com/interactjs@1.3.4/dist/interact.min.js"></script>


  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
  <style>
  #tablei
  {
    background-image:url("bbg.jpeg");
    background-size: cover;
  }
  </style>
<div>

</div>
<script>
interact('.resize-drag')
  .draggable({
    onmove: window.dragMoveListener,

  })
  .resizable({
    // resize from all edges and corners
    edges: { left: false, right: true, bottom: true, top: false },

    // keep the edges inside the parent


    // minimum size
    restrictSize: {
      min: { width: 100, height: 50 },
    },

    inertia: true,
  })
  .on('resizemove', function (event) {
    var target = event.target,
        x = (parseFloat(target.getAttribute('data-x')) || 0),
        y = (parseFloat(target.getAttribute('data-y')) || 0);

    // update the element's style
    target.style.width  = event.rect.width + 'px';
    target.style.height = event.rect.height + 'px';

    // translate when resizing from top or left edges
    x += event.deltaRect.left;
    y += event.deltaRect.top;

    target.style.webkitTransform = target.style.transform =
        'translate(' + x + 'px,' + y + 'px)';

    target.setAttribute('data-x', x);
    target.setAttribute('data-y', y);

  });


    function dragMoveListener (event) {
      var target = event.target,
          // keep the dragged position in the data-x/data-y attributes
          x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
          y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

      // translate the element
      target.style.webkitTransform =
      target.style.transform =
        'translate(' + x + 'px, ' + y + 'px)';

      // update the posiion attributes
      target.setAttribute('data-x', x);
      target.setAttribute('data-y', y);
    }

    // this is used later in the resizing and gesture demos
    window.dragMoveListener = dragMoveListener;





</script>
<style>


.resize-drag {
  background-size:cover;
  color: white;
  font-size: 20px;
  font-family: sans-serif;
  border-radius: 8px;
  padding: 20px;
  margin: 30px 20px;
  touch-action: none;

  width: 120px;

  /* This makes things *much* easier */
  box-sizing: border-box;
}
#c1 {
  background-image: url('https://vignette.wikia.nocookie.net/disney/images/c/c0/AoU_Iron_Man_01.png/revision/latest?cb=20150309163517');
  background-size:cover;
  color: white;
  font-size: 20px;
  font-family: sans-serif;
  border-radius: 8px;
  padding: 20px;
  margin: 30px 20px;
  touch-action: none;
height:120px;
  width: 120px;

  /* This makes things *much* easier */
  box-sizing: border-box;
}
#c2 {
  background-image: url('https://vignette.wikia.nocookie.net/disney/images/9/9e/Thor_AA_01.png/revision/latest?cb=20141210232919');
  background-size:cover;
  color: white;
  font-size: 20px;
  font-family: sans-serif;
  border-radius: 8px;
  padding: 20px;
  margin: 30px 20px;
  touch-action: none;
height:120px;
  width: 120px;

  /* This makes things *much* easier */
  box-sizing: border-box;
}
#c3 {
  background-image: url('https://cdn140.picsart.com/255355877000211.png?r1024x1024');
  background-size:cover;
  color: white;
  font-size: 20px;
  font-family: sans-serif;
  border-radius: 8px;
  padding: 20px;
  margin: 30px 20px;
  touch-action: none;
height:120px;
  width: 120px;

  /* This makes things *much* easier */
  box-sizing: border-box;
}
#c4 {
  background-image: url('http://2.bp.blogspot.com/-uQEHnOSujog/UXbf4MzQTLI/AAAAAAAAAuE/kn9jreylkXw/s1600/2Transformers+Render++zat+renders.png');
  background-size:cover;
  color: white;
  font-size: 20px;
  font-family: sans-serif;
  border-radius: 8px;
  padding: 20px;
  margin: 30px 20px;
  touch-action: none;
height:120px;
  width: 120px;

  /* This makes things *much* easier */
  box-sizing: border-box;
}
#c5 {
  background-image: url('https://orig00.deviantart.net/f2c5/f/2018/098/4/9/infinity_war_thanos__2____png_by_captain_kingsman16-dc88wpn.png');
  background-size:cover;
  color: white;
  font-size: 20px;
  font-family: sans-serif;
  border-radius: 8px;
  padding: 20px;
  margin: 30px 20px;
  touch-action: none;
height:120px;
  width: 120px;

  /* This makes things *much* easier */
  box-sizing: border-box;
}
.resize-container {
  display: inline-block;
  width: 100%;
  height: 100px;
}


</style>
<div>
  <div id="i" style="float:left ;width:20%;">
    <img src="banner.jpg" height="200px"; width="100%";>
  </div>
  <div style="float:left; height:200px;width:80%; background-image:url('banerbg.jpg');color:white;font-size:65px;">
    <br><center><b>StriPPic</b></center>
  </div>
</div>

<table style="background-image:url('bbg.jpg');">
  <tr>
    <td>
<div class="resize-container">
  <div class="resize-drag" id="c1">

  </div>
</div>
</td>




  <td>
  <div class="resize-container">
    <div class="resize-drag" id="c2">
    </div>
</div>
</td>

  <td>
<div class="resize-container">
  <div class="resize-drag"id="c3">
  </div>
</div>
</td>

  <td>

<div class="resize-container">
  <div class="resize-drag"id="c4">
  </div>
</div>
</td>


  <td>
<div class="resize-container">
  <div class="resize-drag" id="c5">
  </div>
</div>
</td>

</tr>
<tr>


  <td>
  <div class="resize-drag">
  <div id="op7" style="background-image:url('https://mbtskoudsalg.com/images/white-thought-bubble-png.png');
  background-size:cover;width:170px;height:120px;">
  <div  id="op8">
    <textarea width="70px" height="70px"></textarea>
  </div>
  </div>
  </div>
  </td>
  <td>
    <div class="resize-drag">
  <div id="op5" style="background-image:url('http://www.transparentpng.com/download/speech-bubble/white-speech-bubble-images-28.png');
  background-size:cover;width:170px;height:120px;">
  <div  id="op6">
    <textarea width="70px" height="70px"></textarea>
  </div>
  </div>
  </div>
  </td>
  <td>
  <div class="resize-drag">
  <div id="op3" style="background-image:url('https://mbtskoudsalg.com/images/speech-bubble-png-5.png');
  background-size:cover;width:170px;height:120px;">
  <div  id="op4">
  <textarea width="70px" height="70px"></textarea>
  </div>
  </div>
  </div>
  </td>

  <td>
  <div class="resize-drag">
  <div id="op9" style="background-image:url('https://mbtskoudsalg.com/images/blank-pow-png-8.png');
  background-size:cover;width:170px;height:120px;">
  <div  id="op10">
  <textarea width="70px" height="70px"></textarea>
  </div>
  </div>
  </div>
  </td>
  <td>
  <div class="resize-drag">
  <div id="op3" style="background-image:url('http://www.stickpng.com/assets/images/58adf251e612507e27bd3c32.png');
  background-size:cover;width:170px;height:120px;">
  <div  id="op4">
  <textarea width="70px" height="70px"></textarea>
  </div>
  </div>
  </div>
  </td>







</tr>
<tr>
  <td>
  <div class="resize-container">
  <div class="resize-drag" id="c6" style="background-image:url('wham.jpg'); width:200px;height:100px; background-size:cover;">

  </div>
  </div>
  </td>
  <td>
    <div class="resize-container">
    <div class="resize-drag" id="c6" style="background-image:url('thud.jpeg'); width:200px;height:100px; background-size:contain; background-repeat:no-repeat;;">

    </div>
    </div>
  </td>
  <td>
    <div class="resize-container">
    <div class="resize-drag" id="c6" style="background-image:url('bawl.jpeg'); width:200px;height:100px; background-size:contain; background-repeat:no-repeat;;">

    </div>
    </div>
  </td>
  <td>
    <div class="resize-container">
    <div class="resize-drag" id="c6" style="background-image:url('kapow.jpeg'); width:200px;height:100px; background-size:contain; background-repeat:no-repeat;;">

    </div>
    </div>
  </td>
  <td>
    <div class="resize-container">
    <div class="resize-drag" id="c6" style="background-image:url('multiple.jpeg'); width:200px;height:100px; background-size:contain; background-repeat:no-repeat;;">

    </div>
    </div>
  </td>


</tr>
</table>
<table  id="tablei">
<tr>
<td width="70%" rowspan="5">
<table style="border: 5px solid;">
<tr style="border: 5px solid;">
<td style="border: 5px solid;" rowspan="2" height=400px id='p1' onClick="randomize()">
</td>
<td style="border: 5px solid;" id='p2' onClick="randomize2()">
</td>
</tr>
<tr>
<td style="border: 5px solid;" id='p3' onClick="randomize3()">
</td>

</tr>

</table>

<script>
function randomize() {
  document.getElementById('p1').style.background = randomColors();
}
function randomize2() {
  document.getElementById('p2').style.background = randomColors();
}
function randomize3() {
  document.getElementById('p3').style.background = randomColors();
}
function randomColors() {
  return '#' + Math.floor(Math.random() * 16777215).toString(16);
}
</script>

<style>
#op2{
  position:relative;
  background-size:cover;
  height:200px;
  width:200px;
}
#op1
{
  position:absolute;
  bottom: 45px;
    right: 40px;

    color: white;
    margin-left: 40px;
    margin-right: 20px;
}
#op3{

  height:200px;
  width:200px;
  position:relative;
  background-size:cover;
}
#op4
{
  position:absolute;
  bottom: 45px;
    right: 40px;
    background-color: white;
    color: white;
    margin-left: 40px;
    margin-right: 20px;
}
#op7{
  position:relative;
  background-size:cover;
  height:200px;

  width:200px;
}
#op8
{
  position:absolute;
  bottom: 45px;
    right: 40px;

    color: white;
    margin-left: 40px;
    margin-right: 20px;
}
#op5{
  background-size:cover;
  position:relative;
  height:200px;
  width:200px;
}
#op6
{
  position:absolute;
  bottom: 45px;
    right: 40px;
    background-color: rgba(0,0,0,0);
    color: white;
    margin-left: 40px;
    margin-right: 20px;
}
#op9{

  height:200px;
  width:200px;
  position:relative;
  background-size:cover;
}
#op10
{
  position:absolute;
  bottom: 45px;
    right: 40px;
    background-color: white;
    color: white;
    margin-left: 40px;
    margin-right: 20px;
}
</style>

</body>
</html>
