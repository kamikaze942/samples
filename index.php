<!-- php server side code -->
<script type="text/javascript">
  alert('You have already voted on this!!!');
  window.location.reload();
</script>  
<script type="text/javascript">
  alert(/* php code */);
</script>  
<script type="text/javascript">
  alert('You must be a registered user to vote!');
</script>

<!-- end php server side code on pre-built JS functions -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta content="Check out ITFrenzy Beer!  Vote, comment, and talk about the best beers in the NorthWest, especially Seattle... other regions coming soon " name="description" />
<meta content="ITFrenzy,beer, best beer in seattle, seattle breweries, brewery, beer ratings, pacific northwest beer " name="keywords" />
<link href="beer.css" rel="stylesheet" type="text/css" media ="screen"/>
<title>ITFrenzy BEER!</title>
<link rel= "shortcut icon" href = "../images/favicon2.ico"/>  
<script language="javascript" src="../js/jquery-latest.js" ></script>
<script language="javascript" src="../js/jquery.tablesorter.js" ></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.21.custom.min.js"></script>
<link type="text/css" href="css/smoothness/jquery-ui-1.8.21.custom.css" rel="Stylesheet" />	

<script type="text/javascript">
function changepic(var1, var2){
  document.getElementById(var1).setAttribute('src', var2);       
}

$(function() {
  $("#beerTable").tablesorter();
  $("#beerTable2").tablesorter();
  $("#beerTable3").tablesorter();
  $.fx.speeds._default = 1000;
  $( "#dialog:ui-dialog" ).dialog( "destroy" );
   $("#dialog-form").dialog({
     autoOpen: false,
     height:200,
     width:450,
     modal:true,
     dialogClass: 'myPosition'
   });
  $("#opener").click(function() {
    $("#dialog-form").dialog("open");
    return false;
  });
</script>
</head>
<body>
<div id="wrapper">
  <div id="wrapper2">
    <table id="login" >
        <tr>
        <td class="login">
          <a href="../index.php" onmouseover="changepic('setpic2','../images/home2.png'); return false"
	     onmouseout="changepic('setpic2','../images/home1.png'); return false">
            <img id="setpic2" src="../images/home1.png" width="auto" height="auto" alt="home" />
          </a>
        </td>
        <td class="login">
          <a href="../membersonly.php" onmouseover="changepic('setpic3','../images/userpage3.png'); return false"
	     onmouseout="changepic('setpic3','../images/userpage2.png'); return false">
            <img id="setpic3" src="../images/userpage2.png" width="auto" height="auto" alt="home" />
          </a>
        </td>
	<!--  if logged in set the following -->
          <td class="login">
            <a href="../logout.php" onmouseover="changepic('setpic','../images/button4.png'); return false"
	       onmouseout="changepic('setpic','../images/button3.png'); return false">
              <img id="setpic" src="../images/button3.png" width="auto" height="auto" alt="button" />
            </a>
          </td>
	<!--  if not logged in set the following -->
        <td class="login">
          <a href="../index2.php" onmouseover="changepic('setpic','../images/button2.png'); return false"
	     onmouseout="changepic('setpic','../images/button1.png'); return false">
            <img id="setpic" src="../images/button1.png" width="auto" height="auto" alt="button" />
          </a>
        </td>	
        </tr>
        <tr><td class="banner" colspan="3"><img src="beer4.gif" width="90%" height="auto"  /></td></tr>
        <tr><td colspan="3" align="center"><img src ="beercount.php?text=Visits" ></td></tr>
    </table>
<br>
    <div id="beer3">  
      <table>
  	  <tr><td align="center">
        <img id="beer2" style="border: 8px ridge #AA5303" 
        src="../images/default.jpg" width="125px" height="125px" ><br><br>
        <strong> Beer Wall</strong><br>
        <span style="font-size: small; color: black"> (hover over names of beers to change wall picture)</span></td>
      </tr>
      </table>
    </div>
    <div id="header">
      <p><img src="beerwall_new.png" width="95%" height="350px" alt="beer wall" /></p>
      <p>Welcome to the ITFrenzy Beer section.  This is under construction but will
      soon have a collection of many beers and their rankings! <br> stay tuned!<br></p>
      <h2 style="text-align:center">Pacific NorthWest Beers <br>
      <span style="font-size: medium; color:red">(click on column headers to sort) </span> <br>
      <span style="font-size: medium; color:red">(hover over usernames to see comments) </span></h2>
<div id="dialog-form" title="Submit your vote!">
  <form action="" method="post">
    <table>
    <tr>
	 <td><label for="vote">Vote</label></td>
	 <td>
	  <select name="vote">
	    <option value="10">10</option>
	    <option value="9">9</option>
	    <option value="8">8</option>
	    <option value="7">7</option>
	    <option value="6">6</option>
	    <option selected="selected" value="5">5</option>
	    <option value="4">4</option>
	    <option value="3">3</option>
	    <option value="2">2</option>
	    <option value="1">1</option>
	  </select>
	 </td>
    </tr>
    <tr><td><label for="message">Comment</label></td>
	<td><input type="text" name="message"/></td>
    </tr>
    <input type="hidden" name="v" value="1" />
    <input type="hidden" name="beerid" value="" />
    <tr><td colspan="2" align="center"><input type="submit" value="Vote!" /></td></tr>
    </table>
  </form>
</div>

<table style="width:98%; margin-left:2%; table-layout:fixed; text-align:center"
       class="tablesorter" id="beerTable">
  <thead>
    <th>Name - Type</th>
    <th>Average Rating <br> Click on Score to Vote!</th>
    <th>Voted on by by </th>
  </thead>  
  <tbody>
    <!-- php server side code -->
  </tbody>
</table>

<h2 style="text-align:center">Rest of the World</h2>
<table style="width:98%; margin-left:2%; table-layout:fixed; text-align:center" class="tablesorter" id="beerTable2">
  <thead>
   <th>Name - Type</th> 
   <th>Average Rating <br> Click on Score to Vote!</th>
   <th>Voted on by by </th>
 </thead>  
 <tbody>
<!-- php server side code -->
  </tbody>
</table>
    </div>
  </div>
</div>
<script type="text/javascript">
var $window = $(window),
    $stickyEl = $('#beer3'), 
    elTop = $stickyEl.offset().top;
    elBot = $stickyEl.offset().bottom;
$window.scroll(function() {
 // if scroll goes past 480, beer wall moves down else stay below visit counter
  $window.scrollTop() > 480  ? $stickyEl.toggleClass('sticky', $window.scrollTop() > elTop) : 
    $stickyEl.toggleClass('sticky', $window.scrollTop()  > elBot) ;
});

</script>
</body>
</html>  
