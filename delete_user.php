<? 
$page_title = 'Delete a User';
include('includes/header.html');
echo '<h1>Delete a User</h1>';

//Check for valid user_id value
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ){ 
   // From view_users.php
  $id = $_GET['id'];
} elseif ((isset($_POST['id'])) && (is_numeric($_POST['id'])) ){ 
   // Form submission.
  $id = $_POST['id'];
} else { 
  // No valid ID, kill the script.
  echo '<p class="error">This
  page has been accessed in
  error.</p>';
  include('includes/footer.html');
  exit();
}



    