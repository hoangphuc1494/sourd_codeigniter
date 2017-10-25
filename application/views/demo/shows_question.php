<?php require_once 'config.php';?>
<!DOCTYPE html>
<html>
<head><title>Tạo ứng dụng câu hỏi trắc nghiệm (quiz) bằng PHP & Ajax</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assest/quiz-application-using-php/css/style.css' ?>" media="all" />
	<!-- <link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/> -->
</head>
<body>

	<h1>Hãy trả lời những câu hỏi bên dưới và kiểm tra</h1>
	<form method='post' id='quiz_form'>
		<?php foreach ($shows_question as $key => $shows_question_list) { ?>
		<div id="question_<?php echo $shows_question_list['id'];?>" class='questions'>
			<h2 id="question_<?php echo $shows_question_list['id'];?>"><?php echo $shows_question_list['id'].".".$shows_question_list['question_name'];?></h2>
			<div class='align'>
				<input type="radio" value="1" id='radio1_<?php echo $shows_question_list['id'];?>' name='<?php echo $shows_question_list['id'];?>'>
				<label id='ans1_<?php echo $shows_question_list['id'];?>' for='1'><?php echo $shows_question_list['answer1'];?></label>
				<br/>
				<input type="radio" value="2" id='radio2_<?php echo $shows_question_list['id'];?>' name='<?php echo $shows_question_list['id'];?>'>
				<label id='ans2_<?php echo $shows_question_list['id'];?>' for='1'><?php echo $shows_question_list['answer2'];?></label>
				<br/>
				<input type="radio" value="3" id='radio3_<?php echo $shows_question_list['id'];?>' name='<?php echo $shows_question_list['id'];?>'>
				<label id='ans3_<?php echo $shows_question_list['id'];?>' for='1'><?php echo $shows_question_list['answer3'];?></label>
				<br/>
				<input type="radio" value="4" id='radio4_<?php echo $shows_question_list['id'];?>' name='<?php echo $shows_question_list['id'];?>'>
				<label id='ans4_<?php echo $shows_question_list['id'];?>' for='1'><?php echo $shows_question_list['answer4'];?></label>
				<input type="radio" checked='checked' value="5" style='display:none' id='radio4_<?php echo $shows_question_list['id'];?>' name='<?php echo $shows_question_list['id'];?>'>
			</div>
			<br/>
			<input type="button" id='next<?php echo $shows_question_list['id'];?>' value='Next!' name='question' class='butt'/>
		</div>
		<?php }?>
	</form>

	<div id='result'>
	</div>

	<div id="demo1" class="demo" style="text-align:center;font-size: 25px;">00:00:00</div>

	<div class="footer-bar">
		<span class="article-wrapper">
			<span class="article-label">Xem Bài Viết: </span>
			<span class="article-link"><a href="https://www.thuthuatweb.net/php/tao-ung-dung-cau-hoi-trac-nghiem-quiz-bang-php-ajax.html">Tạo ứng dụng câu hỏi trắc nghiệm (quiz) bằng PHP & Ajax</a></span>
		</span>

	</div>

	<script src="<?php echo base_url().'assest/quiz-application-using-php/js/jquery-1.9.1.min.js' ?>"></script>
	<script src="<?php echo base_url().'assest/quiz-application-using-php/js/watch.js' ?>"></script>
	<script>
		$(document).ready(function(){
			$('#demo1').stopwatch().stopwatch('start');
			var steps = $('form').find(".questions");
			var count = steps.size();
			console.log(steps);
			steps.each(function(i){
				hider=i+2;
				if (i == 0) { 	
					$("#question_" + hider).hide();
					createNextButton(i);
				}
				else if(count==i+1){
					var step=i + 1;
			//$("#next"+step).attr('type','submit');
			$("#next"+step).on('click',function(){

				submit();

			});
		}
		else{
			$("#question_" + hider).hide();
			createNextButton(i);
		}

	});
			function submit(){
				$.ajax({
					type: "POST",
					url: "ajax",
					data: $('form').serialize(),
					success: function(msg) {
						console.log(msg);
						$("#quiz_form,#demo1").addClass("hide");
						$('#result').show();
						$('#result').append(msg);
					}
				});

			}
			function createNextButton(i){
				var step = i + 1;
				var step1 = i + 2;
				$('#next'+step).on('click',function(){
					$("#question_" + step).hide();
					$("#question_" + step1).show();
				});
			}
			setTimeout(function() {
				submit();
			}, 50000);
		});
	</script> 

</body>
</html>
