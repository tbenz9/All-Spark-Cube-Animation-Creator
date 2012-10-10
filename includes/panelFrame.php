<div id="snapshotCounter">
	<img src="http://cdn1.iconfinder.com/data/icons/oxygen/22x22/actions/go-previous-rtl.png" id="rotate180"/>
	<input type="text" value="0" class="loopAnimationCounterInputBox"/> of 100
	<img src="http://cdn1.iconfinder.com/data/icons/oxygen/22x22/actions/go-previous-rtl.png" id=""/>
</div><!--snapshotCounter-->


<div class="panelFrameButtons">
<ul id="sddm">
    <li><a href="#" 
        onmouseover="mopen('m6')" 
        onmouseout="mclosetime()">Macros</a>
        <div id="m6" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="#">Delete</a>
        <a href="#">Duplicate</a>
        <a href="#">Rotate Forward</a>
        <a href="#"
	onClick="notify('Rotate Backwards')">Rotate Backward</a>
        <a href="#">Invert</a>
    </li>
</ul>
</div> <!--panelFrameButtons end -->

<canvas id="canvasPanel2d" width="100%" height="100%">
  Sorry, this demo requires a web browser which supports HTML5 canvas!
</canvas>


