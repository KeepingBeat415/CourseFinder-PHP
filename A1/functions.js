function validate_password() {
  var pass = document.getElementById('password').value;
  var confirm_pass = document.getElementById('confirm_password').value;
  if (pass != confirm_pass) {
    document.getElementById('wrong_pass_alert').style.color = 'red';
    document.getElementById('wrong_pass_alert').innerHTML = 'Password is Not matched.';
    document.getElementById('submit').disabled = true;
    document.getElementById('create').style.opacity = 0.4;
  }
}
