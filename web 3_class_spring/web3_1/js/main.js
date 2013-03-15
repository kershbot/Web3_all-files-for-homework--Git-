		//Code adapted from Rachel Law January 31 2013 //
		//javascript rendered through browser; script tag defines script to be used i.e javascript, php etc//
		
		//javascript has ONE variable aka. var//
		
		var foo = 'name'; //foo-variable is text//
		foo = 3;  //foo-variable text is now a number//
		foo = [4,5,6]; //foo variable number is now an array//
		
		//what is an array and how is it structured//
		//an array is a container i.e index//
		//a way of accessing information; everything starts at 0//
		//therefore foo-array: 4 = position 0; 5 = position 1; 6 = position 2//
		//call content out using position//
		
		/*
foo[0]=4;
		foo[1]=5;
		foo[2]=6;
*/
		
		function inIt(){		// loading the window 
			alert("warning: shes looking for love");	// alrert when window is loaded 
		}
		
		function run(){
			console.log("document is ready");
			
			for(var i = 0; i< foo.length; i++){
				var data = "var i=" + i;
				console.log(data);
				var more = "var foo["+i+"]"+"="+foo[i];
				console.log(more);	
				
				//write on to our document//
				//allows us to access info from the array and print on to page//
				document.write(foo[i]);
				
				}
		}
		
		function hide(_id){		//_id element passed through//
			console.log("id"); //debug check//
			if(document.getElementById(_id).style.display !='none'){
				document.getElementById(_id).style.display='none';
			}else{
				document.getElementById(_id).style.display='block';
				}
				
			//takes element from html _id, changes the style display to none aka disappear//	
			//TYPE EVERY FUCKING THING =_=;;;//
		}
		
		window.onload = inIt(); 
		document.onload= run();
		
		// JAVASCRIPT COMMENT YAY //
		// run function inIt() when window loads //
		// run function run() when document loads //
		
		//if <script> functions() is at the bottom, then the script will load after the html page is loaded but the functions can be defined from the top. so document flows from top to bottom//
		