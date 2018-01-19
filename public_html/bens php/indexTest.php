<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alpha Phi Omega</title>
<link href="styles2.css" rel="stylesheet" type="text/css" />
<script>
home_on = new Image();
home_off = new Image();
home_on.src = "img/buttons/buttonover_02.jpg";
home_off.src = "img/buttons/buttons_up_02.jpg";

service_on = new Image();
service_off = new Image();
service_on.src = "img/buttons/buttonover_03.jpg";
service_off.src = "img/buttons/buttons_up_03.jpg";

recruit_on = new Image();
recruit_off = new Image();
recruit_on.src = "img/buttons/buttonover_04.jpg";
recruit_off.src = "img/buttons/buttons_up_04.jpg";

calen_on = new Image();
calen_off = new Image();
calen_on.src = "img/buttons/buttonover_05.jpg";
calen_off.src = "img/buttons/buttons_up_05.jpg";

media_on = new Image();
media_off = new Image();
media_on.src = "img/buttons/buttonover_06.jpg";
media_off.src = "img/buttons/buttons_up_06.jpg";

links_on = new Image();
links_off = new Image();
links_on.src = "img/buttons/buttonover_07.jpg";
links_off.src = "img/buttons/buttons_up_07.jpg";

members_on = new Image();
members_off = new Image();
members_on.src = "img/buttons/buttonover_08.jpg";
members_off.src = "img/buttons/buttons_up_08.jpg";


function button_on (imgId)
{
	if( document.images )
	{
		butOn = eval (imgId + "_on.src");
		document.getElementById(imgId).src = butOn;
	}
}
function button_off (imgId)
{
	if( document.images )
	{
		butOff = eval (imgId + "_off.src");
		document.getElementById(imgId).src = butOff;
	}
}
</script>
</head>

<body>
<div id="container">
<div id="banner"></div>
<div id="buttonBar">
<img src="img/buttons/buttonover_01.jpg" width="73" height="57" hspace="0" border="0"><img src="img/buttons/buttons_down_02.jpg" alt="Home" width="79" height="57" hspace="0" border="0"><a href="#" onMouseOut="button_off('service'); return true" onMouseOver="button_on('service'); return true"><img src="img/buttons/buttons_up_03.jpg" alt="Service" name="service" width="85" height="57" hspace="0" border="0" id="service"></a><a href="#" onMouseOut="button_off('recruit'); return true" onMouseOver="button_on('recruit'); return true"><img src="img/buttons/buttons_up_04.jpg" alt="Recruitment" border="0" width="119" height="57" id="recruit"></a><a href="#" onMouseOut="button_off('calen'); return true" onMouseOver="button_on('calen'); return true"><img src="img/buttons/buttons_up_05.jpg" alt="Calendar" border="0" width="97" height="57" id="calen"></a><a href="#" onMouseOut="button_off('media'); return true" onMouseOver="button_on('media'); return true"><img src="img/buttons/buttons_up_06.jpg" alt="Media" border="0" width="82" height="57" id="media"></a><a href="#" onMouseOut="button_off('links'); return true" onMouseOver="button_on('links'); return true"><img src="img/buttons/buttons_up_07.jpg" alt="Links" border="0" width="76" height="57" id="links"></a><a href="#" onMouseOut="button_off('members'); return true" onMouseOver="button_on('members'); return true"><img src="img/buttons/buttons_up_08.jpg" alt="Member Area" border="0" width="132" height="57" id="members"></a><img src="img/buttons/buttonover_09.jpg" width="71" height="57"></div>
<div id="spacer"></div>
<div id="bodyHome">
<div id="topLeftNews"><span class="newstitle">Welcome!</span><br /><br /><span class="news">Welcome to Worcester Polytechnic Institute's Alpha Phi Omega Chapter!</span></div>
<div id="topMidNews"><span class="newstitle">Another news...</span><br /><br />
  <span class="news">
  This is also news, but this news is going to be a little longer. I'm going to rabble on and on just for a little demonstration here. .Anyway, the reason I'm writing this long paragraph is because eventually. right when you think I'm about to reveal the point of the story...</span><br /><span class="tobecont">click here to read more...</span></div>
<div id="topRightNews"></div>
<div id="bodyMidSect"><span class="newstitle">National Convention '08</span><br /><img src="http://users.wpi.edu/~apo/images/groupphoto.JPG" alt="" width="215" height="158" border="1"><br />
  <em>APO-OI at the National Convention in Boston, <br />
  MA, December 27-30, 2008</em></div>
</div>
</div>
</body>
</html>
