<?php 
    require ('./includes/global-header.php') 
?> <!-- Header is added here -->
    <main>
        <section id="intro">
            <div>
                <h1>Hi There!</h1>
                <p>You wanna see some of my interests eh? Well to do that first you're gonna need an account buster!</p>
                <p>(Don't worry, if you don't have an account already, you can make one in the separate link below, I'm not THAT mean)</p>
            </div>
        </section>
        <section id="loginInfo"> <!-- The form for user when a user already has an account -->
            <h2>Login Here!</h2>
            <form>
                <input type="text" name="fName" id="fName" placeholder="First Name" required/>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required/>
                <input type="password" name="password" id="password" placeholder="Password" required/>
                <button name="login" type="submit" value="login">Login</button>
            </form>
        </section>
        <section id="signUp"> <!-- The form for when users need to make an account -->
            <h2>Don't got an account already? Well then, Sign up Here!</h2>
            <form>
                <input type="text" name="fName" id="fName" placeholder="First Name" required/>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required/>
                <input type="text" name="fColour" id="fColour" placeholder="Favourite Colour" required/>
                <input type="text" name="fAnimal" id="fAnimal" placeholder="Favourite Animal" required/>
                <input type="password" name="password" id="password" placeholder="Password" required/>
                <input type="password" name="confirm" id="confirm" placeholder="Confirm Password" required/>
                <button name="signUp" type="submit" value="signUp">Sign Up</button>
            </form>
        </section>
    </main>
<?php 
    require ('./includes/global-footer.php') 
?> <!-- Footer is added here -->