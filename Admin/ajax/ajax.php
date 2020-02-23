<html>
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function()
            {
                $("#userId").change(function()
                {
                    //get selected parent option 
                    var admin_id = $("#userId").val();
                    //alert(admin_id);
                    $.ajax(
                            {
                                type: "GET",
                                url: "names.php?admin_id=" + admin_id,
                                success: function(data)
                                {
                                    $("#names").html(data);
                                    
                                }
                            });
                });

            });
        </script>
<?php 
$conn = mysqli_connect("localhost","root","","smartsell");

$result = mysqli_query($conn, "SELECT * FROM admin");
while($row = mysqli_fetch_array($result)){
	$userSet[] = $row;
}
?>        
    </head>
    <body>        
        <h2>Select User</h2>
        <form action="ajax.php" method="post">
            <select name='userId' id='userId'>
                <option value=""></option>
                <?php
                foreach ($userSet as $key => $value) {
                    echo "<option value='{$value['admin_id']}'>{$value['admin_id']}</option>";
                }
                ?>
            </select>
            <select id="names"></select>
        </form> 
    </body>
</html>    
