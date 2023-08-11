<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Voting System</title>

    <!-- Bootstrap css links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body class="bg-dark">
    <h1 class=" text-center text-info my-5">Voting System</h1>
    <div class="bg-info py-4 ">
        <h1 class="text-center text-dark">Register Account</h1>
        <div class="container text-center">
            <form action="../actions/register.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="username" id="" placeholder="Enter your name"
                        required>
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="text" name="mobile" id=""
                        placeholder="Enter your Mobile Number" maxlength="10" minlength="10" required>
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="password" name="password" id=""
                        placeholder="Enter your password" required>
                </div>
                <div class="mb-3">
                    <input class="form-control w-50 m-auto" type="password" name="cpassword" id=""
                        placeholder="Confirm password" required>
                </div>
                <div class="mb-3">
                  
                    <input class="form-control w-50 m-auto" type="file" name="photo" id="formFile">
                </div>
                <div class="mb-3">
                    <select class="form-select w-50 m-auto" name="std">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4 ">Register</button>
                <p>Already have an account? <a class="text-light" href="../index.php">Login here</a></p>

            </form>
        </div>

    </div>



</body>

</html>