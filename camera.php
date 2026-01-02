<?
if (isset($_GET['subject'])) {$subject=$_GET['subject'];}
 else {$subject="anonymous";}
if (isset($_GET['condnum'])) {$condnum=$_GET['condnum'];}
	else {$condnum=-1;}?><HTML>
<HEAD>
<TITLE>Survey</TITLE>
<script language=javascript src="mlweb.js"></SCRIPT>
<link rel="stylesheet" href="mlweb.css" type="text/css">
</head>

<body onLoad="timefunction('onload','body','body')">
<script language="javascript">
ref_cur_hit = <?echo($condnum);?>;
subject = "<?echo($subject);?>";
</script>

<!--BEGIN TABLE STRUCTURE-->
<SCRIPT language="javascript">
//override defaults
mlweb_outtype="CSV";
mlweb_fname="mlwebform";
tag = "a0^a1`"
 + "b0^b1`"
 + "c0^c1`"
 + "d0^d1";

txt = "Camera A^Camera B`"
 + "$169 incl. Shipping^$235 excl. Shipping`"
 + "2.1 MegaPixel<BR>2x Optical Zoom^3 MegaPixel<BR>3x Optical Zoom`"
 + "Camera Case<BR>AC adapter^Stand<BR>AC Adapter<BR>Spare battery";

state = "0^0`"
 + "1^1`"
 + "1^1`"
 + "1^1";

box = "^`"
 + "Price option A^Price Option B`"
 + "Features option A^Features option B`"
 + "Accessories option A^Accessories option B";

CBCol = "1^1";
CBRow = "0^1^1^1";
W_Col = "200^200";
H_Row = "50^80^80^80";

chkchoice = false;
btnFlg = 1;
btnType = "button";
btntxt = "Camera A^Camera B";
btnstate = "1^1";
btntag = "optA^optB";
to_email = "undefined";
colFix = false;
rowFix = false;
CBpreset = true;
evtOpen = 0;
evtClose = 0;
CBord = "0^1^0^1^2^3`"
+ "1^0^0^1^2^3`"
+ "0^1^0^1^3^2`"
+ "1^0^0^1^3^2`"
+ "0^1^0^2^3^1`"
+ "1^0^0^2^3^1`"
+ "0^1^0^3^2^1`"
+ "1^0^0^3^2^1";

chkFrm=true;
warningTxt = "Some questions have not been answered. Please answer all questions before continuing!";
tmTotalSec = 0;
tmStepSec = 0;
tmWidthPx = 0;
tmFill = false;
tmShowTime = false;
tmCurTime = 0;
tmActive = false;
tmDirectStart = false;
tmMinLabel = "min";
tmSecLabel = "sec";
tmLabel = "timer: ";

//Delay: b0 b1 c0 c1 d0 d1
delay = "0^0^0^0^0^0`"
 + "0^0^0^0^0^0`"
 + "0^0^0^0^0^0`"
 + "0^0^0^0^0^0`"
 + "0^0^0^0^0^0`"
 + "0^0^0^0^0^0";
activeClass = "actTD";
inactiveClass = "inactTD";
boxClass = "boxTD";
cssname = "mlweb.css";
nextURL = "difficult.php";
expname = "camera";
randomOrder = false;
recOpenCells = false;
masterCond = 1;
loadMatrices();
</SCRIPT>
<!--END TABLE STRUCTURE-->

<FORM name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save.php"><INPUT type=hidden name="procdata" value="">
<input type=hidden name="subject" value="">
<input type=hidden name="expname" value="">
<input type=hidden name="nextURL" value="">
<input type=hidden name="choice" value="">
<input type=hidden name="condnum" value="">
<input type=hidden name="to_email" value="">
<!--BEGIN preHTML-->
<H1>Demo Page Camera Choice</H1>
<P>Imagine you have to make a choice between the following two cameras. Study the information of each camera carefully and make a choice by pressing the button below the camera you prefer.</P>
<!--END preHTML-->
<!-- MOUSELAB TABLE -->
<TABLE border=1>
<TR>
<!--cell a0(tag:a0)-->
<TD align=center valign=middle><DIV ID="a0_cont" style="position: relative; height: 50px; width: 200px;"><DIV ID="a0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 1;"><TABLE><TD ID="a0_td" align=center valign=center width=195 height=45 class="inactTD">Camera A</TD></TABLE></DIV><DIV ID="a0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 2;"><TABLE><TD ID="a0_tdbox" align=center valign=center width=195 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a0" onMouseOver="ShowCont('a0',event)" onMouseOut="HideCont('a0',event)"><IMG NAME="a0" SRC="transp.gif" border=0 width=200 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a1(tag:a1)-->
<TD align=center valign=middle><DIV ID="a1_cont" style="position: relative; height: 50px; width: 200px;"><DIV ID="a1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 1;"><TABLE><TD ID="a1_td" align=center valign=center width=195 height=45 class="inactTD">Camera B</TD></TABLE></DIV><DIV ID="a1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; clip: rect(0px 200px 50px 0px); z-index: 2;"><TABLE><TD ID="a1_tdbox" align=center valign=center width=195 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a1" onMouseOver="ShowCont('a1',event)" onMouseOut="HideCont('a1',event)"><IMG NAME="a1" SRC="transp.gif" border=0 width=200 height=50></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell b0(tag:b0)-->
<TD align=center valign=middle><DIV ID="b0_cont" style="position: relative; height: 80px; width: 200px;"><DIV ID="b0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; clip: rect(0px 200px 80px 0px); z-index: 1;"><TABLE><TD ID="b0_td" align=center valign=center width=195 height=75 class="actTD">$169 incl. Shipping</TD></TABLE></DIV><DIV ID="b0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; clip: rect(0px 200px 80px 0px); z-index: 2;"><TABLE><TD ID="b0_tdbox" align=center valign=center width=195 height=75 class="boxTD">Price option A</TD></TABLE></DIV><DIV ID="b0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b0" onMouseOver="ShowCont('b0',event)" onMouseOut="HideCont('b0',event)"><IMG NAME="b0" SRC="transp.gif" border=0 width=200 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b1(tag:b1)-->
<TD align=center valign=middle><DIV ID="b1_cont" style="position: relative; height: 80px; width: 200px;"><DIV ID="b1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; clip: rect(0px 200px 80px 0px); z-index: 1;"><TABLE><TD ID="b1_td" align=center valign=center width=195 height=75 class="actTD">$235 excl. Shipping</TD></TABLE></DIV><DIV ID="b1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; clip: rect(0px 200px 80px 0px); z-index: 2;"><TABLE><TD ID="b1_tdbox" align=center valign=center width=195 height=75 class="boxTD">Price Option B</TD></TABLE></DIV><DIV ID="b1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b1" onMouseOver="ShowCont('b1',event)" onMouseOut="HideCont('b1',event)"><IMG NAME="b1" SRC="transp.gif" border=0 width=200 height=80></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell c0(tag:c0)-->
<TD align=center valign=middle><DIV ID="c0_cont" style="position: relative; height: 80px; width: 200px;"><DIV ID="c0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; clip: rect(0px 200px 80px 0px); z-index: 1;"><TABLE><TD ID="c0_td" align=center valign=center width=195 height=75 class="actTD">2.1 MegaPixel<BR>2x Optical Zoom</TD></TABLE></DIV><DIV ID="c0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; clip: rect(0px 200px 80px 0px); z-index: 2;"><TABLE><TD ID="c0_tdbox" align=center valign=center width=195 height=75 class="boxTD">Features option A</TD></TABLE></DIV><DIV ID="c0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c0" onMouseOver="ShowCont('c0',event)" onMouseOut="HideCont('c0',event)"><IMG NAME="c0" SRC="transp.gif" border=0 width=200 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c1(tag:c1)-->
<TD align=center valign=middle><DIV ID="c1_cont" style="position: relative; height: 80px; width: 200px;"><DIV ID="c1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; clip: rect(0px 200px 80px 0px); z-index: 1;"><TABLE><TD ID="c1_td" align=center valign=center width=195 height=75 class="actTD">3 MegaPixel<BR>3x Optical Zoom</TD></TABLE></DIV><DIV ID="c1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; clip: rect(0px 200px 80px 0px); z-index: 2;"><TABLE><TD ID="c1_tdbox" align=center valign=center width=195 height=75 class="boxTD">Features option B</TD></TABLE></DIV><DIV ID="c1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c1" onMouseOver="ShowCont('c1',event)" onMouseOut="HideCont('c1',event)"><IMG NAME="c1" SRC="transp.gif" border=0 width=200 height=80></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell d0(tag:d0)-->
<TD align=center valign=middle><DIV ID="d0_cont" style="position: relative; height: 80px; width: 200px;"><DIV ID="d0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; clip: rect(0px 200px 80px 0px); z-index: 1;"><TABLE><TD ID="d0_td" align=center valign=center width=195 height=75 class="actTD">Camera Case<BR>AC adapter</TD></TABLE></DIV><DIV ID="d0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; clip: rect(0px 200px 80px 0px); z-index: 2;"><TABLE><TD ID="d0_tdbox" align=center valign=center width=195 height=75 class="boxTD">Accessories option A</TD></TABLE></DIV><DIV ID="d0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d0" onMouseOver="ShowCont('d0',event)" onMouseOut="HideCont('d0',event)"><IMG NAME="d0" SRC="transp.gif" border=0 width=200 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d1(tag:d1)-->
<TD align=center valign=middle><DIV ID="d1_cont" style="position: relative; height: 80px; width: 200px;"><DIV ID="d1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; clip: rect(0px 200px 80px 0px); z-index: 1;"><TABLE><TD ID="d1_td" align=center valign=center width=195 height=75 class="actTD">Stand<BR>AC Adapter<BR>Spare battery</TD></TABLE></DIV><DIV ID="d1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; clip: rect(0px 200px 80px 0px); z-index: 2;"><TABLE><TD ID="d1_tdbox" align=center valign=center width=195 height=75 class="boxTD">Accessories option B</TD></TABLE></DIV><DIV ID="d1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 200px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d1" onMouseOver="ShowCont('d1',event)" onMouseOut="HideCont('d1',event)"><IMG NAME="d1" SRC="transp.gif" border=0 width=200 height=80></A></DIV></DIV></TD>
<!--end cell--></TR><TR><TD ID="btn_0" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="button" name="optA" value="Camera A" onMouseOver="timefunction('mouseover','optA','Camera A')" onClick="recChoice('onclick','optA','Camera A')" onMouseOut="timefunction('mouseout','optA','Camera A')"></TD>
<TD ID="btn_1" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="button" name="optB" value="Camera B" onMouseOver="timefunction('mouseover','optB','Camera B')" onClick="recChoice('onclick','optB','Camera B')" onMouseOut="timefunction('mouseout','optB','Camera B')"></TD>
</TR></TABLE>
<!-- END MOUSELAB TABLE -->
<!--BEGIN postHTML-->
<P>
If you have made your choice, press the  button below. This button will bring you to the next page and will show you the data you just generated and explains how this data is saved into the database.
</P>
<P>Note that you won't be able to continue before you have made a choice (MouselabWEB tests whether a choice has been made before proceeding) </P>
<!--END postHTML--><INPUT type="submit" value="Next Page" onClick=timefunction('submit','submit','submit')></FORM></body></html>
