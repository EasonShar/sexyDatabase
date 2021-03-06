<?php
include ("php/Connections/connect.php");
function read_student($group, $link) {
	$row = mysql_query ( "SELECT fullname FROM `student` WHERE `groupID` $group", $link );
	$studentlist = array ();
	while ( $column = mysql_fetch_array ( $row ) ) {
		$studentlist [] = $column ['fullname'];
	}
	for($i = 0; $i < count ( $studentlist ); $i ++) {
		echo "<li class=\"panel panel-default\">" . $studentlist [$i] . "</li>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- external library -->
<script src="libs/jquery/jquery-2.1.1.min.js"></script>
<script src="libs/jquery/jquery-ui-1.11.2.min.js"></script>
<link href="libs/jquery/jquery-ui-1.11.2.min.css" rel="stylesheet" />
<link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet">
<script src="libs/bootstrap/bootstrap.min.js"></script>
<!--Own coding -->
<script src="js/cookie.js"></script>
<link href="css/student.css" rel="stylesheet" />
<script src="js/allocate.js"></script>
<script src="js/logout.js"></script>
</head>
<body>

	<div class="page-header">
		<h1>
			Peer System <small>Admin, Welcome!</small>
		</h1>
	</div>
	<!--end of header-->

	<div class="bs-example bs-example-tabs">
		<ul id="myTab" class="nav nav-tabs">
			<li class="tab-style"><a href="admin_home.php">Home</a></li>
			<li class="tab-style active"><a>Group</a></li>
			<li class="tab-style"><a href="admin_allocate_group.php">Assessment</a></li>
			<li class="tab-style"><a href="php/totalmark.php">Rank</a></li>
			<li class="tab-style" id="logout"><a href="php/logout.php">Log Out</a></li>
		</ul>
	</div>
	<!--end of tab-->

	<div class="container" style="margin-top: 30px;">


		<div class="panel panel-default col-md-4 col-md-offset-2"
			style="padding-right: 0px; padding-left: 0px;">
			<div class="panel-heading">
				<h3 class="panel-title">Students List</h3>
			</div>

			<div class="panel-body">
				<div role="tabpanel" id="NULL">
					<ul id="sortable1"
						class="connectedSortable panel panel-default allocate-list-container">
						<?php read_student ( "is NULL", $link );?>
					</ul>
				</div>
			</div>
		</div>


		<div class="panel panel-default allocate-operation col-md-4"
			style="padding-right: 0px; padding-left: 0px;">
			<div class="panel-heading">
				<h3 class="panel-title">Group Number</h3>
			</div>
			<div class="panel-body">
				<div role="tabpanel">


					<!-- Nav tabs -->
					<ul id="tabs" class="nav nav-tabs" role="tablist">
						<li class="allocate-tab active"><a href="#\'A\'" aria-controls="A"
							data-toggle="tab">A</a></li>
						<li class="allocate-tab"><a href="#\'B\'" aria-controls="B"
							role="tab" data-toggle="tab">B</a></li>
						<li class="allocate-tab"><a href="#\'C\'" aria-controls="C"
							role="tab" data-toggle="tab">C</a></li>
						<li class="allocate-tab"><a href="#\'D\'" aria-controls="D"
							role="tab" data-toggle="tab">D</a></li>
						<li class="allocate-tab"><a href="#\'E\'" aria-controls="E"
							role="tab" data-toggle="tab">E</a></li>
						<li class="allocate-tab"><a href="#\'F\'" aria-controls="F"
							role="tab" data-toggle="tab">F</a></li>
						<li class="allocate-tab"><a href="#\'G\'" aria-controls="G"
							role="tab" data-toggle="tab">G</a></li>
						<li class="allocate-tab"><a href="#\'H\'" aria-controls="H"
							role="tab" data-toggle="tab">H</a></li>
						<li class="allocate-tab"><a href="#\'I\'" aria-controls="I"
							role="tab" data-toggle="tab">I</a></li>
						<li class="allocate-tab"><a href="#\'J\'" aria-controls="J"
							role="tab" data-toggle="tab">J</a></li>
						<li class="allocate-tab"><a href="#\'K\'" aria-controls="K"
							role="tab" data-toggle="tab">K</a></li>
						<li class="allocate-tab"><a href="#\'L\'" aria-controls="L"
							role="tab" data-toggle="tab">L</a></li>
						<li class="allocate-tab"><a href="#\'M\'" aria-controls="M"
							role="tab" data-toggle="tab">M</a></li>
						<li class="allocate-tab"><a href="#\'N\'" aria-controls="N"
							role="tab" data-toggle="tab">N</a></li>
						<li class="allocate-tab"><a href="#\'O\'" aria-controls="O"
							role="tab" data-toggle="tab">O</a></li>
						<li class="allocate-tab"><a href="#\'P\'" aria-controls="P"
							role="tab" data-toggle="tab">P</a></li>
						<li class="allocate-tab"><a href="#\'Q\'" aria-controls="Q"
							role="tab" data-toggle="tab">Q</a></li>
						<li class="allocate-tab"><a href="#\'R\'" aria-controls="R"
							role="tab" data-toggle="tab">R</a></li>
						<li class="allocate-tab"><a href="#\'S\'" aria-controls="S"
							role="tab" data-toggle="tab">S</a></li>
						<li class="allocate-tab"><a href="#\'T\'" aria-controls="T"
							role="tab" data-toggle="tab">T</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="'A'">
							<ul id="sortable2"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'A'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'B'">
							<ul id="sortable3"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'B'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'C'">
							<ul id="sortable4"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'C'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'D'">
							<ul id="sortable5"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'D'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'E'">
							<ul id="sortable6"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'E'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'F'">
							<ul id="sortable7"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'F'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'G'">
							<ul id="sortable8"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'G'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'H'">
							<ul id="sortable9"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'H'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'I'">
							<ul id="sortable10"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'I'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'J'">
							<ul id="sortable11"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'J'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'K'">
							<ul id="sortable12"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'K'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'L'">
							<ul id="sortable13"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'L'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'M'">
							<ul id="sortable14"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'M'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'N'">
							<ul id="sortable15"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'N'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'O'">
							<ul id="sortable16"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'O'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'P'">
							<ul id="sortable17"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'P'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'Q'">
							<ul id="sortable18"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'Q'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'R'">
							<ul id="sortable19"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'R'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'S'">
							<ul id="sortable20"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'S'", $link );?>
							</ul>
						</div>
						<div role="tabpanel" class="tab-pane" id="'T'">
							<ul id="sortable21"
								class="connectedSortable panel panel-default allocate-list-container">
								<?php read_student ( "= 'T'", $link );?>
							</ul>
						</div>
					</div>
					<!--End of Tab panes -->

				</div>
			</div>

			<div style="text-align: center; margin-bottom: 30px;">
				<p>
					<button type="button" class="btn btn-primary" id="btnsave"
						style="width: 100px;" onclick="allocateStudent()">Save</button>
				</p>
			</div>
		</div>
		<!-- End of right panel -->

	</div>
	<script type="text/javascript">
	function allocateStudent(){

		var groupID=["NULL","'A'","'B'","'C'","'D'","'E'","'F'","'G'","'H'","'I'",
		     		"'J'","'K'","'L'","'M'","'N'","'O'","'P'","'Q'","'R'","'S'","'T'"];
		var allocate_student = [];
		var allocate_group = [];

		var j=0;
		for(j; j<21;j++){
			var groupmember = document.getElementById(groupID[j]).childNodes[1].childNodes;
			var i=0;
			for(i; i<groupmember.length;i++){
				var child = groupmember[i].innerText;
				if(child!=null){
					allocate_student.push(child);
					allocate_group.push(groupID[j]);	
				}		
			}
		}
		setCookie("student",JSON.stringify(allocate_student),3600);
		setCookie("groupID",JSON.stringify(allocate_group),3600);
		location.href='php/allocate_student.php';	
		
	}
    </script>

</body>
</html>

