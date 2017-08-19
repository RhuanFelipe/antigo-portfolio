$(function(){
		$("#menu a").hover(
			function(){
				$(this).next().fadeIn();
			},function(){
				$(this).next().fadeOut();
			});
		$("#menu a[href=#sobre]").click(function(){
			$('#fundo_box').fadeIn(1000);
			$('#page').fadeIn(1000);
			$('.quadros:eq(0)').fadeIn(1000);
		});
		$(".close").click(function(){
			$('#fundo_box').fadeOut(1000);
			$('#page').fadeOut(1000);
			$('.quadros:eq(0)').fadeOut(1000);
		});
		$("#menu a[href=#curriculo]").click(function(){
			$('#fundo_box').fadeIn(1000);
			$('#page').fadeIn(1000);
			$('.quadros:eq(1)').fadeIn(1000);
		});
		$(".close").click(function(){
			$('#fundo_box').fadeOut(1000);
			$('#page').fadeOut(1000);
			$('.quadros:eq(1)').fadeOut(1000);
		});
		$("#menu a[href=#trabalhos]").click(function(){
			$('#fundo_box').fadeIn(1000);
			$('#page').fadeIn(1000);
			$('.quadros:eq(2)').fadeIn(1000);
		});
		$(".close").click(function(){
			$('#fundo_box').fadeOut(1000);
			$('#page').fadeOut(1000);
			$('.quadros:eq(2)').fadeOut(1000);
		});
			$("#menu a[href=#videos]").click(function(){
			$('#fundo_box').fadeIn(1000);
			$('#page').fadeIn(1000);
			$('.quadros:eq(3)').fadeIn(1000);
		});
		$(".close").click(function(){
			$('#fundo_box').fadeOut(1000);
			$('#page').fadeOut(1000);
			$('.quadros:eq(3)').fadeOut(1000);
		});

		$("#menu a[href=#contatos]").click(function(){
			$('#fundo_box').fadeIn(1000);
			$('#page').fadeIn(1000);
			$('.quadros:eq(4)').fadeIn(1000);
		});
		$(".close").click(function(){
			$('#fundo_box').fadeOut(1000);
			$('#page').fadeOut(1000);
			$('.quadros:eq(4)').fadeOut(1000);
		});

			$("#telefone").mask("(99) 99999-9999");
		
	});

