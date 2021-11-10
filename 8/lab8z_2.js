$(document).ready(function() {

	$("#b").click(function(){	

		$("#forme").validate({
		  rules: {
		    imy: 'required'
		    user_email: {
		      required: true,
		      email: true,
		    },
		    inp1: {
		      required: true,
		      minlength: 4,
		    }
		    inp2: {

		    	required:true,
		    	equalTo:inp1,
		    }
		    massage: {

		    	required:true,
		    	minlength:10,
		    }
		  },
		  messages: {
		    fname: 'This field is required',
		    user_email: 'Enter a valid email',
		    psword: {
		      minlength: 'Password must be atleast 8 characterslong'
		    }
		  },

		});
	});
});