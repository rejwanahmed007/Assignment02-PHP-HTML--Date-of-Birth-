<html>
    <head>
        <title>Date of Birth</title>
    </head>
    <body>
        <form method="POST">
            <fieldset >
                <legend>
                <b>DATE OF BIRTH</b>
                </legend>
                <table border="0">
                    <tr>
                        <td>dd</td>
                        <td> </td>
                        <td>mm</td>
                        <td> </td>
                        <td>yyyy</td>
                        
                    </tr>
                    <tr>
                        <td><input type="text" name="day"
                            <?php
                            if(isset($_REQUEST['submit']))
                            {?>
                                value="<?php echo $_REQUEST['day'];
                            } ?>"
                            
                        ></td>
                        <td>/</td>
                        <td><input type="text" name="month"
                            <?php
                            if(isset($_REQUEST['submit']))
                            {?>
                                value="<?php echo $_REQUEST['month'];
                            } ?>"
                            
                        ></td>
                        <td>/</td>
                        <td><input type="text" name="year"
                            <?php
                            if(isset($_REQUEST['submit']))
                            {?>
                                value="<?php echo $_REQUEST['year'];
                            } ?>"
                            
                        ></td>
                    </tr>
                    

                </table> 
                <hr>
                <table border="0">
                    <tr>
                        <td><input type="submit" name="submit" ></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
</html>