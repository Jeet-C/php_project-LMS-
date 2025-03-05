<?php
session_start();
include("common/db.php");
if(isset($_SESSION['us']) && $_SESSION['id']!=""){
    $se = "SELECT * FROM teacher WHERE id=".$_SESSION['id'];
    $ra = $con->query($se);
    $row = $ra->fetch_assoc();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex justify-end p-4">
        <a href="dashboard.php" class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Dashboard</a>
    </div>
    <div class="max-w-sm mx-auto mt-10">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4">
            <div class=" flex items-center justify-center">
                    <img src="https://img.freepik.com/premium-vector/user-profile-icon-flat-style-member-avatar-vector-illustration-isolated-background-human-permission-sign-business-concept_157943-15752.jpg?semt=ais_hybrid" class="w-13 h-13" alt="wait">
                </div>
                <div class="flex items-center justify-center">
                
                    <div>
                        <h2 class="text-xl  font-bold"><?php echo $row['name']; ?></h2>
                        <p class="text-gray-600"><?php echo $row['email']; ?></p>
                    </div>
                </div>
                <div class=" my-4 flex items-center justify-center">
                    <a href="edit_profile.php" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$con->close();
}else{
 header("location:../login.php");
}

?>