<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Woo extends CI_Controller {

    public function index()
    {
        $t = 0;
        $c = 0;
        //loop to show all the tables and fields    
        $loop = mysql_query("SHOW tables FROM hrtms_db")
        or die ('cannot select tables');

        while($table = mysql_fetch_array($loop))
        {

            echo "
                <table cellpadding=\"2\" cellspacing=\"2\" border=\"0\" width=\"75%\">
                    <tr bgcolor=\"#666666\">
                        <td colspan=\"6\" align=\"center\"><b><font color=\"#FFFFFF\">" . $table[0] . "</font></td>
                    </tr>
                    <tr>
                        <td>Field</td>
                        <td>Type</td>
                        <td>Key</td>
                        <td>Default</td>
                        <td>Extra</td>
                        <td>Sample</td>
                        
                    </tr>";

            $i = 0; //row counter
            $row = mysql_query("SHOW columns FROM " . $table[0])
            or die ('cannot select table fields');

            while ($col = mysql_fetch_array($row))
            {
                echo "<tr";

                if ($i % 2 == 0)
                    echo " bgcolor=\"#CCCCCC\"";

                echo ">
                    <td>" . $col[0] . "</td>
                    <td>" . $col[1] . "</td>
                    <td>" . $col[2] . "</td>
                    <td>" . $col[3] . "</td>
                    <td>" . $col[4] . "</td>";

                $query = $this->db->query("SELECT ".$col[0]." FROM ".$table[0]." LIMIT 1");
                if(is_array($query->row($col[0]))) {

                }
                else {
                    echo "<td>".$query->row($col[0])."</td>";
                }
                echo "</tr>";

                $i++;

            } //end row loop
            $c += $i;
            $t++;
            echo "</table><br/><br/>";
        } //end table loop

        echo "number of columns: ".$c;
        echo "<br/>number of table: ".$t;
    }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */