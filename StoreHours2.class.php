<!DOCTYPE html>
<html lang="en" xml:lang="en"><head>
    <meta charset="utf-8">

    <head>
        <title>PHP Store Hours</title>

        <style type="text/css">
        /* body {
            font-family: 'Helvetica Neue', arial;
            text-align: center;
            color: white;
        } */
        table {
            /* font-size: small; */
            color: gray;
            justify-content: center;
            text-align: center;
            align-items: center;
            margin: 20px auto 0 auto;
            border-collapse: collapse;
            min-height: 150px;
        }
        td {
            padding: 2px 8px;
            /* border: 1px solid #ccc; */
        }
        </style>
    </head>

    <body>
    

    <?php

    
    date_default_timezone_set('ASIA/karachi');
    // Include the store hours class
    require __DIR__ . '/StoreHours.class.php';

// store hours
    $hours = array(
        'mon' => array('11:00-00:00'),
        'tue' => array('11:00-17:00', '18:00-00:30'),
        'wed' => array('11:00-17:00', '18:00-00:30'),
        'thu' => array('11:00-00:00'), // Open late
        'fri' => array('11:00-00:00'),
        'sat' => array('11:00-00:00'),
        'sun' => array('11:00-00:00')
    );

// holidays extra time
    $exceptions = array(
        '2/24'  => array('11:00-18:00'),
        '10/18' => array('11:00-16:00', '18:00-20:30')
    );

    $config = array(
        'separator'      => ' - ',
        'join'           => ' and ',
        'format'         => 'g:ia',
        'overview_weekdays'  => array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun')
    );

// object calling
    $store_hours = new StoreHours($hours, $exceptions, $config);
    
    // Display open / closed message
    if($store_hours->is_open()) {
        echo "Yes, we're open! Today's hours are " . $store_hours->hours_today() . ".";
    } else {
        echo "Sorry, we're closed. Today's hours are " . $store_hours->hours_today() . ".";
    }


    //group days with identical hours
    echo '<table>';
    foreach ($store_hours->hours_this_week(true) as $days => $hours) {
        echo '<tr>';
        echo '<td>' . $days . '</td>';
        echo '<td>' . $hours . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    ?>

    </body>

</html>
