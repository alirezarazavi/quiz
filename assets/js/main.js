$(function() {
	// add/remove inputs
	//$(function() {
	//	var wrapper = $('.quiz-container');
	//	var i = $('.formWrapper div').size() + 1;
	//	$('#addField').on('click', function() {
	//		//$('<div class="formRow"><div class="grid2"><input type="text" id="fieldsTitle" name="fieldsTitle[]" placeholder="نام فیلد" /></div><div class="grid9"><input type="text" id="fieldsDesc" name="fieldsDesc[]" placeholder="توضیحات" /></div><a id="remField" href="#" class="right buttonLink icon-delete" title="حذف" alt="حذف" style="margin-top:4px;"></a><div class="clear"></div></div>').appendTo(wrapper);
	//		$('<div class="input-group"><input type="text" class="input-group-field" name="question" placeholder="سوال" /></div>').appendTo(wrapper);
	//		i++;
	//		return false;
	//	});
	//	$('#remField').on('click', function() {
	//		if( i > 2 ) {
	//			$(this).parents('.input-group').remove();
	//			i--;
	//		}
	//		return false;
	//	});
	//});


	//if (document.getElementById('multi_ans').checked) {
	//	alert('checked');
	//}
	//$('#multi_ans').click(function() {
	//	$('.multi_ans_input_container').toggle(this.checked);
	//});
	$('.multi_ans_input_container').hide();
	$('#multi_ans').change(function() {
		if (this.checked) {
			$('.multi_ans_input_container').show();

		} else {
			$('.multi_ans_input_container').hide();
		}
	});

	// Confrim delete items
	//$('[rel=delete]').click(function() {
	//	//if (window.confirm('گزینه مورد نظر حذف خواهد شد. آیا مطمئن هستید؟')) {
	//	//	return true;
	//	//} else {
	//	//	return false;
	//	//}
	//
	//})

	$(document).confirmWithReveal({
		ok: 'Make it so',
		cancel: 'Never mind'
	});

	//$('textarea.answer_textarea').html($('textarea.answer_textarea').html().trim());
	//var pane = $('.answer_textarea');
	//pane.val($.trim(pane.val()).replace(/\s*[\r\n]+\s*/g, '\n')
	//		.replace(/(<[^\/][^>]*>)\s*/g, '$1')
	//		.replace(/\s*(<\/[^>]+>)/g, '$1'));
	//$(".answer_textarea").map(function() {
	//	return this.replace(/(<[^\/][^>]*>)\s*/g, '$1');
	//}).get();
	$(".answer_textarea").each(function(i, obj) {
		obj.val($.trim(obj).replace(/\s*[\r\n]+\s*/g, '\n')
				.replace(/(<[^\/][^>]*>)\s*/g, '$1')
				.replace(/\s*(<\/[^>]+>)/g, '$1'));
	});


	$('.print').click(function(){
		var DocumentContainer = document.getElementById('print_area');
		var WindowObject = window.open('', 'PrintWindow', 'width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes');
		WindowObject.document.writeln('<!DOCTYPE html>');
		WindowObject.document.writeln('<html><head><title>چاپ</title>');
		WindowObject.document.writeln('<link rel="stylesheet" type="text/css" href="../../assets/css/foundation.min.css">');
		WindowObject.document.writeln('<link rel="stylesheet" type="text/css" href="../../assets/css/screen.css">');
		WindowObject.document.writeln('<link rel="stylesheet" type="text/css" href="../../assets/css/print.css">');
		WindowObject.document.writeln('</head><body>');
		WindowObject.document.writeln(DocumentContainer.innerHTML);
		WindowObject.document.writeln('</body></html>');
		WindowObject.document.close();
		WindowObject.focus();
		WindowObject.print();
		WindowObject.print();
	})


});