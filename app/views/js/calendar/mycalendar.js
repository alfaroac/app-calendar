$(document).ready(function() {    

    var calendar=$('#calendar').fullCalendar({
      header: {
        left: 'prev,next, today ',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      allDayDefault: false, 
      businessHours: true, // display business hours
      events: "http://localhost/app-calendar/events.php",
      selectable: true,
      selectHelper: true,
      select: function(start, end, allDay) {
       var title = prompt('Event Title:');
       if (title) {
       //start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
       start = moment(start,moment.ISO_8601).format("YYYY-MM-D HH:mm:ss");
       //end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
       end = moment(end,moment.ISO_8601).format("YYYY-MM-D HH:mm:ss");
       $.ajax({
       url: 'http://localhost/app-calendar/add_events.php',
       data: 'title='+ title+'&start='+ start +'&end='+ end ,
       type: "POST",
       success: function(json) {
       alert('OK');
       }
       });
       calendar.fullCalendar('renderEvent',
       {
       title: title,
       start: start,
       end: end,
       allDay:allDay,
       },
       true // make the event "stick"
       );
       }
       calendar.fullCalendar('unselect');
      },

      editable: true,
      eventDrop: function(event, delta) {
       //start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
       start = moment(start,moment.ISO_8601).format("YYYY-MM-D HH:mm:ss");
       //end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
       end = moment(end,moment.ISO_8601).format("YYYY-MM-D HH:mm:ss");
       $.ajax({
       url: 'http://localhost/app-calendar/update_events.php',
       data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
       type: "POST",
       success: function(json) {
       alert("OK");
       }
       });
      },
      eventResize: function(event) {
      //start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
       start = moment(start,moment.ISO_8601).format("YYYY-MM-D HH:mm:ss");
       //end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
       end = moment(end,moment.ISO_8601).format("YYYY-MM-D HH:mm:ss");
       $.ajax({
       url: 'http://localhost/app-calendar/update_events.php',
       data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
       type: "POST",
       success: function(json) {
       alert("OK");
       }
       });       
      },

    });
    
  });