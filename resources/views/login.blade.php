<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
    }

    ::selection {
        color: #fff;
        background: #53f0e3;
    }

    .wrapper {
        width: 380px;
        padding: 40px 30px 50px 30px;
        background: #fff;
        border-radius: 5px;
        text-align: center;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(8px);
    }

    .wrapper header {
        font-size: 35px;
        font-weight: 600;
    }

    .wrapper form {
        padding: 40px 0;
    }

    form .field {
        width: 100%;
        margin-bottom: 20px;
    }

    form .field.shake {
        animation: shake 0.3s ease-in-out;
    }

    @keyframes shake {

        0%,
        100% {
            margin-left: 0px;
        }

        20%,
        80% {
            margin-left: -12px;
        }

        40%,
        60% {
            margin-left: 12px;
        }
    }

    form .field .input-area {
        height: 50px;
        width: 100%;
        position: relative;
    }

    form input {
        width: 100%;
        height: 100%;
        outline: none;
        padding: 0 45px;
        font-size: 18px;
        background: none;
        caret-color: #5372F0;
        border-radius: 5px;
        border: 1px solid #bfbfbf;
        border-bottom-width: 2px;
        transition: all 0.2s ease;
    }

    form input:hover {
        border-color: #7a9bff;
    }

    form .field input:focus,
    form .field.valid input {
        border-color: #5372F0;
    }

    form .field.shake input,
    form .field.error input {
        border-color: #dc3545;
    }

    .field .input-area i {
        position: absolute;
        top: 50%;
        font-size: 18px;
        pointer-events: none;
        transform: translateY(-50%);
    }

    .input-area .icon {
        left: 15px;
        color: #bfbfbf;
        transition: color 0.2s ease;
    }

    .input-area .error-icon {
        right: 15px;
        color: #dc3545;
    }

    form input:focus~.icon,
    form .field.valid .icon {
        color: #5372F0;
    }

    form .field.shake input:focus~.icon,
    form .field.error input:focus~.icon {
        color: #bfbfbf;
    }

    form input::placeholder {
        color: #bfbfbf;
        font-size: 17px;
    }

    form .field .error-txt {
        color: #dc3545;
        text-align: left;
        margin-top: 5px;
    }

    form .field .error {
        display: none;
    }

    form .field.shake .error,
    form .field.error .error {
        display: block;
    }

    form .pass-txt {
        text-align: left;
        margin-top: -10px;
    }

    .wrapper a {
        color: #5372F0;
        text-decoration: none;
    }

    .wrapper a:hover {
        text-decoration: underline;
    }

    .login-btn {
        height: 50px;
        width: 100%;
        margin-top: 30px;
        color: #fff;
        padding: 0 20px;
        border: none;
        background: #5372F0;
        cursor: pointer;
        border-bottom: 2px solid rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 18px;
        border-radius: 30px;
    }

    .login-btn:hover {
        background: #2c52ed;
        transform: translateY(-3px);
    }

    .login-btn svg {
        width: 20px;
        height: 20px;
    }

    form input[type="submit"] {
        height: 50px;
        margin-top: 30px;
        color: #fff;
        padding: 0;
        border: none;
        background: linear-gradient(to right, #5372F0, #6E8EFF);
        cursor: pointer;
        border-bottom: 2px solid rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    form input[type="submit"]:hover {
        background: linear-gradient(to right, #4262E0, #5D7DFF);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(83, 114, 240, 0.3);
    }

    @media screen and (max-width: 400px) {
        .wrapper {
            width: 100%;
            margin: 0 15px;
        }
    }
</style>

<body>
    <div class="wrapper">
        <header>Login Form</header>
        <form action="#">
            <div class="field email">
                <div class="input-area">
                    <input type="text" placeholder="Email Address">
                    <i class="icon fas fa-envelope"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Email can't be blank</div>
            </div>
            <div class="field password">
                <div class="input-area">
                    <input type="password" placeholder="Password">
                    <i class="icon fas fa-lock"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Password can't be blank</div>
            </div>
            <div class="pass-txt"><a href="#">Forgot password?</a></div>
            <button type="submit" class="login-btn">
                Login
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-login-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                    <path d="M3 12h13l-3 -3" />
                    <path d="M13 15l3 -3" />
                </svg>
            </button>
        </form>
    </div>

    <script src="script.js"></script>

</body>

</html>
