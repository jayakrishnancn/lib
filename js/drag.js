var box = $('#whatToDrag');

box.offset({left: 100, top: 75});

var drag  = { x: 0, y: 0, state: false };
var delta = { x: 0, y: 0 };

box.mousedown(function(e) {
  if(!drag.state) {
    this.style.backgroundColor = '#f00';    
    drag.x = e.pageX;
    drag.y = e.pageY;
    drag.state = true;
  }
  return false;
});


box.mousemove(function(e) {
  if(drag.state) {
      this.style.backgroundColor = '#f0f';
      
      delta.x = e.pageX - drag.x;
      delta.y = e.pageY - drag.y;    
      
      $('#log').text( e.pageX + ' ' + e.pageY + ' ' +
                      delta.x + ' ' + delta.y );

      var cur_offset = $(this).offset();
      
      $(this).offset({left: (cur_offset.left + delta.x),
                      top:  (cur_offset.top  + delta.y)});

      drag.x = e.pageX;
      drag.y = e.pageY;
  }
});

box.mouseup(function() {
  this.style.backgroundColor = '#808';    
  drag.state = false;
});

box.mouseout(function() {
  box.mouseup();
});

