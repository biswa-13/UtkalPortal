
    $('form.idealforms').idealforms({

      silentLoad: false,

      rules: {
        'email': 'required email ajax',
        'password': 'required pass',
        'confirmpass': 'required equalto:password',
        'date': 'required date',
        'picture': 'required extension:jpg:png',
        'website': 'url',
        'hobbies[]': 'minoption:2 maxoption:3',
        'phone': 'required phone',
        'zip': 'required zip',
        'options': 'select:default',
      },

      errors: {
        'email': {
          ajaxError: 'Email already Registered.'
        }
      },
	/*
     onSubmit: function(invalid, e) {
        e.preventDefault();
        $('#invalid')
          .show()
          .toggleClass('valid', ! invalid)
          .text(invalid ? (invalid +' fields to fill out') : 'All good!');
      } */
	  
	  	onSubmit: function(invalid, e) {
			
			if (invalid) {
				e.preventDefault();
				alert(invalid +' fields not filled out!');
				} else {
					$.post('index.php', 'json');
					
				}    
			}
	  
    });

    $('form.idealforms').find('input, select, textarea').on('change keyup', function() {
      $('#invalid').hide();
    });

    $('form.idealforms').idealforms('addRules', {
      'comments': 'required minmax:50:200',
	  'fullname': 'required fullname',
	  'first_name': 'required first_name',
	  'last_name': 'required last_name',
	  'profile_img': 'required extension:jpg:png',
	  'dept_name': 'select:default',
	  'deptrn': 'required deptrn',
	  'dob': 'required date',
	  'address': 'required minmax:20:80',
	  'captcha': 'required',
	  'x_board': 'required select:default',
	  'x_pass': 'required year',
	  'x_percent': 'required percent',
	  'xii_branch': 'required select:default',
	  'xii_stream': 'required stream',
	  'xii_pass': 'required year',
	  'xii_percent': 'required percent',
	  'grdu_university': 'required',
	  'grdu_course': 'required select:default',
	  'grdu_join': 'required year',
	  'grdu_pass': 'required graterthan:grdu_join',
	  'grdu_percent': 'required percent'
    });
	
	
	$('#cb').click(function() {
		$('form').idealforms('addRules', {
		'pg_course': 'required select:default',
		'pg_join': 'required year',
		'pg_pass': 'required graterthan:pg_join',
		'pg_percent': 'required percent'
		});
	});
		
		/*Date picker format for pcell */
		$('form').idealforms({
	  rules: {
		'event': 'date:yyyy-mm-dd'
	  }
	});

	$('.datepicker').datepicker('option', 'dateFormat', 'yy-mm-dd');
	
	/*End of Date picker format for pcell */

    $('.prev').click(function(){
      $('.prev').show();
      $('form.idealforms').idealforms('prevStep');
    });
    $('.next').click(function(){
      $('.next').show();
      $('form.idealforms').idealforms('nextStep');
    });