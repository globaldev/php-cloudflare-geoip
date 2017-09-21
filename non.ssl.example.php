<!-- start SSL Sign Up Form Example -->
<form action="<?php echo WLD_STANDARD_SIGNUP_FORM; ?>" method="post">
    <select name="gender">
        <option value="" selected="selected">I am...</option>
        <option value="1">man looking for a woman</option>
        <option value="2">woman looking for a man</option>
    </select>
    <input type="text" name="firstname">
    <select name="dobday">
        <option value="" selected="selected">DD</option>
        <option value="1">01</option>
    </select>
    <select name="dobmonth">
        <option value="" selected="selected">MM</option>
        <option value="1">January</option>
    </select>
    <select name="dobyear">
        <option value="" selected="selected">YYYY</option>
        <option value="1999">1999</option>
    </select>
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" value="Sign Up">
</form>
<!-- end SSL Sign Up Form Example -->

<!-- start SSL Login Form Example -->
<form name="loginform" action="<?php echo WLD_STANDARD_LOGIN_FORM; ?>" method="post">
    <input type="text" name="memberid">
    <input type="password" name="password">
    <input type="submit" value="Login">
</form>
<!-- end SSL Login Form Example -->

<!-- start SSL Login Link Example -->
<a href="<?php echo WLD_STANDARD_LOGIN_LINK; ?>">LOGIN</a>
<!-- end SSL Login Link Example -->

<!-- start SSL Country Code display -->
<?php echo WLD_COUNTRY_CODE; ?>
<!-- end SSL Country Code display -->

<!-- start SSL Country Name display -->
<?php echo WLD_COUNTRY_NAME; ?>
<!-- end SSL Country Name display -->
