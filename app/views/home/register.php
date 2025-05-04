<!-- app/views/home/register.php -->
<section id="register" class="bg-white py-5">
    <div class="container text-center">
        <h2>Register</h2>
        <form id="registerForm" class="mx-auto" style="max-width: 500px;">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <button class="btn btn-primary w-100" type="submit">Submit</button>
        </form>
        <div id="formMessage" class="mt-3"></div>
    </div>
</section>
