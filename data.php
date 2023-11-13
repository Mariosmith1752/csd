<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['index_form'])) {
        // Handle data from the index.html form
        $name = $_POST['name'];
        $email = $_POST['email'];
        // Process the data as needed
    }

    if (isset($_POST['following_form'])) {
        // Handle data from the following.html form
        $name = $_POST['name'];
        $email = $_POST['email'];
        // Process the data as needed
    }

    if (isset($_POST['videos_form'])) {
        // Handle data from the videos.html form
        $title = $_POST['title'];
        $url = $_POST['url'];
        $description = $_POST['description'];
        // Process the data as needed
    }

    if (isset($_POST['profile_form'])) {
        // Handle data from the profile.html form
        $username = $_POST['username'];
        // Process the data as needed
    }
}

// You can perform further actions or redirects here.
?>
