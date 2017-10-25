<form method="post" action="">
    <div class="field">
        <input type="text" name="email" id="email" required="required" placeholder="Email" />
    </div>
    {if:MENU!=remind{
    <div class="field">
        <input type="password" name="pass" id="pass" required="required" placeholder="Password" />
    </div>
    }if}
    {if:REMIND_LINK==1{
    <div class="field">
        <input type="password" name="pass" id="pass" required="required" placeholder="Enter New Password" />
    </div>
    }if}
    
    <ul class="actions">
        <!--<li><a href="#" class="button">Get Started</a></li>-->
        {if:MENU!=remind{<li><input type="submit" class="button" value="Get Started" /></li>}if}
        {if:MENU==remind{<li><input type="submit" class="button" value="Remind" /></li>}if}
    </ul>
    
    <div class="note">
    {if:MENU!=remind{
        <p>Register with your email address and choose a password to <u>Sign up</u> and afterwards to <u>log in</u>.</p>
        <p>After you logged in you will get a list of weblinks, which you can share and post everywhere.<br /> You will earn money everytime an user clicks on your shared link.</p>
        <p><a href="/remind/" class="link">Forgot your password?</a></p>
    }if}
    {if:MENU==remind{
        <p>Input you E-Mail</p>
    }if}
    </div>
    
</form>