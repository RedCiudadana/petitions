<?
// steps.php:
// Details of the steps involved
//
// Copyright (c) 2006 UK Citizens Online Democracy. All rights reserved.
// Email: matthew@mysociety.org. WWW: http://www.mysociety.org
//
// $Id: steps.php,v 1.15 2010-01-14 18:26:15 matthew Exp $

require_once '../phplib/pet.php';
require_once '../phplib/cobrand.php';

if ($url = cobrand_steps_elsewhere()) {
    header("Location: $url");
    exit;
}

$page_title = _('Step-by-step guide to making petitions');
page_header($page_title, array());
cobrand_extra_heading($page_title);
petition_form_intro();
page_footer('Step-by-step_guide');

function petition_form_intro() {
    global $site_name;
    $n = 1;
    echo cobrand_create_heading('Step ' . ($n++) . ': Create your petition');

?>

<p>You will be asked to give your name, organisation (if you represent one),
address and email address, and the title and text of your petition. You will also be
asked to give a short, one-word name for your petition. This will be used to
give your petition a unique URL (website address) that you can use to publicise
your petition if you wish.</p>

<p>You will be able to specify a start and finish date for your petition, and we
can host your petition for up to 12 months.</p>

<?=cobrand_create_heading('Step ' . ($n++) . ': Submit your petition')?>

<p>Once you have submitted your petition, you will receive an email asking
you to click a link to confirm. Your proposed petition will then
<?
    if (OPTION_SITE_APPROVAL) {
?>
be delivered to <?=OPTION_SITE_NAME=='number10'?'the Downing Street':OPTION_SITE_PETITIONED?> inbox.</p>
<?
    } else {
?>
appear on the site.</p>
<?
    }

    if (OPTION_SITE_APPROVAL) {
?>

<?=cobrand_create_heading('Step ' . ($n++) . ': Petition approval')?>

<p>Officials <?=OPTION_SITE_NAME=='number10'?'at Downing Street':''?> will check your petition to make sure that it meets
the basic requirements set out in our <a href="/terms">terms and conditions</a><?=OPTION_SITE_NAME=='number10'?' and the Civil Service code':''?>.</p>

<p>If for any reason we cannot accept the petition, we will write to you to explain
why. You will be able to edit and resubmit your petition if you wish.</p>

<p>Once your petition is approved, we will email you to let you know;
this will usually happen within five working days, although during busy
periods this may take longer.</p>

<p>If we cannot approve your amended petition, we will write to you again to
explain our reason(s). </p>

<p>Any petitions that are rejected or not resubmitted will be published on this
website, along with the reason(s) why it was rejected. Any content that is
offensive or illegal or clearly spam will be left out. Every petition that is received will be
acknowledged on this website.</p>

<?
    }
?>

<?=cobrand_create_heading('Step ' . ($n++) . ': Petition live')?>

<p>Once your petition is live, you will be able to publicise the URL
you chose when you created your petition, and anyone will be able to
come to the website and sign it. As the petition creator, your name
and your organisation, if you have specified one, will be displayed.</p>

<p>People who wish to sign a petition will be asked to give their name and address and an email address that we
can verify. The system is designed to identify duplicate names and addresses, and
will not allow someone to sign a petition more than once. Anyone signing a
petition will be sent an email asking them to click a link to confirm that they
have signed the petition. Once they have done this, their name will be added to
the petition.</p>

<p>Your petition will show the total number of signatures received. It will also
display the names of signatories, unless they have opted not to be shown.</p>

<?=cobrand_create_heading('Step ' . ($n++) . ': Petition close')?>

<?
    if (OPTION_SITE_NAME == 'number10') {
?>
<p>When a serious petition closes, usually provided there are <?=cobrand_signature_threshold() ?> signatures or more,
officials at Downing Street will ensure you get a response to the issues you
raise. Depending on the nature of the petition, this may be from the Prime
Minister, or he may ask one of his Ministers or officials to respond.

<p>We will email the petition organiser and everyone who has signed the
petition via this website giving details of the Government’s response.
<?
    } elseif ($site_name == 'woking') {
?>
<p>Once your petition has closed, usually provided there are
<?=cobrand_signature_threshold() ?> signatures or more, it will be passed to
the relevant officials at the council for a response.
We will be able to email the petition organiser and everyone who has signed the
petition, and responses will also be published on this website.</p>
<?
    } elseif ($site_name == 'salford') {
?>
<p>When the petition closes we will publish a response; this will be emailed to
everyone who has signed the e-petition. The response will also be published on
this website.</p>
<?
    } else {
?>
<p>If the council responds, it will be emailed to everyone who has
signed the e-petition. The response will also be published on this website.</p>
<?
    }
?>

<form method="get" action="/new">
<p class="leading">
<input type="submit" value="Create a petition" class="addButton" /></p>
</form>
<? 
}

?>

