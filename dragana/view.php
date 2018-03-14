<!DOCTYPE html>

<html>

<head>

</head>

<body>

 

<fieldset>

    <legend>View Owners !</legend>

     <div class="col-md-12">
          <?php require_once 'actions/db_connect.php'; ?>
          <p>Owners<p>
          
          <table class="table" style="background-color: lightgray;">



              <?php

              $sql = "SELECT * FROM owners where id>0;"
;

              $result = $connect->query($sql);

   
              if($result->num_rows > 0) {

                  while($row = $result->fetch_assoc()) {

                      echo "<tr>

                          <td>".$row['id']."</td>
                          <td>".$row['name']."</td>

                          <td>".$row['lastname']."</td>
                          <td>".$row['birthdate']."</td>  
                          <td>".$row['phone']."</td>      
                          <td>".$row['address']."</td>
                          <td>".$row['number-of-rel']."</td>

                      </tr>";

                  }

              } else {

                  echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

              }

              ?>
            </tbody>
        </table>

       

            <tr>

                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><a href="home.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 

</body>

</html>

 

