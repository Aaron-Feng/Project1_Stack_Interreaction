var createStack=function(){
	var stack=new Object();
	stack.size=0;
	stack.top=null;
	stack.push = function(number){
		var newNode=new createNode(number);
		if(stack.size==0){
			stack.top=newNode;
		}
		else{
			newNode.next=stack.top;
			stack.top=newNode;
		}
		stack.size++;
	};
	stack.pop=function(){
		var result=stack.top.element;
		stack.top=stack.top.next;
		stack.size--;
		return result;
	};
	stack.isEmpty=function(){
		if(stack.size==0)
			return true;
		else
			return false;
	};
	stack.peek=function(){
		var result=stack.top.element;
		return result;
	};

	stack.toString=function(){
		var result="";
		var current=stack.top;
		while(current!=null){
			result+=current.element+"\n";
			current=current.next;
		}
		return result;
	}
	return stack;
};

var createNode=function(number){
	var node=new Object();
	node.next=null;
	node.element=number;
	return node;
};
var stack=new createStack();

$('#stackPush').click(function(){
	var input=$('#inputNumber').val();
	if(input!=''){
		stack.push($('#inputNumber').val());
		$('#showStack').val(stack.toString());
		$('#showStep').val($('#infoPush').html()+ input +"\n" + $('#showStep').val());
	}
	else{
		$('#showStep').val($('#infoPushError').html()+"\n" + $('#showStep').val());
	}
});

$('#stackPop').click(function(){
	if(stack.isEmpty()){
		$('#showStep').val($('#infoPopError').html()+"\n" + $('#showStep').val());
	}
	else{
		var result=stack.pop();
		$('#showStep').val($('#infoPop').html()+result+ "\n" + $('#showStep').val());
		$('#showStack').val(stack.toString());
	}
	
});

$('#stackPeek').click(function(){
	if(stack.isEmpty()){
		$('#showStep').val($('#infoPeekError').html() + "\n" + $('#showStep').val());
	}
	else{
		var result=stack.peek();
		$('#showStep').val($('#infoPeek').html()+result+ "\n" + $('#showStep').val());
	}
});

$('#stackSize').click(function(){
	var result=stack.size;
	$('#showStep').val($('#infoSize').html()+result+ "\n" + $('#showStep').val());
});

$('#stackEmpty').click(function(){
	if(stack.isEmpty())
		$('#showStep').val($('#infoEmpty').html()+" \n" + $('#showStep').val());
	else
		$('#showStep').val($('#infoNotEmpty').html()+" \n" + $('#showStep').val());
});

$('#stackPopMenu').click(function(){
	$('#stackPop').click();
	return false;
});

$('#stackPeekMenu').click(function(){
	$('#stackPeek').click();
	return false;
});

$('#stackSizeMenu').click(function(){
	$('#stackSize').click();
	return false;
});

$('#stackIsEmptyMenu').click(function(){
	$('#stackEmpty').click();
	return false;
});

$('#clearLog').click(function(){	
	$('#showStep').val(" ");
	return false;
});

$('#clearStack').click(function(){
	stack=new createStack();
	$('#showStack').val(stack.toString());
	$('#showStep').val($('#infoClear').html()+" \n" + $('#showStep').val());
});


$(document).keydown(function(e){ 
	var keyCode=e.keyCode || e.which || e.charCode;
	var controlKey=e.ctrlKey || e.metakey
	switch(keyCode){
		case 85: 
			if(e.altKey){
			$('#stackPush').click();
			}
			e.preventDefault;
			return false;
			
		case 79:
			if(e.altKey){
			$('#stackPop').click();
			}
			e.preventDefault;
			return false;
			
		case 69:
			if(e.altKey){
			$('#stackPeek').click();
			}
			e.preventDefault;
			return false;
			
		case 67:
			if(e.altKey){
				if(controlKey){
					$('#clearStack').click();
				}
				else
			$('#clearLog').click();
			}
			e.preventDefault;
			return false;
			
		case 83:
			if(e.altKey){
			$('#stackSize').click();
			}
			e.preventDefault;
			return false;
			
		case 77:
			if(e.altKey){
			$('#stackEmpty').click();
			}
			e.preventDefault;
			return false;
	}
});