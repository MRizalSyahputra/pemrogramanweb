<php 
    //menghubungkan situs dengan database
    $conn=mysqli_connect("localhost", "root" , "" , "pemroweb" );
    
    function query ($query) { 
        global $conn; //mengambil variabel conn dari luar function
        
        $result=mysqli_query($conn, $query); 
        $rows=[]; 
        
        while( $row=mysqli_fetch_assoc($result) ) { 
            $ rows []=$row;
        } return $rows; 
    } 
?>