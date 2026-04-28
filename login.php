<?php
// session_start();
if (!empty($_SESSION['username_jemmacoffe'])) {
    header('loation:home');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jemma - Coffe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f3f4f6;
            font-family: sans-serif;
        }

        .card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 2.5rem 2rem;
            width: 100%;
            max-width: 360px;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #A0522D;
            margin-bottom: 0.5rem;
        }

        h2 {
            text-align: center;
            font-size: 22px;
            font-weight: 500;
            margin-bottom: 1.5rem;
            color: #111827;
        }

        .fields {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            color: #111827;
            outline: none;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #A0522D;
            box-shadow: 0 0 0 3px rgba(160, 82, 45, 0.15);
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 14px 0 16px;
        }

        .remember label {
            font-size: 14px;
            color: #6b7280;
            cursor: pointer;
        }

        .btn-signin {
            width: 100%;
            background: #A0522D;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
        }

        .btn-signin:hover {
            background: #7a3d1f;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #9ca3af;
            margin-top: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="card">
        <form class="needs-validation" novalidate action="proses/proses_login.php" method="POST">

            <div class="logo"><i class="bi bi-cup-hot fs-1"></i></div>
            <h2>Please Log in</h2>

            <div class="fields">
                <div>
                    <input name="username" type="email" placeholder="name@example.com" required />
                    <div class="invalid-feedback">
                        Please enter a valid email.
                    </div>
                </div>
                <div>
                    <input name="password" type="password" placeholder="Password" required />
                    <div class="invalid-feedback">
                        Please enter your password.
                    </div>
                </div>
            </div>

            <div class="remember">
                <input type="checkbox" id="remember" />
                <label for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn-signin" name="submit_validate" value="jemmacoffe">Log in</button>

        </form>

        <p class="footer">© 2026-2030</p>
    </div>

    <script>
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>