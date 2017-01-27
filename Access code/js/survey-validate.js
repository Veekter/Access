/* FORM WIZARD VALIDATION SURVEY ======================================== */	
$(function() {

				$('#custom').stepy({
					backLabel:	'Previous step',
					block:		true,
					errorImage:	true,
					nextLabel:	'Next step',
					titleClick:	true,
						description:	true,
						legend:			false,
					validate:	true
				});

				$('#custom').validate({
					errorPlacement: function(error, element) {
						$('#custom .stepy-error').append(error);
					}, rules: {
						'question_1':		'required',
						'question_2[]':		'required',
						'name':		'required',
						'last_name':			'required',
						'email':			'required'
					}, messages: {
						'question_1':		{ required: 	 'Answer 1 required' },
						'question_2[]':		{ required: 	 'Answer 2 required' },
						'guest':		{ required: 	 'Guest required' },					
						'rooms':	{ required:  'Rooms required!' },
						'name':		{ required:  'Name required!' },
						'last_name':			{ required:  'Last name required' },
						'email':			{ required:  'Email required' },
					}
				});

			
			});
			