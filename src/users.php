 <?php
$users = array(
    array('username' => 'chuck', 'password' => 'roast'),
    array('username' => 'car', 'password' => 'toons'),
    array('username' => 'dog', 'password' => 'house'),
    array('username' => 'bob', 'password' => 'ross')
);

foreach ($users as $user) {
    echo "Username: " . $user['username']. " - Password: " . $user['password']. "<br>";
}
?>
