<?php
class RegisterController extends Controller
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $job_title = $_POST['job_title'];
            $company = $_POST['company'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $company_website_URL = $_POST['company_website_URL'];
            $privacy_policy = isset($_POST['privacy_policy']) ? true : false;

            $errors = [];

            if (empty($first_name)) $errors['first_name'] = 'First name is required.';
            if (empty($last_name)) $errors['last_name'] = 'Last name is required.';
            if (empty($job_title)) $errors['job_title'] = 'Job title is required.';
            if (empty($company)) $errors['company'] = 'Company name is required.';
            if (!preg_match("/^[0-9]{10}$/", $phone)) $errors['phone'] = 'Valid phone number is required.';
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Valid email is required.';
            if (empty($company_website_URL)) $errors['company_website_URL'] = 'Company website URL is required.';
            if (!$privacy_policy) $errors['privacy_policy'] = 'You must agree to the privacy policy.';

            if (empty($errors)) {
                $response = ['success' => true];
            } else {
                $response = ['success' => false, 'errors' => $errors];
            }

            echo json_encode($response);
        }
    }
}

