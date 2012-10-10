<ul id="sddm">
    <li><a href="#" 
        onmouseover="mopen('m1')" 
        onmouseout="mclosetime()">File</a>
        <div id="m1" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="#">New Animation</a>
        <a href="#">Open Animation</a>
        <a href="#">Merge 2 Animations</a>
        <a href="#"
	onClick="splitAnimations('Split Animations')">Split Animation</a>
        <a href="#">Cube Settings</a>
        <a href="#">Save Version</a>
        <a href="#">Save As</a>
        <a href="#">Restore Version</a>
        </div>
    </li>
    <li><a href="#" 
        onmouseover="mopen('m2')" 
        onmouseout="mclosetime()">Edit</a>
        <div id="m2" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="#">Delete Scene</a>
        <a href="#">Add Scene</a>
        <a href="#">Copy Scene</a>
        <a href="#">Copy Panel</a>
        <a href="#">Copy LED</a>
        </div>
    </li>
    <li><a href="#" 
        onmouseover="mopen('m3')" 
        onmouseout="mclosetime()">Window</a>
        <div id="m3" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <a href="#">Default</a>
        <a href="#">Custom</a>
    </li>
</ul>


<div class="footerSpacing" id="mouseLocation">
Mouse:<div id="mouseLocationDiv">0,0</div><!--mouseLocationDiv-->
</div><!--mouseLocation-->


<div class="footerSpacing" id="ledAbsoluteLocation">
LED 15 of 4095
</div><!--ledAbsoluteLocation-->


<div class="footerSpacing" id="ledRelativeLocation">
LED 5,15,6
</div><!--ledRelativeLocation-->


<div class="footerSpacing" id="brightnessSlider">
Brightness:  <img src="http://cdn1.iconfinder.com/data/icons/musthave/16/Stock%20Index%20Up.png" /> <input type="text" value="4" id="brightnessInputBox"/>  <img src="http://cdn1.iconfinder.com/data/icons/musthave/16/Stock%20Index%20Down.png" />
</div><!--brightnessSlider-->

<div class="colorButtonsDiv footerSpacing">
<button type="button" onclick="alert('Custom Color Picker!')">Custom</button>
<button class="colorButtons" id="redButton" type="button" onclick="alert('RED')"></button>
<button class="colorButtons" id="greenButton" type="button" onclick="alert('green')"></button>
<button class="colorButtons" id="blueButton" type="button" onclick="alert('blue')"></button>
<button class="colorButtons" id="blackButton" type="button" onclick="alert('black(off)')"></button>
<button class="colorButtons" id="whiteButton" type="button" onclick="alert('white')"></button>
</div><!--colorButtons-->

<div class="footerSpacing" id="headerTitle">
<b>Name of Project</b> - Revision 3
</div><!--headerTitle-->
