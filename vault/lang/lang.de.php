<?php
/**
 * This file is a part of the CIDRAM package, and can be downloaded for free
 * from {@link https://github.com/Maikuolan/CIDRAM/ GitHub}.
 *
 * CIDRAM COPYRIGHT 2016 and beyond by Caleb Mazalevskis (Maikuolan).
 *
 * License: GNU/GPLv2
 * @see LICENSE.txt
 *
 * This file: German language data (last modified: 2016.03.25).
 *
 * @todo (This is incomplete).
 */

/** Prevents execution from outside of CIDRAM. */
if (!defined('CIDRAM')) {
    die('[CIDRAM] This should not be accessed directly.');
}

$CIDRAM['lang']['click_here'] = 'click here';
$CIDRAM['lang']['denied'] = 'Access Denied!';
$CIDRAM['lang']['Error_WriteCache'] = 'Unable to write to the cache! Please check your CHMOD file permissions!';
$CIDRAM['lang']['field_datetime'] = 'Date/Time: ';
$CIDRAM['lang']['field_id'] = 'ID: ';
$CIDRAM['lang']['field_ipaddr'] = 'IP Address: ';
$CIDRAM['lang']['field_query'] = 'Query: ';
$CIDRAM['lang']['field_referrer'] = 'Referrer: ';
$CIDRAM['lang']['field_scriptversion'] = 'Script Version: ';
$CIDRAM['lang']['field_sigcount'] = 'Signatures Count: ';
$CIDRAM['lang']['field_sigref'] = 'Signatures Reference: ';
$CIDRAM['lang']['field_ua'] = 'User Agent: ';
$CIDRAM['lang']['generated_by'] = 'Generated by';
$CIDRAM['lang']['preamble'] = '-- End of preamble. Add your questions or comments after this line. --';
$CIDRAM['lang']['ReasonMessage_BadIP'] = 'Your access to this page was denied because you attempted to access this page using an invalid IP address.';
$CIDRAM['lang']['ReasonMessage_Bogon'] = 'Your access to this page was denied because your IP address is recognised as a bogon address, and connecting from bogons to this website isn\'t permitted by the website owner.';
$CIDRAM['lang']['ReasonMessage_Cloud'] = 'Your access to this page was denied because your IP address is recognised as belonging to a cloud service, and connecting to this website from cloud services isn\'t permitted by the website owner.';
$CIDRAM['lang']['ReasonMessage_Generic'] = 'Your access to this page was denied because your IP address belongs to a network listed on a blacklist used by this website.';
$CIDRAM['lang']['ReasonMessage_Spam'] = 'Your access to this page was denied because your IP address belongs to a network considered high-risk for spam.';
$CIDRAM['lang']['Short_BadIP'] = 'Invalid IP!';
$CIDRAM['lang']['Support_Email'] = 'If you believe this is in error, or to seek assistance, {ClickHereLink} to send an email support ticket to the webmaster of this website (please don\'t change the preamble or subject line of the email).';

$CIDRAM['lang']['CLI_H'] = "
 CIDRAM CLI-mode help.

 Usage:
 /path/to/php/php.exe /path/to/cidram/loader.php -Flag (Input)

 Flags: -h  Display this help information.
        -c  Check if an IP address is blocked by the CIDRAM signature files.
        -g  Generate CIDRs from an IP address.

 Input: Can be any valid IPv4 or IPv6 IP address.

 Examples:
        -c  192.168.0.0/16
        -c  127.0.0.1/32
        -c  2001:db8::/32
        -c  2002::1/128

";

$CIDRAM['lang']['CLI_Bad_IP'] = ' The specified IP address, "{IP}", is not a valid IPv4 or IPv6 IP address!';
$CIDRAM['lang']['CLI_IP_Blocked'] = ' The specified IP address, "{IP}", *IS* blocked by one or more of the CIDRAM signature files.';
$CIDRAM['lang']['CLI_IP_Not_Blocked'] = ' The specified IP address, "{IP}", is *NOT* blocked by one or more of the CIDRAM signature files.';
