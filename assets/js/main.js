$(function(){

$.fn.serializeObject = function() {
    var o = {};
    //    var a = this.serializeArray();
    $(this).find('input[type="hidden"], input[type="text"], input[type="password"], input[type="checkbox"]:checked, input[type="radio"]:checked, select').each(function() {
        if ($(this).attr('type') == 'hidden') { //if checkbox is checked do not take the hidden field
            var $parent = $(this).parent();
            var $chb = $parent.find('input[type="checkbox"][name="' + this.name.replace(/\[/g, '\[').replace(/\]/g, '\]') + '"]');
            if ($chb != null) {
                if ($chb.prop('checked')) return;
            }
        }
        if (this.name === null || this.name === undefined || this.name === '')
            return;
        var elemValue = null;
        if ($(this).is('select'))
            elemValue = $(this).find('option:selected').val();
        else elemValue = this.value;
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(elemValue || '');
        } else {
            o[this.name] = elemValue || '';
        }
    });
    return o;
}
	
	//Login Form validation
	//$('.loginform').validator();
	
	//Login Form Next
	$('#loginform').validator().on('submit', function (e) {
	  if (e.isDefaultPrevented()) {
		console.log('error')
	  } else {
		  console.log('success');
	/*	$(".cstmbtn").click(function(e) {
			var btn = $(this)
			$(this).parents(".pt-page").addClass("pt-page-moveToLeftFade");
			$(this).parents(".pt-page").next("#questions").find(">div").first().addClass("pt-page-current pt-page-moveFromRightFade");
			setTimeout(function(){
				$(btn).parents(".pt-page").removeClass("pt-page-current pt-page-moveToLeftFade");
			}, 700);
		});

		*/
			var socialProfile = [];
            $.each($("input[name='social_profile']:checked"), function(){            
                socialProfile.push($(this).val());
            });
			
			var postForm = { //Fetch form data
            'name'     :  $('input[name=name]').val(),
			'email'     :  $('input[name=email]').val(),
			'number'     : $('input[name=number]').val(),
			'social_profile'     : socialProfile,
        };
		
		 $.ajax({
			url: 'register.php',
			type: 'POST',
			dataType  : 'json',
			data: postForm,
			success: function (response) {		
				var message = response.message;
				if(response.success){
					console.log(message);
					$('.pt-page-login').removeClass('pt-page-current');
					$('#questionSeries').addClass('activeQuestions');
					//console.log($(this).closest('form'));
					$(".activeQuestions").first().find('.pt-page-1').addClass("pt-page-current pt-page-moveFromRightFade");
					$("#reviewUser").val(response.id);
					//$("#questionSeries").parents(".pt-page").addClass("pt-page-moveToLeftFade");
					//$("#questionSeries").parents(".pt-page").next("#questions").find(">div").first().addClass("pt-page-current pt-page-moveFromRightFade");
				}else{
					console.log(message)
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				   console.log(textStatus, errorThrown);
			}
		});
	return false;	
				
	  }
	})
	
	//Question Last Slide Next
	$(".question-grid .btn-group input[type='radio']").change(function(e) {
		$(this).parents(".question-grid").next().find(".slide-next").addClass("active").removeClass("disabled")
	});	
	
	$("#questions .pt-page").last().addClass("pt-page-last");
	
	var lastactive = $("#questions .pt-page.pt-page-last")	
	if(lastactive.hasClass("pt-page-last")){
		$(lastactive).find(".slide-next").attr("data-id", "last-question-next");
		
		$("[data-id='last-question-next']").click(function(e) {
				$('#questionSeries').removeClass('activeQuestions');
				$('#review-details').addClass('activeReview');
				$(".activeReview").first().find('.pt-page-1-review').addClass("pt-page-current pt-page-moveFromRightFade");
	
		/*	var btn = $(this)
			$(this).parents(".pt-page").addClass("pt-page-moveToLeftFade");
			$(this).parents("#questions").next("#review-details").find(">div").first().addClass("pt-page-current pt-page-moveFromRightFade");
			setTimeout(function(){
				$(btn).parents(".pt-page").removeClass("pt-page-current pt-page-moveToLeftFade");
			}, 700);
			*/
		});
		
	}
	
	//Question & Slide Next	
	$("[data-id='slide-next']").click(function(e) {
		var btn = $(this)
		$(this).parents(".pt-page").addClass("pt-page-moveToLeftFade").removeClass("pt-page-moveFromRightFade")
		$(this).parents(".pt-page").next(".pt-page").addClass("pt-page-current pt-page-moveFromRightFade");
		
		setTimeout(function(){
			$(btn).parents(".pt-page").removeClass("pt-page-current pt-page-moveToLeftFade");
			
			var activeclass = $("#questions .pt-page")
			if(activeclass.hasClass("pt-page-current")){
				activeclass.removeClass("pt-page-moveFromRightFade")
			}
			
		}, 700);
	});
	
	//Question & Slide Prev
	$("[data-id='slide-prev']").click(function(e) {
		var btn = $(this)
		$(this).parents(".pt-page").addClass("pt-page-moveToRightFade").removeClass("pt-page-moveFromLeftFade")
		$(this).parents(".pt-page").prev(".pt-page").addClass("pt-page-current pt-page-moveFromLeftFade");
		
		setTimeout(function(){
			$(btn).parents(".pt-page").removeClass("pt-page-current pt-page-moveToRightFade");
			
			var activeclass = $("#questions .pt-page")
			if(activeclass.hasClass("pt-page-current")){
				activeclass.removeClass("pt-page-moveFromLeftFade")
			}
			
		}, 700);
	});
	
	
	$("[data-id='btnReview']").click(function(e) {
		$("#questions .pt-page.pt-page-last").removeClass('pt-page-current');
		$('.btn-review').removeClass('pt-page-current');
		$('.btn-review').removeClass('pt-page-moveFromRightFade');
		
		$('.btn-onReview').addClass('pt-page-current pt-page-moveFromRightFade');
		
		var question_one = $("input[name='question_one']:checked").val();
		var question_two = $("input[name='question_two']:checked").val();
		var question_three = $("input[name='question_three']:checked").val();
		var question_four = $("input[name='question_four']:checked").val();
		var question_five = $("input[name='question_five']:checked").val();
		var question_six = $("input[name='question_six']:checked").val();
		var question_seven = $("input[name='question_seven']:checked").val();
		var question_eight = $("input[name='question_eight']:checked").val();
		var question_nine = $("input[name='question_nine']:checked").val();
		 
		 var questionReviews = 
                {
					questionOne: 	question_one,
					questionTwo: 	question_two,
					questionThree:	question_three,
					questionFour: 	question_four,
					questionFive: 	question_five,
					questionSix:  	question_six,
					questionSeven: 	question_seven,
					questionEight: 	question_eight,
					questionNine: 	question_nine,
                }
           ;
 
		 console.log(questionReviews);
		 $("#questionReviewContainer").empty();
		  $("#questionReviewTemplate").tmpl(questionReviews).appendTo("#questionReviewContainer");
		
	});
	
		$("#questionReviewContainer").on('click','.pt-page-review',function(e) {
			var dataId = $(this).attr('data-id');
			$('.btn-onReview').addClass("pt-page-moveToRightFade").removeClass('pt-page-current pt-page-moveFromLeftFade');
			
			$('.'+dataId).addClass("pt-page-current pt-page-moveFromLeftFade");
			
			setTimeout(function(){
				$('.'+dataId).parents(".pt-page").removeClass("pt-page-current pt-page-moveToRightFade");
				
				var activeclass = $("#review-details .pt-page")
				if(activeclass.hasClass("pt-page-current")){
					activeclass.removeClass("pt-page-moveFromLeftFade")
				}
				
			}, 700);
			
		})	

		
		
		$("[data-id='btnSubmit']").click(function(e) {
			
			$('.btn-onReview').removeClass('pt-page-current pt-page-moveFromLeftFade');

			var frm = $(document.reviewform);
			var data = JSON.stringify(frm.serializeObject());

			$.ajax({
			url: 'reviewsubmit.php',
			type: 'POST',
			dataType  : 'json',
			data: 'data='+data+'&reviewUser='+$("#reviewUser").val(),
			success: function (response) {	
				console.log(response);			
				var msg = response.message;			
				if(response.success){
					console.log(msg);
					$('.btn-thankyou').addClass('pt-page-current pt-page-moveFromRightFade');
				}else{
					console.log(msg)
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				   console.log(textStatus, errorThrown);
			}
		});
			
			return false;	
		});
	
})

