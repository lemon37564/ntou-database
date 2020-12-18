<?php
header("Content-type:text/html;charset=utf-8");
include_once "db_conn.php";

echo "<table border = '1'>
<tr>
<th>sID</th>
<th>course_id</th>
<th>course_name</th>
<th>prof_name</th>
<th>rating</th>
<th>comment</th>
<th>grading_policy</th>
<th>takes_attendance</th>
<th>previous_years_test_question</th>
<th>upvotes</th>
<th>review_date</th>
</tr>";

$query = ("select * from reviews");
$stmt = $db->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
 
for($i=0;$i<count($result);$i++){
	echo "<tr>";
	echo "<td>".$result[$i]['sID']."</td>";
	echo "<td>".$result[$i]['course_id']."</td>";
	echo "<td>".$result[$i]['course_name']."</td>";
	echo "<td>".$result[$i]['prof_name']."</td>";
	echo "<td>".$result[$i]['rating']."</td>";
	echo "<td>".$result[$i]['comment']."</td>";
	echo "<td>".$result[$i]['grading_policy']."</td>";
	echo "<td>".$result[$i]['takes_attendance']."</td>";
	echo "<td>".$result[$i]['previous_years_test_question']."</td>";
	echo "<td>".$result[$i]['upvotes']."</td>";
	echo "<td>".$result[$i]['review_date']."</td>";
	echo "</tr>";
}
?>
