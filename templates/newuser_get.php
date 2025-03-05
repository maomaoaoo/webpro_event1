<section>
    <form action="newuser" method="post" enctype="multipart/form-data">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
        </div>
        <div>
            <label for="image">Profile Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
        </div>
        <div>
            <label for="birthdate">Birth Date:</label>
            <input type="date" id="birthdate" name="birthdate" required>
        </div>
        <button type="submit">Create User</button>
    </form>
</section>