<?php
// So DT la ID cua phien lam viec: $Phone
    if($_POST)
    {
        $loai = trim($_POST['loai']);
        $id = trim($_POST['stt']);
        $sms = trim($_POST['sms']);
        if($loai=='toggle'){

            return 'toggle';
        }

        $IDdisplay=$id;
        //echo $id.'<br/>';
        //echo $sms;
?>         
<textarea class='form-control' id='textarea<?php echo $IDdisplay;?>' rows='4' style='min-width: 90%'>
<?php echo $sms;?>
</textarea><br/>
<input type='button' class='btn' name='Cap nhat <?php echo $IDdisplay;?> ' value='Cap nhat <?php echo $IDdisplay;?>' onclick=FnUpdate('<?php echo $IDdisplay;?>');><br/>

<?php echo $IDdisplay.'     '. $sms;?>
<br/>( Do dai0000000:ký tự)

//$arr= SMS2array($string0);

    <center>
        <input type='button' class='btn' name='btn<?php echo $IDdisplay;?>' value='Hide <?php echo $IDdisplay;?>' onclick=toggle_visibility('<?php echo $IDdisplay;?>');>
    </center>
</form> 
<?php         
    }
?>
