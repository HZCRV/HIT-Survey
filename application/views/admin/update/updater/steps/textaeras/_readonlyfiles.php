<?php
/**
 * This view render the textaera to display the list of files changed by the update but being readonly in the local installation
 * If no readonly file, display a success message
 * 
 * @var array $readonlyfiles array continaing the readonly files. 
 * @var obj clang 
 */
?>
<?php if (count($readonlyfiles)>0):?>
    <span class="warningtitle">
        <?php eT('Warning: The following files/directories need to be updated but their permissions are set to read-only.'); ?>
        <br />
        <?php eT('You must set according write permissions on these filese before you can proceed. If you are unsure what to do please contact your system administrator for advice.'); ?><br />
    </span>

<!-- DON'T IDENT !!! FOR GOOD TEXTAERA RENDERING !!! -->            
<textarea readonly="readonly" style="background-color: #FFF; width: 800px; height: 150px; font-family: Monospace; font-size: 11px;">
<?php foreach ($readonlyfiles as $readonlyfile):?>
<?php echo trim(htmlspecialchars($readonlyfile))."\n"; ?>
<?php endforeach;?>
</textarea>
<?php  else:?>
    <p class="success" style="text-align: left;">
        <?php eT("All files writable in local directories"); ?>
    </p>            
<?php  endif;?>