<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .login-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            max-width: 800px;
            width: 100%;
        }
        .left-section {
            padding: 40px;
            flex-grow: 1;
        }
        .login-title {
            font-size: 28px;
            margin-bottom: 30px;
            color: #343a40;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            display: block;
            margin-bottom: 5px;
            color: #495057;
            font-size: 14px;
        }
        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .btn-login {
            background-color: #198754;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .btn-login:hover {
            background-color: #157347;
        }
        .register-link {
            margin-top: 20px;
            font-size: 14px;
            color: #6c757d;
            text-align: center;
        }
        .register-link a {
            color: #0d6efd;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
        .social-login {
            margin-top: 30px;
            text-align: center;
        }
        .social-btn {
            display: block;
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            margin-bottom: 10px;
            text-decoration: none;
            color: #495057;
            font-size: 16px;
            text-align: left;
        }
        .social-btn i {
            margin-right: 10px;
        }
        .social-btn.google {
            border-color: #dc3545;
            color: #dc3545;
        }
        .social-btn.facebook {
            border-color: #0d6efd;
            color: #0d6efd;
        }
        .social-btn.apple {
            border-color: #343a40;
            color: #343a40;
        }
        .right-section {
            background-color: #e9ecef;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-left: 1px solid #dee2e6;
        }
        .right-section img {
            max-width: 150px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="left-section">
            <h2 class="login-title">Welcome Back!</h2>
            <form>
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-login">Login</button>
            </form>
            <div class="register-link">
                Don't have an account? <a href="#">Register</a>
            </div>
            <div class="social-login">
                <a href="#" class="social-btn google"><i class="bi bi-google"></i> Google</a>
                <a href="#" class="social-btn facebook"><i class="bi bi-facebook"></i> Facebook</a>
                <a href="#" class="social-btn apple"><i class="bi bi-apple"></i> Apple</a>
            </div>
        </div>
        <div class="right-section">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image">
            <h2>NebsC.</h2>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>