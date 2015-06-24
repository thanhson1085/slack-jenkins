<?php
$config = require('config.php');
$branch = $_REQUEST['text'];
$token = $_REQUEST['jenkins_token'];
$job_name = $_REQUEST['job_name'];

if (!$branch) $branch = "master";

file_get_contents($config['jenkins_url'].'/buildByToken/buildWithParameters?job='.$job_name.'&token='.$token.'&branch='.$branch,0);
