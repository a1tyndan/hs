<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}
input[type=text], input[type=password] {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
}
button {
background-color: #65dbc8;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
}
button:hover {
opacity: 0.8;
}
.cancelbtn {
width: auto;
padding: 10px 18px;
background-color: #6f40f1;
}
.imgcontainer {
text-align: center;
margin: 24px 0 12px 0;
}
img.avatar {
width: 40%;
border-radius: 50%;
}
.container {
padding: 16px;
}
span.psw {
float: right;
padding-top: 16px;
}
@media screen and (max-width: 300px) {
span.psw {
display: block;
float: none;
}
.cancelbtn {
width: 100%;
}
}
</style>

</head>
<body
>
<div class="imgcontainer">
<img src="https://images7.alphacoders.com/984/thumb-1920-984696.png" alt="Avatar" class="avatar">
</div>
<h2>Login Form</h2>

<form name="login" action="/profil.html">
Username<input type="text" name="userid"/>
Password<input type="password" name="pswrd"/>
<input type="button" onclick="check(this.form)" value="Login"/>
<input type="reset" value="Cancel"/>
</form>
<script language="javascript">
function check(form)
{
if(form.userid.value == "a1tyndan" && form.pswrd.value == "123")
{
window.open('target.html')
}
else
{
alert("Error Password or Username")
}
}
</script>
</body>
</html>
