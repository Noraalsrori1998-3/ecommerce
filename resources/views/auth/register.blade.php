@extends('layouts.app')

@section('content')
<div class="container">
<div class="main">
@include('layouts.flash-message')
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="signup">
        <form method="POST" id="registerForm" action="{{ route('registers') }}">
            @csrf           
            <label for="chk" aria-hidden="true"> signup </label>
            <input id="name" type="text" name="name" value="{{ old('name') }}"s>
             @error('name')
		    <span class="invalid-feedback" role="alert">
		        <strong>{{ $message }}</strong>
		    </span>
	     @enderror
             <input id="email" type="email" name="email1" value="{{ old('email') }}" >
              @error('email1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
              @enderror
              <input id="password" type="password" name="password1" >
 		@error('password1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
      <button  type="submit"  name="form1">signup </button> 
       
        </from>
    </div>
    <div class="login">
        <form method="POST" id="loginForm" action="{{ route('logins') }}">
            @csrf
            <label for="chk"aria-hidden="true">login</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" >
            <span id="login-email-error" class="text-danger"></span>
              <input id="password" type="password" name="password" >
 		    <span id="login-password-error" class="text-danger"></span>
            <button  type="submit"  name="form2">login</button>
        </from>
        
    </div>
    
</div>
</div>
@endsection
@section('script')
<script>
    $(document).on('submit','#registerForm', function (e) {
                   e.preventDefault();

                   var $this = $(this);

                   $.ajax({
                       type: $this.attr('method'),
                       url: $this.attr('action'),
                       data: $this.serializeArray(),
                       dataType: $this.data('type'),
                       success: function (response) {
                           $('#login-name-error').empty();
                           $('#login-email-error').empty();
                           $('#login-phone-error').empty();
                           $('#login-password-error').empty();

                           if (response.errors) {
                               if (response.errors.name) {
                                   $('#login-name-error').html(response.errors.name[0]);
                               }
                               if (response.errors.email) {
                                   $('#login-email-error').html(response.errors.email[0]);
                               }
                               if (response.errors.phone) {
                                   $('#login-phone-error').html(response.errors.phone[0]);
                               }
                               if (response.errors.password) {
                                   $('#login-password-error').html(response.errors.password[0]);
                               }
                           }
                           if (response.success) {
                               $('#registerForm')[0].reset();
                               if (response.redirect == 'back') {
                                   location.reload();
                               } else {
                                location.reload();
                               }
                           }
                       },
                       error: function (jqXHR) {
                           var response = $.parseJSON(jqXHR.responseText);
                           console.log(jqXHR)
                           if (response.message) {
                               $('#register').find('span.error-response').html(response.message)
                           }
                       }
                   });
       });

    $('#loginForm').on('submit', function (e) {
                   e.preventDefault();

                   var $this = $(this);

                   $.ajax({
                       type: $this.attr('method'),
                       url: $this.attr('action'),
                       data: $this.serializeArray(),
                       dataType: $this.data('type'),
                       success: function (response) {
                           $('#login-email-error').empty();
                           $('#login-password-error').empty();
                           if (response.success) {
                            
                            $('#loginForm')[0].reset();
                            window.location.href = "/"

                            if (response.redirect == 'back') {
                                location.reload();
                            } else {
                                 window.location.href = "/"
                              
                            }
                        }
                           if (response.errors) {
                               if (response.errors.email) {
                                   $('#login-email-error').html(response.errors.email[0]);
                               }
                               if (response.errors.password) {
                                   $('#login-password-error').html(response.errors.password[0]);
                               }
                           }
                          
                       },
                       error: function (jqXHR) {
                           var response = $.parseJSON(jqXHR.responseText);
                           console.log(jqXHR)
                           if (response.message) {
                               $('#login').find('span.error-response').html(response.message)
                           }
                       }
                   });
       });
   
   
    </script>
@endsection
