<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$id = null; // Initialize ID variable

// Function to hash IDs
function hashId($id) {
    return md5($id); // Using MD5 for hashing; consider using a stronger hash function in production
}

// Check if 'id' parameter is present in the URL
if (!empty($_GET['id'])) {
    $hashedId = $_GET['id'];
    $users = $userModel->getUsers();
    
    // Find the actual user ID by comparing hashed IDs
    foreach ($users as $user) {
        if (hashId($user['id']) === $hashedId) {
            $id = $user['id'];
            break; // Stop searching once we find the user
        }
    }

    // Attempt to delete the user if ID was found
    if ($id) {
        $deleted = $userModel->deleteUserById($id);
        if ($deleted) {
            echo "User deleted successfully!";
        } else {
            echo "Error deleting user. Please try again.";
        }
    } else {
        echo "User not found!";
    }
}

// Redirect to user list page after processing
header('Location: list_users.php');
exit(); // Ensure the script stops executing after the redirect
?>
