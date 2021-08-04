<?php

require_once('employee.php');

?>

<table border-spacing="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #ffffff; font-family: 'barlow', sans-serif;">
    <tr>
        <td border-spacing="0" cellpadding="0" cellspacing="0" valign="center" style="text-align:center;">
            <table border-spacing="0" cellpadding="0" cellspacing="0" style="display:inline-block;height:100%;max-width:100%;min-width:33%;">
                <tr>
                    <td border-spacing="0" style="letter-spacing:.05em; padding: 1.5em 2em; text-align: left;">
                        <h3 style="color: #ab8d3d; font-weight: 500; text-transform:uppercase; margin:0; padding:0;"><?php echo $employee[0]['name'] . " " . $employee[0]['surname']; ?></h3>
                        <p style="color: #171a35; font-size:.8em; text-transform:uppercase; margin:0; padding:0;"><?php echo $employee[0]['job']; ?></p>
                        <hr style="margin: .3em 0; border-top:1px dotted #ab8d3d;">
                        <p style="font-size: .7em; color: inherit; margin:0; padding:0; text-decoration: none !important;">
                            <a href="mailto:<?php echo $employee[0]['email']; ?>@ripehouseadvisory.com.au" style="color: #171a35; text-decoration: inherit !important;"><?php echo $employee[0]['email']; ?>@ripehouseadvisory.com.au</a>
                        </p>
                        <p style="font-size: .7em; color: inherit; margin:0; padding:0; text-decoration: none !important;">
                            <a href="tel:<?php echo $employee[0]['phone']; ?>" style="color: #171a35; text-decoration: inherit !important;"><?php echo str_replace("-"," ",$employee[0]['phone']); ?></a>
                        </p>
                    </td>
                </tr>
            </table>

            <table border-spacing="0" cellpadding="0" cellspacing="0" style="display: inline-block; height:100%; max-width: 100%; min-width:33%;">
                <tr>
                    <td border-spacing="0" cellpadding="0" cellspacing="0" height="120" valign="bottom" style="line-height: 0; text-align: center; width: 100%;">
                        <img src="<?php echo $employee[0]['image']; ?>" alt="<?php echo $employee[0]['name'] . " " . $employee[0]['surname']; ?>" style="width:auto;height:120px">
                    </td>
                </tr>
            </table>

            <table border-spacing="0" cellpadding="0" cellspacing="0" style="display: inline-block; height:100%; max-width: 100%; min-width:33%;">
                <tr>
                    <td>
                        <table style="margin: 2em 0;">
                            <tr>
                                <td><a href="https://www.ripehouseacquisitions.com.au/" target="_blank"><img src="https://www.ripehouse.com.au/wp-content/uploads/2020/11/racq.png" alt="Ripehouse Acquisitions" width="30px" style="margin:.2em;"></a>
                                </td>
                                <td><a href="https://www.ripehouse.com.au/" target="_blank"><img src="https://www.ripehouse.com.au/wp-content/uploads/2020/11/rh.png" alt="Ripehouse Content Platform" width="30px" style="margin:.2em;"></a>
                                </td>
                                <td><a href="https://www.ripehouseadvisory.com.au/" target="_blank"><img src="https://www.ripehouse.com.au/wp-content/uploads/2020/11/rha.png" alt="Ripehouse Advisory" width="30px" style="margin:.2em;"></a></td>
                                <td><a href="https://www.facebook.com/groups/highperformancepropertyinvestment" target="_blank"><img src="https://www.ripehouse.com.au/wp-content/uploads/2020/11/hppi.png" alt="High Performance Property Investment Group" width="30px" style="margin:.2em;"></a></td>
                                <td><img src="https://www.ripehouse.com.au/wp-content/uploads/2020/11/TRG.png" alt="The Ripehouse Group" width="70px" style="margin:.2em;"></td>
                            </tr>
                        </table>
                    </td>

                </tr>
            </table>

        </td>
    </tr>
</table>

<table border-spacing="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td border-spacing="0" style="color: #171a35; font-size:.7em; font-family: 'barlow', sans-serif; padding:1em 3em 3em 3em;">
            <span>
                <i><?php echo $employee[0]['bio']; ?></i>
            </span>
        </td>
    </tr>
</table>


<table border-spacing="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td border-spacing="0" cellpadding="0" cellspacing="0">
            <hr style="margin: 0 0 .3em 0; border-top:1px dotted #ab8d3d;">
        </td>
    </tr>
</table>

<table border-spacing="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td style="text-align:center">
            <table border-spacing="0" cellpadding="0" cellspacing="0" style="color:#ab8d3d; display: inline-block; font-family: 'barlow', sans-serif; font-size: .7em; min-width: 33%; text-transform: uppercase;">
                <tr>
                    <td style="color:#171a35; padding:1em 3em; text-align: center; text-decoration: none;">
                        <table>
                            <tr>
                                <td style="padding: 2em;">
                                    <span style="font-size: .8em; font-weight: 600;">FREE 20-Year Personalised Wealth Plan</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-decoration:none!important;text-align:center;">
                                    <a href="https://www.ripehouseacquisitions.com.au/consultation" target="_blank" style="border: 1px solid #171a35; background-color: #171a35; border-radius: 2em; color:#ffffff; padding: .6em 2em; text-decoration: inherit !important;font-size: .8em;">Book a 60-min Consultation</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <table border-spacing="0" cellpadding="0" cellspacing="0" style="color:#ab8d3d; display: inline-block; font-family: 'barlow', sans-serif; font-size: .7em; min-width: 33%; text-transform: uppercase;">
                <tr>
                    <td style="color:#171a35;padding:1em 3em; text-align: center; text-decoration: none;">
                        <table>
                            <tr>
                                <td style="padding: 2em;">
                                    <span style="font-size: .8em;font-weight: 600;">Property Investment Training</span><span style="margin-right: 1em;font-size: .7em;"> (NO-Cost)</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-decoration:none!important;text-align:center;">
                                    <a href=" https://enquiry.ripehouseadvisory.com.au/online-training" target="_blank" style="border: 1px solid #171a35; border-radius: 2em; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; color:#171a35; padding: .6em 2em; text-decoration: inherit !important;font-size: .8em;">Click here</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <table border-spacing="0" cellpadding="0" cellspacing="0" style="color:#ab8d3d; display: inline-block; font-family: 'barlow', sans-serif; font-size: .7em; min-width: 33%; text-transform: uppercase;">
                <tr>
                    <td style="color:#171a35;padding:1em 3em; text-align: center; text-decoration: none;">
                        <table>
                            <tr>
                                <td style="padding: 2em;">
                                    <span style="font-size: .8em; font-weight: 600;">High Performance Property investment Group</span><span style="margin-right: 1em;font-size: .8em;"> (Private)</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-decoration:none!important;text-align:center;">
                                    <a href=" https://www.facebook.com/groups/highperformancepropertyinvestment" target="_blank" style="border: 1px solid #171a35; border-radius: 2em; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; color:#171a35; padding: .6em 2em; text-decoration: inherit !important;font-size: .8em;">Join Now</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>