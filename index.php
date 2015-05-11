<html>
<head>
<title>Ads</title>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<style type="text/css">
div {
	padding:8px;
}
</style>
</head>
<body>
<h1>Ads</h1>
<script type="text/javascript">

var scr1="<div id='adContainer' style='width:320px;margin:0px;padding:0px;background-color:#ffffff;'><div id='normal' style='display:none;width:318px;height:48px;margin:auto;position:relative;top:0px;left:0px;background-color:#ffffff;border-style:solid;border-width:1px;border-color:rgb(238,50,36);' onclick='javascript:resize();'><img style='position:relative!important;top:0px;left:0px;' height='248' width='298' src='";

var scr2="'/></div><div id='resized' style='display:none;width:318px;height:248px;margin:auto;position:relative;top:0px;left:0px;background-color:#ffffff;border-style:solid;border-width:1px;border-color:rgb(238,50,36);'><a href='http://www.google.com/' target='_blank'><img height='400' width='889' src='";

var scr3="'/></a><div style='position:absolute;top:5px;right:5px;background-color:rgb(238,50,36);'><div style='width:20px;height:20px;display:table-cell;text-align:center;vertical-align:middle;font-family: Arial, Helvetica, sans-serif;'>X</div></div></div></div>";
 
$(document).ready(function(){
 
    var counter = 2;

     $("#getButtonValue").click(function () {
	 
	for(i=1; i<counter; i++){	
	 $("#TextAreaBoxDiv" + i).remove();	
	 }
	
	 
	for(i=1; i<counter; i++){	
   	 var newTextAreaBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextAreaBoxDiv' + i); 
		 
	var j = counter-1;


if(i==j)
{
	
	newTextAreaBoxDiv.after().html('<label>Script' +
	      '<textarea readonly="readonly" rows="50" cols="180" name="LP' + i + '" id="LP' + i + '">'+	
		    
		  "<"+"script type='text/javascript' src='mraid.js'>"+"<"+"/script>" + "\n" + scr1 + $('#textbox' + (0+1)).val()  + scr2 + $('#textbox' + (0+2)).val() + scr3 
		  
		  + "\n"+"\n"+"\n"+ "<"+"script>\n" + 
		  "function collapse()\n{" + "\n mraid.close();" + "\n"+"}"+ 
		  "\n\nfunction showMyAd()\n{" + "\n var el = document.getElementById('normal');" + 
		  "\n el.style.display = '';" + 
		  "\n\n\n mraid.addEventListener('stateChange', updateAd);" +"\n}"+ 	
		  "\n\n\n function resize() \n\n { \n\n mraid.setResizeProperties({'width':320,'height':250,'offsetX':0,'offsetY':0,'allowOffscreen':false});\n mraid.resize(); \n\n\}"
		  + "\n\n\n function updateAd(state) \n{ \n if (state == 'resized') \n\{\n toggleLayer('normal', 'resized'); \n } \n else if (state == 'default') \n { \n" + 
		  "toggleLayer('resized', 'normal'); \n } \n}"
		  + "\n\n\n function toggleLayer(fromLayer, toLayer) \n{ \n var fromElem = document.getElementById(fromLayer); \n fromElem.style.display = 'none';\n\n" 
		  +"var toElem = document.getElementById(toLayer); \n toElem.style.display = ''; \n }"
		  +"\n\n function doReadyCheck() \n { \n showMyAd(); \n } \n \n doReadyCheck(); \n\n"
		  + "<"+"/script> "
		  + '</textarea>');
	}  		  
	newTextAreaBoxDiv.appendTo("#DivBoxesGroup");
	}
     });
  });
</script>
</head>
<body>
<div id='TextBoxesGroup'>
  <div id="TextBoxDiv1">
    <label>Small Banner : </label>
    <input type='textbox' id='textbox1' size="30">
  </div>
  <div id="TextBoxDiv1">
    <label>Big Banner :&nbsp;&nbsp;&nbsp; </label>
    <input type='textbox' id='textbox2' size="30">
  </div>
</div>
<input type='button' value='Submit' id='getButtonValue'>
<div id='DivBoxesGroup'></div>
</body>
</html>
