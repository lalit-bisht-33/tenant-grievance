<?php
session_start();
if (isset($_GET['logout'])) {  //use this because we have to logout on button click
    session_destroy();
    header("Location: /php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("../config/links.php");
    ?>

<style>
        /* Custom styles for profile-description */
        .profile-wrapper {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .profile-description {
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(216, 213, 213, 0.8);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Make adjustments for smaller screens */
        @media (max-width: 992px) {
            .profile-description {
                font-size: 0.95rem; /* Slightly smaller font size for tablets */
                padding: 15px;
            }
        }

        @media (max-width: 768px) {
            .profile-description {
                font-size: 0.9rem; /* Slightly smaller font size for small screens */
                padding: 12px; /* Reduce padding for small devices */
            }

            .profile-description h3 {
                font-size: 1.2rem; /* Smaller heading on mobile */
            }
        }

        @media (max-width: 576px) {
            .profile-description {
                font-size: 0.85rem; /* Even smaller font size for mobile */
                padding: 10px;
            }

            .profile-description h3 {
                font-size: 1.1rem; /* Adjust heading size on mobile */
            }
        }

        /* Custom ID card styles */
        .id-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            background-color: rgb(231, 234, 236);
            border: 2px solid #ddd;
            display: flex;
            max-width: 500px;
            padding:20px;
            margin-top: 30px;
            margin-left:50px
        }

        .id-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
            border: 3px solid rgb(94, 142, 105);
        }

        .id-card .details {
            flex: 1;
        }

        .id-card .details h5 {
            color: rgb(43, 46, 48);
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .id-card .details p {
            font-size: 1rem;
            color: rgb(63, 68, 72);
        }

        .id-card .details p strong {
            color: rgb(126, 81, 132);
        }

        /* Layout container */
        .profile-container {
            display: flex;
            gap: 30px;
            margin-top: 50px;
            flex-wrap: wrap;
        }

        /* Left side description */
        .profile-description {
            flex: 1;
            min-width: 300px;
        }

        /* Right side (ID Card) */
        .profile-info {
            flex: 2;
        }

        /* Additional styles */
        .profile-description h3 {
            margin-bottom: 15px;
        }

        .profile-description p {
            line-height: 1.6;
        }

        body {
    background: linear-gradient(135deg, rgba(0, 123, 255, 0.1), rgba(0, 0, 0, 0.1));
  }

  .card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .card-header {
    background-color: #0069d9;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .btn-outline-primary {
    border-color: #0069d9;
    color: #0069d9;
    transition: all 0.3s ease;
  }

  .btn-outline-primary:hover {
    background-color: #0069d9;
    color: #fff;
  }

  .btn-outline-secondary {
    border-color: #6c757d;
    color: #6c757d;
    transition: all 0.3s ease;
  }

  .btn-outline-secondary:hover {
    background-color: #6c757d;
    color: #fff;
  }
    </style>
</head>
<body>
    <?php
    include("../components/navbar.php");
    

    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    $username=$_SESSION['username'];
    $email=$_SESSION['email'];
    $password=$_SESSION['password'];
    include("../database/fetch_login.php"); 
   
?>
    

<div class="container-fluid ">
    <div class="p-3 pt-3 mt-3" style="background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/disp/69186483147725.5d341edc30952.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%;">
        <!-- Main Profile Container -->
        <div class="profile-container row">
            <!-- Left Side: Tenant Info Description -->
            <div class="profile-description col-lg-6 col-md-12" 
     style="background-color: rgba(216, 213, 213, 0.8); padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    <h3>About the User</h3>
    <p>Welcome to your tenant profile! Here, you can easily manage your details, preferences, and contact information. We’re committed to making your stay smooth, transparent, and comfortable.</p>
    <p>If you need assistance, we’re here for you! Don’t hesitate to reach out anytime.</p>
    <p>Your comfort and satisfaction are our top priority. Enjoy your stay!</p>
</div>

            <!-- Right Side: User ID Card -->
            <div class="profile-info col-lg-6 col-md-12 mt-4 mt-md-0">
                <div class="id-card">
                    <!-- Profile Image -->
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/da69ee72497091.5be9b68557c98.jpg" alt="Profile Image" class="img-fluid rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                    <!-- User Details -->
                    <div class="details mt-3">
                        <h5><?php echo $_SESSION['username']; ?></h5>
                        <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
                        <p><strong>Password:</strong> <?php echo $_SESSION['password']; ?></p>
                        <p><strong>Contact Info:</strong> <?php echo $_SESSION['contact']; ?></p>
                        <p><strong>Account Created On:</strong>
                            <?php
                            // Convert and format the created time
                            $created_time = $_SESSION['created_time'];
                            $datetime = new DateTime($created_time);
                            $formatted_date = $datetime->format('F j, Y');
                            echo $formatted_date;
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<br>
<br>

<br>
<br>
<div class="d-flex justify-content-center align-items-center flex-column">
    <!-- Form Title -->
    <div class="fw-bold fs-1 mb-4">
        Grievance File
    </div>

    <?php if (isset($_SESSION['success_grievance'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> <?php echo $_SESSION['success_grievance']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php unset($_SESSION['success_grievance']); ?> <!-- Clear the success message after displaying -->
<?php endif; ?>
    
    <!-- Form -->
    <form class="justify-content-center w-50" method="POST" action="../server/grievancesHandle.php">
        <!-- Grievance Title -->
        <div class="mb-3">
            <label for="grievanceTitle" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="grievanceTitle" placeholder="Enter grievance title" required>
        </div>

        <!-- Grievance Description -->
        <div class="mb-3">
            <label for="grievanceDescription" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="grievanceDescription" rows="4" placeholder="Enter detailed description" required></textarea>
        </div>

        <!-- Grievance Image -->
        <div class="mb-3">
            <label for="grievanceImage" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="grievanceImage" accept="image/*">
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="grievanceStatus" class="form-label">Status</label>
            <select class="form-select" name="status" id="grievanceStatus" required>
                <option value="" disabled selected>Select status</option>
                <option value="open">Open</option>
                <option value="resolved">Resolved</option>
                <option value="in-progress">In Progress</option>
            </select>
        </div>

        <!-- Priority -->
        <div class="mb-5">
            <label for="grievancePriority" class="form-label">Priority</label>
            <select class="form-select" name="priority" id="grievancePriority" required>
                <option value="" disabled selected>Select priority</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100" name="grievance">Submit</button>

        <!-- Login Link -->
        <!-- <div class="mt-3 text-center">
            <p>Already have an account? <a href="?login" class="text-danger text-decoration-none">Login</a></p>
        </div> -->
    </form>
</div>

<br>
<br>
<br>

<?php }
else{
    echo "no session for user";
}   
?>



<br><br><hr><br><br>
<?php
include("../database/fetch_landlord.php");
?>




<?php
$landlord_name = $_SESSION['landlord_name'];
$landlord_email = $_SESSION['landlord_email'];
$landlord_phone = $_SESSION['landlord_phone'];
$landlord_address = $_SESSION['landlord_address'];
?>

 <!-- Profile Section -->
 <div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10">
      <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-primary text-white text-center p-4">
          <h2 class="mb-0">Landlord Profile</h2>
        </div>
        <div class="card-body p-4">
          <dl class="row mb-4">
            <dt class="col-md-4 text-muted">Name:</dt>
            <dd class="col-md-8 fs-5"><?php echo htmlspecialchars($landlord_name); ?></dd>
            <dt class="col-md-4 text-muted">Email:</dt>
            <dd class="col-md-8 fs-5"><?php echo htmlspecialchars($landlord_email); ?></dd>
            <dt class="col-md-4 text-muted">Phone:</dt>
            <dd class="col-md-8 fs-5"><?php echo htmlspecialchars($landlord_phone); ?></dd>
            <dt class="col-md-4 text-muted">Address:</dt>
            <dd class="col-md-8 fs-5"><?php echo htmlspecialchars($landlord_address); ?></dd>
          </dl>
        </div>
        <div class="card-footer text-center p-3">
          <a href="/php/pages/edit_profile.php" class="btn btn-outline-primary btn-lg">Edit Profile</a>
          <a href="/php/pages/home.php" class="btn btn-outline-secondary btn-lg ms-3">Back to Home</a>
        </div>
      </div>
    </div>
  </div>
</div>



    <?php
    include("../components/footer.php");
    ?>
</body>
</html>