<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP switch-case Statement</title>
</head>
<body>

<?php
$today = date("D");
switch($today){
    case "Mon":
        echo "Today is Monday. ";
        break;
    case "Tue":
        echo "Today is Tuesday.";
        break;
    case "Wed":
        echo "Today is Wednesday.";
        break;
    case "Thu":
        echo "Today is Thursday.";
        break;
    case "Fri":
        echo "Today is Friday. ";
        break;
    case "Sat":
        echo "Today is Saturday.";
        break;
    case "Sun":
        echo "Today is Sunday. HOLIDAYYY!!!";
        break;
    default:
        echo "No information available for that day.";
        break;
}
?>

</body>
</html>