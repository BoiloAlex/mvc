$(document).ready(function(){
	ajaxAddComment();
	// messageChange();
});

function ajaxAddComment(){
	$('.addComment [type=submit]').click(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "ajax.php",
			data:  $(".addComment").serialize()
		}).done (function(result) {
			console.log(result);
			//string ='name = ' + result.name + 'comment = ' + result.comment;
			$('.message').html('Запись успешно сохранена!').show(200);
            $('.addComment').trigger('reset');
            setTimeout('$(\'.message\').hide(200)',5000);
            try{
				var request = JSON.parse(result);
				if (request.comment_html != undefined){
					$('.comments').append(request.comment_html);
				}
			} catch (e){
                console.log(e);
			}
		});
	})
}

// function messageChange(){
// 	$('.message').change(function(){
// 		item = $(this);
// 	})
// }