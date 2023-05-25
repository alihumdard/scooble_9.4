@extends('layouts.main')

@section('main-section')
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- fullCalendar -->
<link rel="stylesheet" href="assets/plugins/fullcalendar/main.css">
<!-- Theme style -->
<link rel="stylesheet" href="assets/css/calendar.css">


<!-- partial -->
<div class="main-panel">
	<div class="content-wrapper py-0 px-3">
		<div style="border: none;">
			<div class="bg-white" style="border-radius: 20px;">
				<div class="p-3">
					<div class="row mb-3">
						<div class="col-lg-6">
							<h3 class="page-title">
								<span class="page-title-icon bg-gradient-primary text-white me-2 py-2">
									<svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M13.4109 0.76862L13.4119 1.51824C16.1665 1.73414 17.9862 3.6112 17.9891 6.48975L18 14.9155C18.0039 18.054 16.0322 19.985 12.8718 19.99L5.15189 20C2.0112 20.004 0.0148232 18.027 0.0108739 14.8796L1.32771e-05 6.55272C-0.00393603 3.65517 1.75153 1.78311 4.50618 1.53024L4.50519 0.780614C4.5042 0.340834 4.83002 0.00999952 5.26445 0.00999952C5.69887 0.00900002 6.02469 0.338835 6.02568 0.778615L6.02666 1.47826L11.8914 1.47027L11.8904 0.770619C11.8894 0.330839 12.2152 0.00100402 12.6497 4.52073e-06C13.0742 -0.000994979 13.4099 0.32884 13.4109 0.76862ZM1.52149 6.86157L16.4696 6.84158V6.49175C16.4272 4.34283 15.349 3.21539 13.4139 3.04748L13.4148 3.81709C13.4148 4.24688 13.0801 4.58771 12.6556 4.58771C12.2212 4.58871 11.8944 4.24888 11.8944 3.81909L11.8934 3.0095L6.02864 3.01749L6.02962 3.82609C6.02962 4.25687 5.70479 4.5967 5.27037 4.5967C4.83595 4.5977 4.50914 4.25887 4.50914 3.82809L4.50815 3.05847C2.58286 3.25138 1.51754 4.38281 1.5205 6.55072L1.52149 6.86157ZM12.2399 11.4043V11.4153C12.2498 11.8751 12.625 12.2239 13.0801 12.2139C13.5244 12.2029 13.8789 11.8221 13.869 11.3623C13.8483 10.9225 13.4918 10.5637 13.0485 10.5647C12.5944 10.5747 12.2389 10.9445 12.2399 11.4043ZM13.0554 15.892C12.6013 15.882 12.235 15.5032 12.234 15.0435C12.2241 14.5837 12.5884 14.2029 13.0426 14.1919H13.0525C13.5165 14.1919 13.8927 14.5707 13.8927 15.0405C13.8937 15.5102 13.5185 15.891 13.0554 15.892ZM8.17213 11.4203C8.19187 11.8801 8.56804 12.2389 9.02221 12.2189C9.46651 12.1979 9.82096 11.8181 9.80122 11.3583C9.79036 10.9085 9.42505 10.5587 8.98075 10.5597C8.52658 10.5797 8.17114 10.9605 8.17213 11.4203ZM9.02617 15.8471C8.57199 15.8671 8.19681 15.5082 8.17608 15.0485C8.17608 14.5887 8.53053 14.2089 8.9847 14.1879C9.429 14.1869 9.79529 14.5367 9.80517 14.9855C9.8259 15.4463 9.47046 15.8261 9.02617 15.8471ZM4.10434 11.4553C4.12408 11.915 4.50025 12.2749 4.95442 12.2539C5.39872 12.2339 5.75317 11.8531 5.73244 11.3933C5.72257 10.9435 5.35725 10.5937 4.91197 10.5947C4.4578 10.6147 4.10335 10.9955 4.10434 11.4553ZM4.95837 15.8521C4.5042 15.8731 4.12902 15.5132 4.10828 15.0535C4.1073 14.5937 4.46274 14.2129 4.91691 14.1929C5.3612 14.1919 5.7275 14.5417 5.73738 14.9915C5.75811 15.4513 5.40366 15.8321 4.95837 15.8521Z" fill="white" />
									</svg>
								</span> Calendar
							</h3>
						</div>
						<div class="col-lg-6 text-right">
							<h3>
								<a href="/calendar_maintable">
									<svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.66667 3.33333C2.58714 3.33333 3.33333 2.58714 3.33333 1.66667C3.33333 0.746192 2.58714 0 1.66667 0C0.746192 0 0 0.746192 0 1.66667C0 2.58714 0.746192 3.33333 1.66667 3.33333Z" fill="#231F20" />
										<path d="M1.66667 11.6666C2.58714 11.6666 3.33333 10.9204 3.33333 9.99992C3.33333 9.07944 2.58714 8.33325 1.66667 8.33325C0.746192 8.33325 0 9.07944 0 9.99992C0 10.9204 0.746192 11.6666 1.66667 11.6666Z" fill="#231F20" />
										<path d="M1.66667 20.0001C2.58714 20.0001 3.33333 19.2539 3.33333 18.3334C3.33333 17.4129 2.58714 16.6667 1.66667 16.6667C0.746192 16.6667 0 17.4129 0 18.3334C0 19.2539 0.746192 20.0001 1.66667 20.0001Z" fill="#231F20" />
										<path d="M28.4333 8.33325H8.23329C7.36805 8.33325 6.66663 9.03467 6.66663 9.89992V10.0999C6.66663 10.9652 7.36805 11.6666 8.23329 11.6666H28.4333C29.2985 11.6666 30 10.9652 30 10.0999V9.89992C30 9.03467 29.2985 8.33325 28.4333 8.33325Z" fill="#231F20" />
										<path d="M28.4333 16.6667H8.23329C7.36805 16.6667 6.66663 17.3682 6.66663 18.2334V18.4334C6.66663 19.2987 7.36805 20.0001 8.23329 20.0001H28.4333C29.2985 20.0001 30 19.2987 30 18.4334V18.2334C30 17.3682 29.2985 16.6667 28.4333 16.6667Z" fill="#231F20" />
										<path d="M28.4333 0H8.23329C7.36805 0 6.66663 0.701421 6.66663 1.56667V1.76667C6.66663 2.63191 7.36805 3.33333 8.23329 3.33333H28.4333C29.2985 3.33333 30 2.63191 30 1.76667V1.56667C30 0.701421 29.2985 0 28.4333 0Z" fill="#231F20" />
									</svg>
								</a>
							</h3>
						</div>
					</div>
					<section class="content">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-3">
									<div class="sticky-top mb-3">
										<div class="card">
											<div class="card-header">
												<h4 class="card-title">Draggable Events</h4>
											</div>
											<div class="card-body">
												<!-- the events -->
												<div id="external-events">
													<div class="external-event bg-success">Lunch</div>
													<div class="external-event bg-warning">Go home</div>
													<div class="external-event bg-info">Do homework</div>
													<div class="external-event bg-primary">Work on UI design</div>
													<div class="external-event bg-danger">Sleep tight</div>
													<div class="checkbox">
														<label for="drop-remove">
															<input type="checkbox" id="drop-remove">
															remove after drop
														</label>
													</div>
												</div>
											</div>
											<!-- /.card-body -->
										</div>
										<!-- /.card -->
										<div class="card">
											<div class="card-header">
												<h3 class="card-title">Create Event</h3>
											</div>
											<div class="card-body">
												<div class="btn-group" style="width: 100%; margin-bottom: 10px;">
													<ul class="fc-color-picker" id="color-chooser">
														<li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
														<li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
														<li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
														<li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
														<li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
													</ul>
												</div>
												<!-- /btn-group -->
												<div class="input-group">
													<input id="new-event" type="text" class="form-control" placeholder="Event Title">

													<div class="input-group-append">
														<button id="add-new-event" type="button" class="btn btn-primary">Add</button>
													</div>
													<!-- /btn-group -->
												</div>
												<!-- /input-group -->
											</div>
										</div>
									</div>
								</div>
								<!-- /.col -->
								<div class="col-md-9">
									<div class="card card-primary">
										<div class="card-body p-0">
											<!-- THE CALENDAR -->
											<div id="calendar"></div>
										</div>
										<!-- /.card-body -->
									</div>
									<!-- /.card -->
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
						</div><!-- /.container-fluid -->
					</section>
					<!-- /.content -->
				</div>
				<!-- Main content -->
			</div>
			<!-- /.content-wrapper -->
		</div>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- AdminLTE App -->
	<script src="assets/dist/js/adminlte.min.js"></script>
	<!-- fullCalendar 2.2.5 -->
	<script src="assets/plugins/moment/moment.min.js"></script>
	<script src="assets/plugins/fullcalendar/main.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="assets/dist/js/demo.js"></script>
	<!-- Page specific script -->
	<script>
		$(function() {

			/* initialize the external events
			 -----------------------------------------------------------------*/
			function ini_events(ele) {
				ele.each(function() {

					// create an Event Object (https://fullcalendar.io/docs/event-object)
					// it doesn't need to have a start or end
					var eventObject = {
						title: $.trim($(this).text()) // use the element's text as the event title
					}

					// store the Event Object in the DOM element so we can get to it later
					$(this).data('eventObject', eventObject)

					// make the event draggable using jQuery UI
					$(this).draggable({
						zIndex: 1070,
						revert: true, // will cause the event to go back to its
						revertDuration: 0 //  original position after the drag
					})

				})
			}

			ini_events($('#external-events div.external-event'))

			/* initialize the calendar
			 -----------------------------------------------------------------*/
			//Date for the calendar events (dummy data)
			var date = new Date()
			var d = date.getDate(),
				m = date.getMonth(),
				y = date.getFullYear()

			var Calendar = FullCalendar.Calendar;
			var Draggable = FullCalendar.Draggable;

			var containerEl = document.getElementById('external-events');
			var checkbox = document.getElementById('drop-remove');
			var calendarEl = document.getElementById('calendar');

			// initialize the external events
			// -----------------------------------------------------------------

			new Draggable(containerEl, {
				itemSelector: '.external-event',
				eventData: function(eventEl) {
					return {
						title: eventEl.innerText,
						backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
						borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
						textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
					};
				}
			});

			var calendar = new Calendar(calendarEl, {
				headerToolbar: {
					left: 'prev,next today',
					center: 'title',
					right: 'dayGridMonth,timeGridWeek,timeGridDay'
				},
				themeSystem: 'bootstrap',
				//Random default events
				events: [{
						title: 'All Day Event',
						start: new Date(y, m, 1),
						backgroundColor: '#f56954', //red
						borderColor: '#f56954', //red
						allDay: true
					},
					{
						title: 'Long Event',
						start: new Date(y, m, d - 5),
						end: new Date(y, m, d - 2),
						backgroundColor: '#f39c12', //yellow
						borderColor: '#f39c12' //yellow
					},
					{
						title: 'Meeting',
						start: new Date(y, m, d, 10, 30),
						allDay: false,
						backgroundColor: '#0073b7', //Blue
						borderColor: '#0073b7' //Blue
					},
					{
						title: 'Lunch',
						start: new Date(y, m, d, 12, 0),
						end: new Date(y, m, d, 14, 0),
						allDay: false,
						backgroundColor: '#00c0ef', //Info (aqua)
						borderColor: '#00c0ef' //Info (aqua)
					},
					{
						title: 'Birthday Party',
						start: new Date(y, m, d + 1, 19, 0),
						end: new Date(y, m, d + 1, 22, 30),
						allDay: false,
						backgroundColor: '#00a65a', //Success (green)
						borderColor: '#00a65a' //Success (green)
					},
					{
						title: 'Click for Google',
						start: new Date(y, m, 28),
						end: new Date(y, m, 29),
						url: 'https://www.google.com/',
						backgroundColor: '#3c8dbc', //Primary (light-blue)
						borderColor: '#3c8dbc' //Primary (light-blue)
					}
				],
				editable: true,
				droppable: true, // this allows things to be dropped onto the calendar !!!
				drop: function(info) {
					// is the "remove after drop" checkbox checked?
					if (checkbox.checked) {
						// if so, remove the element from the "Draggable Events" list
						info.draggedEl.parentNode.removeChild(info.draggedEl);
					}
				}
			});

			calendar.render();
			// $('#calendar').fullCalendar()

			/* ADDING EVENTS */
			var currColor = '#3c8dbc' //Red by default
			// Color chooser button
			$('#color-chooser > li > a').click(function(e) {
				e.preventDefault()
				// Save color
				currColor = $(this).css('color')
				// Add color effect to button
				$('#add-new-event').css({
					'background-color': currColor,
					'border-color': currColor
				})
			})
			$('#add-new-event').click(function(e) {
				e.preventDefault()
				// Get value and make sure it is not null
				var val = $('#new-event').val()
				if (val.length == 0) {
					return
				}

				// Create events
				var event = $('<div />')
				event.css({
					'background-color': currColor,
					'border-color': currColor,
					'color': '#fff'
				}).addClass('external-event')
				event.text(val)
				$('#external-events').prepend(event)

				// Add draggable funtionality
				ini_events(event)

				// Remove event from text input
				$('#new-event').val('')
			})
		})
	</script>
</div>

@endsection