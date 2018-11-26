<html xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
  <title>TheFacebook | Home</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
  <center>

    <table class="bordertable" cellspacing=0 cellpadding=0 border=0 width=700>

      <tr>
        <td>

          <table class="bottomborder" cellspacing=0 cellpadding=0 border=0 width=100%>

            <tr>
              <td width=350 bgcolor=#3B5998>

                <img src='images/logo-left.jpg'></td>

              <td>
                <table cellspacing=0 cellpadding=0 border=0 width=100%>
                  <tr>
                    <td>

                      <table cellspacing=0 cellpadding=0 border=0 width=100%>

                        <tr>
                          <td><a href='index.php'><img src='images/logo-right.jpg' border=0></a></td>

                          <td width=100% bgcolor=#3B5998>&nbsp;</td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <table cellspacing=0 cellpadding=4 border=0 width=100%>
                        <tr height=21>

                          <!--<td bgcolor=#3B5998 width=10>&nbsp;</td>-->

                          <?PHP
                  		      include('./html/header.php');
                  		    ?>

                          <td bgcolor=#3B5998 width=100%>&nbsp;</td>

                        </tr>
                      </table>
                    </td>

                  </tr>
                </table>

              </td>
            </tr>
          </table>

        </td>
      </tr>

      <tr>
        <td>
          <table cellspacing=0 cellpadding=2 border=0 width="100%">

            <tr>
              <td valign=top width="136px" style="width:136px">

                <table cellspacing=0 cellpadding=0 border=0 width=100%>

                  <tr>
                    <td>

                      <?PHP
                		   include('./html/left_panel.php');
                		  ?>

                    </td>
                  </tr>



              </td>
            </tr>

          </table>

        </td>
        <td width=595 style="width:595px" valign=top>

          <table class="bordertable" cellspacing=0 cellpadding=0 border=1 width=100%>
            <tr>
              <td>
                <table cellspacing=0 cellpadding=2 border=0 width=100%>
                  <tr>
                    <td class='white' bgcolor=#3B5998 colspan=2>
                      Welcome John!
                    </td>
                  </tr>
                </table>


                <br>
                <table cellspacing=0 cellpadding=6 border=0 width=97% align=center valign=top>
                  <tr>
                    <td width="95%" align=center valign=top>

                      <center>
                        <p class='title'>[ Welcome John ]
                        </p>
                        <table class='bordertable' cellspacing=0 cellpadding=0 width=100% valign=top>
                          <tr>
                            <td>
                              <table cellspacing=0 cellpadding=2 border=0 width=100%>
                                <tr>
                                  <td class='white' bgcolor=#3B5998 colspan=2>
                                    My Account
                                  </td>
                                </tr>
                              </table>


                              <table cellspacing=0 cellpadding=6 border=0 width=100%>
                                <tr>
                                  <td valign=middle align=center width="20%">
                                    <img src="images/profile.jpg">
                                  </td>
                                  <td valign=middle align=left width="20%">
                                    <table class='bordertable' cellspacing=0 cellpadding=0 width=100% valign=top>

                                      <tr>
                                        <td>
                                          <table cellspacing=0 cellpadding=2 border=0 width=100%>
                                            <tr>
                                              <td>
                                                <a href="profile.php">View&nbsp;My&nbsp;Profile</a>
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>
                                          <table class='bordertop' cellspacing=0 cellpadding=2 border=0 width=100%>
                                            <tr>
                                              <td>
                                                <a href="reqs.php">My&nbsp;Requests&nbsp;<b>[&nbsp;
                                                    <?PHP echo '2'?>&nbsp;]</b></a>
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <table class='bordertop' cellspacing=0 cellpadding=2 border=0 width=100%>
                                            <tr>
                                              <td>
                                                <a href="messages.php">New&nbsp;Messages&nbsp;<b>[&nbsp;
                                                    <?PHP echo '4'?>&nbsp;]</b></a>
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>
                                          <table class='bordertop' cellspacing=0 cellpadding=2 border=0 width=100%>
                                            <tr>
                                              <td>
                                                <a href="editfriends.php?view=ra">View&nbsp;My&nbsp;Friends</a>
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <table class='bordertop' cellspacing=0 cellpadding=2 border=0 width=100%>
                                            <tr>
                                              <td>
                                                <a href="search.php?name">Search&nbsp;for&nbsp;People</a>
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <table class='bordertop' cellspacing=0 cellpadding=2 border=0 width=100%>
                                            <tr>
                                              <td>
                                                <a href="browse.php">Browse&nbsp;My&nbsp;Network</a>
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                      </tr>

                                      <tr>
                                        <td>
                                          <table class='bordertop' cellspacing=0 cellpadding=2 border=0 width=100%>
                                            <tr>
                                              <td>
                                                <a onclick="sendreq('friend',<?PHP echo FBData::get_fbid('4');?>);" href="#">Send Req</a>
                                              </td>
                                            </tr>
                                          </table>
                                        </td>
                                      </tr>

                                    </table>
                                  </td>
                                  <td valign=middle align=left width="45%">
                                    You are connected to <b>
                                      <?PHP $classcount=$profile->classesnetworkcount($id,0,100000); echo $classcount;?></b>
                                    <?PHP if($classcount==1) echo "person"; else echo "people"; ?> through classes.<br><br>You are connected to <b>
                                      <?PHP $netcount=$profile->networkcount($id,0,1000000); echo $netcount;?></b>
                                    <?PHP if($netcount==1) echo "person"; else echo "people"; ?> through friends.
                                  </td>
                                  <td valign=middle align=right width="10%" style="color:#538ADC">
                                    <?PHP if($classcount>0){ ?>
                                    [&nbsp;<a href="browse.php?network=classes">browse&nbsp;them</a>&nbsp;]
                                    <?PHP }else {?>
                                    [&nbsp;<a href="editprofile.php?s=personal">add&nbsp;classes</a>&nbsp;]
                                    <?PHP }?>
                                    <br><br><br><br>
                                    <?PHP if($netcount>0){ ?>
                                    [&nbsp;<a href="browse.php?network=extended">browse&nbsp;them</a>&nbsp;]
                                    <?PHP }else {?>
                                    [&nbsp;<a href="search.php?name=+">add&nbsp;friends</a>&nbsp;]
                                    <?PHP }?>

                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>



                </table>
                <br>&nbsp;<center>
                  <table class='bordertable' cellspacing=0 cellpadding=0 width=96%>
                    <tr>
                      <td>
                        <table cellspacing=0 cellpadding=2 border=0 width=100%>

                      </td>
                    </tr>
                  </table>

                  <center>

                    <?PHP include('./html/footer.php');	?>

                  </center><br>

              </td>
          </table><br>
    </table>
