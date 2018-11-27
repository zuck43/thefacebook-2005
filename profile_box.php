<?php
include('./lib/classes/profile.php');
$profile = new profile();
?>
<br>
<table cellspacing=0 cellpadding=2 border=0 width=100%>
  <tr>
    <td class='white' bgcolor=#3B5998 colspan=2>
      Information
    </td>
    <?php if($uid==$id){ ?>
    <td align=right class='white' bgcolor=#3B5998>
      [ <a href="editprofile.php" class=menu>edit</a> ]
    </td>
    <?php } ?>
  </tr>
</table>

<table cellspacing=0 cellpadding=2 border=0 width=95%>
  <tr>
    <td>
      <table cellspacing=0 cellpadding=0 border=0>
        <tr>
          <td>
            <table cellspacing=0 cellpadding=2 border=0>
              <tr>
                <td colspan=2>
                  <b>Account Info:</b>
                </td>

              </tr>
              <tr>
                <td style="width:104px">
                  Name:
                </td>
                <td style="width:187px">
                  <?php echo $profile->name; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Member&nbsp;Since:
                </td>
                <td>
                  <?php echo '01/01/2005'; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Last&nbsp;Update:
                </td>
                <td>
                  <?php echo '01/01/2005'; ?>
                </td>
              <tr>
              <tr>

                <?php if($uid==$id){?>
                <td>
                  <b>Basic Info:</b>
                </td>
                <td align=right style="color:#538ae2">
                  [ <a href="editprofile.php?s=basic">edit</a> ]
                </td>
                <?php } else {?>
                <td colspan=2>
                  <b>Basic Info:</b>
                </td>
                <?php } ?>

              </tr>
              <tr>
                <td>
                  School:
                </td>
                <td>
                  <?php echo "<a href='search.php?school=".$profile->school."'>".$profile->school."</a>"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Status:
                </td>
                <td>
                  <?php echo "$profile->status"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Sex:
                </td>
                <td>
                  <?php echo "$profile->sex"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Residence:
                </td>
                <td>
                  <?php echo "$profile->residence"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Birthday:
                </td>
                <td>
                  <?php $profile->birthday; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Home&nbsp;Town:
                </td>
                <td>
                  <?php echo "$profile->hometown"; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Highschool:
                </td>
                <td>
                  <?php echo $profile->highschool; ?>
                </td>
              <tr>
              <tr>

                <?php if($uid==$id){?>
                <td>
                  <b>Contact Info:</b>
                </td>
                <td align=right style="color:#538ae2">
                  [ <a href="editprofile.php?s=contact">edit</a> ]
                </td>
                <?php } else {?>
                <td colspan=2>
                  <b>Contact Info:</b>
                </td>
                <?php } ?>

              </tr>
              <tr>
                <td>
                  Email:
                </td>
                <td>
                  <?php echo $profile->email; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Screenname:
                </td>
                <td>
                  <?php echo $profile->screenname; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Mobile:
                </td>
                <td>
                  <?php echo $profile->mobile; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Websites:
                </td>
                <td>
                  <?php echo $profile->website; ?>
                </td>
              <tr>
              <tr>
                <?php if($uid==$id){?>
                <td>
                  <b>Personal Info:</b>
                </td>
                <td align=right style="color:#538ae2">
                  [ <a href="editprofile.php?s=personal">edit</a> ]
                </td>
                <?php } else {?>
                <td colspan=2>
                  <b>Personal Info:</b>
                </td>
                <?php } ?>

              </tr>
              <tr>
                <td>
                  Looking&nbsp;For:
                </td>
                <td>
                  <?php echo $profile->lookingfor ?>
                </td>
              <tr>
              <tr>
                <td>
                  Interested&nbsp;In:
                </td>
                <td>
                  <?php $profile->interestedin ?>
                </td>
              <tr>
              <tr>
                <td>
                  Relationship&nbsp;Status:
                </td>
                <td>
                  <?php echo $profile->relstatus	?>
                </td>
              <tr>
              <tr>
                <td>
                  Political&nbsp;Views:
                </td>
                <td>
                  <?php echo $profile->political; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Interests:
                </td>
                <td>
                  <?php $profile->interests; ?>
                </td>
              <tr>
              <tr>
                <td>
                  Music:
                </td>
                <td>
                  <?php $profile->music	?>
                </td>
              <tr>

            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
