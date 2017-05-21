(function listenPriorityNumber() {
	setTimeout(function(){
		$.ajax({ url: "ajax/screenevent.php", success: function(data){
			for (dept in data) {
				if (data[dept].length > 0) {
					$("#priority-" + dept).html(data[dept][0].priority_number);
					console.log(data[dept][0]);
				}
			}
		}, dataType: "json", complete: listenPriorityNumber });
	}, 3000);

})();