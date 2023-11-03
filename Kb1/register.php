<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register - Jati Indah</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Jati Indah</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Event</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Registration Form -->
    <section class="page-section" id="registration">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Register an Account</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Please fill out the registration form below to create an account.</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-6">
                    <form id="registrationForm" method="POST" action="register.php">
                        <!-- Username input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="regUsername" type="text" name="regUsername" placeholder="Enter your username" required>
                            <label for="regUsername">Username</label>
                        </div>
                        <!-- Email address input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="regEmail" type="email" name="regEmail" placeholder="name@example.com" required>
                            <label for "regEmail">Email address</label>
                        </div>
                        <!-- Password input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="regPassword" type="password" name="regPassword" placeholder="Enter your password" required>
                            <label for="regPassword">Password</label>
                        </div>
                        <!-- Confirm Password input -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="regConfirmPassword" type="password" name="regConfirmPassword" placeholder="Confirm your password" required>
                            <label for="regConfirmPassword">Confirm Password</label>
                        </div>
                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-xl" id="regSubmitButton" type="submit">Register</button>
                        </div>
                         <div class="d-none" id="registrationSuccessMessage">
        <div class="alert alert-success">Registration Successful!</div>
    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2023 - Company Name</div>
        </div>
    </footer>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
