<?php
$row_length = 8;
$column_length = 8;
$i = 0;
for ($row = 1; $row <= $row_length; $row++) {
    for ($column = 1; $column <= $column_length; $column++) {
        if ($row == 1 || $row == ($row_length)) {
            echo "#&nbsp;";
        } else if ($column == 1 || $column == $column_length) {
            echo "#&nbsp;";
        } else if (($row == $row_length && $column == $column_length) || ($row == $row && $column == ($column_length - ($row - 1)))) {
            echo "#&nbsp;";
        } else if (($row == $row_length && $column == $column_length) || ($row == $row && $column == $row)) {
            echo "#&nbsp;";
        } else {
            echo "&nbsp;&nbsp;&nbsp;";
        }
    }
    echo '<br>';
}
