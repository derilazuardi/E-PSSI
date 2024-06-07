<?php

class RegistrationForm {
    private $backgroundClass;
    private $roleOptions;
    
    public function __construct($backgroundClass, $roleOptions) {
        $this->backgroundClass = $backgroundClass;
        $this->roleOptions = $roleOptions;
    }
    
    public function displayForm() {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>E-PSSI</title>
            <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        </head>

        <body class="signup-page">
            <div class="<?php echo $this->backgroundClass; ?>"></div>
            <form action="" method="post">
                <h2>Sign Up</h2>
                <select name="role" id="role" required>
                    <option value="" disabled selected>Register As</option>
                    <?php foreach ($this->roleOptions as $role): ?>
                        <option value="<?php echo $role['value']; ?>"><?php echo $role['label']; ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="text" placeholder="Full Name" name="full_name" id="fullname" required>
                <input type="text" placeholder="Email" name="email" id="email" required>
                <input type="text" placeholder="Phone Number" name="phone_number" pattern="[0-9]+" title="Hanya angka yang diperbolehkan" id="phonenumber" required>
                <input type="password" placeholder="Password" name="password" id="password" required>
                <input type="password" placeholder="Confirm Password" name="password2" id="password" required>
                <button href="/login" type="submit" name="register">Sign Up</button>
            </form>
        </body>

        </html>
        <?php
    }
}

// Contoh penggunaan:
$backgroundClass = "background"; // Anda bisa menentukan class background sesuai kebutuhan
$roleOptions = [
    ['value' => 'coach', 'label' => 'Coach'],
    ['value' => 'scouter', 'label' => 'Scouter']
];

$registrationForm = new RegistrationForm($backgroundClass, $roleOptions);
$registrationForm->displayForm();
?>