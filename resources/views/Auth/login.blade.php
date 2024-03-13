    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="{{ asset('web/css/style copy.css')}}">
    </head>
    <body>
        <div id="signInContainer">
            <div id="signInText">Sign In</div>
            <div id="formContainer">
                <form method="POST" action="{{url('login')}}">
                    @csrf
                    <div class="inputContainer">
                        <label for="email" class="inputLabel">Email</label>
                        <input id="email" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="inputContainer">
                        <label for="password" class="inputLabel">Password</label>
                        <input id="password" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="buttonContainer">
                        <input type="checkbox" name="remember" id="" >Remember Me
                        <button id="signInButton" type="submit">Sign In</button>
                        <button id="newAccountButton" name ="newAccount">New Account</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
    </html>
