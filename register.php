<div id="content">
	<div class="container">


		<form id='login' method='post' action='login.jsp' onsubmit='return checkForm(this);'><input type='hidden' name='form-name' value='login' />
			<div id="login_header">
				Log In
			</div>
			<div id="login_content">
				<span>
                     <input class="tip" name="username" type="text" maxlength="30" onclick="onClick(this);" onblur="onBlur(this);">
                     <label for="username">Email</label>
                     <div class="tooltip" data-text="Enter your email"></div>
                  </span>
				<span>
                     <input class="tip" name="password" type="password" maxlength="16" onclick="onClick(this);" onblur="onBlur(this);">
                     <label for="password">Password</label>
                     <div class="tooltip" data-text="Enter your password"></div>
                  </span>
				<a href="#" style="font-size:12px;width:100%;margin-left:200px;line-height:10px">Forgot password?</a>
			</div>
			<!-- / #login_content -->
			<div id="login_footer">
				<button id="login_btn" type="submit">Login</button>
				<div><a id="register_link" href="javascript:void(0);">Registered</a>
				</div>
			</div>
		</form>


		<form id='register' method='post'><input type='hidden' name='form-name' value='register' />
			<div id="register_header">Registered</div>
			<div id="register_content">
				<span>
                     <input class="tip" name="realname" type="text" maxlength="26" onclick="onClick(this);" onblur="onBlur(this);">
                     <label for="realname">Email</label>
                     <div class="tooltip" data-text="Enter your email"></div>
                  </span>
				<span>
                     <input class="tip" name="password" maxlength="16" type="password" onclick="onClick(this);" onblur="onBlur(this);">
                     <label for="password">Password</label>
                     <div class="tooltip" data-text="Fill 6 to 16 letters"></div>
                  </span>
				<a href="#" style="font-size:12px;width:100%;margin-left:200px;line-height:10px">Terms of Service</a>
			</div>
			<div id="register_footer">
				<button id="register_btn" type="submit">Register</button>
			</div>
			<div><a id="login_link" href="javascript:void(0);">Login</a>
			</div>
		</form>


	</div>
</div>