function first(){
				var x=document.getElementsByClassName("faqAnswer");
				n=x.length;
				for (i=0; i<n; i++){
					hide(x[i]);
				}
			}
			
function hide(element){
				element.style.display='none';
			}
			
function special(id){
				if(document.getElementById(id).style.display=="none"){
					document.getElementById(id).style.display="block";
				}
				else
					document.getElementById(id).style.display="none";
			}
			
function color(id){
	document.getElementById(id).style.backgroundColor="pink";
}

function decolor(id){
	document.getElementById(id).style.backgroundColor="purple";
}