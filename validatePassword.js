var new_pass = document.getElementById("new_pass") , re_pass = document.getElementById("re_pass");
function validatePassword()
{
if(new_pass.value != re_pass.value)
{
re_pass.setCustomValidity("Passwords Don't Match");
}
else
{
re_pass.setCustomValidity('');
}
}
new_pass.onchange = validatePassword;
re_pass.onkeyup = validatePassword;