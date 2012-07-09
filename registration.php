<form name="register" action="register.php" method="post" onSubmit="return validate()">
         <table border="0">
         <tr>
         <td>*First Name</td><td>:<input type="text" name="fname" /><div id="msg1" style="color:#FF0000"></div></td>
         </tr><tr>
         <td>Last Name</td><td>:<input type="text" name="lname" /><div id="msg2" style="color:#FF0000"></div></td>
         </tr><tr>
         <td>*Gender</td><td>:
          Male:<input type="radio" value="0" name="gender" />
          Female:<input type="radio" value="1" name="gender" /><div id="msg3" style="color:#FF0000"></div>
          </td>
          </tr><tr>
          <td>*Civil States</td><td>:
          Married:<input type="radio" value="0" name="state" />
          Single:<input type="radio" value="1" name="state" /><div id="msg4" style="color:#FF0000"></div>
          </td>
          </tr><tr>
          <td>*Address:</td>
          </tr><tr>
          <td>Home name/number</td><td>:<input type="text" name="hname" /><div id="msg51" style="color:#FF0000"></div>
          </td>
          </tr><tr>
          <td>Street</td><td>:<input type="text" name="street" /><div id="msg52" style="color:#FF0000"></div></td>
          </tr><tr>
          <td>City</td><td>:<input type="text" name="city" /><div id="msg53" style="color:#FF0000"></div></td>
          </tr><tr>
          <td>District</td><td>:
          <select name="district">
          <option>Colombo</option>
          <option>Ampara</option>
          <option>Anuradapura</option>
          <option>Badulla</option>
          <option>Batticaloa</option>
          <option>Galle</option>
          <option>Gampaha</option>
          <option>Hambanthota</option>
          <option>Jaffna</option>
          <option>Kaluthara</option>
          <option>Kandy</option>
          <option>Kegalle</option>
          <option>Kilinochchi</option>
          <option>Kurunagala</option>
          <option>Mannar</option>
          <option>Mathale</option>
          <option>Mathara</option>
          <option>Monaragala</option>
          <option>Mulathivu</option>
          <option>Nuwara Eliya</option>
          <option>Polonnaruwa</option>
          <option>Puttalam</option>
          <option>Ratnapura</option>
          <option>Trincomalee</option>
          <option>Vavuniya</option>
          </select><div id="msg6" style="color:#FF0000"></div></td>
          </tr>
          <tr>
          <td>Phone number:(One required)</td>
          </tr><tr>
          <td>Home</td><td>:<input type="text" name="hphone" maxlength="10"/><div id="msg72" style="color:#FF0000"></div></td>
          </tr><tr>
          <td>Mobile</td><td>:<input type="text" name="mobile" maxlength="10"/><div id="msg71" style="color:#FF0000"></div></td>
          </tr>
          </table>
          <div id="heading_3">Account Details</div>
          <table border="0">
          <tr>
         <td>*Email</td><td>:<input type="text" name="email" />@
         <select name="etype">
         <option>gmail</option>
         <option>ymail</option>
         <option>hotmail</option>
         </select>First part will be your username<div id="msg8" style="color:#FF0000"></div></td>
         </tr><tr>
         <td>*Re-Enter Email address</td><td>:<input type="text" name="remail" />@ 
         <select name="retype">
         <option>gmail</option>
         <option>ymail</option>
         <option>hotmail</option>
         </select><div id="msg9" style="color:#FF0000"></div></td>
         </tr><tr>
         <td>*Create Password</td><td>:<input type="password" name="pw" maxlength="20" />password must be 6-20 characters
         <div id="msg10" style="color:#FF0000"></div></td>
         </tr><tr>
         <td>*Re-Enter Password</td><td>:<input type="password" name="rpw" maxlength="20"/><div id="msg11" style="color:#FF0000"></div></td>
         </tr><tr>
         
         <td><input type="checkbox" value="check1" name="check1" /></td><td>I have reviewed and understand Lull-a-buy policy.
         <div id="msg12" style="color:#FF0000"></div></td>
         </tr><tr>
         <td><input type="checkbox" value="check2" name="check2" /></td><td>I understand and agree to the Terms and conditions of this site.
         <div id="msg13" style="color:#FF0000"></div></td>
         </tr><tr>
         <td id="submit"><input type="submit" value="submit" name="submit" /></td>
         <td><input type="button" value="reset" name="reset" onClick="window.location = 'log_in.php' " />
         <input type="button" name="cancel" value="cancel" onClick="window.location = 'log_in.php' " /></td>
         </tr>
         </table>
         Your privacy is important to us.<br />
         The personal information entered on this page will not be used for marketing purpose or be sold to others without your consent.
         
         *-Required.
         </form>