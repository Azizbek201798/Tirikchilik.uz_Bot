<?php
(new Task())->createBloger($_POST['name']);
header('Location: /blogers');