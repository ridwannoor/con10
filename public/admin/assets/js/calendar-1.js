$(document).ready(function() {
	'use strict';

     /* ===== FullCalendar ==== */
     /* Ref: http://fullcalendar.io/ */

     $('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,basicWeek,basicDay'
		},
		defaultDate: '2020-02-12',
		editable: true,
		eventLimit: true, // allow "more" link when too many events
		events: [
			{
				title: 'All Day Event',
				start: '2020-02-01'
			},
			{
				title: 'Long Event',
				start: '2020-02-07',
				end: '2020-02-10'
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: '2020-02-09T16:00:00'
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: '2020-02-16T16:00:00'
			},
			{
				title: 'Conference',
				start: '2020-02-11',
				end: '2020-02-13'
			},
			{
				title: 'Meeting',
				start: '2020-02-12T10:30:00',
				end: '2020-02-12T12:30:00'
			},
			{
				title: 'Lunch',
				start: '2020-02-12T12:00:00'
			},
			{
				title: 'Meeting',
				start: '2020-02-12T14:30:00'
			},
			{
				title: 'Happy Hour',
				start: '2020-02-12T17:30:00'
			},
			{
				title: 'Dinner',
				start: '2020-02-12T20:00:00'
			},
			{
				title: 'Birthday Party',
				start: '2020-02-13T07:00:00'
			},
			{
				title: 'Click for Google',
				url: 'http://google.com/',
				start: '2020-02-28'
			}
		]
	});
});