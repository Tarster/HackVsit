<?php
include_once('header.php');
require('db.php');
require('logic.php');

$unit_id ='1';


//mysqli_close($conn);
echo "
<body>
    <header class='showcase'>
        <div class='container content '>
            <div class='row'>
                <div class='col'>

                        <img src='$image_location_array[0]' alt=''  title='Bootstrap'>
                        <p>$Status_array[0]</p>

                        <td>
                           <form action= newupdate.php method= 'post'>
                                <input type='hidden' name='value' value=$Inverted_values_array[0] size='15' >
                                <input type='hidden' name='unit' value=$unit_id >
                                <input type='hidden' name='column' value=$Button_array[0] >
                                <input type= 'submit' name= 'change_but' value = 'Switch'>
                           </form>
                        </td>



                </div>

                <div class='col'>

                        <img src='$image_location_array[1]' alt=''  title='Bootstrap'>
                        <p>$Status_array[1]</p>
                        <td>
                           <form action= newupdate.php method= 'post'>
                                <input type='hidden' name='value' value=$Inverted_values_array[1] size='15' >
                                <input type='hidden' name='unit' value=$unit_id >
                                <input type='hidden' name='column' value=$Button_array[1] >
                                <input type= 'submit' name= 'change_but' value = 'Switch'>
                           </form>
                        </td>


                </div>

                <div class='col'>

                        <img src='$image_location_array[2]' alt='' title='Bootstrap'>
                        <p>$Status_array[2]</p>
                        <td>
                           <form action= newupdate.php method= 'post'>
                                <input type='hidden' name='value' value=$Inverted_values_array[2] size='15' >
                                <input type='hidden' name='unit' value=$unit_id >
                                <input type='hidden' name='column' value=$Button_array[2] >
                                <input type= 'submit' name= 'change_but' value = 'Switch'>
                           </form>
                        </td>


                </div>

                <div class='col'>

                        <img src='$image_location_array[3]' alt=''  title='Bootstrap'>
                        <p>$Status_array[3]</p>
                        <td>
                           <form action= newupdate.php method= 'post'>
                                <input type='hidden' name='value' value=$Inverted_values_array[3] size='15' >
                                <input type='hidden' name='unit' value=$unit_id >
                                <input type='hidden' name='column' value=$Button_array[3] >
                                <input type= 'submit' name= 'change_but' value = 'Switch'>
                           </form>
                        </td>



                    </div>
                </div>
            </div>

    </header>
" ;
?>

<?php include_once('footer.php')?>
