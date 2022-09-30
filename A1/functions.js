function validate_password() {
  var pass = document.getElementById('password').value;
  var confirm_pass = document.getElementById('confirm_password').value;
  if (pass != confirm_pass) {
    document.getElementById('wrong_pass_alert').style.color = 'red';
    document.getElementById('wrong_pass_alert').innerHTML = 'Password is Not matched.';
    document.getElementById('submit').disabled = true;
    document.getElementById('submit').style.opacity = 0.4;
  } else {
    document.getElementById('wrong_pass_alert').style.color = 'white';
    document.getElementById('wrong_pass_alert').innerHTML = '';
    document.getElementById('submit').disabled = false;
    document.getElementById('submit').style.opacity = 1;
  }
}
