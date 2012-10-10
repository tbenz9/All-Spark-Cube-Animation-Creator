<head>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	
	<script type='text/javascript' src="includes/jquery/jquery.js"></script>
	<script type='text/javascript' src="includes/processing.js"></script>
	<script type='text/javascript' src="functions/javascriptFunctions.js"></script>
	<script type='text/javascript' src="3dcube/pre3d.js"></script>
	<script type='text/javascript' src="3dcube/pre3d_shape_utils.js"></script>
	<script type='text/javascript' src="3dcube/demo_utils.js"></script>
	<script type='text/javascript' src="3dcube/colorscube.js"></script>
</head>
<body>
<table width=100% style="border: 2px dotted gray">
<tr><td colspan="2" width="100%" id="headerTableColumn" ><?php include_once("includes/header.php"); ?></td></tr>
<tr><td width=50% id=threeDFrameTableColumn><?php include_once("includes/3dFrame.php"); ?></td><td width="50%" id="animationFrameTableColumn" ><?php include_once("includes/animationFrame.php"); ?></td></tr> 
<tr><td colspan=2 width=100% id=panelFrameTableColumn ><?php include_once("includes/panelFrame.php"); ?></td></tr>
</table>
</body>
