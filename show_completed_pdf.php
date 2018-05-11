<?php
session_start();
include "db_mysqli.php";

require("fpdf181/fpdf.php");
$pdf = new FPDF();

$pdf -> AddPage();

$pdf -> SetFont("Arial","I","15");


//show task
$task = $_GET['task'];
$sub_id = $_GET['sub'];
$crowd_id = $_GET['user'];
$sub_cat = $_GET['cat'];
$br = "\n";

				
$query_user = 'SELECT *FROM crowd_user WHERE crowd_id = "'.$crowd_id.'"';
$result_user = mysqli_query($conn,$query_user); //select questions of the selected task

if ($sub_cat != "image"){
    while($row_user = mysqli_fetch_array($result_user))
    {
        $user_name = $row_user['crowd_user'];
        $user_first_name = $row_user['crowd_first'];
        $user_last_name = $row_user['crowd_last'];
        $user_address = $row_user['address'];
        $user_email = $row_user['crowd_mail'];
        $user_country = $row_user['crowd_country'];

        $pdf->SetFillColor(235,236,236);

        $pdf->SetFont('Arial','I',12);
        // Header starts ///
        $width_cell=array(50);;
        $pdf->Cell(150,10,"Crowd Details",1,1,'C',true);
        $width_cell=array(50,100);
        $pdf->Cell($width_cell[0],10,'First Name',1,0,'L',true); // First header column
        $pdf->Cell($width_cell[1],10,$user_first_name,1,1,'L',true); // Second header column
        $pdf->Cell($width_cell[0],10,'Last Name',1,0,'L',true);
        $pdf->Cell($width_cell[1],10,$user_last_name,1,1,'L',true);
        $pdf->Cell($width_cell[0],10,'Address',1,0,'L',true); // First header column
        $pdf->Cell($width_cell[1],10,$user_address,1,1,'L',true); // Second header column
        $pdf->Cell($width_cell[0],10,'Email',1,0,'L',true); // First header column
        $pdf->Cell($width_cell[1],10,$user_email,1,1,'L',true); // Second header column
        $pdf->Cell($width_cell[0],10,'Country',1,0,'L',true); // First header column
        $pdf->Cell($width_cell[1],10,$user_country,1,1,'L',true); // Second header column
    }
    $pdf -> write(3,$br);
    $pdf -> write(3,$br);

    if ($sub_cat == 'yesno'){
        $query_yesno = 'SELECT yesno_q,yesno_ans FROM yesno WHERE task_id = "'.$task.'" and sub_id = "'.$sub_id.'"';
        $result_yesno = mysqli_query($conn,$query_yesno); //select questions of the selected task

        $pdf->SetFillColor(193,229,252); // Background color of header
        $width_cell=array(150,30);
        $pdf->SetFont('Arial','B',16);
        // Header starts ///
        $pdf->Cell($width_cell[0],10,'Question',1,0,'C',true); // First header column
        $pdf->Cell($width_cell[1],10,'Answer',1,1,'C',true); // Second header column

        //// header ends ///////

        $pdf->SetFont('Arial','',14);
        $pdf->SetFillColor(235,236,236); // Background color of header
        $fill=false; // to give alternate background fill color to rows

        /// each record is one row  ///
        foreach ($conn->query($query_yesno) as $row) {
            $pdf->Cell($width_cell[0],10,$row['yesno_q'],1,0,'L',$fill);
            $pdf->Cell($width_cell[1],10,$row['yesno_ans'],1,1,'L',$fill);
            $fill = !$fill; // to give alternate background fill  color to rows
        }
    }
    else if ($sub_cat == 'mcq3'){
        $query_mcq3 = 'SELECT mcq3_q,,mcq3_ans FROM mcq3 WHERE task_id = "'.$task.'" and sub_id = "'.$sub_id.'"';
        $result_mcq3 = mysqli_query($conn,$query_mcq3); //select questions of the selected task

        $pdf->SetFillColor(193,229,252); // Background color of header
        $width_cell=array(150,30);
        $pdf->SetFont('Arial','B',16);
        // Header starts ///
        $pdf->Cell($width_cell[0],10,'Question',1,0,'C',true); // First header column
        $pdf->Cell($width_cell[1],10,'Answer',1,1,'C',true); // Second header column

        //// header ends ///////

        $pdf->SetFont('Arial','',14);
        $pdf->SetFillColor(235,236,236); // Background color of header
        $fill=false; // to give alternate background fill color to rows

        /// each record is one row  ///
        foreach ($conn->query($query_mcq3) as $row) {
            $pdf->Cell($width_cell[0],10,$row['mcq3_q'],1,0,'L',$fill);
            $pdf->Cell($width_cell[1],10,$row['mcq3_ans'],1,1,'L',$fill);
            $fill = !$fill; // to give alternate background fill  color to rows
        }
    }
    else if ($sub_cat == 'mcq4'){
        $query_mcq4 = 'SELECT *FROM mcq4 WHERE task_id = "'.$task.'" and sub_id = "'.$sub_id.'"';
        $result_mcq4 = mysqli_query($conn,$query_mcq4); //select questions of the selected task

        $pdf->SetFillColor(193,229,252); // Background color of header
        $width_cell=array(150,30);
        $pdf->SetFont('Arial','B',16);
        // Header starts ///
        $pdf->Cell($width_cell[0],10,'Question',1,0,'C',true); // First header column
        $pdf->Cell($width_cell[1],10,'Answer',1,1,'C',true); // Second header column

        //// header ends ///////

        $pdf->SetFont('Arial','',14);
        $pdf->SetFillColor(235,236,236); // Background color of header
        $fill=false; // to give alternate background fill color to rows

        /// each record is one row  ///
        foreach ($conn->query($query_mcq4) as $row) {
            $pdf->Cell($width_cell[0],10,$row['mcq4_q'],1,0,'L',$fill);
            $pdf->Cell($width_cell[1],10,$row['mcq4_ans'],1,1,'L',$fill);
            $fill = !$fill; // to give alternate background fill  color to rows
        }
    }
    else if ($sub_cat == 'translation'){
        $query_trans = 'SELECT *FROM trans_lan WHERE task_id = "'.$task.'" and sub_id = "'.$sub_id.'"';
        $result_trans = mysqli_query($conn,$query_trans); //select questions of the selected task

        $pdf->SetFillColor(193,229,252); // Background color of header
        //$width_cell=array(99,99);
        $pdf->SetFont('Arial','B',16);
        // Header starts ///
        //$pdf->Cell($width_cell[0],10,'Text',1,0,'C',true); // First header column
        //$pdf->Cell($width_cell[1],10,'Translation',1,1,'C',true); // Second header column

        //// header ends ///////

        $pdf->SetFont('Arial','',12);
        $pdf->SetFillColor(235,236,236); // Background color of header
        $fill=false; // to give alternate background fill color to rows

        /// each record is one row  ///
        foreach ($conn->query($query_trans) as $row) {
            $pdf -> SetFont("Arial","I","12");
            $pdf->MultiCell(198,10,$row['text'],1);
            $pdf -> SetFont("Arial","B","12");
            $pdf->MultiCell(198,10,$row['lan_ans'],1);
            $fill = !$fill; // to give alternate background fill  color to rows
            $pdf -> write(3,$br);
        }
    }
    $pdf->Output();
    ?>
<?php
}

else if ($sub_cat == 'image') {
    while($row_user = mysqli_fetch_array($result_user)) {
        $user_name = $row_user['crowd_user'];
        $user_first_name = $row_user['crowd_first'];
        $user_last_name = $row_user['crowd_last'];
        $user_address = $row_user['address'];
        $user_email = $row_user['crowd_mail'];
        $user_country = $row_user['crowd_country'];
    }
    echo '<table border=1px align="center">';
    echo '<tr>';
    echo '<td style="width:200px">First Name</td><td style="width:200px">'.$user_first_name.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="width:100px">Last Name</td><td style="width:100px">'.$user_last_name.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="width:100px">Address</td><td style="width:100px">'.$user_address.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="width:100px">Email</td><td style="width:100px">'.$user_email.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="width:100px">Country</td><td style="width:100px">'.$user_country.'</td>';
    echo '</tr>';
    echo '</table>';

    $query_image = 'SELECT *FROM image WHERE task_id = "' . $task . '" and sub_id = "' . $sub_id . '"';
    $result_image = mysqli_query($conn, $query_image); //select questions of the selected task
    echo '<table border=1px align = "center">';
    echo '<th>Image</th><th>Question</th><th>Answer</th>';


    while ($row_image = mysqli_fetch_array($result_image)) {
        $image_question = $row_image['image_q'];
        $image_answer = $row_image['image_ans'];
        $photo = $row_image['photo'];

        $image = '<img src="data:image/jpeg;base64,' . base64_encode($photo) . '" width = "250" height = "150"/>';
        echo '<tr>';
        echo '<td style="width:400px">'.$image.'</td><td style="width:400px">'.$image_question.'</td><td style="width:200px">'.$image_answer.'</td>';
        echo '</tr>';
        echo "<br>";
    }
}

?>