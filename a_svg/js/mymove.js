
class MyMove extends Buttons{

	constructor(event) {
	    super();
		this.x = event.touches[0].clientX;
		this.y = event.touches[0].clientY;
	}
	
	Touch2() {
		this.myMoveTouch2(this.x,this.y);
	}
	
	Touch3() {
		this.myMoveTouch3(this.x,this.y);
	}
	
	Touch4() {
		this.myMoveTouch4(this.x,this.y);
	}
	
	Touch5() {
		this.myMoveTouch5(this.x,this.y);
	}
	
	Touch6() {
		this.myMoveTouch6(this.x,this.y);
	}
	
	Touch7() {
		this.myMoveTouch7(this.x,this.y);
	}
	
	TouchReg0() {
	    this.myMoveReg0(this.x,this.y);
	}
	
}