<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <link rel="stylesheet" href="style.php">
</head>

<body>

<div class="container">

    <div class="card">

        <h1>Student Registration</h1>

        <p class="subtitle">
            Enter your information below
        </p>

        <form action="submit.php" method="POST">

            <div class="form-group">

                <label for="student_name">
                    Student Name
                </label>

                <input
                    type="text"
                    id="student_name"
                    name="student_name"
                    placeholder="Enter your name"
                    required
                >

            </div>


            <div class="form-group">

                <label for="student_id">
                    Student ID
                </label>

                <input
                    type="text"
                    id="student_id"
                    name="student_id"
                    placeholder="Enter your student ID"
                    required
                >

            </div>


            <div class="form-group">

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    required
                >

            </div>


            <div class="form-group">

                <label for="department">
                    Department
                </label>

                <select
                    id="department"
                    name="department"
                    required
                >

                    <option value="">
                        Select Department
                    </option>

                    <option value="Computer Science and Engineering">
                        Computer Science and Engineering
                    </option>

                    <option value="Electrical and Electronic Engineering">
                        Electrical and Electronic Engineering
                    </option>

                    <option value="Business Administration">
                        Business Administration
                    </option>

                    <option value="Architecture">
                        Architecture
                    </option>

                    <option value="English">
                        English
                    </option>

                </select>

            </div>


            <button type="submit" class="btn">
                Submit Registration
            </button>

        </form>

    </div>

</div>

</body>

=======
<html>
<head>
    <title>Online Job Application</title>
</head>
<body>

<h2>Online Job Application Form</h2>

<form action="process.php" method="POST" enctype="multipart/form-data">

Applicant ID:
<input type="text" name="id"><br><br>

Full Name:
<input type="text" name="name"><br><br>

Email:
<input type="email" name="email"><br><br>

Phone:
<input type="text" name="phone"><br><br>

Password:
<input type="password" name="password"><br><br>

Gender:
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<br><br>

Job Position:
<select name="position">
<option value="">Select Position</option>
<option>Software Developer</option>
<option>Web Developer</option>
<option>Database Administrator</option>
<option>Network Engineer</option>
</select>
<br><br>

Qualification:
<input type="text" name="qualification"><br><br>

Address:
<textarea name="address"></textarea>
<br><br>

Upload CV:
<input type="file" name="cv">
<br><br>

<input type="submit" value="Apply">

</form>

</body>
>>>>>>> 683c52cf2d935ba1b1782fe99ce4ac36f8df6684
</html>