<form name="register" action="welcome.php" method="post" onSubmit="return validate()">
         <table border="0">
         <tr>
         <td><input type="checkbox" value="check3" name="check3" /></td><td>Same as my registered address.
         </td>
         <tr>
         <td>*First Name</td><td>:<input type="text" name="fname" /><div id="msg1" style="color:#FF0000"></div></td>
         </tr><tr>
         <td>Last Name</td><td>:<input type="text" name="lname" /><div id="msg2" style="color:#FF0000"></div></td>
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
          </tr><tr>
          <td>Phone number:(One required)</td>
          </tr><tr>
          <td>Home</td><td>:<input type="text" name="hphone" maxlength="10"/><div id="msg72" style="color:#FF0000"></div></td>
          </tr><tr>
          <td>Mobile</td><td>:<input type="text" name="mobile" maxlength="10"/><div id="msg71" style="color:#FF0000"></div></td>
          </tr>
          </table>
          <div id="heading_3">Purchase with Credit Card</div>
          <table border="0">
          <tr>
         <td><input type="checkbox" value="check3" name="check3" /></td><td>Save my credit card information for future purposes.
         </td>
         </tr>
         <tr><td>
         <div id="pay"></div></td>
         </tr>
         <tr>
         <td>Card Number</td><td>:<input type="text" name="fname" /></td>
         </tr><tr>
         <td>Security Code</td><td>:<input type="text" name="lname" /></td>
         </tr>
         <tr>
         <td>Expiration Date</td><td>:
         <select name="expire_month">
         <option>MM</option>
         </select>&nbsp;
         <select name="expire_year">
         <option>YYYY</option>
         </select></td>
         </tr>
         <tr>
         <td id="submit"><input type="submit" value="Pay with Card" name="submit" /></td>
         </tr>
         </table>
         <div id="heading_3">Purchase using Paypal</div>
         <table border="0">
         <tr>
         <td>
         <div id="paypal"></div></td></tr>
         <tr><td></td>
         <td id="submit"><input type="submit" value="Pay with PayPal" name="submit" /></td>
         </tr>
         </table>
         
         *-Required.
         </form>