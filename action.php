<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'disco':
            disco();
            break;
        case 'twist':
            twist();
            break;
        case 'stepp':
            stepp();
            break;
        case 'robot':
            robot();
            break;
    }
}

function disco() {
    echo "images/disco.gif";
    exit;
}

function twist() {
    echo "images/twist.gif";
    exit;
}
function stepp() {
    echo "images/stepp.gif";
    exit;
}

function robot() {
    echo "images/robot.gif";
    exit;
}
?>