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
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <div class=" flex items-center justify-center">
                    <img src="https://img.freepik.com/premium-vector/user-profile-icon-flat-style-member-avatar-vector-illustration-isolated-background-human-permission-sign-business-concept_157943-15752.jpg?semt=ais_hybrid" class="h-15" alt="wait">
                </div>
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Edit Profile</h2>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-300" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-300" readonly required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" id="password" value="<?php echo $row['password']; ?>" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200 focus:border-indigo-300" required>
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" name="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-600 focus:outline-none focus:ring focus:ring-indigo-200">Save Changes</button>
                </div>
            </form>
            <?php
            if(isset($_POST['submit'])){
                $na=$_POST['name'];
                // $em=$_POST['email'];
                $pa=md5($_POST['password']);
                $up="UPDATE teacher SET name='$na',password='$pa' WHERE id=".$_SESSION['id'];
                if($con->query($up)){
                    header('location:profile.php');
                }else{
                    echo "Error";
                }
            }

            ?>
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