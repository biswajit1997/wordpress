<?php
/**
* Plugin Name: Demo Plugin
* Plugin URI: https://www.google.com/
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: Biswajit
* Author URI: https://www.google.com/
**/

add_action('demo-action','action_here');

function action_here(){
    $action = "action here";
    return $action;
}

function demo_plugin()
{
    
    $demoData .= "<p style=color:red;>My plugin </p>";
    $demoData .= "<div>
                    <table>
                        <thead>
                            <th>Id</th>
                            <th>Name</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>12345</td>
                                <td>abs</td>
                            </tr>
                        </tbody>
                    </table>
                </div>";
    return $demoData;
}
add_shortcode('demo','demo_plugin');
?>