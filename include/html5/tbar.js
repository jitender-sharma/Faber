(function (lib, img, cjs) {

var p; // shortcut to reference prototypes

// stage content:
(lib.tbarhome = function(mode,startPosition,loop) {
if (loop == null) { loop = false; }	this.initialize(mode,startPosition,loop,{},true);

	// Layer 5
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["rgba(0,131,61,0)","#00833D"],[0,1],0,49.5,0,-49.3).s().p("EBOIAHvMicPAAAIAAvdMCcPAAAIAAPd").cp();
	this.shape.setTransform(180,49.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape}]}).wait(127));

	// Layer 4
	this.instance = new lib.Tween1("synched",0);
	this.instance.setTransform(346.5,50);
	this.instance.alpha = 0.16;

	this.timeline.addTween(cjs.Tween.get(this.instance).to({x:426.5,alpha:0.48},126,cjs.Ease.get(1)).wait(1));

	// Layer 1
	this.instance_1 = new lib.Symbol1();
	this.instance_1.setTransform(680,49.5);
	this.instance_1.alpha = 0.16;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({x:847,alpha:0.801},126,cjs.Ease.get(1)).wait(1));

	// Layer 3
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#00833D").s().p("EBOIAHvMicPAAAIAAvdMCcPAAAIAAPd").cp();
	this.shape_1.setTransform(180,49.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1}]}).wait(127));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-319.9,0,1000,99.5);


// symbols:
(lib.grid = function() {
	this.initialize(img.grid);
}).prototype = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,667,99);


(lib.grid2 = function() {
	this.initialize(img.grid2);
}).prototype = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,667,99);


(lib.Tween1 = function() {
	this.initialize();

	// Layer 1
	this.instance = new lib.grid2();
	this.instance.setTransform(-333.4,-49.4);

	this.addChild(this.instance);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-333.4,-49.4,667,99);


(lib.Symbol1 = function() {
	this.initialize();

	// Layer 1
	this.instance_1 = new lib.grid();
	this.instance_1.setTransform(-666.9,-49.4);

	this.addChild(this.instance_1);
}).prototype = p = new cjs.Container();
p.nominalBounds = new cjs.Rectangle(-666.9,-49.4,667,99);

})(lib = lib||{}, images = images||{}, createjs = createjs||{});
var lib, images, createjs;