(function ($) {
    var minutes = 25;
    var seconds = 0;
    var started = false;
    var counter;
    
    $('#more-js').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js').val());
      if(n >= 0){
        $('#pomodoro-js').val(n + 1);
          minutes = n + 1;
          seconds = 0;
          $('.minutes-js').html(displayTime(minutes));
          $('.seconds-js').html('00');
        }
      }
    });
    $('#less-js').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js').val());
      if(n > 1){
        $('#pomodoro-js').val( n - 1);
          minutes = n - 1;
          seconds = 0;
          $('.minutes-js').html(displayTime(minutes));
          $('.seconds-js').html('00');        
        }
      }
    });
    
    $('#start-js').click(function(){
      if(!started){
        started = true;
        counter=setInterval(timer, 1000); 
      }
    });
   function timer()
      {
        if(seconds == 0){
          seconds = 60;
          minutes--;
        }
        seconds--;
        if (minutes < 0)
        {
          if(seconds == 59){
   playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
          }
           clearInterval(counter);
           //counter ended, do something here
           return;
        }
        var displaySeconds = displayTime(seconds);
        var displayMinutes = displayTime(minutes);
        $('.seconds-js').html(displaySeconds);
        $('.minutes-js').html(displayMinutes);
      }    
    
    $('#stop-js').click(function(){
      started = false;
      clearInterval(counter);
      return;
    });
    
    $('#reset-js').click(function(){
      minutes = parseInt($('#pomodoro-js').val());
      seconds = 0;
      $('.minutes-js').html(displayTime(minutes));
      $('.seconds-js').html('00');
      
      started = false;
      clearInterval(counter);
      return;
    });
    
    function displayTime(t){
      var display = t;
        if(t < 10){
          display = '0' + t.toString();
        }
      return display;
    }
    
    function playSound(filename){   
                  document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="' + filename + '.mp3" type="audio/mpeg" /><source src="' + filename + '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3" /></audio>';
              }
    
  })(jQuery);

  (function ($) {
    var minutes = 25;
    var seconds = 0;
    var started = false;
    var counter;
    
    $('#more-js_2').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_2').val());
      if(n >= 0){
        $('#pomodoro-js_2').val(n + 1);
          minutes = n + 1;
          seconds = 0;
          $('.minutes-js_2').html(displayTime(minutes));
          $('.seconds-js_2').html('00');
        }
      }
    });
    $('#less-js_2').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_2').val());
      if(n > 1){
        $('#pomodoro-js_2').val( n - 1);
          minutes = n - 1;
          seconds = 0;
          $('.minutes-js_2').html(displayTime(minutes));
          $('.seconds-js_2').html('00');        
        }
      }
    });
    
    $('#start-js_2').click(function(){
      if(!started){
        started = true;
        counter=setInterval(timer, 1000); 
      }
    });
   function timer()
      {
        if(seconds == 0){
          seconds = 60;
          minutes--;
        }
        seconds--;
        if (minutes < 0)
        {
          if(seconds == 59){
   playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
          }
           clearInterval(counter);
           //counter ended, do something here
           return;
        }
        var displaySeconds = displayTime(seconds);
        var displayMinutes = displayTime(minutes);
        $('.seconds-js_2').html(displaySeconds);
        $('.minutes-js_2').html(displayMinutes);
      }    
    
    $('#stop-js_2').click(function(){
      started = false;
      clearInterval(counter);
      return;
    });
    
    $('#reset-js_2').click(function(){
      minutes = parseInt($('#pomodoro-js_2').val());
      seconds = 0;
      $('.minutes-js_2').html(displayTime(minutes));
      $('.seconds-js_2').html('00');
      
      started = false;
      clearInterval(counter);
      return;
    });
    
    function displayTime(t){
      var display = t;
        if(t < 10){
          display = '0' + t.toString();
        }
      return display;
    }
    
    function playSound(filename){   
                  document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="' + filename + '.mp3" type="audio/mpeg" /><source src="' + filename + '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3" /></audio>';
              }
    
  })(jQuery);

  (function ($) {
    var minutes = 25;
    var seconds = 0;
    var started = false;
    var counter;
    
    $('#more-js_3').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_3').val());
      if(n >= 0){
        $('#pomodoro-js_3').val(n + 1);
          minutes = n + 1;
          seconds = 0;
          $('.minutes-js_3').html(displayTime(minutes));
          $('.seconds-js_3').html('00');
        }
      }
    });
    $('#less-js_3').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_3').val());
      if(n > 1){
        $('#pomodoro-js_3').val( n - 1);
          minutes = n - 1;
          seconds = 0;
          $('.minutes-js_3').html(displayTime(minutes));
          $('.seconds-js_3').html('00');        
        }
      }
    });
    
    $('#start-js_3').click(function(){
      if(!started){
        started = true;
        counter=setInterval(timer, 1000); 
      }
    });
   function timer()
      {
        if(seconds == 0){
          seconds = 60;
          minutes--;
        }
        seconds--;
        if (minutes < 0)
        {
          if(seconds == 59){
   playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
          }
           clearInterval(counter);
           //counter ended, do something here
           return;
        }
        var displaySeconds = displayTime(seconds);
        var displayMinutes = displayTime(minutes);
        $('.seconds-js_3').html(displaySeconds);
        $('.minutes-js_3').html(displayMinutes);
      }    
    
    $('#stop-js_3').click(function(){
      started = false;
      clearInterval(counter);
      return;
    });
    
    $('#reset-js_3').click(function(){
      minutes = parseInt($('#pomodoro-js_3').val());
      seconds = 0;
      $('.minutes-js_3').html(displayTime(minutes));
      $('.seconds-js_3').html('00');
      
      started = false;
      clearInterval(counter);
      return;
    });
    
    function displayTime(t){
      var display = t;
        if(t < 10){
          display = '0' + t.toString();
        }
      return display;
    }
    
    function playSound(filename){   
                  document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="' + filename + '.mp3" type="audio/mpeg" /><source src="' + filename + '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3" /></audio>';
              }
    
  })(jQuery);

  (function ($) {
    var minutes = 25;
    var seconds = 0;
    var started = false;
    var counter;
    
    $('#more-js_4').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_4').val());
      if(n >= 0){
        $('#pomodoro-js_4').val(n + 1);
          minutes = n + 1;
          seconds = 0;
          $('.minutes-js_4').html(displayTime(minutes));
          $('.seconds-js_4').html('00');
        }
      }
    });
    $('#less-js_4').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_4').val());
      if(n > 1){
        $('#pomodoro-js_4').val( n - 1);
          minutes = n - 1;
          seconds = 0;
          $('.minutes-js_4').html(displayTime(minutes));
          $('.seconds-js_4').html('00');        
        }
      }
    });
    
    $('#start-js_4').click(function(){
      if(!started){
        started = true;
        counter=setInterval(timer, 1000); 
      }
    });
   function timer()
      {
        if(seconds == 0){
          seconds = 60;
          minutes--;
        }
        seconds--;
        if (minutes < 0)
        {
          if(seconds == 59){
   playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
          }
           clearInterval(counter);
           //counter ended, do something here
           return;
        }
        var displaySeconds = displayTime(seconds);
        var displayMinutes = displayTime(minutes);
        $('.seconds-js_4').html(displaySeconds);
        $('.minutes-js_4').html(displayMinutes);
      }    
    
    $('#stop-js_4').click(function(){
      started = false;
      clearInterval(counter);
      return;
    });
    
    $('#reset-js_4').click(function(){
      minutes = parseInt($('#pomodoro-js_4').val());
      seconds = 0;
      $('.minutes-js_4').html(displayTime(minutes));
      $('.seconds-js_4').html('00');
      
      started = false;
      clearInterval(counter);
      return;
    });
    
    function displayTime(t){
      var display = t;
        if(t < 10){
          display = '0' + t.toString();
        }
      return display;
    }
    
    function playSound(filename){   
                  document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="' + filename + '.mp3" type="audio/mpeg" /><source src="' + filename + '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3" /></audio>';
              }
    
  })(jQuery);
  (function ($) {
    var minutes = 25;
    var seconds = 0;
    var started = false;
    var counter;
    
    $('#more-js_5').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_5').val());
      if(n >= 0){
        $('#pomodoro-js_5').val(n + 1);
          minutes = n + 1;
          seconds = 0;
          $('.minutes-js_5').html(displayTime(minutes));
          $('.seconds-js_5').html('00');
        }
      }
    });
    $('#less-js_5').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_5').val());
      if(n > 1){
        $('#pomodoro-js_5').val( n - 1);
          minutes = n - 1;
          seconds = 0;
          $('.minutes-js_5').html(displayTime(minutes));
          $('.seconds-js_5').html('00');        
        }
      }
    });
    
    $('#start-js_5').click(function(){
      if(!started){
        started = true;
        counter=setInterval(timer, 1000); 
      }
    });
   function timer()
      {
        if(seconds == 0){
          seconds = 60;
          minutes--;
        }
        seconds--;
        if (minutes < 0)
        {
          if(seconds == 59){
   playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
          }
           clearInterval(counter);
           //counter ended, do something here
           return;
        }
        var displaySeconds = displayTime(seconds);
        var displayMinutes = displayTime(minutes);
        $('.seconds-js_5').html(displaySeconds);
        $('.minutes-js_5').html(displayMinutes);
      }    
    
    $('#stop-js_5').click(function(){
      started = false;
      clearInterval(counter);
      return;
    });
    
    $('#reset-js_5').click(function(){
      minutes = parseInt($('#pomodoro-js_5').val());
      seconds = 0;
      $('.minutes-js_5').html(displayTime(minutes));
      $('.seconds-js_5').html('00');
      
      started = false;
      clearInterval(counter);
      return;
    });
    
    function displayTime(t){
      var display = t;
        if(t < 10){
          display = '0' + t.toString();
        }
      return display;
    }
    
    function playSound(filename){   
                  document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="' + filename + '.mp3" type="audio/mpeg" /><source src="' + filename + '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3" /></audio>';
              }
    
  })(jQuery);

  (function ($) {
    var minutes = 25;
    var seconds = 0;
    var started = false;
    var counter;
    
    $('#more-js_6').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_6').val());
      if(n >= 0){
        $('#pomodoro-js_6').val(n + 1);
          minutes = n + 1;
          seconds = 0;
          $('.minutes-js_6').html(displayTime(minutes));
          $('.seconds-js_6').html('00');
        }
      }
    });
    $('#less-js_6').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_6').val());
      if(n > 1){
        $('#pomodoro-js_6').val( n - 1);
          minutes = n - 1;
          seconds = 0;
          $('.minutes-js_6').html(displayTime(minutes));
          $('.seconds-js_6').html('00');        
        }
      }
    });
    
    $('#start-js_6').click(function(){
      if(!started){
        started = true;
        counter=setInterval(timer, 1000); 
      }
    });
   function timer()
      {
        if(seconds == 0){
          seconds = 60;
          minutes--;
        }
        seconds--;
        if (minutes < 0)
        {
          if(seconds == 59){
   playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
          }
           clearInterval(counter);
           //counter ended, do something here
           return;
        }
        var displaySeconds = displayTime(seconds);
        var displayMinutes = displayTime(minutes);
        $('.seconds-js_6').html(displaySeconds);
        $('.minutes-js_6').html(displayMinutes);
      }    
    
    $('#stop-js_6').click(function(){
      started = false;
      clearInterval(counter);
      return;
    });
    
    $('#reset-js_6').click(function(){
      minutes = parseInt($('#pomodoro-js_6').val());
      seconds = 0;
      $('.minutes-js_6').html(displayTime(minutes));
      $('.seconds-js_6').html('00');
      
      started = false;
      clearInterval(counter);
      return;
    });
    
    function displayTime(t){
      var display = t;
        if(t < 10){
          display = '0' + t.toString();
        }
      return display;
    }
    
    function playSound(filename){   
                  document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="' + filename + '.mp3" type="audio/mpeg" /><source src="' + filename + '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3" /></audio>';
              }
    
  })(jQuery);

  (function ($) {
    var minutes = 25;
    var seconds = 0;
    var started = false;
    var counter;
    
    $('#more-js_7').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_7').val());
      if(n >= 0){
        $('#pomodoro-js_7').val(n + 1);
          minutes = n + 1;
          seconds = 0;
          $('.minutes-js_7').html(displayTime(minutes));
          $('.seconds-js_7').html('00');
        }
      }
    });
    $('#less-js_7').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_7').val());
      if(n > 1){
        $('#pomodoro-js_7').val( n - 1);
          minutes = n - 1;
          seconds = 0;
          $('.minutes-js_7').html(displayTime(minutes));
          $('.seconds-js_7').html('00');        
        }
      }
    });
    
    $('#start-js_7').click(function(){
      if(!started){
        started = true;
        counter=setInterval(timer, 1000); 
      }
    });
   function timer()
      {
        if(seconds == 0){
          seconds = 60;
          minutes--;
        }
        seconds--;
        if (minutes < 0)
        {
          if(seconds == 59){
   playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
          }
           clearInterval(counter);
           //counter ended, do something here
           return;
        }
        var displaySeconds = displayTime(seconds);
        var displayMinutes = displayTime(minutes);
        $('.seconds-js_7').html(displaySeconds);
        $('.minutes-js_7').html(displayMinutes);
      }    
    
    $('#stop-js_7').click(function(){
      started = false;
      clearInterval(counter);
      return;
    });
    
    $('#reset-js_7').click(function(){
      minutes = parseInt($('#pomodoro-js_7').val());
      seconds = 0;
      $('.minutes-js_7').html(displayTime(minutes));
      $('.seconds-js_7').html('00');
      
      started = false;
      clearInterval(counter);
      return;
    });
    
    function displayTime(t){
      var display = t;
        if(t < 10){
          display = '0' + t.toString();
        }
      return display;
    }
    
    function playSound(filename){   
                  document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="' + filename + '.mp3" type="audio/mpeg" /><source src="' + filename + '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3" /></audio>';
              }
    
  })(jQuery);

  (function ($) {
    var minutes = 25;
    var seconds = 0;
    var started = false;
    var counter;
    
    $('#more-js_8').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_8').val());
      if(n >= 0){
        $('#pomodoro-js_8').val(n + 1);
          minutes = n + 1;
          seconds = 0;
          $('.minutes-js_8').html(displayTime(minutes));
          $('.seconds-js_8').html('00');
        }
      }
    });
    $('#less-js_8').on('click', function() {
      if(!started){
      var n = parseInt($('#pomodoro-js_8').val());
      if(n > 1){
        $('#pomodoro-js_8').val( n - 1);
          minutes = n - 1;
          seconds = 0;
          $('.minutes-js_8').html(displayTime(minutes));
          $('.seconds-js_8').html('00');        
        }
      }
    });
    
    $('#start-js_8').click(function(){
      if(!started){
        started = true;
        counter=setInterval(timer, 1000); 
      }
    });
   function timer()
      {
        if(seconds == 0){
          seconds = 60;
          minutes--;
        }
        seconds--;
        if (minutes < 0)
        {
          if(seconds == 59){
   playSound("https://raw.githubusercontent.com/IonDen/ion.sound/master/sounds/bell_ring");
          }
           clearInterval(counter);
           //counter ended, do something here
           return;
        }
        var displaySeconds = displayTime(seconds);
        var displayMinutes = displayTime(minutes);
        $('.seconds-js_8').html(displaySeconds);
        $('.minutes-js_8').html(displayMinutes);
      }    
    
    $('#stop-js_8').click(function(){
      started = false;
      clearInterval(counter);
      return;
    });
    
    $('#reset-js_8').click(function(){
      minutes = parseInt($('#pomodoro-js_8').val());
      seconds = 0;
      $('.minutes-js_8').html(displayTime(minutes));
      $('.seconds-js_8').html('00');
      
      started = false;
      clearInterval(counter);
      return;
    });
    
    function displayTime(t){
      var display = t;
        if(t < 10){
          display = '0' + t.toString();
        }
      return display;
    }
    
    function playSound(filename){   
                  document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="' + filename + '.mp3" type="audio/mpeg" /><source src="' + filename + '.ogg" type="audio/ogg" /><embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3" /></audio>';
              }
    
  })(jQuery);
