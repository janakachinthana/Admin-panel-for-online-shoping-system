                                                                                                        
function myFunctionj() {
  alert(" Can access by Admin Officers only...! ");
}
function  jFunction() {
	
			document.getElementById("code").innerHTML = document.getElementById("code1").value;
			document.getElementById("name").innerHTML = document.getElementById("name1").value;
			document.getElementById("discrip").innerHTML = document.getElementById("discrip1").value;
			
			var v = document.getElementById("item");
			var w = document.getElementById("shiping");
			var z = document.getElementById("total");
			var x = document.getElementById("price1").value;
			var y = document.getElementById("shipPrice1").value;
			var m= +x + +y;
			
			z.innerHTML=m;
			w.innerHTML=y;
			v.innerHTML=x;
}

function radioFunction1() {
			document.getElementById("ra").innerHTML = document.getElementById("ra1").value;
		}
		
function radioFunction2() {
				document.getElementById("ra").innerHTML = document.getElementById("b2").value;
		}
		