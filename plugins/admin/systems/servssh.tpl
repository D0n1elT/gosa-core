<h2>
	<input type="checkbox" name="ssh" value="B" {$sshState} {$sshACL} 
		onclick="{$changeState}" >
	{t}SSH account{/t}
</h2>

<table summary="" style="width:100%; vertical-align:top; text-align:left;" cellpadding=0 border=0>

 <!-- Headline container -->
 <tr>
   <td style="width:100%; vertical-align:top;">
     <table summary="" style="margin-left:4px;width:100%">
       <tr>
         <td style="vertical-align:top;">
	 <td><textarea name="sshPublickey" id="sshPublickey" rows="4" style="width:80%" {$sshPublickeyACL} {$sstate}>{$sshPublickey}</textarea></td>
       </tr>
     </table>
   </td>
 </tr>
</table>

<!-- Place cursor -->
<script language="JavaScript" type="text/javascript">
  <!-- // First input field on page
	focus_field('sshPublickey');
  -->
</script>
