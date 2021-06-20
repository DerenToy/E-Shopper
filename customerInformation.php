 <table class="personalInformation">
      <tr>  
        <td style="font-weight:bold">Name: </td>
        <td><?= $_SESSION['name'] ?></td>
    		
      </tr>
    	  
      <tr>
    	  
        <td style="font-weight:bold">Lastname: </td>
        <td><?=  $_SESSION['lastname'] ?></td>
        
        </tr>
        <tr>
        <td style="font-weight:bold">Email: </td>
        <td><?=  $_SESSION['email'] ?></td>
        
        </tr>
        <tr>
        <td style="font-weight:bold">Phone: </td>
        <td><?=  $_SESSION['phone'] ?></td>
        </tr>
        
    </table>
    
   <button type="submit"