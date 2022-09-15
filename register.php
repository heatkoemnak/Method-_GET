<style>
    a {
	border: 0;
	color: #333;
	margin: 0;
	outline: 0;
	text-decoration: none
}

a:hover {
	color: #2196F3
}

article {
	border: 0;
	display: block;
	margin: 0;
	padding: 0
}

b {
	border: 0;
	margin: 0;
	padding: 0
}

blockquote {
	border: 0;
	margin: 0;
	padding: 0;
	quotes: none
}

blockquote:after {
	content: '';
	content: none
}

blockquote:before {
	content: '';
	content: none
}

body {
	background: #F0F0F0;
	border: 0;
	color: #000;
	font-family: 'Roboto Mono', sans-serif;
	margin: 0;
	overflow: hidden;
	padding: 0
}

form {
	border: 0;
	font: inherit;
	margin: 0;
	padding: 0
}

.facebook {
	margin-top: 15px;
	background: #3b5998
}

.google {
	background: #db4a39
}

input {
	border: 0;
	border-radius: 3px;
	outline: 0;
	padding: 10px 15px;
	width: 200px
}

label {
	border: 0;
	margin: 0;
	padding: 0
}

li {
	border: 0;
	font: inherit;
	margin: 0;
	padding: 0;
	vertical-align: baseline
}

ul {
	border: 0;
	font: inherit;
	font-size: 100%;
	list-style: none;
	margin: 0;
	padding: 0;
	vertical-align: baseline
}

#content {
	width: 100%
}

#login {
	background: #F8F8F8;
	box-shadow: 0 3px 3px rgba(0, 0, 0, .1);
	height: 370px;
	left: 50%;
	margin-left: -200px;
	margin-top: -200px;
	position: absolute;
	top: 50%;
	width: 400px
}

#login_btn {
	background: #2196F3;
	border: none;
	color: #fff;
	cursor: pointer;
	font-size: 20px;
	font-weight: 400;
	line-height: 60px;
	outline: 0;
	width: 200px
}

#login_content {
	height: 180px;
	padding: 20px 20px
}

.social_auth {
	position: absolute;
	right: -100px;
	padding: 1em;
	background: #fff
}

h1 {
	font-size: 22px
}

#login_header {
	color: #b4b4b4;
	font-size: 20px;
	font-weight: 400;
	background: #f4f4f4;
	line-height: 60px
}

#login_link {
	border-bottom: 1px dashed;
	color: #2196F3;
	display: block;
	margin: 50px auto;
	width: 50px
}

#register {
	background: #F8F8F8;
	box-shadow: 0 3px 3px rgba(0, 0, 0, .1);
	height: 370px;
	left: 50%;
	left: 120%;
	margin-left: -200px;
	margin-top: -200px;
	position: absolute;
	top: 50%;
	width: 400px
}

#register_btn {
	background: #2196F3;
	border: none;
	color: #fff;
	cursor: pointer;
	font-size: 20px;
	font-weight: 400;
	line-height: 60px;
	outline: 0;
	width: 200px
}

#register_content {
	height: 180px;
	padding: 20px 20px
}

#register_header {
	color: #b4b4b4;
	font-size: 20px;
	font-weight: 400;
	height: 60px;
	line-height: 60px;
	background: #f4f4f4
}

#register_link {
	border-bottom: 1px dashed;
	color: #2196F3;
	display: block;
	margin: 50px auto;
	width: 100px
}

.container {
	margin: 0 auto;
	text-align: center;
	width: 960px
}

.option {
	background: #F0F0F0;
	border-radius: 3px;
	cursor: pointer;
	margin: 0 0 0 15px;
	position: absolute;
	text-align: left;
	width: 330px;
	box-shadow: 0 1px 3px rgba(0, 0, 0, .1)
}

.option_arrow {
	float: right;
	padding: 10px 19px
}

.option_arrow .arrow {
	border: 6px solid;
	border-color: #6F7880 #F0F0F0 #F0F0F0;
	font-size: 0;
	height: 0;
	width: 0
}

.option_list {
	background: #F3F3F3;
	display: none
}

.option_list li {
	float: none;
	padding: 15px 15px
}

.option_list li:hover {
	background: #F8F8F8
}

.option_result {
	display: inline-block;
	padding: 11px 15px
}

.tip {
	text-indent: 100px;
	transition: all .3s ease-in-out;
	font-size: 14px
}

.tip+label {
	color: silver;
	left: 15px;
	position: absolute;
	top: 12px;
	transition: all .3s ease-in-out
}

.tip:active {
	text-indent: 0
}

.tip:active+label {
	transform: translateY(-40px)
}

.tip:focus {
	text-indent: 0
}

.tip:focus+label {
	color: #000;
	transform: translateY(-40px)
}

.tooltip {
	background: #FFF9C4;
	color: #565656;
	left: 20%;
	padding: 20px;
	position: absolute;
	right: 0;
	text-align: left;
	top: 0;
	width: 200px;
	z-index: -1;
	font-size: 14px;
	line-height: 14px
}

.tooltip:after {
	border: 8px solid;
	border-right-color: #FFF9C4;
	color: #f0f0f0;
	content: "";
	height: 0;
	position: absolute;
	right: 100%;
	top: 18px;
	width: 0
}

input {
	background: #F0F0F0;
	color: #444;
	padding: 14px 15px;
	width: 280px
}

span {
	display: inline-block;
	height: 50px;
	margin-bottom: 30px;
	position: relative
}

.loginBtn {
	box-sizing: border-box;
	position: relative;
	margin: .1em;
	padding: 10px 10px 10px 50px;
	border: none;
	text-align: left;
	line-height: 34px;
	white-space: nowrap;
	border-radius: .2em;
	font-size: 12px;
	color: #FFF;
	width: 170px;
	margin-top: 1em
}

.loginBtn:before {
	content: "";
	box-sizing: border-box;
	position: absolute;
	left: 0;
	top: 0;
	width: 40px;
	height: 100%
}

.loginBtn--facebook {
	background-color: #4C69BA;
	text-shadow: 0 -1px 0 #354C8C
}

.loginBtn--facebook:before {
	background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="#fff" d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z" /></svg>') center center no-repeat
}

.loginBtn--google {
	background: #DD4B39
}

.loginBtn--google:before {
	background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path d="M21.35 11.1h-9.17v2.73h6.51c-.33 3.81-3.5 5.44-6.5 5.44C8.36 19.27 5 16.25 5 12c0-4.1 3.2-7.27 7.2-7.27 3.09 0 4.9 1.97 4.9 1.97L19 4.72S16.56 2 12.1 2C6.42 2 2.03 6.8 2.03 12c0 5.05 4.13 10 10.22 10 5.35 0 9.25-3.67 9.25-9.09 0-1.15-.15-1.81-.15-1.81z" fill="#fff"/></svg>') center center no-repeat
}
</style>

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
                <span>
                     <input class="tip" name="c-password" type="password" maxlength="16" onclick="onClick(this);" onblur="onBlur(this);">
                     <label for="password">Confirm Password</label>
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
