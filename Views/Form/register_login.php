<div class="container" id="container">

    <!-- sign Up form section start-->
    <div class="form sign_up">
        <form action="#">
            <!-- heading -->
            <h1>Create An Account</h1>

            <span>Use email for registration</span>
            <!-- input fields start -->
            <input type="text" placeholder="User Name">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <button>Create Account</button>
            <!-- input fields end -->
        </form>
    </div>
    <!-- sign Up form section end-->

    <!-- sign in form section start-->
    <div class="form sign_in">
        <form action="#">
            <!-- heading -->
            <h1>Login</h1>
            <span>Login In with your Account</span>
            <!-- input fields start -->
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <span>Forgot your <span class="forgot">password?</span></span>
            <button>Login</button>
            <!-- input fields end -->
        </form>
    </div>
    <!-- sign in form section end-->

    <!-- overlay section start-->
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-pannel overlay-left">
                <h1>Already have an account?</h1>
                <p>Please Login</p>
                <button id="signIn" class="overBtn">Login</button>
            </div>
            <div class="overlay-pannel overlay-right">
                <h1>Create Account</h1>
                <p>Start Your Journey with Us</p>
                <button id="signUp" class="overBtn">Sign Up</button>
            </div>
        </div>
    </div>
    <!-- overlay section start-->
</div>
<script>
    // For Login and Register Section 

    const signUpBUtton = document.getElementById("signUp");
    const signInBUtton = document.getElementById("signIn");
    const container = document.getElementById("container");

    // switch between login and signup

    signUpBUtton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
    });

    signInBUtton.addEventListener("click", () => [
        container.classList.remove("right-panel-active")
    ]);
</script>