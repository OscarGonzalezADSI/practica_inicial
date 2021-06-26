
class Buttons {

    dom(){
    	this.puntero2 = document.getElementById("puntero2");
    	this.puntero3 = document.getElementById("puntero3");
    	this.puntero4 = document.getElementById("puntero4");
    	this.puntero5 = document.getElementById("puntero5");
    	this.puntero6 = document.getElementById("puntero6");
    	this.puntero7 = document.getElementById("puntero7");
    	
    	this.puntero22 = document.getElementById("puntero22");
    	this.puntero33 = document.getElementById("puntero33");
    	this.puntero44 = document.getElementById("puntero44");
    	this.puntero55 = document.getElementById("puntero55");
    	this.puntero66 = document.getElementById("puntero66");
    	this.puntero77 = document.getElementById("puntero77");
    	
    	this.puntero222 = document.getElementById("puntero222");
    	this.puntero333 = document.getElementById("puntero333");
    	this.puntero444 = document.getElementById("puntero444");
    	this.puntero555 = document.getElementById("puntero555");
    	this.puntero666 = document.getElementById("puntero666");
    	this.puntero777 = document.getElementById("puntero777");
    	
    	this.str2 = "";
    	this.str3 = "";
    	this.str4 = "";
    	this.str5 = "";
    	this.str6 = "";
    	this.str7 = "";
    	
    	this.str22 = "";
    	this.str33 = "";
    	this.str44 = "";
    	this.str55 = "";
    	this.str66 = "";
    	this.str77 = "";
    	
    	this.str222 = "";
    	this.str333 = "";
    	this.str444 = "";
    	this.str555 = "";
    	this.str666 = "";
    	this.str777 = "";
    }
    
    offSetPath(i) {
    	this.str2 = "offset-path: path('M"+i+" "+400+"');";
    	this.str3 = "offset-path: path('M"+(i+110)+" "+400+"');";
    	this.str4 = "offset-path: path('M"+(i+220)+" "+400+"');";
    	this.str5 = "offset-path: path('M"+(i)+" "+510+"');";
    	this.str6 = "offset-path: path('M"+(i+110)+" "+510+"');";
    	this.str7 = "offset-path: path('M"+(i+220)+" "+510+"');";
    }
    
    displayBlock() {
    	this.str2 += "width:70px; height:70px; ";
    	this.str3 += "width:70px; height:70px; ";
    	this.str4 += "width:70px; height:70px; ";
    	this.str5 += "width:70px; height:70px; ";
    	this.str6 += "width:70px; height:70px; ";
    	this.str7 += "width:70px; height:70px; ";
    	
    	this.str2 += "background-color:#ffffff; ";
    	this.str3 += "background-color:#ffffff; ";
    	this.str4 += "background-color:#ffffff; ";
    	this.str5 += "background-color:#ffffff; ";
    	this.str6 += "background-color:#ffffff; ";
    	this.str7 += "background-color:#ffffff; ";
        
    	this.str22 += "display:block; ";
    	this.str33 += "display:block; ";
    	this.str44 += "display:block; ";
    	this.str55 += "display:block; ";
    	this.str66 += "display:block; ";
    	this.str77 += "display:block; ";
    	
    	this.str222 += "display:block; ";
    	this.str333 += "display:block; ";
    	this.str444 += "display:block; ";
    	this.str555 += "display:block; ";
    	this.str666 += "display:block; ";
    	this.str777 += "display:block; ";
    }
    
    displayBlockImages() {
    	this.str2 += "background-image: url(./images/html5.svg);";
    	this.str3 += "background-image: url(./images/css.svg);";
    	this.str4 += "background-image: url(./images/javascript.svg);";
    	this.str5 += "background-image: url(./images/php.svg);";
    	this.str6 += "background-image: url(./images/mysql.svg);";
    	this.str7 += "background-image: url(./images/svg.svg);";
    	
    	this.str2 += "background-size: 100% 100%;";
    	this.str3 += "background-size: 100% 100%;";
    	this.str4 += "background-size: 100% 100%;";
    	this.str5 += "background-size: 100% 100%;";
    	this.str6 += "background-size: 100% 100%;";
    	this.str7 += "background-size: 100% 100%;";
    }
    
    setAtributeStyle() {
    	this.puntero2.setAttribute("style", this.str2);
    	this.puntero3.setAttribute("style", this.str3);
    	this.puntero4.setAttribute("style", this.str4);
    	this.puntero5.setAttribute("style", this.str5);
    	this.puntero6.setAttribute("style", this.str6);
    	this.puntero7.setAttribute("style", this.str7);
    	
    	this.puntero22.setAttribute("style", this.str22);
    	this.puntero33.setAttribute("style", this.str33);
    	this.puntero44.setAttribute("style", this.str44);
    	this.puntero55.setAttribute("style", this.str55);
    	this.puntero66.setAttribute("style", this.str66);
    	this.puntero77.setAttribute("style", this.str77);
    	
    	this.puntero222.setAttribute("style", this.str222);
    	this.puntero333.setAttribute("style", this.str333);
    	this.puntero444.setAttribute("style", this.str444);
    	this.puntero555.setAttribute("style", this.str555);
    	this.puntero666.setAttribute("style", this.str666);
    	this.puntero777.setAttribute("style", this.str777);
    }
    
    reflexMove(){
    	this.str222 = this.str22 = this.str2;
    	this.str333 = this.str33 = this.str3;
    	this.str444 = this.str44 = this.str4;
    	this.str555 = this.str55 = this.str5;
    	this.str666 = this.str66 = this.str6;
    	this.str777 = this.str77 = this.str7;
    }
    
	mySlide(i) {
		this.dom();
		this.offSetPath(i);
		if(i==70){
			this.displayBlock();
		}
		this.setAtributeStyle();
	}
	
	mySlide2(i) {
		this.dom();
		this.offSetPath(i);
		if(i==70){
			this.displayBlock();
		    this.displayBlockImages();
		}
		this.setAtributeStyle();
	}
	
	myMoveTouch2(x,y){
		this.dom();
		
		if(x<100 && x>50 && y>350 && y<450){
			this.str2 = "offset-path: path('M"+x+" "+(y)+"');";
			this.str3 = "offset-path: path('M"+(x+110)+" "+400+"');";
			this.str4 = "offset-path: path('M"+(x+220)+" "+400+"');";
			this.str5 = "offset-path: path('M"+(x)+" "+510+"');";
			this.str6 = "offset-path: path('M"+(x+110)+" "+510+"');";
			this.str7 = "offset-path: path('M"+(x+220)+" "+510+"');";
		}else{
			let x = 70;
			this.str2 = "offset-path: path('M"+x+" "+400+"');";
			this.str3 = "offset-path: path('M"+(x+110)+" "+400+"');";
			this.str4 = "offset-path: path('M"+(x+220)+" "+400+"');";
			this.str5 = "offset-path: path('M"+(x)+" "+510+"');";
			this.str6 = "offset-path: path('M"+(x+110)+" "+510+"');";
			this.str7 = "offset-path: path('M"+(x+220)+" "+510+"');";
		}
		
		this.reflexMove();
		this.displayBlock();
		this.displayBlockImages();
		this.setAtributeStyle();
	}
	
	myMoveTouch3(x,y){
		this.dom();
			
		if(x<210 && x>130 && y>350 && y<450){
			this.str2 = "offset-path: path('M"+(x-110)+" "+400+"');";
			this.str3 = "offset-path: path('M"+(x)+" "+y+"');";
			this.str4 = "offset-path: path('M"+(x+110)+" "+400+"');";
			this.str5 = "offset-path: path('M"+(x-110)+" "+510+"');";
			this.str6 = "offset-path: path('M"+(x)+" "+510+"');";
			this.str7 = "offset-path: path('M"+(x+110)+" "+510+"');";
		}else{
			let x = 180;
			this.str2 = "offset-path: path('M"+(x-110)+" "+400+"');";
			this.str3 = "offset-path: path('M"+(x)+" "+400+"');";
			this.str4 = "offset-path: path('M"+(x+110)+" "+400+"');";
			this.str5 = "offset-path: path('M"+(x-110)+" "+510+"');";
			this.str6 = "offset-path: path('M"+(x)+" "+510+"');";
			this.str7 = "offset-path: path('M"+(x+110)+" "+510+"');";
		}
			
		this.reflexMove();
		this.displayBlock();
		this.displayBlockImages();
		this.setAtributeStyle();
	}
	
	myMoveTouch4(x,y){
		this.dom();
			
		if(x<320 && x>260 && y>370 && y<430){
			this.str2 = "offset-path: path('M"+(x-220)+" "+400+"');";
			this.str3 = "offset-path: path('M"+(x-110)+" "+400+"');";
			this.str4 = "offset-path: path('M"+(x)+" "+y+"');";
			this.str5 = "offset-path: path('M"+(x-220)+" "+510+"');";
			this.str6 = "offset-path: path('M"+(x-110)+" "+510+"');";
			this.str7 = "offset-path: path('M"+(x)+" "+510+"');";
		}else{
			let x = 290;
			this.str2 = "offset-path: path('M"+(x-220)+" "+400+"');";
			this.str3 = "offset-path: path('M"+(x-110)+" "+400+"');";
			this.str4 = "offset-path: path('M"+(x)+" "+400+"');";
			this.str5 = "offset-path: path('M"+(x-220)+" "+510+"');";
			this.str6 = "offset-path: path('M"+(x-110)+" "+510+"');";
			this.str7 = "offset-path: path('M"+(x)+" "+510+"');";
		}
			
		this.reflexMove();
		this.displayBlock();
		this.displayBlockImages();
		this.setAtributeStyle();
	}
	
	myMoveTouch5(x,y){
		this.dom();
			
		if(x<100 && x>50 && y>480 && y<540){
			this.str2 = "offset-path: path('M"+x+" "+(400)+"');";
			this.str3 = "offset-path: path('M"+(x+110)+" "+400+"');";
			this.str4 = "offset-path: path('M"+(x+220)+" "+400+"');";
			this.str5 = "offset-path: path('M"+(x)+" "+y+"');";
			this.str6 = "offset-path: path('M"+(x+110)+" "+510+"');";
			this.str7 = "offset-path: path('M"+(x+220)+" "+510+"');";
		}else{
			let x = 70;
			this.str2 = "offset-path: path('M"+x+" "+400+"');";
			this.str3 = "offset-path: path('M"+(x+110)+" "+400+"');";
			this.str4 = "offset-path: path('M"+(x+220)+" "+400+"');";
			this.str5 = "offset-path: path('M"+(x)+" "+510+"');";
			this.str6 = "offset-path: path('M"+(x+110)+" "+510+"');";
			this.str7 = "offset-path: path('M"+(x+220)+" "+510+"');";
		}
			
		this.reflexMove();
		this.displayBlock();
		this.displayBlockImages();
		this.setAtributeStyle();
	}
	
	myMoveTouch6(x,y){
		this.dom();
		
		if(x<210 && x>130 && y>480 && y<540){
			this.str2 = "offset-path: path('M"+(x-110)+" "+400+"');";
			this.str3 = "offset-path: path('M"+(x)+" "+400+"');";
			this.str4 = "offset-path: path('M"+(x+110)+" "+400+"');";
			this.str5 = "offset-path: path('M"+(x-110)+" "+510+"');";
			this.str6 = "offset-path: path('M"+(x)+" "+y+"');";
			this.str7 = "offset-path: path('M"+(x+110)+" "+510+"');";
		}else{
			let x = 180;
			this.str2 = "offset-path: path('M"+(x-110)+" "+400+"');";
			this.str3 = "offset-path: path('M"+(x)+" "+400+"');";
			this.str4 = "offset-path: path('M"+(x+110)+" "+400+"');";
			this.str5 = "offset-path: path('M"+(x-110)+" "+510+"');";
			this.str6 = "offset-path: path('M"+(x)+" "+510+"');";
			this.str7 = "offset-path: path('M"+(x+110)+" "+510+"');";
		}
		
		this.reflexMove();
		this.displayBlock();
		this.displayBlockImages();
		this.setAtributeStyle();
	}
	
	myMoveTouch7(x,y){
		this.dom();
		
		if(x<320 && x>260 && y>480 && y<540){
			this.str2 = "offset-path: path('M"+(x-220)+" "+400+"');";
			this.str3 = "offset-path: path('M"+(x-110)+" "+400+"');";
			this.str4 = "offset-path: path('M"+(x)+" "+400+"');";
			this.str5 = "offset-path: path('M"+(x-220)+" "+510+"');";
			this.str6 = "offset-path: path('M"+(x-110)+" "+510+"');";
			this.str7 = "offset-path: path('M"+(x)+" "+y+"');";
		}else{
			let x = 290;
			this.str2 = "offset-path: path('M"+(x-220)+" "+400+"');";
			this.str3 = "offset-path: path('M"+(x-110)+" "+400+"');";
			this.str4 = "offset-path: path('M"+(x)+" "+400+"');";
			this.str5 = "offset-path: path('M"+(x-220)+" "+510+"');";
			this.str6 = "offset-path: path('M"+(x-110)+" "+510+"');";
			this.str7 = "offset-path: path('M"+(x)+" "+510+"');";
		}
		
		this.reflexMove();
		this.displayBlock();
		this.displayBlockImages();
		this.setAtributeStyle();
	}
		
	tempoAddEvents() {
		var my = this;
		setTimeout(function(){
		my.mySlide(350);
		},1000,"JavaScript");
		setTimeout(function(){
		my.mySlide(325);
		},1100,"JavaScript");
		setTimeout(function(){
		my.mySlide(300);
		},1200,"JavaScript");
		setTimeout(function(){
		my.mySlide(275);
		},1300,"JavaScript");
		setTimeout(function(){
		my.mySlide(250);
		},1400,"JavaScript");
		setTimeout(function(){
		my.mySlide(225);
		},1500,"JavaScript");
		setTimeout(function(){
		my.mySlide(200);
		},1600,"JavaScript");
		setTimeout(function(){
		my.mySlide(175);
		},1700,"JavaScript");
		setTimeout(function(){
		my.mySlide(150);
		},1800,"JavaScript");
		setTimeout(function(){
		my.mySlide(125);
		},1900,"JavaScript");
		setTimeout(function(){
		my.mySlide(100);
		},2000,"JavaScript");
		setTimeout(function(){
		my.mySlide(70);
		},2100,"JavaScript");
		setTimeout(function(){
		my.mySlide2(70);
		},2300,"JavaScript");
	}
}