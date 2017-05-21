$(document).ready(function() {

	var currentPriorityNumber = 0;

	$.get( "ajax/loadlistajax.php", function( data ) {
		for (d in data) {
			var tbl = '';
			for (x in data[d]) {
				tbl += '<tr>';
				tbl += '<td>' + data[d][x].priority_number + '</td>';
				tbl += '<td>' + data[d][x].name + '</td>';
				tbl += '</tr>';
			}
			$("#PL-" + d + " tbody").html(tbl);
		}
	}, "json" );

	$('#outPatientFormAction').submit(function(e) {
		e.preventDefault();
		var form = $(this);
		var name = form.find("input[name='fullName']").val();
		var mobile = form.find("input[name='mobileNumber']").val();
		var priority = form.find("input[name='priorityNumber']").val();
		var dept = $("#outPatientDept").val();

		console.log(dept);

		form.find('input[type=text]').prop('disabled', true);
		$("#PL-" + dept + " tbody").append('<tr class="success" id="priorityTmpContainer"><td colspan="4" style="text-align:center">Adding... <img alt="Load Priorities" src="assets/img/load.gif"></td></tr>');
		$.post( "ajax/outpatientajax.php", { iqs_name : name , iqs_mobile : mobile , iqs_priority : priority , iqs_department : dept}).done(function( data ) {
			$("#priorityTmpContainer").hide(700, function() {
				$(this).remove();
				form.find('input[type=text]').val('');
				form.find('input[type=text]').prop('disabled', false);
				$("#PL-" + dept + " tbody").append( data );
			});
		});
	});

	$('#outPatientNext-ob_gyne').click(function() {
		nextAction('ob_gyne');
	});
	$('#outPatientNext-dental').click(function() {
		nextAction('dental');
	});
	$('#outPatientNext-medicine').click(function() {
		nextAction('medicine');
	});
	$('#outPatientNext-pedia').click(function() {
		nextAction('pedia');
	});
	$('#outPatientNext-surgical').click(function() {
		nextAction('surgical');
	});

	function nextAction(dept) {
		var td = $('#PL-' + dept + ' tbody tr:first-child');
		$(td).html('<td colspan="4" style="text-align:center">Sending SMS... <img alt="Load Priorities" src="assets/img/load.gif"></td>');
		$.get( "ajax/nextpatientajax.php?dept=" + dept , function( data ) {
			$('#CPN-' + dept).html( data );
			$(td).hide(700, function() {
				$(this).remove();
			});
		});
	}
});