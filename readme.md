<h2>Nature Shares</h2>
<p>Built in Laravel</p>
<p>API with Passport Authentication with dummy data</p>

<h2>To test:</h2>
<p>Run php artisan migrate, followed by db:seed</p>
<p>Seeding will populate companies, projects and values databases and add a few users.</p>
<p>Use postman to register</p>
<br>
<p>Register: </p>
<p>Headers: Accept:appliction/json and Content-Type:application/json</p>
<p>Required fields: name, email, password, confirm_password</p>
<p>Built in Laravel</p>
<br>
<p>Login</p>
<p>Required fields: email and password</p>
<p>Use the token generated for all further requests.</p>
<p>Add another header: Authorization: Bearer $token</p>
<br>
<p>That is it. Now all that is needed is to follow the routes/api.php endpoints.</p>
<br>
<h3>Keep watching becuase there is more to come.</h3>

