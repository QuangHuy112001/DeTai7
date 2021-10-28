<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <title>Form-Create Account</title>
</head>
<body>
    <div class="container">
        <form class="form-login">
            <h1>Create Account</h1>
            <div class="form-text">
                <label>Username</label>
                <input type="text">
            </div>

            <div class="form-text">
                <label>Email</label>
                <input type="Email">
            </div>

            <div class="form-text">
                <label>Password</label>
                <input type="Password">
            </div>

            <div class="form-text">
                <label>Password check</label>
                <input type="Password check">
            </div>

            <button>Tạo tài khoản</button>
           

        </form>
    </div>

    <script>
        const formLogin = document.querySelectorAll('.form-text input')
        const formLabel = document.querySelectorAll('.form-text label')
        for(let i=0;i<4;i++){
            formLogin[i].addEventListener("mouseover",function(){
                formLabel[i].classList.add("focus")
            })
            formLogin[i].addEventListener("mouseout",function(){
                formLabel[i].classList.remove("focus")
            })

        }
    </script>
    
</body>
</html>