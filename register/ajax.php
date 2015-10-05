<?php

sleep(2);

$users = ['aa@aa.com', 'peter', 'john', 'mike'];

echo json_encode(! in_array($_POST['email'], $users));

exit;
