function vibration(){
       navigator.vibrate = navigator.vibrate
               || navigator.webkitVibrate
               || navigator.mozVibrate
               || navigator.msVibrate;

       if (navigator.vibrate) {
           // 支持
           console.log("支持设备震动！");
       }
     $(".shock").click(function(){
         alert("1111");
         navigator.vibrate([500, 300, 400,300]);
     });
   }