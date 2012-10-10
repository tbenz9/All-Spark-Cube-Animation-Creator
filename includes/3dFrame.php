<div class="threeDFrameButtons">
<ul id="sddm">
    <li><a href="#" 
        onmouseover="mopen('m4')" 
        onmouseout="mclosetime()">3D View</a>
        <div id="m4" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="#">Front</a>
        <a href="#">Right</a>
        <a href="#">Top</a>
        <a href="#"
	onClick="notify('Left View')">Left</a>
        <a href="#">Origin</a>
    </li>
</ul>
</div> <!--3dFrameButtons end -->
<div style="clear:both"></div>

<div class="webGLRender">
<!--<center><img src="http://www.faludi.com/images/blog/cube.jpg" id="threeDFrameImagePlaceHolder" width=50% /></center>-->


<canvas id="canvas" width="900" height="450">
  Sorry, this demo requires a web browser which supports HTML5 canvas!
</canvas>

</div> <!--webGLRender end -->
