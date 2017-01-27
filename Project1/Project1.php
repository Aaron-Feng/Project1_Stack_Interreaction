<?php
    session_start();
	$url="../login.html";
        if(isset($_POST['pass']) && $_POST['pass']=='cs345project1'){
            $_SESSION['pwd']="checked";            
        } 
		
		if(!isset($_SESSION['pwd'])){
		echo " <script language = 'javascript' type='text/javascript' > ";  
		echo " window.location.href = '$url' ";  
		echo " </script> ";  
    }
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Project1</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/introjs.css" />
    <link rel="stylesheet" href="css/Project1.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

  </head>
  <body>
    <!--Menu Bar-->
  <nav class="collapse navbar-collapse">
  <div class="container">
  <ul class="nav navbar-nav"> 
	<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="ture" aria-expanded="false" data-localize="menu.edit">Edit <span class="caret"></span></a>
	<ul class="dropdown-menu">
            <li><a href="#" id="stackPopMenu">Pop <span class="pull-right">Alt+O</span></a></li>
			<li><a href="#" id="stackPeekMenu">Peek <span class="pull-right">Alt+E</span></a></li>
			<li><a href="#" id="stackSizeMenu">Size <span class="pull-right">Alt+S</span></a></li>
			<li><a href="#" id="stackIsEmptyMenu">IsEmpty <span class="pull-right">Alt+M</span></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" id="clearStack">Clear Stack <span class="pull-right">Ctrl+Alt+C</span></a></li>
            <li><a href="#" id="clearLog">Clear Log <span class="pull-right">Alt+C</span></a></li>
          </ul>
	</li>
	<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="ture" aria-expanded="false" data-localize="menu.setting">Setting <span class="caret"></span></a>
	<ul class="dropdown-menu">
            <li class="dropdown-submenu"><a tabindex="-1" href="#" >Language</a>
			<ul class="dropdown-menu">
            <li><a href="#" id="langEn">English</a></li>
            <li><a href="#" id="langCn">Chinese</a></li>
            <li><a href="#" id="langSp">Spanish</a></li>
          </ul>
			</li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-submenu"><a href="#">FontFace</a>
			<ul class="dropdown-menu">
            <li><a href="#" id="fontAri">Arial</a></li>
            <li><a href="#" id="fontTime">TimesNewRoman</a></li>
            <li><a href="#" id="fontCali">Calibri</a></li>
          </ul>
			</li>
			<li class="dropdown-submenu"><a href="#">FontSize</a>
			<ul class="dropdown-menu">
            <li><a href="#" id="fontSizeI">+2</a></li>
            <li><a href="#" id="fontSizeD">-2</a></li>
          </ul>
			</li>
			<li class="dropdown-submenu"><a href="#">FontStyle</a>
			<ul class="dropdown-menu">
            <li><a href="#" onclick="fontStyleBold.click()"><input type="checkbox" id="fontStyleBold">Bold</a></li>
            <li><a href="#" onclick="fontStyleUnderline.click()"><input type="checkbox" id="fontStyleUnderline">Underline</a></li>
            <li><a href="#" onclick="fontStyleItalic.click()"><input type="checkbox" id="fontStyleItalic">Italic</a></li>
          </ul>
			</li>
          </ul>
	</li>
	<li><a href="#" onclick="javascript:introJs().start();" data-localize="menu.tutorial">Tutorial</a></li>
	<li><a href="#" data-toggle="modal" data-target="#contact" role="button" data-localize="menu.contact">Contact</a></li>
  </ul>
    </div>
	</nav>
	
	<!--Modal-->

	<div id="contact" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" aria-label="Close the window" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact</h4>
      </div>
      <div class="modal-body">
	  <div class="pull-left">	  
	  <iframe width="420" height="315"
src="https://www.youtube.com/embed/Nob6kcLod3w">
</iframe>
	  </div>
	  <br/>
	  <br/>
	  <br/>
	  <p>Aaron Feng</p>
	  <p>zfeng@bsu.edu</p>
	  <p>(765) 702-5340</p>
      <div style="clear:both;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Page Content-->
	

  <div class="container">
  <h1 style="text-align:center" data-step="1" data-intro="This project is to show the demo that how stack works. Stack follows 'first in last out' rule.">Stack Demo</h1>
  	<br/>
  <div class="row"> 
	<div class="col-xs-3">
	<ul class="nav text-center actionBar">
		<li><label class="control-label" for="inputNumber" style="font-size:20px;" data-localize="addLabel">Add to Stack<span class="sr-only">This is a stack demo and you can type a number here</span></label>
		</li>
		<li>
		<input type='number' id="inputNumber" class="form-control" placeholder="input a number" data-step="2" data-intro="Type the input number here:">
		</li>
		<li> 
		<button type="button" class="btn btn-md btn-default btn-block" id="stackPush" data-localize="action.push" data-step="3" data-intro="Click this button to put the number into the stack">Push</button>
		</li>
		<li> 
		<button type="button" class="btn btn-md btn-default btn-block" id="stackPop" data-localize="action.pop" data-step="4" data-intro="Click this button to take the number off from this stack">Pop</button>
		</li>
		<li> 
		<button type="button" class="btn btn-md btn-default btn-block" id="stackPeek" data-localize="action.peek" data-step="5" data-intro="Click this button to see the number that on the top of this stack">Peek</button>
		</li>
		<li> 
		<button type="button" class="btn btn-md btn-default btn-block" id="stackSize" data-localize="action.size" data-step="6" data-intro="Click this button to check how many numbers in this stack">Size</button>
		</li>
		<li> 
		<button type="button" class="btn btn-md btn-default btn-block" id="stackEmpty" data-localize="action.isEmpty" data-step="7" data-intro="Click this button to check if the stack is empty">isEmpty</button>
		</li>
	</ul>
  </div>
	<div class="col-xs-9">
		<label class="control-label sr-only" for="showStack" style="font-size:20px;">Current Stack</label>
		<textarea class="form-control" style="height:200px;" id="showStack" readonly data-step="8" data-intro="This area will show how the stack looks like."></textarea>
		<label class="control-label sr-only" for="showStep" style="font-size:20px;">Steps</label>
		<textarea class="form-control" style="height:200px;" id="showStep" readonly data-step="9" data-intro="This area will show your operation results."></textarea>

	</div>
  </div>
  </div>
	<div class="hidden" id="infoPush" data-localize="info.push">Pushed into the stack:</div>
	<div class="hidden" id="infoPushError" data-localize="info.pushError">Can't push the empty input.</div>
	<div class="hidden" id="infoPop" data-localize="info.pop">Popped from the stack:</div>
	<div class="hidden" id="infoPopError" data-localize="info.popError">Can't pop from the empty stack.</div>
	<div class="hidden" id="infoPeek" data-localize="info.peek">Peeked the stack:</div>
	<div class="hidden" id="infoPeekError" data-localize="info.peekError">Can't peek from the empty stack.</div>
	<div class="hidden" id="infoSize" data-localize="info.size">The stack size is:</div>
	<div class="hidden" id="infoEmpty" data-localize="info.isEmpty">The stack is empty.</div>
	<div class="hidden" id="infoNotEmpty" data-localize="info.isNotEmpty">The stack is NOT empty.</div>
	<div class="hidden" id="infoClear" data-localize="info.clear">Cleared stack.</div>
  <script src="js/Project1.js"></script>
  <script src="js/jquery.localize.min.js"></script>
  <script src="js/Project1-lang.js"></script>
  	<script src="js/intro.js"></script>
  </body>
  </html>