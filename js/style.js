
/*== Form Đăng Nhập ==*/
$(document).ready(function() {
	$('#dangnhaptk').click(function(event) {
		$.ajax({
			url: 'xu-ly.php',
			type: 'POST',
			dataType: 'html',
			data: {
				taikhoanlg: $('#taikhoanlg').val(),
				matkhaulg: $('#matkhaulg').val()
			},
		success: function(data){
			$('#thongbaodn').html(data);
		}
		});
		
	});
});

