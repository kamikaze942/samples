var title = 'Glowing Eyes';
var PicCount = 0;
onload = function(){
  PicCount = 0;
  var currentTITLE ="";
  var allcomments = new Array();
  var pict = 'images/button1.png';
  var pict2 = 'images/homebutton1.png';
  var pict3 = 'images/userpage.png';
  var pict5 = 'images/eyeglow.gif';
  var pict6 = 'images/markrinn.gif';
  var pict7 = 'images/mountain1.png';
  var pict8= 'images/fen3.png';
  var pict9= 'images/splitfen.png';
  changepic5('images/eyeglow.gif');
  changesize('500', '280', 'picture1');
  changesize('500', '380', 'picture2');
  changetitle('<p>Glowing Eyes</p>');
  changetitle2('<p>Rinnengan</p>');
  document.getElementById('setpic').setAttribute('src', pict);
  document.getElementById('setpic2').setAttribute('src', pict2);
  document.getElementById('setpic3').setAttribute('src', pict3);
  document.getElementById('picture1').setAttribute('src', pict5);
  document.getElementById('picture2').setAttribute('src', pict6);
  document.getElementById('picture3').setAttribute('src', pict7);
  document.getElementById('picture4').setAttribute('src', pict8);
  document.getElementById('picture5').setAttribute('src', pict9);
}

function reset() {
  var e = document.getElementById('artcomment');
  var f = document.getElementById('artcomment2');
  if(e.style.display == 'block')
    e.style.display = 'none';
  if(f.style.display == 'block')
    f.style.display = 'none';
}

function picchange(id, imageUri, width, height) {
document.getElementById(id).setAttribute('src', imageUri);
document.getElementById(id).width = width; 
document.getElementById(id).height = height;
reset();
}

function ChangePics(var1){
    switch (var1){
        case '1':
            document.getElementById('artpicture1').setAttribute('src','images/markrinn.gif');
            document.getElementById('artpicture2').setAttribute('src', 'images/flash.jpg');
            document.getElementById('artpicture3').setAttribute('src', 'images/NerdFrenzy1.png');
            document.getElementById('artpicture4').setAttribute('src', 'images/da_frenzy.jpg');
            break;
        case '2':
            document.getElementById('artpicture1').setAttribute('src','images/flyby.png');
            document.getElementById('artpicture2').setAttribute('src','images/mountain1.png');
            document.getElementById('artpicture3').setAttribute('src','images/mountain2.png');
            document.getElementById('artpicture4').setAttribute('src', 'images/fen1.png');
            break;
        case '3':
            document.getElementById('artpicture1').setAttribute('src', 'images/fen2.png');
            document.getElementById('artpicture2').setAttribute('src','images/fen3.png');
            document.getElementById('artpicture3').setAttribute('src','images/fen4.png');
            document.getElementById('artpicture4').setAttribute('src', 'images/fen5.png');
            break;
        case '4':
            document.getElementById('artpicture1').setAttribute('src', 'images/cyclopsfen.png');
            document.getElementById('artpicture2').setAttribute('src','images/meshari1.png');
            document.getElementById('artpicture3').setAttribute('src','images/frenzySharinew.gif');
            document.getElementById('artpicture4').setAttribute('src', 'images/splitfen.png');
            break;
        case '5':
            document.getElementById('artpicture1').setAttribute('src','images/eyeglow.gif' );
            document.getElementById('artpicture2').setAttribute('src', 'images/craiglogo2.gif');
            document.getElementById('artpicture3').setAttribute('src', 'images/gaarafinal.gif');
            document.getElementById('artpicture4').setAttribute('src', 'images/meshari2.jpg');
            break;
    }
    
}

function ChangeRowPics(var1){
    PicCount +=var1;
    if (PicCount < 0) {
      PicCount = 4;
    }
    if (PicCount > 4) {
      PicCount = 0;
    }
    switch (PicCount)
    {
      case 0:
        ChangePics('1');
        break;
      case 1:
        ChangePics('2');
        break;
      case 2:
        ChangePics('3');
        break;
      case 3:
        ChangePics('4');
        break;
      case 4:
        ChangePics('5');
        break; 
    }
}

function getsrc(var1){
    return document.getElementById(var1).getAttribute('src');
}

function changetitle(var1){
   document.getElementById('thetitle').innerHTML = var1;
}
function changetitle2(var1){
   document.getElementById('thetitle2').innerHTML = var1;
}
function gettitle3(var1)
{
    document.write(document.getElementById(var1).innerHTML);
}
function gettitle2() {
  var3 = document.getElementById('thetitle').innerHTML;
  var4 = var3.length;
  return var4;     
}

function gettitle() {
  return document.getElementById('thetitle').innerHTML;
}

function changepic(var1) {
  document.getElementById('setpic').setAttribute('src', var1);
}

function changepic2(var1) {
  document.getElementById('setpic2').setAttribute('src', var1);  
}

function changepic3(var1) {
  document.getElementById('setpic3').setAttribute('src', var1);
}

function changepic5(var1) {
  document.getElementById('picture1').setAttribute('src', var1);
}

function changepic6(var1) {
  document.getElementById('picture2').setAttribute('src', var1);
}

function changepic7(var1) {
  document.getElementById('picture3').setAttribute('src', var1);
}

function changepic8(var1) {
  document.getElementById('picture4').setAttribute('src', var1);
}

function changepic9(var1) {
  document.getElementById('picture5').setAttribute('src', var1);
}

function changesize(var1, var2, vartitle) {
  document.getElementById(vartitle).width = var1; 
  document.getElementById(vartitle).height = var2;
}

function checktitle(var1, var2) {
  var isWhat = var1.search(var2);
  if (isWhat != '-1') {
    document.write(isWhat);
  }
}

function checktitle2(var1) {
  var str ="Gaara";
  var var2 = str.match(var1);
  document.write("result 1 is "+var1+"<br>");
  document.write("Result 2 is "+var2+"<br>");  
}				
					
function showcomment(var1) {
  document.getElementById('artcomment').setAttribute('visibility',var1);    
}

function toggle_visibility(id) {
  var e = document.getElementById(id);
  if(e.style.display == 'block')
    e.style.display = 'none';
  else
    e.style.display = 'block';
}
    
    
