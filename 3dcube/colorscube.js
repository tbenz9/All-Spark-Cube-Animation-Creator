// (c) Dean McNamee <dean@gmail.com>.  All rights reserved.

window.addEventListener('load', function() {
  var black = new Pre3d.RGBA(0, 0, 0, .3);  // R,G,B,Opacity
  var white = new Pre3d.RGBA(1, 1, 1, 1);   // R,G,B,Opacity

  var screen_canvas = document.getElementById('canvas');
  var renderer = new Pre3d.Renderer(screen_canvas);

  var cubes = [ ];

  for (var i = 0; i < 16; ++i) {
    for (var j = 0; j < 16; ++j) {
      for (var k = 0; k < 16; ++k) {
        //if (i == 0 || j == 0 || k == 0 ||  // This only prints the outside layer
          //  i == 15 || j == 15 || k == 15) {  // This only prints the outside layer
          var cube = Pre3d.ShapeUtils.makeCube(0.5);
          var transform = new Pre3d.Transform();
          //  This rotates around center (needs to be half the cube size
          transform.translate(i - 8, j - 8, k - 8);
          cubes.push({
            shape: cube,
	    //  Assign color here!
            color: new Pre3d.RGBA(i / 16, j / 16, k / 16, 0.3),
            //color: black,
            trans: transform});
        //}  // end of outside layer if statement
      }
    }
  }

  var num_cubes = cubes.length;
  var cur_white = false;  // Default to black background.

  function draw() {
    for (var i = 0; i < num_cubes; ++i) {
      var cube = cubes[i];
      renderer.fill_rgba = cube.color;
      renderer.transform = cube.trans;
      renderer.bufferShape(cube.shape);
    }

    if (cur_white) {
      renderer.ctx.setFillColor(1, 1, 1, 1);
    } else {
      renderer.ctx.setFillColor(1, 1, 1, 1);
    }
    renderer.drawBackground();

    renderer.drawBuffer();
    renderer.emptyBuffer();
  }

  renderer.camera.focal_length = 2.5;
  // Have the engine handle mouse / camera movement for us.
  //  -40 is distance from the cube
  // second to last value is starting location
  // other values are for starting and rotation position I think
  DemoUtils.autoCamera(renderer, 0, 0, -40, 0.40, -1.06, 0, draw);

  document.addEventListener('keydown', function(e) {
    if (e.keyCode != 84)  // t
      return;

    if (cur_white) {
      document.body.className = "black";
    } else {
      document.body.className = "white";
    }
    cur_white = !cur_white;
    draw();
  }, false);

  draw();
}, false);
