
/*	$ Object Constructor
========================*/

function $(id) {

	// About object is returned if there is no 'id' parameter
	var about = {
		Version: 1.0,
		Author: "Jayakrishnan Nampoothiri C.N",
		Created: "15/06/2015:00:09",
		Updated: "17/06/2015:20:09"
	};

	if (id) {

		// Avoid clobbering the window scope: 
		// return a new _ object if we're in the wrong scope
		if (window === this) {
			return new $(id);

		}


	if(typeof id==='object'){
		return this;
	}
	else{	// We're in the correct object scop:
		// Init our element object and return the object
		var result=document.querySelectorAll(id);
		if(result.length>0)
			for (var i = 0; i < result.length; i++)
					this[i] = result[i];
		this.length = result.length;
		return this;
		}
	} else {
		// No 'id' paramter was given, return the 'about' object
		return about;
	}
}

/*	_ Prototype Functions
============================*/

$.prototype = {
	ready:	function (fn) {
				if (document.readyState != 'loading'){
				fn();
				} else {
				document.addEventListener('DOMContentLoaded', fn);
				}
		},
	hide:	function () {
		for (var i = 0; i < this.length; i++)
				this[i].style.display = 'none';
				return this;
			},
	show:	function () {
		for (var i = 0; i < this.length; i++)
				this[i].style.display = 'inherit';
			return this;
			},
	val:	function () {
		if(typeof arguments[0]==='undefined')
			return this[0].value;
		},
	val:	function (newval) {
		for (var i = 0; i < this.length; i++)
				this[i].value = newval;
				return this;
		},
	append:	function (val) {
		for (var i = 0; i < this.length; i++)
				this[i].innerHTML +=val;
				return this;
			},
	toggle: function () {
		for (var i = 0; i < this.length; i++)
				if (this[i].style.display == 'none' ||this[i].style.display == '' ) {
					this[i].style.display = 'inherit';
				} else {
					this[i].style.display = 'none';
				}
				return this;
			},
	addClass:	 function(val) {
		for (var i = 0; i < this.length; i++)
				{
				if (this[i].classList)
						this[i].classList.add(val);
				else
				this[i].className +=" "+val;
				}
				return this;
			},

	removeClass:	 function(val) {
		for (var i = 0; i < this.length; i++)
				this[i].classList.remove(val);
				return this;
			},

	toggleclass:	 function(val1,val2) {
		for (var i = 0; i < this.length; i++){
				if(this[i].className==val1)this[i].className=val2;
				else this[i].className=val1;
			}
				return this;
			}, 
	remove:	 function () { 
		for (var i = 0; i < this.length; i++)
 		this[i].parentNode.removeChild(this[i]);
 		   return this;
			},
	focus: function () {
			this[0].focus();
				return this;
			},
	click: function (fun) {
		for (var i = 0; i < this.length; i++)
			this[i].onclick=(fun);
				return this;
			},
	keypress: function (fun) {
		for (var i = 0; i < this.length; i++)
			this[i].onkeypress=(fun);
				return this;
			},
	keydown: function (fun) {
		for (var i = 0; i < this.length; i++)
			this[i].onkeydown=(fun);
				return this;
			},
	before: function (val) {
		for (var i = 0; i < this.length; i++)
			this[i].insertAdjacentHTML('beforebegin', val);
				return this;
			},
	onfocus: function (fun) {
		for (var i = 0; i < this.length; i++)
			this[i].onfocus=(fun);
				return this;
			},
	hasclass: function (val) {
			return (this[0].classList.contains(val)==true)?true:false;
			}


};