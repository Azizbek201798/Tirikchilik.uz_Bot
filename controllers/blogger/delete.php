<?php
(new Task())->deleteBloger($_POST['id']);
header('Location: /blogers');