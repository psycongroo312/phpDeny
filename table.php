        <?php 

    function abc($table){
        foreach  ($array as $key => $value) {
            $template = '
            <tr> <td> %s </td> <td> %s </td> </tr>
            ';
            echo sprintf($template, $key, $value);
        }
    }
     
    
            ?>

