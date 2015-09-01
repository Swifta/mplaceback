<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="bread_crumb"><a href="<?php echo PATH."merchant.html"; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang["HOME"]; ?> <span class="fwn">&#155;&#155;</span></a><p><?php echo $this->template->title; ?></p></div>
<div class="cont_container mt15 mt10">
    <div class="content_top"><div class="top_left"></div><div class="top_center"></div><div class="top_rgt"></div></div>
    <div class="content_middle">
     <div class="settings_menu">
        <ul>
            <li><a href="<?php echo PATH.'merchant/Edit_info.html'; ?>"><?php echo $this->Lang["EDIT_INFO"]; ?> </a></li><li>|</li>
            <li><a href="<?php echo PATH.'merchant/change_password.html'; ?>"><?php echo $this->Lang["CHANGE_PASS"]; ?></a></li>
        </ul>
    </div>
       <?php foreach($this->user_detail as $u){ ?>
        <form action="" method="post" class="admin_form mt20">
            <table>
                <tr>
                    <td><label><?php echo $this->Lang["MERCHANT_NAME"]; ?></label></td>
                    <td><label>:</label></td>
                    <td><?php if($u->lastname){echo ucfirst(htmlspecialchars($u->firstname." ".$u->lastname));} else {echo ucfirst(htmlspecialchars($u->firstname));}?></td>
                </tr>

                <tr>
                    <td><label><?php echo $this->Lang["EMAIL_F"]; ?></label></td>
                    <td><label>:</label></td>
                    <td><?php echo $u->email;?></td>
                </tr>

                <?php if($u->address1){?>
                  <tr>
                    <td><label><?php echo $this->Lang["ADDRES"]; ?></label></td>
                    <td><label>:</label></td>
                    <td><?php echo ucfirst(htmlspecialchars($u->address1)).", ".ucfirst(htmlspecialchars($u->address2));?></td>
                </tr>
                <?php  } ?>
                
                 <tr>
                    <td><label><?php echo $this->Lang["CITY"]; ?></label></td>
                    <td><label>:</label></td>
                    <td><?php echo ucfirst(htmlspecialchars($u->city_name));?></td>
                </tr>

                <tr>
                    <td><label><?php echo $this->Lang["COUNTRY"]; ?></label></td>
                    <td><label>:</label></td>
                    <td><?php echo ucfirst(htmlspecialchars($u->country_name));?></td>
                </tr>

                <?php if($u->phone_number){?>
                 <tr>
                    <td><label><?php echo $this->Lang["PHONE"]; ?></label></td>
                    <td><label>:</label></td>
                    <td><?php echo $u->phone_number;?></td>
                </tr>
                <?php } ?>
                
                 <tr>
                    <td><label><?php echo $this->Lang["PAYMENT_ACC"]; ?></label></td>
                    <td><label>:</label></td>
                    <td><?php echo $u->payment_account_id;?></td>
                </tr>
                <?php  /*if($this->user_type==3){   ?>
                <tr>
                <td><label>Auto post facebook wall</label></td>
                <td><label>:</label></td>
                <td>
                <?php if($u->facebook_update!=1) { ?> 
                <a class="f_connect_1" style="cursor:pointer;" title="<?php echo $this->Lang['FB']; ?>" onclick="facebook_connect_post();">&nbsp;</a>
                <?php } else { ?>
                <input type="checkbox" name="autopost" class="textmessage1" id="textmess1"  <?php if($u->facebook_update==1) { ?> checked   <?php }?>  value="1" >
                <?php } ?>
                </td>
                </tr>
                <?php } */?>
            </table>
        </form>
        <?php } ?>
    </div>
    <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
</div>
